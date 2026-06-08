<?php
include 'db.php';

$result = mysqli_query($conn,
"SELECT * FROM products");
?>

<h1>Shop Products</h1>

<div class="product-grid">

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<div class="product-card">

<img src="uploads/<?php echo $row['image']; ?>" width="150">

<h3><?php echo $row['product_name']; ?></h3>

<p>KES <?php echo $row['price']; ?></p>

<a href="add_to_cart.php?id=<?php echo $row['id']; ?>">
Add To Cart
</a>

</div>

<?php } ?>

</div>