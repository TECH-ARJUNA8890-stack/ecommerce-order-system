<?php
$host = getenv("dpg-d5hj4ip4tr6s739kst2g-a");
$user = getenv("ecommerce_user");
$pass = getenv("E435MVkwEqwoSZHkGrBa1KEKpkOb7Wvu");
$db   = getenv("DB_NAME");
$port = getenv("5432") ?: 5432;

$conn = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass");

if (!$conn) {
    die("Database connection failed!");
}
?>



