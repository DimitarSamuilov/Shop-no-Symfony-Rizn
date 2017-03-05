<?php
session_start();
require_once 'application.php';
if ($authentication->isLogged()) {
    header("Location: index.php");
    exit;
}
if (isset($_POST['username'], $_POST['password'])) {
    $password = $_POST['password'];
    $username = $_POST['username'];
    $user = $userLifecycle->getUser($username);
    if ($user != null) {
        $result = $authentication->verify($password, $user->getPassword());
        if ($result) {
            $authentication->login($user->getId());
            if($userLifecycle->isAdmin($user->getId())){
                header("Location: adminView.php");
                exit;
            }
            header("Location: index.php");
            exit;
        }else{
            $authentication->setAttribute(\Config\ErrorMessage::ERROR_SESSION_KEY,"Несъществуващ потребител");
            header("Location: login.php");
            exit;
        }
    }else {
        $authentication->setAttribute(\Config\ErrorMessage::ERROR_SESSION_KEY,"Несъществуващ потребител");
        header("Location: login.php");
        exit;
    }
}
ViewEngine\Template::render("loginForm");