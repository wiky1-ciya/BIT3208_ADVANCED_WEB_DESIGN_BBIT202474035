<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn,
"SELECT * FROM users
WHERE email='$email'
AND password='$password'");

if(mysqli_num_rows($query)>0){

$user = mysqli_fetch_assoc($query);

$_SESSION['user']=$user['fullname'];

header("Location: dashboard.php");
}
else{
echo "Invalid Login";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="login-container">

<h2>Login</h2>

<form method="POST">

<input
type="email"
name="email"
placeholder="Enter Email"
required>

<input
type="password"
name="password"
placeholder="Enter Password"
required>

<button
type="submit"
name="login">
Login
</button>

</form>

</div>

</body>
</html>