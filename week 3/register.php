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

    <form method="POST">

        <input type="text"
               name="fullname"
               placeholder="Full Name"
               required>

        <input type="email"
               name="email"
               placeholder="Email Address"
               required>

        <input type="password"
       id="password"
       name="password"
       placeholder="Password"
       required>

       <div id="strength"></div>    
        <button type="submit" name="register">
            Register
        </button>

    </form>

</div>
<script>

const passwordField = document.getElementById("password");
const strength = document.getElementById("strength");

passwordField.addEventListener("keyup", function(){

    let value = passwordField.value;

    if(value.length < 6){

        strength.innerHTML = "Weak Password";
        strength.style.color = "red";

    }
    else if(value.length < 10){

        strength.innerHTML = "Medium Password";
        strength.style.color = "orange";

    }
    else{

        strength.innerHTML = "Strong Password";
        strength.style.color = "green";

    }

});

</script>
</body>
</html>