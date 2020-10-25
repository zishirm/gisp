<?php 

include '../../../iapprove/production/db_connect.php';
include 'profile_control.php';

$requestor = $fullname;
$gen_id = $_POST['gen_id'];
$gen_name = $_POST['gen_name'];
$gen_name = str_replace("'","\'", $gen_name);
$gen_name = str_replace("","\'", $gen_name);
$gen_description = $_POST['gen_description'];
$gen_description = str_replace("'","\'", $gen_description);
$gen_description = str_replace("","\'", $gen_description);
$gen_impact_analysis = $_POST['gen_impact_analysis'];
$gen_impact_analysis = str_replace("'","\'", $gen_impact_analysis);
$gen_impact_analysis = str_replace("","\'", $gen_impact_analysis);
$req_justification = $_POST['req_justification'];
$req_time = date("Y-m-d H:i:s");
$totalAuth = 0;
$auth0 = $_POST[0];
if (strlen($auth0)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth0'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth0JobTitle = $rowUser['jobtitle'];
    }
}



$auth1 = $_POST[1];
if (strlen($auth1)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth1'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth1JobTitle = $rowUser['jobtitle'];
    }
}


$auth2 = $_POST[2];
if (strlen($auth2)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth2'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth2JobTitle = $rowUser['jobtitle'];
    }
}


$auth3 = $_POST[3];
if (strlen($auth3)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth3'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth3JobTitle = $rowUser['jobtitle'];
    }
}

$auth4 = $_POST[4];
if (strlen($auth4)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth4'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth4JobTitle = $rowUser['jobtitle'];
    }
}
$auth5 = $_POST[5];
if (strlen($auth5)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth5'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth5JobTitle = $rowUser['jobtitle'];
    }
}
$auth6 = $_POST[6];
if (strlen($auth6)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth6'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth6JobTitle = $rowUser['jobtitle'];
    }
}
$auth7 = $_POST[7];
if (strlen($auth7)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth7'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth7JobTitle = $rowUser['jobtitle'];
    }
}
$auth8 = $_POST[8];
if (strlen($auth8)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth8'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth8JobTitle = $rowUser['jobtitle'];
    }
}
$auth9 = $_POST[9];
if (strlen($auth9)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth9'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth9JobTitle = $rowUser['jobtitle'];
    }
}
$auth10 = $_POST[10];
if (strlen($auth10)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth10'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth10JobTitle = $rowUser['jobtitle'];
    }
}
$auth11 = $_POST[11];
if (strlen($auth11)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth11'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth11JobTitle = $rowUser['jobtitle'];
    }
}
$auth12 = $_POST[12];
if (strlen($auth12)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth12'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth12JobTitle = $rowUser['jobtitle'];
    }
}
$auth13 = $_POST[13];
if (strlen($auth13)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth13'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth13JobTitle = $rowUser['jobtitle'];
    }
}
$auth14 = $_POST[14];
if (strlen($auth14)>3) {

$msql = "SELECT * FROM users WHERE fullname = '$auth14'";
  $allUsers = $conn->query($msql);
  while ($rowUser = mysqli_fetch_array($allUsers))
  {
$auth14JobTitle = $rowUser['jobtitle'];
    }
}

$implementer_name = $_POST['Implementer1'];

if (strlen($auth0)>3) {
   $totalAuth = $totalAuth+1;
    if (strlen($auth1)>3) {
        $totalAuth = $totalAuth+1;
        if (strlen($auth2)>3) {
            $totalAuth = $totalAuth+1;
            if (strlen($auth3)>3) {
            $totalAuth = $totalAuth+1;
            if (strlen($auth4)>3) {
            $totalAuth = $totalAuth+1;
            if (strlen($auth5)>3) {
            $totalAuth = $totalAuth+1;
            if (strlen($auth6)>3) {
            $totalAuth = $totalAuth+1;
            if (strlen($auth7)>3) {
            $totalAuth = $totalAuth+1;
            if (strlen($auth8)>3) {
            $totalAuth = $totalAuth+1;
            if (strlen($auth9)>3) {
                $totalAuth = $totalAuth+1;
            if (strlen($auth10)>3) {
                $totalAuth = $totalAuth+1;
                if (strlen($auth11)>3) {
                $totalAuth = $totalAuth+1;
                if (strlen($auth12)>3) {
                $totalAuth = $totalAuth+1;
                if (strlen($auth13)>3) {
                $totalAuth = $totalAuth+1;
                if (strlen($auth14)>3) {
                $totalAuth = $totalAuth+1;
                if (strlen($auth15)>3) {
                $totalAuth = $totalAuth+1;
            }
            }
            }
            }
            }
            }
            }
        }
        }
        }
        }
        }
        }
        }
    }
}
//echo $totalAuth;
$message = "Assigned as authoriser";

