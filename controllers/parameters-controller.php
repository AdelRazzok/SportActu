<?php
if (isset($_POST) && count($_POST) != 0) {
    if (count($_POST) == 3) {
        $preferences = json_encode($_POST);
        setcookie('preferences', $preferences, time() + 86400);
    } else $err_msg = 'Veuillez sélectionner 3 catégories';
}