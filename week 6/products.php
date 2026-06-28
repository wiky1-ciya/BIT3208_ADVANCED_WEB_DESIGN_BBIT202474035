<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="page-container">

<h1>Products</h1>

<a href="dashboard.php" class="btn">Back</a>
<a href="add_product.php" class="btn">
Add Product
</a>
<table>

<tr>
<th>ID</th>
<th>Product Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Actions</th>
</tr>

<?php

$result = mysqli_query($conn,"SELECT * FROM products");

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['product_name']; ?></td>
<td>KES <?php echo $row['price']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td>

<a href="edit_product.php?id=<?php echo $row['id']; ?>">
Edit
</a>

|

<a href="delete_product.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete Product?')">
Delete
</a>

</td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>