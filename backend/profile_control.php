<?php 
error_reporting(0);
include 'session_manager.php';
// If the user is not logged in redirect to the login page...
/*if (!isset($_SESSION['loggedin'])) {
  header('Location: index.php');
  exit();
}*/ 
include 'db_connect.php';

$uname =$_SESSION["username"];

  $sql = "SELECT * FROM users WHERE username = '$uname'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
         $fname = $row["firstname"];
         $sname = $row["lastname"];
		     $fullname = $row["fullname"];
         $userType = $row["user_type"];
         $userPicture = $row["picture"]; 
         $department = $row["department"]; 
         $userJob= $row["jobtitle"];     }
  } else {
      echo "0 results";
  }
?>
