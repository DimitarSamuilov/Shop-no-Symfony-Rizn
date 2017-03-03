<?php
session_start();
require_once 'application.php';
if($authentication->isLogged()){
    header("Location: index.php");
    exit;
}
if(isset($_POST['username'],$_POST['password'],$_POST['passwordRepeat'])){
    $password=$_POST['password'];
    $repeatPassword=$_POST['passwordRepeat'];
    $username=$_POST['username'];
    if($password===$repeatPassword){
        $user=new \DTO\User();
        $user->setPassword($authentication->encrypt($password));
        $user->setUsername($username);
        $result=$userLifecycle->registerUser($user);
        if($result[0]) {
            $authentication->setAttribute(\Actions\AuthenticationAction::KEY_SESSION_USER_ID,$result[1]);
            header("Location: index.php");
            exit;
        }
    }
}

ViewEngine\Template::render('registerForm');
