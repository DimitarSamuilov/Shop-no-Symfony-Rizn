<?php
session_start();
include_once 'application.php';
if($authentication->isLogged()) {
    $isAdmin = $userLifecycle->isAdmin($authentication->getAttribute(\Actions\AuthenticationAction::KEY_SESSION_USER_ID));
    $isLogged = true;
}else{
    $isLogged=false;
    $isAdmin=false;
}
ViewEngine\Template::render('homepage',[$merchandiseAction->getMerchandise(),$isLogged,$isAdmin]);
