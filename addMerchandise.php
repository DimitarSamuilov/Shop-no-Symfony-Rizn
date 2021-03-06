<?php
session_start();
require_once 'application.php';
$userId=$authentication->getAttribute(\Actions\AuthenticationAction::KEY_SESSION_USER_ID);
if (!$userLifecycle->isAdmin($userId)) {
    header("Location:login.php");
    exit;
}
if(isset($_POST['name'],$_POST['price'],$_POST['promoPrice']) and !empty($_FILES['image']['tmp_name'])){
    $price=$_POST['price'];
    $name=$_POST['name'];
    $promoPrice=$_POST['promoPrice'];
    $merchandise=new \DTO\Merchandise();
    if(!is_numeric($promoPrice)){
        header("Location:addMerchandise.php");
        $authentication->setAttribute(\Config\ErrorMessage::ERROR_SESSION_KEY,"Промоционалната цена трябва да е число!");
        exit;
    }
    if(!is_numeric($price)){
        header("Location:addMerchandise.php");
        $authentication->setAttribute(\Config\ErrorMessage::ERROR_SESSION_KEY,"Цената трябва да е число!");
        exit;
    }
    $fileName=$merchandiseAction->processFile($_FILES['image']);
    if(!$fileName){
        header("Location:addMerchandise.php");
        $authentication->setAttribute(\Config\ErrorMessage::ERROR_SESSION_KEY,"Неподходяща снимак!");
        exit;
    }
    $merchandise->setPromoPrice($promoPrice);
    $merchandise->setImage($fileName);
    $merchandise->setPrice($price);
    $merchandise->setUserId($userId);
    $merchandise->setName($name);

   if(!$merchandiseAction->addMerchandise($merchandise)){
        header("Location:addMerchandise.php");
       $authentication->setAttribute(\Config\ErrorMessage::ERROR_SESSION_KEY,"Възникна грешка");
        exit;
    }
    header("Location:adminView.php");
    exit;
}

ViewEngine\Template::render("addMerchandise");