<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost:3308', 'root', '', 'users');

if($conn->connect_error){
    die('Connection to db failed : ' .$conn->connect_error );
}else {
    $execute = $conn->prepare("select * from registration where email = ?");
    $execute->bind_param("s", $email);
    $execute->execute();
    $execute_result = $execute->get_result();
    if ($execute_result->num_rows > 0) {
        $data = $execute_result->fetch_assoc();
        if ($data['psw'] === $password) {
            $_SESSION['userid'] = $email;
            $_SESSION['password'] = $password;
            header("Location: cart.php");
        }
        if ($data['user_level'] === 'admin') {
            $_SESSION['admin'] = $email;
            header("Location: frontPage.php");
        } else {
            echo "<h2>Invalid email or password</h2>";
        }
    }
}



