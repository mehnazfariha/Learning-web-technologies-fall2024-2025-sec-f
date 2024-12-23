<?php
session_start();
if (isset($_COOKIE['flag'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Add new user logic
        $newUser = [
            'id' => count($users) + 1,  // Increment the ID based on existing users
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password']  // In a real-world scenario, hash the password
        ];

        // Add the user to the array (assuming $users is stored in session or database)
        $users[] = $newUser;

        // Redirect to home page
        header('Location: home.php');
    }
    ?>

    <html lang="en">
    <head>
        <title>Create User</title>
    </head>
    <body>
        <h2>Add New User</h2>
        <a href="home.php">Back to User List</a>
        <form method="post">
            <label>Username:</label>
            <input type="text" name="username" required><br><br>
            <label>Email:</label>
            <input type="email" name="email" required><br><br>
            <label>Password:</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" value="Add User">
        </form>
    </body>
    </html>

<?php
} else {
    header('location: login.html');
}
?>