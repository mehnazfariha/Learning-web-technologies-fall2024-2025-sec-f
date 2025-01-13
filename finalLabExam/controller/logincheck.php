<?php
include('../model/usermodel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        if ($username === 'abcd' && $password === '1234') {
            header('Location: ../view/dashboard.html');
            exit();
        } else {
            echo "You are a valid member!";
        }
    } else {
        echo "Invalid credentials!";
    }
}
?>
