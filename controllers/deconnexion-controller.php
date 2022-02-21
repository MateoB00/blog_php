<?php

session_destroy();
if (!empty($_COOKIE['cookieID'])) {
    setcookie('cookieID', null, time());
}

redirection('home');
