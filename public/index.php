<?php
session_start();
//TMP à retirer quand la connexion sera faite
$_SESSION['id'] = 1;

define("ROOT", dirname(__DIR__));

require ROOT . "/Autoloader.php";
Autoloader::register();

require ROOT . "/router.php";
