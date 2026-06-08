<?php
include 'db.php';

if(isset($_POST['save'])){

$product_name = $_POST['product_name'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$image = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];

move_uploaded_file($temp,"uploads/".$image);

$sql = "INSERT INTO products
(product_name,category,price,quantity,image)
VALUES
('$product_name','$category','$price','$quantity','$image')";

mysqli_query($conn,$sql);

header("Location: products.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="form-container">

<h2>Add Product</h2>

<form method="POST" enctype="multipart/form-data">

<input type="text" name="product_name" placeholder="Product Name" required>

<input type="text" name="category" placeholder="Category" required>

<input type="number" step="0.01" name="price" placeholder="Price" required>

<input type="number" name="quantity" placeholder="Quantity" required>

<input type="file" name="image" required>

<button type="submit" name="save">
Save Product
</button>

</form>

</div>

</body>
</html>