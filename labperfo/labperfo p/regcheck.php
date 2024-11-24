<?php
session_start();


$user_data = [

    "name" => "",
    "email" => "",
    "password" => "",
    "gender" => ""

];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_data["name"] = $_POST['name'];

    $user_data["email"] = $_POST['email'];
    $user_data["password"] = $_POST['password'];
    $user_data["gender"] = $_POST['gender'];

    $_SESSION['user_data'] = $user_data;

    echo "<h2>Registration Successful!</h2>";
    echo "<p><a href='login.html'>Go to Login Page</a></p>";
}

?>
