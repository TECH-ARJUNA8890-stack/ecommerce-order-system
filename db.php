<?php
$conn = new mysqli(
    getenv("dpg-d5hj4ip4tr6s739kst2g-a"),
    getenv("ecommerce_user"),
    getenv("E435MVkwEqwoSZHkGrBa1KEKpkOb7Wvu"),
    getenv("ecommerce_db_2uvj")
);

if($conn->connect_error){
    die("Database Connection Failed");
}
?>

