<?php
$user = (isset($_GET['user'])) ? $_GET['user'] : "u";
$action = 'adminVerify';
require_once($_SERVER['DOCUMENT_ROOT'] . "/index.php");
?>