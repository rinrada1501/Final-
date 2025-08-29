<?php
include 'kconfig.php';

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "INSERT INTO products (name, description, price) VALUES (?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssd", $name, $description, $price);

if ($stmt->execute()) {
    header("Location: kproducts.php");
} else {
    echo "Error: " . $conn->error;
}
?>

