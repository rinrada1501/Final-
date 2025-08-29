<?php
include 'kconfig.php';

$customer = $_POST['customer'];
$menu     = $_POST['menu'];
$total    = $_POST['total'];
$status   = $_POST['status'];

$sql = "INSERT INTO orders (customer, menu, total, status) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssds", $customer, $menu, $total, $status);

if ($stmt->execute()) {
    header("Location: korders.php");
} else {
    echo "Error: " . $conn->error;
}
?>
