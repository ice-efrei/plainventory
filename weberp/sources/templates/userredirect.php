<?php
session_start();

// if logout=success, redirect to login.php
if (isset($_GET['logout']) && $_GET['logout'] == 'success') {
//    header("Location: ./login.php?logout=success");
    die('<script>location.href="./login.php?logout=success";</script>');
}

if (!isset($_SESSION['username'])) {
//    header("Location: ./login.php");
    die('<script>location.href="./login.php";</script>');
}

