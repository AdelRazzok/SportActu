<?php
$xmlArray = [
    'Basket-ball'=>'https://rmcsport.bfmtv.com/rss/basket/nba/',
    'Football'=>'https://rmcsport.bfmtv.com/rss/football/',
    'Tennis'=>'https://rmcsport.bfmtv.com/rss/tennis/',
    'Handball'=>'https://rmcsport.bfmtv.com/rss/handball/',
    'Rugby'=>'https://rmcsport.bfmtv.com/rss/rugby/'
  ];
  
if (isset($_COOKIE['preferences'])) {
    $preferences = json_decode($_COOKIE['preferences'],true);
    $preferences = array_values($preferences);
    $maxArticle = $preferences[3];
    $xml0 = simplexml_load_file($xmlArray[$preferences[0]]);
    $xml0Sport = $preferences[0];
    $xml1 = simplexml_load_file($xmlArray[$preferences[1]]);
    $xml1Sport = $preferences[1];
    $xml2 = simplexml_load_file($xmlArray[$preferences[2]]);
    $xml2Sport = $preferences[2];
    $articles = [];

    GetInfoFromXml($xml0,$articles,$xml0Sport);
    GetInfoFromXml($xml1,$articles,$xml1Sport);
    GetInfoFromXml($xml2,$articles,$xml2Sport);

    $keysArray = [];
    foreach ($articles as $key => $value) {
        array_push($keysArray, $key);
    }
    rsort($keysArray);

    $articlesSorted = [];
    foreach ($keysArray as $key => $value) {
        array_push($articlesSorted, $articles[$value]);
    }

   $image1 = GetImgFromXml($xml0);
   $image2 = GetImgFromXml($xml1);
   $image3 = GetImgFromXml($xml2);

   $Title1 = GetTitleFromXml($xml0);
   $Title2 = GetTitleFromXml($xml1);
   $Title3 = GetTitleFromXml($xml2);

   $Desc1 = GetDescFromXml($xml0);
   $Desc2 = GetDescFromXml($xml1);
   $Desc3 = GetDescFromXml($xml2);

   $Link1 = GetLinkFromXml($xml0);
   $Link2 = GetLinkFromXml($xml1);
   $Link3 = GetLinkFromXml($xml2);
    
}
  
function GetInfoFromXml($xml,&$articles,&$xmlsport) {
    foreach ($xml->channel->item as $itm) {
        $sport = $xmlsport;
        $link = $itm->link;
        $title = $itm->title;
        $descstring = $itm->description;
        $descArray = explode('<br /><br />', $descstring);
        $desc = $descArray[0];
        $img = $itm->enclosure['url'];
        $time = date('Y-m-d H:i:s',strtotime($itm->pubDate.'+2'));
        $articles[strtotime($time)] = ['sport'=>strval($sport),'link'=>strval($link),'title'=>strval($title),'desc'=>strval($desc),'img'=>strval($img),'time'=>$time];
    }
}

if (isset($_POST) && count($_POST) != 0) {
    if (count($_POST) == 4) {
        $preferences = json_encode($_POST);
        setcookie('preferences', $preferences, time() + 86400);
        header("Refresh:0");
    } else $err_msg = 'Veuillez sélectionner 3 catégories';
}

function GetImgFromXml($xml) {    
    return $xml->channel->item->enclosure['url'];
}

function GetTitleFromXml($xml) {    
    return $xml->channel->item->title;
}

function GetDescFromXml($xml) {    
    $descstring = $xml->channel->item->description;
    $descArray = explode('<br /><br />', $descstring);
    $desc = $descArray[0];
    return $desc;
}
function GetLinkFromXml($xml) {    
    $link = $xml->channel->item->link;
    return $link;
}

function ResizeDesc($desc) {   
    $nbr_caracteres_maximum = 64;
    $nbr_caracteres = strlen($desc);

    if($nbr_caracteres >= $nbr_caracteres_maximum) {
        $desc = mb_substr($desc, 0, $nbr_caracteres_maximum, 'UTF-8') . '...';
    }

    return $desc;
}