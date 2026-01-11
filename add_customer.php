<<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $query = "INSERT INTO customers (name, email) VALUES ($1, $2)";
    pg_query_params($conn, $query, array($name, $email));

    echo "Customer Added Successfully!";
}
?>

