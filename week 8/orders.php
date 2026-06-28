<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Orders</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="page-container">

<h1>Orders</h1>

<a href="dashboard.php" class="btn">Back</a>
<a href="add_product.php" class="btn">
Add Order
</a>
<table>

<tr>
<th>ID</th>
<th>Customer</th>
<th>Total Amount</th>
<th>Status</th>
<th>Date</th>
</tr>

<?php

$result = mysqli_query($conn,"SELECT * FROM orders");

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['customer_name']; ?></td>
<td>KES <?php echo $row['total_amount']; ?></td>
<td><?php echo $row['order_status']; ?></td>
<td><?php echo $row['order_date']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>