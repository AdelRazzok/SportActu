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
    $xml0 = simplexml_load_file($xmlArray[$preferences[0]]);
    $xml1 = simplexml_load_file($xmlArray[$preferences[1]]);
    $xml2 = simplexml_load_file($xmlArray[$preferences[2]]);

    GetInfoFromXml($xml0);
    GetInfoFromXml($xml1);
    GetInfoFromXml($xml2);
  }
  

  
  function GetInfoFromXml($xml)
  {
    foreach ($xml->channel->item as $itm) {
      $link = $itm->link;
      $title = $itm->title;
      $descstring = $itm->description;
      $descArray = explode('<br /><br />', $descstring);
      $desc = $descArray[0];
      $img = $itm->enclosure['url'];
      $time = $itm->pubDate;
    }
  }

  if (isset($_POST) && count($_POST) != 0) {
    if (count($_POST) == 3) {
        $preferences = json_encode($_POST);
        setcookie('preferences', $preferences, time() + 86400);
        header("Refresh:0");
    } else $err_msg = 'Veuillez sélectionner 3 catégories';
}