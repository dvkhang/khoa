<?php
include 'Model/Database.php';
session_start();
include_once("Controller/Controller.php");

$controller = new Controller();
$controller->login();

?>