<?php
session_start();
require_once 'application.php';
if(isset($_POST['username'],$_POST['password']) ){
    $password=$_POST['password'];
    $username=$_POST['username'];
    $user=$userLifecycle->getUser($username);
    $result=$authentication->verify($password,$user->getPassword());
    if($result){
        $authentication->login($user->getId());
        header("Location: index.php");
        exit;
    }
}
ViewEngine\Template::render("loginForm");