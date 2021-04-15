<?php
session_start();
unset($_SESSION['login']);
$_SESSION['login'] = null;
header('location: login.php');
