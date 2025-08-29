<?php
include 'kconfig.php';
$id = intval($_GET['id']);
$conn->query("DELETE FROM orders WHERE id=$id");
header("Location: korders.php");
?>