$ctime = date('Y-m-d H:i:s');

$sql = "INSERT INTO procurement_req (proc_id, gen_requestor, gen_name, gen_description, impact_analysis, req_justification, req_date) VALUES ('$gen_id', '$requestor', '$gen_name', '$gen_description', '$gen_impact_analysis', '$req_justification', '$ctime') ";


$sql1 = "INSERT INTO procurement_auth (proc_id,  auth1_name, auth1_jobtitle, auth2_name, auth2_jobtitle, auth3_name, auth3_jobtitle, auth4_name, auth4_jobtitle, auth5_name, auth5_jobtitle, auth6_name, auth6_jobtitle, auth7_name, auth7_jobtitle, auth8_name, auth8_jobtitle, auth9_name, auth9_jobtitle, auth10_name, auth10_jobtitle, auth11_name, auth11_jobtitle, auth12_name, auth12_jobtitle, auth13_name, auth13_jobtitle, auth14_name, auth14_jobtitle, auth15_name, auth15_jobtitle, implementer_name, totalAuth, overal_status) VALUES ('$gen_id',  '$auth0', '$auth0JobTitle', '$auth1', '$auth1JobTitle', '$auth2', '$auth2JobTitle', '$auth3', '$auth3JobTitle', '$auth4', '$auth4JobTitle', '$auth5', '$auth5JobTitle', '$auth6', '$auth6JobTitle', '$auth7', '$auth7JobTitle', '$auth8', '$auth8JobTitle', '$auth9', '$auth9JobTitle', '$auth10', '$auth10JobTitle', '$auth11', '$auth11JobTitle', '$auth12', '$auth12JobTitle', '$auth13', '$auth13JobTitle', '$auth14', '$auth14JobTitle', '$implementer_name',  '$totalAuth', '1')";

// $sql3 = "INSERT INTO message_handle (msg_id, id, sender, receiver1, receiver2, receiver3, receiver4, receiver5, receiver6, receiver7, receiver8, receiver9, receiver10,  time_sent, mesage_detail, msg_status) VALUES ('', '$gen_id', '$requestor', '$auth1', '$auth2', '$auth3', '$auth4', '$auth5', '$auth6', '$auth7', 'implement1', 'implement2', 'implement3', NOW(), '$message', '0')";


    $insertReq = $conn->query($sql);
    $insertMsg =  $conn->query($sql3);
    $insertGenAuth = $conn->query($sql1);


/*Image Insertion*/

    // File upload configuration
    $targetDir =  "../uploads/";
    $allowTypes = array('jpg','png','jpeg','gif', 'pdf', 'eml', 'xls', 'docx', 'html', 'xml', 'xlsx', 'csv', 'doc');
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['fileToUpload']['name']))){
        foreach($_FILES['fileToUpload']['name'] as $key=>$val){
            // File upload path
            $fileName = $gen_id."_".basename($_FILES['fileToUpload']['name'][$key]);
            $fileName = strtolower($fileName);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            $fileType = strtolower($fileType);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    
                   
                    $insert = $conn->query("INSERT INTO procurement_uploads (proc_id, file_name, file_format, uploader) VALUES ('$gen_id', '$fileName', '$fileType', '$fullname')");

                    if($insert  == TRUE){
                     
                    $statusMsg = "Files are uploaded successfully.".$errorMsg;
                    }else{
                     $statusMsg = "Sorry, there was an error uploading your file.";
                     $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                     $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                     $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                    }


                }else{
                  $errorUpload .= $_FILES['fileToUpload']['name'][$key];
                }
            }else{
               $errorUploadType .= $_FILES['fileToUpload']['name'][$key];
            }
        }
        
        if(!empty($insertValuesSQL)){
            
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }
 
    if ($insertReq === TRUE && $insertGenAuth === TRUE) {

        include 'genEmail.php';


?>
 <script type="text/javascript">
   window.location.href = "../frontend/dashboard.php";
 alert("Procurement Request sent");

 </script>
<?php
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
