<?php

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once ('php/header.php');
?>

<form action="connectToDB.php" method="post">
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="name"><b>Name</b></label>
        <input type="name" placeholder="name" name="name" id="name" required>

        <label for="phonenumber"><b>Phone Number</b></label>
        <input type="phonenumber" placeholder="phone" name="phone" id="phonenumber" required>

        <label for="address"><b>Address</b></label>
        <input type="address" placeholder="address" name="address" id="address" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="email" name="email" id="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="psw" placeholder="password" name="psw" id="psw" required>

        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" class="submit">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
</form>

</body>
</html>
