<?php
if (isset($_POST) && count($_POST) != 0) {
    var_dump($_POST);
    if (count($_POST) == 3) {
        $preferences = json_encode($_POST);
        setcookie('preferences', $preferences, time() + 86400);
    } else $err_msg = 'Veuillez sélectionner 3 catégories';
}

if (isset($_COOKIE)) {
    var_dump($_COOKIE);
    $preferences = json_decode($_COOKIE['preferences'], true);
    $preferences = array_values($preferences);
    var_dump($preferences);
}