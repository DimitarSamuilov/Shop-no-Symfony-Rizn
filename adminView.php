<?php
session_start();
include_once 'application.php';
if(!$userLifecycle->isAdmin($authentication->getAttribute(\Actions\AuthenticationAction::KEY_SESSION_USER_ID))){
    header("Location:login.php");
    exit;
}
ViewEngine\Template::render('adminList',$merchandiseAction->getMerchandise());
