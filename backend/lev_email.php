<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Return Scheduler</title>
<script>

</script>
</head>

<body>

<?php


include 'db_connect.php';

$today=date('Y-m-d');
//$lev_id = "LEA20201018210612";
// $fullname = 'test1 NMB';

 $remind_query1 = 'SELECT lev_app.*, lev_authorisation.* FROM `lev_app` JOIN lev_authorisation ON  lev_app.lev_id=lev_authorisation.lev_id WHERE lev_app.lev_id ="'.$lev_id.'"';
     //Sql query to find users that reminders dates match current date.
    
  if($run1 = $conn->query($remind_query1))
    {
   $rows = $run1->num_rows;
      
      for ($j = 0; $j < $rows; ++$j)//loop through each user in results and send a reminder email.
      {
        $run1->data_seek($j);
        $row = $run1->fetch_array(MYSQLI_NUM);
        
        //$sat = $row[2]; //gets the user email address 
        $requestor = $row[1];
        $auth1 = $row[14]; //gets the user email address 
        $auth2 = $row[18]; //gets the user email address 
        $auth3 = $row[22]; //gets the user email address 
        $auth4 = $row[26]; //gets the user email address 
        $auth5 = $row[30]; //gets the user email address 
        $auth6 = $row[34]; //gets the user email address 
        $auth7 = $row[38]; //gets the user email address 
        $auth8 = $row[42]; //gets the user email address 
        $auth9 = $row[46]; //gets the user email address 
        $auth10 = $row[50]; //gets the user email address 
        $auth11 = $row[54]; //gets the user email address 
        $auth12 = $row[58]; //gets the user email address 
        $auth13 = $row[62]; //gets the user email address 
        $auth14 = $row[66]; //gets the user email address 
        $auth15 = $row[70]; //gets the user email address 
        $recipient = $row[74]; 
        $reference = $row[2];

        //$sat;
        $remind_query2 = 'SELECT * FROM `users` Where fullname ="'.$auth1.'" OR fullname ="'.$auth2.'" OR fullname ="'.$auth3.'" OR fullname ="'.$auth4.'" OR fullname ="'.$auth6.'" OR fullname ="'.$auth5.'"  OR fullname ="'.$auth7.'" OR fullname ="'.$auth8.'" OR fullname ="'.$auth9.'" OR fullname ="'.$auth10.'" OR fullname ="'.$auth11.'" OR fullname ="'.$auth12.'" OR fullname ="'.$auth13.'" OR fullname ="'.$auth14.'" OR fullname ="'.$recipient.'" OR fullname ="'.$requestor.'" OR fullname ="'.$auth15.'"';
     //Sql query to find users that reminders dates match current date.
    
  if($run2 = $conn->query($remind_query2))
    {
   $rowz = $run2->num_rows;
      
      for ($z = 0; $z < $rowz; ++$z)//loop through each user in results and send a 
      {
        $run2->data_seek($z);
        $myrow =$run2->fetch_array(MYSQLI_NUM);
        $to = $myrow[15];
        $name = $myrow[4];
        $firstName =  $myrow[1];

/* WORKING MAIL FUNCTION*/
  $subject = "New Change Request Notice";
  $headers = "From: @nmbz.co.zw";
  $headers .= "MIME-Version: 1.0";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1";

  if ($name == $requestor) {
   $message = "Good day ".$firstName.",\n\nPlease note you have successfully initiated a request in  with \n\nID: ".$lev_id.", \nSubject: ".$reference."\nYour Role: Requestor, \n\nKindly click this link https://localhost/production/gen_view.php?genId=".$lev_id."&sender=".$requestor." to open it. \n\nRegards. \n[ Automatic Notifications]";


   if (mail($to, $subject, $message, $headers)) {
    echo "Email successfully sent to $to...";
} else {
    echo "Email sending failed...";
}


  }

  elseif ($name == $recipient) {
   $message = "Good day ".$firstName.",\n\nKind note that ".$requestor." have initiated a change control with the details below in  \n\nID: ".$lev_id.", \nSubject: ".$reference."\nYour Role: Implementor, \n\nPrior to this, you shall receive another email notification when it's ready for implementation. After that kindly give implementation feedback by changing status to either implementing or implemented basing on the status of the request. To open the reqest, click this link https://localhost/production/gen_view.php?genId=".$lev_id."&sender=".$requestor.".\n\n Also may you give implementation feedback for all the requests you have received from the past, this will help in tracking progress \n\nRegards. \n[ Automatic Notifications]";


   if (mail($to, $subject, $message, $headers)) {
    echo "Email successfully sent to $to...";
} else {
    echo "Email sending failed...";
}

  }

  else{
    $message = "Good day ".$firstName.",\n\nPlease note you have received a request  from ".$requestor." in  with \n\nID: ".$lev_id.", \nSubject: ".$reference."\nYour Role: Approver, \n\nKindly click this link https://localhost/production/gen_view.php?genId=".$lev_id."&sender=".$requestor." to open and approve the request. \n\nRegards. \n[ Automatic Notifications]";

 

if (mail($to, $subject, $message, $headers)) {
    echo "Email successfully sent to $to...";
} else {
    echo "Email sending failed...";
}
  }
   
      }
  }

  }

  }

?>

</body>

</html>
