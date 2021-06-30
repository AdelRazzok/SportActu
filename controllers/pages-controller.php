<?php
if (isset($_COOKIE) && !empty($_COOKIE)) {
    $preferences = json_decode($_COOKIE['preferences'], true);
    $preferences = array_values($preferences);
} else header('Location: accueil.html');