<?php
if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['material'])) {
    $material = strtolower($_POST['material']);
} else {
    die('<script>alert("Invalid material");location.href="../../index.php";</script>');
}

if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['color'])) {
    $color = strtolower($_POST['color']);
} else {
    die('<script>alert("Invalid color");location.href="../../index.php";</script>');
}

if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['owner'])) {
    $owner = strtolower($_POST['owner']);
} else {
    die('<script>alert("Invalid owner");location.href="../../index.php";</script>');
}

$weight = floatval($_POST['weight']);

if ($weight <= 0) {
    die('<script>alert("Invalid weight");location.href="../../index.php";</script>');
}

if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['printer']) || $_POST['printer'] == '') {
    $printer = strtolower($_POST['printer']);
} else {
    die('<script>alert("Invalid printer");location.href="../../index.php";</script>');
}

if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['brand']) || $_POST['brand'] == '') {
    $brand = strtolower($_POST['brand']);
} else {
    die('<script>alert("Invalid brand");location.href="../../index.php";</script>');
}

include './conn.php';

$sql = "INSERT INTO Spools (material, color, owner, weight, printer, brand) VALUES ('$material', '$color', '$owner', $weight, '$printer', '$brand')";
mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
    echo('<script>alert("Successfully added data");location.href="../../index.php";</script>');
} else {
    die('<script>alert("Failed to add data");location.href="../../index.php";</script>');
}
