<?php
session_start();
require_once 'application.php';
$userId=$authentication->getAttribute(\Actions\AuthenticationAction::KEY_SESSION_USER_ID);
if (!$userLifecycle->isAdmin($userId)) {
    header("Location:login.php");
    exit;
}
if(!isset($_GET['id'])){
    header("Location:adminView.php");
    exit;
}
$id=$_GET['id'];
if($merchandiseAction->doesMerchandiseExists($id)){

     header("Location:adminView.php");
    exit;
}
$merchandiseAction->deleteMerchandise($id);
header("Location:adminView.php");
exit;
