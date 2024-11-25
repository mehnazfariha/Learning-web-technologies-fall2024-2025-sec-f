<?php
session_start();


$user_data = [

    "name" => "",
    "email" => "",
    "password" => "",
    "confirm_password" => "",
    "gender" => ""

];
/*if(isset($_POST['submit'])){

    $name  =  $_REQUEST['name'];
    $password  =  $_REQUEST['password'];
    $confirm_password  =  $_REQUEST['confirm_password'];
    $gender  =  $_REQUEST['gender'];

    if($name == null || $password == null || $confirm_password == null || $email == null || $gender == null ){
        echo "Null data found!";
    }else if ($name == $password){
        //echo "Valid User!";
        $_SESSION['flag'] = true;
        
    }else{
        echo "Invalid user";
    }
}else{
    //echo "Invalid request!";
    header('location: name.html');
}*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $user_data["name"] = $_POST['name'];

    $user_data["email"] = $_POST['email'];
    $user_data["password"] = $_POST['password'];
    $user_data["gender"] = $_POST['gender'];

    $_SESSION['user_data'] = $user_data;

   echo "<h2>Registration Successful!</h2>";
   echo "<p><a href='login.html'>Moving to the Login Page</a></p>";
}

?>
