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
$merchandise = $merchandiseAction->getSingleMerchandise($id);
if (isset($_POST['name'], $_POST['price'], $_POST['promoPrice'])) {
    $price = $_POST['price'];
    $promoPrice = $_POST['promoPrice'];
    $name = $_POST['name'];
    if (!is_numeric($price)) {
        header("Location:merchandiseEdit.php?id=" . $id);
        exit;
    }
    if (!is_numeric($promoPrice)) {
        header("Location:merchandiseEdit.php?id=" . $id);
        exit;
    }
    if (empty($name)) {
        header("Location:merchandiseEdit.php?id=" . $id);
        exit;
    }
    $merchandise->setName($name);
    $merchandise->setPrice($price);
    $merchandise->setPromoPrice($promoPrice);
    if (!empty($_FILES['image']['tmp_name'])) {
        $fileName = $merchandiseAction->processFile($_FILES['image']);
        $merchandise->setImage($fileName);
    }

    if ($merchandiseAction->editMerchandise($id, $merchandise)) {
        header("Location:adminView.php");
        exit;
    }else {
        header("Location:merchandiseEdit.php?id=" . $id);
        exit;
    }
}

ViewEngine\Template::render('editMerchandise', $merchandise);
