<?php
require "Ionian/init.php";

use \Ionian\Application as Ionian;

$app = new Ionian\CA_App("TEST APP!");
$app->setAppMode(Ionian\App::APP_MODE_DEV);
$app->initPDO("mysql", "127.0.0.1", "test", "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
$app->run();