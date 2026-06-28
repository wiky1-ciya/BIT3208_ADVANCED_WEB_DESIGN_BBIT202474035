<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn,
"SELECT * FROM products WHERE id='$id'");

$product = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    mysqli_query($conn,
    "UPDATE products SET

    product_name='$product_name',
    price='$price',
    quantity='$quantity'

    WHERE id='$id'");

    header("Location: products.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Product</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="form-container">

<h2>Edit Product</h2>

<form method="POST">

<input type="text"
name="product_name"
value="<?php echo $product['product_name']; ?>"
required>

<input type="number"
step="0.01"
name="price"
value="<?php echo $product['price']; ?>"
required>

<input type="number"
name="quantity"
value="<?php echo $product['quantity']; ?>"
required>

<button type="submit" name="update">
Update Product
</button>

</form>

</div>

</body>
</html>