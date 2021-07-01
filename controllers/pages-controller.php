<?php
if (isset($_COOKIE) && !empty($_COOKIE)) {
    $preferences = json_decode($_COOKIE['preferences'], true);
    $preferences = array_values($preferences);
} else header('Location: accueil.html');

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
    $xml = simplexml_load_file($xmlArray[$preferences[$_GET['sujet'] - 1]]);
    $xmlSport = $preferences[$_GET['sujet'] - 1];
}