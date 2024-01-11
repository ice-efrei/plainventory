<?php
if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['material'])) {
    $material = $_POST['material'];
} else {
    die('<script>alert("Invalid material");location.href="../index.php";</script>');
}

if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['color'])) {
    $color = $_POST['color'];
} else {
    die('<script>alert("Invalid color");location.href="../index.php";</script>');
}

if (preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['owner'])) {
    $owner = $_POST['owner'];
} else {
    die('<script>alert("Invalid owner");location.href="../index.php";</script>');
}

$qt = intval($_POST['qt']);

include './conn.php';

$sql = "INSERT INTO Spools (material, color, owner, qt) VALUES ('$material', '$color', '$owner', $qt)";
mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
    echo('<script>alert("Successfully added data");location.href="../index.php";</script>');
} else {
    die('<script>alert("Failed to add data");location.href="../index.php";</script>');
}
?>
