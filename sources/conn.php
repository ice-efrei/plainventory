<?php
$conn = mysqli_connect("localhost", "root", "root", "plainventory");
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
