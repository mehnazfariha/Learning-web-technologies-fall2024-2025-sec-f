<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $password = $_POST['password'];

    if (isset($_SESSION['user_data'])) {

        $stored_name = $_SESSION['user_data']['name'];
        $stored_password = $_SESSION['user_data']['password'];

        if ($name == $stored_name && $password == $stored_password) {
            $_SESSION['logged_in'] = true;
            echo "<h2>Welcome, " . ($_SESSION['user_data']['name']) . "!</h2>";
            echo "<p><a href='logout.php'>Logout</a></p>";
        } else {
            echo "<h2>Login failed. Please check your email and password.</h2>";
        }
    } else {
        echo "<h2>No user found!!!!!</h2>";
    }
}
?>



