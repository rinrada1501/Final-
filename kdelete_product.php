<?php
include 'kconfig.php';
$id = $_GET['id'];
$conn->query("DELETE FROM products WHERE id=$id");
header("Location: kproducts.php");
?>

