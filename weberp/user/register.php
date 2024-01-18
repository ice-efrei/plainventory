<?php
include "../sources/db/conn.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password2 = mysqli_real_escape_string($conn, $_POST['password_confirm']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$association = mysqli_real_escape_string($conn, $_POST['association']);

if ($password != $password2) {
//    die('<script>windows.location.href="../register.php?register=failed";</script>');
    header("Location: ../register.php?register=failed");
} else {
    $sql = "select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
//        die('<script>windows.location.href="../index.php?register=failed";</script>');
        header("Location: ../register.php?register=failed");
    } else {
        $sql = "insert into users (username, password, email, role, association) values ('$username', '" . md5($password) . "', '$email', 'user', '$association')";
        mysqli_query($conn, $sql);
        if (mysqli_affected_rows($conn) > 0) {
//            echo('<script>alert("successfully register");</script>');
            header("Location: ../login.php?register=success");
        } else {
//            die('<script>windows.location.href="../register.php?register=failed";</script>');
            header("Location: ../register.php?register=failed");
        }
    }
}
