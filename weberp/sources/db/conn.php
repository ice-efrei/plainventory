<?php
$conn = mysqli_connect("192.168.149.182", "root", "root", "plainventory", 6033);
if (!$conn) {
    die("Connection 1 failed: " . mysqli_connect_error());
}
