<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="dashboard">

<div class="sidebar">

<h2>ONLINE SHOP</h2>

<ul>

<li>
<a href="dashboard.php">Dashboard</a>
</li>

<li>
<a href="products.php">Products</a>
</li>

<li>
<a href="orders.php">Orders</a>
</li>

<li>
<a href="users.php">Users</a>
</li>

<li>
<a href="logout.php">Logout</a>
</li>

</ul>

</div>

<div class="main-content">

<h1>Dashboard</h1>

<div class="cards">

<a href="products.php" class="card-link">
<div class="card">
<h3>Products</h3>
<p>Manage Products</p>
</div>
</a>

<a href="orders.php" class="card-link">
<div class="card">
<h3>Orders</h3>
<p>Manage Orders</p>
</div>
</a>

<a href="users.php" class="card-link">
<div class="card">
<h3>Users</h3>
<p>Manage Users</p>
</div>
</a>

</div>

</div>

</div>

</body>
</html>