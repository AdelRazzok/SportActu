<?php

if (isset($_COOKIE)) {
    $preferences = json_decode($_COOKIE['preferences'], true);
    $preferences = array_values($preferences);
    // $sport1 = $preferences[0];
    // $sport2 = $preferences[1];
    // $sport3 = $preferences[2];
    }

?>