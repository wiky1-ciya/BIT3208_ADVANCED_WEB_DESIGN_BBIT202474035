<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Users</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="page-container">

<h1>Users</h1>

<a href="dashboard.php" class="btn">Back</a>

<table>

<tr>
<th>ID</th>
<th>Full Name</th>
<th>Email</th>
<th>Role</th>
</tr>

<?php

$result = mysqli_query($conn,"SELECT * FROM users");

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fullname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['role']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>