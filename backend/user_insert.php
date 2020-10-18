<?php 


include 'db_connect.php';
include 'session_manager.php';
include 'profile_control.php';

$firstName = $_POST['first_name'];
$surname = $_POST['surname'];
$fullname  = trim($firstName)." ".trim($surname);
$address = $_POST['address'];
$password = $_POST['password'];
$department = $_POST['department'];
$jobTitle = $_POST['job_title'];
$email = trim($_POST['email']," ");
$userName = str_replace("@gmail.com","",$email);
$occupation = $_POST['occupation'];
$officeExtension = $_POST['office_extension'];
$dateRegistered = date("Y-m-d H:i:s");
$timeRegistered = date("H:i:s");
/*$ch_instruction = preg_replace("#\[sp]#", "&nbsp", $ch_instruction);
$ch_instruction = preg_replace("#\[nl]#", "<br>\n", $ch_instruction);
*/

/*$sql = "INSERT INTO users ( firstname, lastname, fullname, username, initials, user_type, jobtitle, email, tel_extension, department, date_of_registration, last_logged) VALUES ('$firstName', '$surname', '$fullname', '$userName', '', '', '$jobTitle', '$email', '$officeExtension', '$department', '$dateRegistered', '$timeRegistered') ";*/

$sql = "INSERT INTO users (firstname, middlename, lastname, fullname, initials, jobtitle, user_group, user_type, department, address, cellphone, telephone, tel_extension, manager, email, username, password, status, picture, active, date_of_registration) VALUES ('$firstName', '', '$surname', '$fullname', '', '$occupation', '', '', 1, '$address', '+263 (242) 759601-6', '04 759651-9', '$officeExtension', 1491, '$email', '$userName', '$password', NULL, 'default.jpg', 1, '$dateRegistered')";



    if ($conn->query($sql) === TRUE) {


    ?>
        <script type="text/javascript">
        alert("User successfully Added!");
        window.location.href = "../frontend/dashboard.php";
        </script>
    <?php

	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
