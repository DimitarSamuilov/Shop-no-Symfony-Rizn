<?php
session_start();
require_once 'application.php';
if (!$userLifecycle->isAdmin($authentication->getAttribute(\Actions\AuthenticationAction::KEY_SESSION_USER_ID))) {
    header("Location:login.php");
    exit;
}
if (!isset($_GET['id'])) {
    header("Location: adminView.php");
    exit;
}
$id = $_GET['id'];
if (isset($_POST['name'], $_POST['price'], $_POST['description'])) {
    $price = $_POST['price'];
    if (!is_numeric($price)) {
        header("Location:merchandiseEdit.php?id=" . $id);
        exit;
    }
    $name = $_POST['name'];
    $description = $_POST['description'];
    $merchandise = new \DTO\Merchandise();
    $merchandise->setName($name);
    $merchandise->setPrice($price);
    $merchandise->setDescription($description);
    $merchandiseAction->editMerchandise($id,$merchandise);
    header("Location:adminView.php");
    exit;
}
$data = $merchandiseAction->getSingleMerchandise($id);
ViewEngine\Template::render('editMerchandise', $data);
