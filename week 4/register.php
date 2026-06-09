<?php
include 'db.php';

if(isset($_POST['register'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(fullname,email,password)
            VALUES('$fullname','$email','$password')";

    if(mysqli_query($conn,$sql)){
        header("Location: login.php");
    }else{
        echo "Registration Failed";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="login-container">

    <h2>Create Account</h2>
<form method="POST" onsubmit="return validateForm()"><

        <input type="text"
               name="fullname"
               placeholder="Full Name"
               required>

        <input type="email"
               name="email"
               placeholder="Email Address"
               required>

        <input type="password"
               name="password"
               placeholder="Password"
               required>

        <button type="submit" name="register">
            Register
        </button>

    </form>

</div>
<script>

function validateForm(){

    let password =
    document.querySelector('input[name="password"]').value;

    if(password.length < 8){

        alert("Password must be at least 8 characters");

        return false;
    }

    return true;
}

</script>
</body>
</html>