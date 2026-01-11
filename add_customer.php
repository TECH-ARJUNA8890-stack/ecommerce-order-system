<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$conn->query("INSERT INTO customers(name,email,phone,address)
VALUES('$name','$email','$phone','$address')");

echo "Customer Added Successfully";
?>
