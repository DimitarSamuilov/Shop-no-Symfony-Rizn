<?php
session_start();
require_once 'application.php';
if(!$authentication->isLogged()){
    header("Location: index.php");
    exit;
}
else{
    $authentication->logout();
    header("Location: index.php");
    exit;
}