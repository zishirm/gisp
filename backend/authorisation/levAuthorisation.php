<?php 

 // We need to use sessions, so you should always start sessions using the below code.
session_start();

// We need to use sessions, so you should always start sessions using the below code.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: ../../frontend/login/index.php');
  exit();
} 

include "../profile_control.php";

  $currentTime = date("Y-m-d H:i:s");

  $name = $_GET['name'];
  $RequestCode = $_GET['genId'];
  $sender = $_GET['sender'];
  $gen_value = $_GET['gen_value'];

    /*Chain Authorisation*/
if($gen_value=="delete"){
  
  if($sender==$fullname){
  $delReq = mysqli_query($conn, "DELETE FROM `lev_app` WHERE lev_id = '$RequestCode'");
  $delAuth = mysqli_query($conn, "DELETE FROM `lev_authorisation` WHERE lev_id = '$RequestCode'  AND authStatus =0");
  $delAttach = mysqli_query($conn, "DELETE FROM `lev_uploads` WHERE lev_id = '$RequestCode'  AND authStatus =0");

  if ($delReq==TRUE || $delAuth == TRUE || $delAuth == TRUE) {
   
//  include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
  
  ?>
<script type="text/javascript">
  
  var r = alert("You have successfully deleted this change Request request this with all the attached documents.\n\n");
   window.location.href ="../../frontend/dashboard.php";
  
</script>
<?php
 }
 else{
  ?>
<script type="text/javascript">
  
  var r = alert("You can not delete these now.\n\n");
   window.location.href ="../../frontend/dashboard.php";
  
</script>
<?php
 }
  }
  else{
    ?>
<script type="text/javascript">
  
  var r = alert("You are not allowed to Delete this. Only: \n\n" + "<?php echo $sender; ?>,\n" + "is allowed");
   window.location.href ="../../frontend/dashboard.php";
  
</script>


<?php
  }
  
}
else{
  $AuthFetch = mysqli_query($conn, "SELECT * FROM lev_authorisation WHERE lev_id = '$RequestCode'");
    if ($AuthFetch->num_rows > 0) {
        while ($rowAuth = mysqli_fetch_assoc($AuthFetch)) {

          $auth1_name =$rowAuth['auth1_name'];
          $auth2_name =$rowAuth['auth2_name'];
          $auth3_name =$rowAuth['auth3_name'];
          $auth4_name =$rowAuth['auth4_name'];
          $auth5_name =$rowAuth['auth5_name'];
          $auth6_name =$rowAuth['auth6_name'];
          $auth7_name =$rowAuth['auth7_name'];
          $auth8_name =$rowAuth['auth8_name'];
          $auth9_name =$rowAuth['auth9_name'];
          $auth10_name =$rowAuth['auth10_name'];
          $auth11_name =$rowAuth['auth11_name'];
          $auth12_name =$rowAuth['auth12_name'];
          $auth13_name =$rowAuth['auth13_name'];
          $auth14_name =$rowAuth['auth14_name'];
          $auth15_name =$rowAuth['auth15_name'];
          $auth1_status =$rowAuth['auth1_status'];
          $auth2_status =$rowAuth['auth2_status'];
          $auth3_status =$rowAuth['auth3_status'];
          $auth4_status =$rowAuth['auth4_status'];
          $auth5_status =$rowAuth['auth5_status'];
          $auth6_status =$rowAuth['auth6_status'];
          $auth7_status =$rowAuth['auth7_status'];
          $auth8_status =$rowAuth['auth8_status'];
          $auth9_status =$rowAuth['auth9_status'];
          $auth10_status =$rowAuth['auth10_status'];
          $auth11_status =$rowAuth['auth11_status'];
          $auth12_status =$rowAuth['auth12_status'];
          $auth13_status =$rowAuth['auth13_status'];
          $auth14_status =$rowAuth['auth14_status'];
          $auth15_status =$rowAuth['auth15_status'];
          $auth1_time =$rowAuth['auth1_time'];
          $auth2_time =$rowAuth['auth2_time'];
          $auth3_time =$rowAuth['auth3_time'];
          $auth4_time =$rowAuth['auth4_time'];
          $auth5_time =$rowAuth['auth5_time'];
          $auth6_time =$rowAuth['auth6_time'];
          $auth7_time =$rowAuth['auth7_time'];
          $auth8_time =$rowAuth['auth8_time'];
          $auth9_time =$rowAuth['auth9_time'];
          $auth10_time =$rowAuth['auth10_time'];
          $auth11_time =$rowAuth['auth11_time'];
          $auth12_time =$rowAuth['auth12_time'];
          $auth13_time =$rowAuth['auth13_time'];
          $auth14_time =$rowAuth['auth14_time'];
          $auth15_time =$rowAuth['auth15_time'];
          $implementer =$rowAuth['implementer_name'];
        }
    }



                            /*Authority One Authorisation*/

                /*  AUTH 1 AUTHORISATION*/
if ($fullname == $auth1_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth1_time = '$currentTime', authCount = authCount + 1, auth1_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth1_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth1_time = '$currentTime', authCount =
                    CASE WHEN auth1_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth1_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth1_time = '$currentTime', authCount =
                    CASE WHEN auth1_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth1_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }

 /* AUTH2 AUTHORISATION*/
 elseif ($fullname == $auth2_name) {
      if ($gen_value =='approve') {


        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth2_time = '$currentTime', authCount = authCount + 1, auth2_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth2_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth2_time = '$currentTime', authCount =
                    CASE WHEN auth2_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth2_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth2_time = '$currentTime', authCount =
                    CASE WHEN auth2_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth2_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }

 /*AUTH 3 AUTHORISATION*/
 elseif ($fullname == $auth3_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth3_time = '$currentTime', authCount = authCount + 1, auth3_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth3_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth3_time = '$currentTime', authCount =
                    CASE WHEN auth3_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth3_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth3_time = '$currentTime', authCount =
                    CASE WHEN auth3_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth3_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }

  /* AUTH4 AUTHORISATION*/

 elseif ($fullname == $auth4_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth4_time = '$currentTime', authCount = authCount + 1, auth4_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth4_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth4_time = '$currentTime', authCount =
                    CASE WHEN auth4_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth4_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth4_time = '$currentTime', authCount =
                    CASE WHEN auth4_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth4_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }

  /* AUTH5 AUTHORISATION*/

 elseif ($fullname == $auth5_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth5_time = '$currentTime', authCount = authCount + 1, auth5_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth5_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth5_time = '$currentTime', authCount =
                    CASE WHEN auth5_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth5_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth5_time = '$currentTime', authCount =
                    CASE WHEN auth5_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth5_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;

 }


       /* AUTH6 AUTHORISATION*/

 elseif ($fullname == $auth6_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth6_time = '$currentTime', authCount = authCount + 1, auth6_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth6_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth6_time = '$currentTime', authCount =
                    CASE WHEN auth6_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth6_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth6_time = '$currentTime', authCount =
                    CASE WHEN auth6_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth6_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }


       /* AUTH7 AUTHORISATION*/

 elseif ($fullname == $auth7_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth7_time = '$currentTime', authCount = authCount + 1, auth7_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth7_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth7_time = '$currentTime', authCount =
                    CASE WHEN auth7_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth7_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0 AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth7_time = '$currentTime', authCount =
                    CASE WHEN auth7_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth7_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }


       /* AUTH8 AUTHORISATION*/

 elseif ($fullname == $auth8_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth8_time = '$currentTime', authCount = authCount + 1, auth8_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth8_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth8_time = '$currentTime', authCount =
                    CASE WHEN auth8_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth8_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth8_time = '$currentTime', authCount =
                    CASE WHEN auth8_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth8_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }

 

       /* AUTH9 AUTHORISATION*/

 elseif ($fullname == $auth9_name) {
  ?>
  <script type="text/javascript"> alert("Auth9!");</script>
  <?php
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth9_time = '$currentTime', authCount = authCount + 1, auth9_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth9_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth9_time = '$currentTime', authCount =
                    CASE WHEN auth9_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth9_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth9_time = '$currentTime', authCount =
                    CASE WHEN auth9_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth9_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }




       /* AUTH10 AUTHORISATION*/

 elseif ($fullname == $auth10_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth10_time = '$currentTime', authCount = authCount + 1, auth10_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth10_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth10_time = '$currentTime', authCount =
                    CASE WHEN auth10_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth10_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth10_time = '$currentTime', authCount =
                    CASE WHEN auth10_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth10_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }



       /* AUTH11 AUTHORISATION*/

 elseif ($fullname == $auth11_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth11_time = '$currentTime', authCount = authCount + 1, auth11_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth11_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth11_time = '$currentTime', authCount =
                    CASE WHEN auth11_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth11_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth11_time = '$currentTime', authCount =
                    CASE WHEN auth11_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth11_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }



       /* AUTH12 AUTHORISATION*/

 elseif ($fullname == $auth12_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth12_time = '$currentTime', authCount = authCount + 1, auth12_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth12_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth12_time = '$currentTime', authCount =
                    CASE WHEN auth12_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth12_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth12_time = '$currentTime', authCount =
                    CASE WHEN auth12_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth12_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }



       /* AUTH13 AUTHORISATION*/

 elseif ($fullname == $auth13_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth13_time = '$currentTime', authCount = authCount + 1, auth13_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth13_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth13_time = '$currentTime', authCount =
                    CASE WHEN auth13_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth13_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth13_time = '$currentTime', authCount =
                    CASE WHEN auth13_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth13_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }



       /* AUTH14 AUTHORISATION*/

 elseif ($fullname == $auth14_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth14_time = '$currentTime', authCount = authCount + 1, auth14_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth14_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth14_time = '$currentTime', authCount =
                    CASE WHEN auth14_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth14_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth14_time = '$currentTime', authCount =
                    CASE WHEN auth14_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth14_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }

  /* AUTH15 AUTHORISATION*/

 elseif ($fullname == $auth15_name) {
      if ($gen_value =='approve') {

        #$myInsert = UPDATE 'system_change_authorisation' SET 'picat_status'= 'Y' WHERE 'ch_id' ="CH2019.07.05.02:45:40" 
        $myInsert ="UPDATE lev_authorisation SET auth15_time = '$currentTime', authCount = authCount + 1, auth15_status= 'Y' WHERE lev_id = '$RequestCode'  AND auth15_status != 'Y'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

      }

      elseif ($gen_value=='disapprove') {

        $myInsert ="UPDATE lev_authorisation
                    SET auth15_time = '$currentTime', authCount =
                    CASE WHEN auth15_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth15_status ='N' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      elseif ($gen_value=='wait') {

        $myInsert ="UPDATE lev_authorisation
                    SET  auth15_time = '$currentTime', authCount =
                    CASE WHEN auth15_status != 'Y' THEN authCount
                    ELSE (authCount-1) END, auth15_status ='W' WHERE lev_id ='$RequestCode'  AND authStatus =0";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else echo "We are sorry, you are not allowed to authorise this."."<br>". $uat." can authorise" ;
      

 }




 /*  Implementation Section*/

elseif ($fullname == $implementer) {


   if ($gen_value=="implementing") {
     $myInsert ="UPDATE lev_authorisation SET implementer_status = '1', implementer_time = '$currentTime' WHERE lev_id = '$RequestCode'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          ?>
          <script type="text/javascript">
            alert("implementing status successfully set");
          </script>
          <?php
          #header('Location: ../../frontend/dashboard.php');
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
   }
   elseif ($gen_value == "implemented") {
    $myInsert ="UPDATE lev_authorisation SET implementer_status = '2', implementer_time = '$currentTime' WHERE lev_id = '$RequestCode'";
        if ($conn->query($myInsert) === TRUE) {

          // include $_SERVER['DOCUMENT_ROOT']."/production/audit/dataManipulation/genAuth.php";
          include $_SERVER['DOCUMENT_ROOT']."/production/emails/ImplementationNotice.php";
          ?>
          <script type="text/javascript">
            alert("implemented status successfully set");
          </script>
          <?php
          header('Location: ../../frontend/dashboard.php');
          } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
   }

   else{
    ?>
<script type="text/javascript"> 

  var r = alert("You are not allowed to Authorise this. Only: \n\n" + "<?php echo "1. ".$auth1_name; ?>\n"+ "<?php if (strlen($auth2_name)>2) {echo "2. ".$auth2_name;}  ?>\n"+ "<?php  if (strlen($auth3_name)>2) {echo "3. ".$auth3_name;}  ?>\n" + "<?php  if (strlen($auth4_name)>2) {echo "4. ".$auth4_name;}  ?> \n"+ "<?php  if (strlen($auth5_name)>2) {echo "5. ".$auth5_name;}  ?> \n"+ "<?php  if (strlen($auth6_name)>2) {echo "6. ".$auth6_name;}  ?> \n"+ "<?php  if (strlen($auth7_name)>2) {echo "7. ".$auth7_name;}  ?> \n"+ "<?php  if (strlen($auth8_name)>2) {echo "8. ".$auth8_name;}  ?> \n"+"are allowed");
   window.location.href ="../../frontend/dashboard.php";
  
  
</script>
    <?php
   }
 }


 else { 

  ?>
<script type="text/javascript">
  
  var r = alert("You are not allowed to Authorise this. Only: \n\n" + "<?php echo "1. ".$auth1_name; ?><br>"+ "<?php if (strlen($auth2_name)>2) {echo "2. ".$auth2_name;}  ?><br>"+ "<?php  if (strlen($auth3_name)>2) {echo "3. ".$auth3_name;}  ?><br>" + "<?php  if (strlen($auth4_name)>2) {echo "4. ".$auth4_name;}  ?> \n"+ "<?php  if (strlen($auth5_name)>2) {echo "5. ".$auth5_name;}  ?>, \n"+ "<?php  if (strlen($auth6_name)>2) {echo "6. ".$auth6_name;}  ?> \n"+ "<?php  if (strlen($auth7_name)>2) {echo "7. ".$auth7_name;}  ?> \n"+ "<?php  if (strlen($auth8_name)>2) {echo "8. ".$auth8_name;}  ?> \n"+"are allowed");
   window.location.href ="../../frontend/dashboard.php";
  
</script>


<?php
}
}

 ?>
