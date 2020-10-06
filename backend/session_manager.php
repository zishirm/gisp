<?php 

session_start();
// We need to use sessions, so you should always start sessions using the below code.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// If the user is not logged in redirect to the login page...

if (!isset($_SESSION['loggedin'])) {

   // echo "404 Error";

 // header('Location: /production/index.php');
	echo "Not Logged";
  exit();
} 
 ?>