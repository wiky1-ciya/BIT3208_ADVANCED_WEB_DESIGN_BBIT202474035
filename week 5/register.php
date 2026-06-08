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

    <form method="POST" onsubmit="return validateForm()">

        <input type="text"
       id="fullname"
       name="fullname"
       placeholder="Full Name"
       required>

<input type="email"
       id="email"
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

const password =
document.getElementById("password");

const strength =
document.getElementById("strength");

password.addEventListener("keyup",function(){

    let value = password.value;

    if(value.length < 6){

        strength.innerHTML =
        "Weak Password";

        strength.style.color = "red";

    }
    else if(value.length < 10){

        strength.innerHTML =
        "Medium Password";

        strength.style.color = "orange";

    }
    else{

        strength.innerHTML =
        "Strong Password";

        strength.style.color = "green";

    }

});

</script>

<script>

function validateForm(){

    let fullname =
    document.getElementById("fullname").value;

    let email =
    document.getElementById("email").value;

    let password =
    document.getElementById("password").value;

    if(fullname == ""){
        alert("Full Name is required");
        return false;
    }

    if(email == ""){
        alert("Email is required");
        return false;
    }

    if(password.length < 8){
        alert("Password must be at least 8 characters");
        return false;
    }

    return true;
}

</body>
</html>