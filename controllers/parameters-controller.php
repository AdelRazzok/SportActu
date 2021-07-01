<?php
if (isset($_POST) && count($_POST) != 0) {
    if (count($_POST) == 4) {
        $preferences = json_encode($_POST);
        setcookie('preferences', $preferences, time() + 86400);
        $success_msg = 'Vos choix ont bien été pris en compte';
    } else $err_msg = 'Veuillez sélectionner 3 catégories';
}

if (isset($_COOKIE)) {
    $preferences = json_decode($_COOKIE['preferences'], true);
    $preferences = array_values($preferences);
}