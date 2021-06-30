<?php
if (isset($_COOKIE)) {
    $preferences = json_decode($_COOKIE['preferences'], true);
    $preferences = array_values($preferences);
    var_dump($preferences);
}
