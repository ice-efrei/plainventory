<?php
$conn = mysqli_connect("10.2.0.36", "ice", "ice", "plainventory", 6033);
if (mysqli_connect_errno()) {
    $conn = mysqli_connect("localhost", "root", "root", "plainventory", 3306);
    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }
}
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
