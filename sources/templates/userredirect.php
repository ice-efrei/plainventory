<?php
session_start();
if (!isset($_SESSION['username'])) {
    die('<script>alert("You are not logged in");location.href="login.php";</script>');
}
