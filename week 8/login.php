<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn,
"SELECT * FROM users
WHERE email='$email'");

if(mysqli_num_rows($query)>0){

$user = mysqli_fetch_assoc($query);

if(password_verify($password, $user['password'])){

$_SESSION['user']=$user['fullname'];

header("Location: dashboard.php");
exit();

}else{

echo "Invalid Password";

}

}else{

echo "User Not Found";

}
}
?>

<!DOCTYPE html>
<html>
<head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
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