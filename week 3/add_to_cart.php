<?php
session_start();
include 'db.php';

$user_id = 1; // replace with logged-in user

$product_id = $_GET['id'];

mysqli_query($conn,
"INSERT INTO cart(user_id,product_id,quantity)
VALUES('$user_id','$product_id',1)");

header("Location: shop.php");
?>