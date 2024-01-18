<?php
$errors = "";

if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['material'])) {
    $material = strtolower($_POST['material']);
} else {
    $errors .= "Invalid material;";
}

if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['color'])) {
    $color = strtolower($_POST['color']);
} else {
    $errors .= "Invalid color;";
}

if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['owner'])) {
    $owner = strtolower($_POST['owner']);
} else {
    $errors .= "Invalid owner;";
}

$weight = floatval($_POST['weight']);

if ($weight <= 0) {
    $errors .= "Invalid weight;";
}

if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['printer']) || $_POST['printer'] == '') {
    $printer = strtolower($_POST['printer']);
} else {
    $errors .= "Invalid printer;";
}

if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['brand']) || $_POST['brand'] == '') {
    $brand = strtolower($_POST['brand']);
} else {
    $errors .= "Invalid brand;";
}

if ($errors != "") {
    die('<script>location.href="../../index.php?add_spool=failed&errors=' . $errors . '";</script>');
}

include './conn.php';

$sql = "INSERT INTO spools (material, color, owner, weight, printer, brand) VALUES ('$material', '$color', '$owner', $weight, '$printer', '$brand')";
mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
    echo('<script>location.href="../../index.php?add_spool=success";</script>');
} else {
    die('<script>location.href="../../index.php?add_spool=error";</script>');
}
