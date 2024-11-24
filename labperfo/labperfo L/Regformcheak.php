<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

   
    $file = 'users.json';

    $users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

    
    foreach ($users as $user) {
        if ($user['username'] === $username || $user['email'] === $email) {
            echo "Username or email already exists.";
            exit;
        }
    }

    
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

   
    $users[] = [
        'username' => $username,
        'email' => $email,
        'password' => $hashed_password
    ];

   
    file_put_contents($file, json_encode($users));

   
    header("Location: login.html");
    exit;
}
?>