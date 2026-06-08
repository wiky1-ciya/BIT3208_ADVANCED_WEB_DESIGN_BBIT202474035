<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn,
"SELECT * FROM products WHERE id='$id'");

$product = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$name = $_POST['product_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

mysqli_query($conn,
"UPDATE products SET
product_name='$name',
price='$price',
quantity='$quantity'
WHERE id='$id'");

header("Location: products.php");
}
?>

<form method="POST">

<input type="text"
name="product_name"
value="<?php echo $product['product_name']; ?>">

<input type="number"
step="0.01"
name="price"
value="<?php echo $product['price']; ?>">

<input type="number"
name="quantity"
value="<?php echo $product['quantity']; ?>">

<button name="update">
Update
</button>

</form>