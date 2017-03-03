<?php
require_once 'autoloader.php';

Driver\Database::setInstance(
    Config\DbConfig::DB_HOST,
    Config\DbConfig::DB_USER,
    Config\DbConfig::DB_PASS,
    Config\DbConfig::DB_NAME,
    "ROOT_ACCESS"
);
$db=Driver\Database::getInstances("ROOT_ACCESS");
$userLifecycle=new \Actions\UserLifecycle($db);
$merchandiseAction=new \Actions\MerchandiseAction($db);
$sessionAction=new \Actions\SessionAction($_SESSION);
$authentication=new \Actions\AuthenticationAction($db,$_SESSION);
