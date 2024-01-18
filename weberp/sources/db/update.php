<?php
$spoolid = intval($_GET['spoolid']) or die('<script>alert("Invalid spoolid");window.history.go(-1);</script>');

$material = preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['material']) ? $_POST['material'] : '<error>';
if ($material == '<error>') {
    die('<script>alert("Invalid material");location.href="../../index.php";</script>');
}

$color = preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['color']) ? $_POST['color'] : '<error>';
if ($color == '<error>') {
    die('<script>alert("Invalid color");location.href="../../index.php";</script>');
}

$owner = preg_match('/^[a-zA-Z\s]{1,100}$/', $_POST['owner']) ? $_POST['owner'] : '<error>';
if ($owner == '<error>') {
    die('<script>alert("Invalid owner");location.href="../../index.php";</script>');
}

$qt = intval($_POST['qt']);

include './conn.php';

$sql = "UPDATE spools SET material = '$material', color = '$color', owner = '$owner', qt = $qt WHERE spoolid = $spoolid";
mysqli_query($conn, $sql);

// todo: new alerts

if (mysqli_affected_rows($conn) > 0) {
    echo('<script>alert("Successfully updated data");location.href="../../index.php";</script>');
} else {
    die('<script>alert("Failed to update data");location.href="../../index.php";</script>');
}
?>
