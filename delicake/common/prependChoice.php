<?php
// Read pages.json into $json which is a string
$json = file_get_contents('C:\xampp\htdocs\delicake\common\pages.json');
$obj = json_decode($json);
$pageName = basename($_SERVER['PHP_SELF']);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (!in_array($pageName, $obj->noHeader)) {
    include 'choices/header.php';
}

if (in_array($pageName, $obj->model)) {
    include '../mvc/model.php';
}
