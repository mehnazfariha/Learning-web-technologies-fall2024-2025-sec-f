<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    
    if ($username == null || trim($username) == "") {
        echo "Error: <br>Name cannot be empty.";
    } 
    else if (str_word_count($username) < 2) {
        echo "Error:<br> Name must contain at least two words.";
    } 
    if (strtoupper($username[0]) !== 'A') {
         echo" <br>Name must start with the letter 'A'.";
    }
   
    $validCharacters = true;
    for ($i = 0; $i < strlen($username); $i++) {
        $char = $username[$i];
        if (!(
            ($char >= 'a' && $char <= 'z') || 
            ($char >= 'A' && $char <= 'Z') || 
            ($char == '.') || 
            ($char == '-')
        )) {
            $validCharacters = false;
            break;
        }
    }

    if (!$validCharacters) {
      echo" <br>Name can only contain letters, periods, and dashes.";
    }
} else {
    header('location: Name.html');
    exit(); 
}
?>

