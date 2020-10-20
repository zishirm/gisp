<?php
session_start();
// Change this to your connection info.
include 'db_connect.php';

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
    // Could not get the data that should have been sent.
    include 'session_manager.php';
}
else{
    $username = $_POST['username'];
    $myPass = $_POST['password'];
}


if(strlen($username)<3){
    include 'session_manager.php';
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT user_id, password, user_type FROM users WHERE email = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $username);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();
}

$stmt->store_result();



if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $password, $user_type);
    $stmt->fetch();
    // Account exists, now we verify the password.
    // Note: remember to use password_hash in your registration file to store the hashed passwords.
    if ($myPass === $password) {
        // Verification success! User has loggedin!
        // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $username = str_replace("@gmail.com", "", $username);
        $_SESSION['username'] = $username;

        $_SESSION['user_id'] = $id;

        //include $_SERVER['DOCUMENT_ROOT']."/production/audit/login.php";
  
        $insert = $conn->query("UPDATE `users` SET `last_logged` = NOW() WHERE `users`.`username` = '$username'");
           
        header('Location: ../frontend/dashboard.php');
        
    } else {
        header('Location: login.php');
    }
} else {
    header('Location: login.php');
}

$stmt->close();

?>
