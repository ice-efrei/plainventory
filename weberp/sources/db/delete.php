<?php
$spoolid = intval($_GET['spoolid']);

include './conn.php';

$sql = "DELETE FROM spools WHERE spoolid = $spoolid";
mysqli_query($conn, $sql);

// todo: new alerts

if (mysqli_affected_rows($conn) > 0) {
    echo('<script>alert("Successfully deleted data");location.href="../../index.php";</script>');
} else {
    die('<script>alert("Failed to delete data");location.href="../../index.php";</script>');
}
?>
