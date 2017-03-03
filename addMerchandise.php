<?php
session_start();
require_once 'application.php';
$userId=$authentication->getAttribute(\Actions\AuthenticationAction::KEY_SESSION_USER_ID);
if (!$userLifecycle->isAdmin($userId)) {
    header("Location:login.php");
    exit;
}

if(isset($_POST['name'],$_POST['price'],$_POST['description'])){
    $description=$_POST['description'];
    $price=$_POST['price'];
    $name=$_POST['name'];
    $merchandise=new \DTO\Merchandise();
    if(!is_numeric($price)){
        header("Location:addMerchandise.php");
        exit;
    }
    $merchandise->setPrice($price);
    $merchandise->setUserId($userId);
    $merchandise->setDescription($description);
    $merchandise->setName($name);
    if(!$merchandiseAction->addMerchandise($merchandise)){
        header("Location:addMerchandise.php");
        exit;
    }
    header("Location:adminView.php");
    exit;
}
$userId=$authentication->getAttribute(\Actions\AuthenticationAction::KEY_SESSION_USER_ID);
ViewEngine\Template::render("addMerchandise");