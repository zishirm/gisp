<?php 

include '../../backend/profile_control.php';

  // $RequestCode ="REQ20201024050958";
  
   // $RequestCode ="gen2020021022";
    if (!$sender = $_GET['genId']) {
//    $RequestCode ="gen29022020143303";
    $name ="Null";
    $sender ="Null";
  } else
  {
  $name = $_GET['name'];
  $RequestCode = $_GET['genId'];
  $sender = $_GET['sender'];
  }
  $genRed = "genId={$RequestCode}&sender={$sender}";



  $tab = "&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  $sql = "SELECT generic_request.*, generic_auth.* FROM generic_request JOIN generic_auth ON generic_request.gen_id = generic_auth.gen_id WHERE generic_request.gen_id = '$RequestCode'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
         $gen_name = $row["gen_name"];
         $gen_description = $row["gen_description"];
         $impact_analysis = $row["impact_analysis"];
         $req_justification = $row["req_justification"];
         $attachment = $row["attachment"];
         //$sender = $row["sender"];
         $dateSent = $row["req_date"];
         
         $Auth1 = $row["auth1_name"];
         $Auth2 = $row["auth2_name"];
         $Auth3 = $row["auth3_name"];
         $Auth4 = $row["auth4_name"];
         $Auth5 = $row["auth5_name"];
         $Auth6 = $row["auth6_name"];
         $Auth7 = $row["auth7_name"];
         $Auth8 = $row["auth8_name"];
         $Auth9 = $row["auth9_name"];
         $Auth10 = $row["auth10_name"];
         $Auth11 = $row["auth11_name"];
         $Auth12 = $row["auth12_name"];
         $Auth13 = $row["auth13_name"];
         $Auth14 = $row["auth14_name"];
         $Auth15 = $row["auth15_name"];
         $auth1_status = $row["auth1_status"];
         $auth1_time = $row["auth1_time"];
         $auth2_status = $row["auth2_status"];
         $auth2_time = $row["auth2_time"];
         $auth3_status = $row["auth3_status"];
         $auth3_time = $row["auth3_time"];
         $auth4_status = $row["auth4_status"];
         $auth4_time = $row["auth4_time"];
         $auth5_status = $row["auth5_status"];
         $auth5_time = $row["auth5_time"];
         $auth6_status = $row["auth6_status"];
         $auth6_time = $row["auth6_time"];
         $auth7_status = $row["auth7_status"];
         $auth7_time = $row["auth7_time"];
         $auth8_status = $row["auth8_status"];
         $auth8_time = $row["auth8_time"];
         $auth9_status = $row["auth9_status"];
         $auth9_time = $row["auth9_time"];
         $auth10_status = $row["auth10_status"];
         $auth10_time = $row["auth10_time"];
         $auth11_status = $row["auth11_status"];
         $auth11_time = $row["auth11_time"];
         $auth12_status = $row["auth12_status"];
         $auth12_time = $row["auth12_time"];
         $auth13_status = $row["auth13_status"];
         $auth13_time = $row["auth13_time"];
         $auth14_status = $row["auth14_status"];
         $auth14_time = $row["auth14_time"];
         $auth15_status = $row["auth15_status"];
         $auth15_time = $row["auth15_time"];
         $Auth1JobTitle = $row["auth1_jobtitle"];
         $Auth2JobTitle = $row["auth2_jobtitle"];
         $Auth3JobTitle = $row["auth3_jobtitle"];
         $Auth4JobTitle = $row["auth4_jobtitle"];
         $Auth5JobTitle = $row["auth5_jobtitle"];
         $Auth6JobTitle = $row["auth6_jobtitle"];
         $Auth7JobTitle = $row["auth7_jobtitle"];
         $Auth8JobTitle = $row["auth8_jobtitle"];
         $Auth9JobTitle = $row["auth9_jobtitle"];
         $Auth10JobTitle = $row["auth10_jobtitle"];
         $Auth11JobTitle = $row["auth11_jobtitle"];
         $Auth12JobTitle = $row["auth12_jobtitle"];
         $Auth13JobTitle = $row["auth13_jobtitle"];
         $Auth14JobTitle = $row["auth14_jobtitle"];
         $Auth15JobTitle = $row["auth15_jobtitle"];
         $implementerName = $row["implementer_name"];
         $implementerStatus = $row["implementer_status"];
         $implementerJobtitle = $row["implementer_jobtitle"];
         $implementerTime = $row["implementer_time"];
         $implementerTimeR = $row["implementer_timeR"];

      }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    View Request
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <?php
    include "sidebar.php";

    ?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../backend/logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <?php
            include "../toptiles.php";
            ?>
          </div>
          
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card" style="border: double; 2px #CDCDCD;">
                
              <div class="col-md-12 col-sm-10 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

                    <div >
                    <img style="margin-left: 38%; margin-top:30px; height: 112px;" src="..\..\assets\img\gisp_logo.jpg" alt="logo">
                      <!-- <img style="margin-left: 42%; height: 112px;" src="images/nmb-logo.png" alt="logo"> -->
                      <h3 style="text-align: center;">GENERIC CHANGE REQUEST</h3>
                    </div>

                    <div class="x_title">
                      <h2 style="margin-left: 44%; "></h2>
                      
                      <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12 col-sm-10 col-xs-12">
                      <table class="table table-bordered">
                          <tr>
                            <td width="50%" colspan="2">Request Number: ..........................

                              <?php
                                  echo $RequestCode. " ". "<br>";
                              ?>

                            </td>
                            <td colspan="2">Date Logged: ..................................
                            <?php  $dateSent1 = substr($dateSent,0,10); echo $dateSent1; ?>
                                
                              </td>
                          </tr>
                          <tr>
                             <td colspan="2">Requested by: .......................... 
                              <?php
                                          echo $sender;
                              ?>
                            </td>
                             <td colspan="2">Time Logged: ................................
                             <?php  $timeSent1 = substr($dateSent,10,18); echo $timeSent1;   ?>
                                
                              </td>
                          </tr>
                          <tr>
                            <td colspan="4" style="text-align:center; text-transform: uppercase;"><h4><b>Change Details Section</b></h4></td>
                          </tr>
                          <tr>
                             <td colspan="4"><b>Description of Request:</b> <br>

                              <?php echo $gen_description;?>
                             </td>
                          </tr>
                          <tr>
                             <td colspan="4"><b>Reason/Benefit for Changes:</b> <br>
                              <?php echo $req_justification; ?>
                             </td>
                          </tr>
                        </table>
                    </div>


                       <!-- <div class="col-md-10" style="border: 1px; margin-right: 5%; margin-left: 5%; line-height: 150%;">
                         <p style="font-size: 16px; margin: 30px;">
                           <?php //echo $messageBody; ?>
                         </p>
                       </div> -->
                       <div class="clearfix"></div>
                       <div>
                        <form method="post" action="createzip.php">
                          
                              <?php
                              include '../../backend/db_connect.php';
                              $fileQry  = $conn->query('SELECT * FROM gen_uploads WHERE gen_id="'.$RequestCode.'"');
                              if($fileQry->num_rows>0){

                                ?>

                                <table class="table table-striped table-bordered table-hover">
                            <th>
                              <tr><h3  style="text-align: center;">Attachments</h3></tr>
                            </th>
                            <thead>
                              <tr class="bg-primary text-white">
                                <th width="10%">Sr#</th>
                                <th width="35%">File Name</th>
                                <th width="35%">File Format</th>
                                <th width="20%">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                                <?php
                                $s    = '';
                                while($row  = $fileQry->fetch_assoc()){
                                  $s++;
                              ?>
                              <tr>
                                <td><?php echo $s;?></td>
                                <td>
                                  <div class="custom-control custom-checkbox mb-3">
                                    <label class="custom-control-label" for="checkbox<?php echo $row['id']?>"><a href="uploads/<?php $fileName= $row['file_name']; echo($fileName);?>"><?php $fileName = substr($fileName, 18,64)."..."; echo $fileName;?></a></label>
                                  </div>
                                </td>
                                <td>
                                  <div class="custom-control custom-checkbox mb-3">
                                    
                                    <label class="custom-control-label" for="checkbox<?php echo $row['id']?>"><?php echo $row['file_format'];?></label>
                                  </div>
                                </td>
                                <td>
                                  <p><a href="uploads/<?php $fileName= $row['file_name']; echo($fileName);?>">Open/Download</a></p>
                                </td>
                              </tr>
                                <?php 
                                }
                              } ?>
                              <!-- <tr>
                                <td colspan="3"><button type="submit" name="createzip" id="createzip" value="createzip" class="btn btn-primary"><i class="fa fa-archive"></i> Download Checked</button></td>
                              </tr> -->
                            </tbody>
                          </table>         
                        </form>

                          <tr><h3  style="text-align: center;">Authorisation</h3></tr>
                       </div>
                       
                       <div class="row col-md-12 col-sm-12 col-xs-12">
                        <table class="table table-bordered">
                          <thead>
                            <th width="30%">Name</th>
                            <th width="30%">Status</th>
                            <th width="30%">Date</th>
                          </thead>
                          <tbody>
                            
                       <?php if (strlen($Auth1)>2) {

                    ?>

                    <tr>
                      <td style="text-align: center;"><?php echo $Auth1."<br><small>".$Auth1JobTitle."</small>"; ?></td>
                      <td><?php 
                          if ($auth1_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth1_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth1_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          } 
                           ?></td>
                      <td><?php if ($auth1_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth1_time; ?></td>
                    </tr>
                     <?php }

                     if (strlen($Auth2)>2) {
                        
                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth2."<br><small>".$Auth2JobTitle."</small>"; ?></td>
                      <td><?php 
                         if ($auth2_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth2_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth2_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          }  ?></td>
                      <td><?php if ($auth2_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth2_time; ?></td>
                    </tr>
                       <?php  
                       } 

                       if (strlen($Auth3)>2) {


                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth3."<br><small>".$Auth3JobTitle."</small>"; ?></td>
                      <td><?php 
                          if ($auth3_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth3_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth3_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          } 
                          ?></td>
                      <td><?php if ($auth3_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth3_time; ?></td>
                    </tr>
                       
                       <?php  
                       } 

                       if (strlen($Auth4)>2) {

                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth4."<br><small>".$Auth4JobTitle."</small>"; ?></td>
                      <td><?php 
                          if ($auth4_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth4_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth4_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          } 
                          ?></td>
                      <td><?php if ($auth4_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth4_time; ?></td>
                    </tr>
                       
                       <?php  
                       } 

                       if (strlen($Auth5)>2) {

                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth5."<br><small>".$Auth5JobTitle."</small>"; ?></td>
                      <td><?php 
                          if ($auth5_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth5_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth5_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          } 
                          ?></td>
                      <td><?php if ($auth5_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth5_time; ?></td>
                    </tr>
                       
                       <?php  
                       } 

                       if (strlen($Auth6)>2) {

                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth6."<br><small>".$Auth6JobTitle."</small>"; ?></td>
                      <td><?php 
                          if ($auth6_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth6_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth6_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          } 
                          ?></td>
                      <td><?php if ($auth6_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth6_time; ?></td>
                    </tr>
                       <?php  
                       } 

                       if (strlen($Auth7)>2) {

                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth7."<br><small>".$Auth7JobTitle."</small>"; ?></td>
                      <td><?php 
                         if ($auth7_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth7_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth7_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          } 
                        ?></td>
                      <td><?php if ($auth7_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth7_time; ?></td>
                    </tr>
                       <?php  
                       } 

                       if (strlen($Auth8)>2) {

                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth8."<br><small>".$Auth8JobTitle."</small>"; ?></td>
                      <td><?php 
                          if ($auth8_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth8_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth8_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          }
                          ?></td>
                      <td><?php if ($auth8_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth8_time; ?></td>
                    </tr>
                       <?php  
                       } 

                       if (strlen($Auth9)>2) {

                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth9."<br><small>".$Auth9JobTitle."</small>"; ?></td>
                      <td><?php 
                         if ($auth9_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth9_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth9_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          }
                         ?></td>
                      <td><?php if ($auth9_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth9_time; ?></td>
                    </tr>
                       <?php  
                       } 

                       if (strlen($Auth10)>2) {

                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth10."<br><small>".$Auth10JobTitle."</small>"; ?></td>
                      <td><?php 
                         if ($auth10_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth10_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth10_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          }
                         ?></td>
                      <td><?php if ($auth10_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth10_time; ?></td>
                    </tr>
                       <?php  
                       } 

                       if (strlen($Auth11)>2) {

                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth11."<br><small>".$Auth11JobTitle."</small>"; ?></td>
                      <td><?php 
                          if ($auth11_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth11_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth11_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          }
                          ?></td>
                      <td><?php if ($auth11_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth11_time; ?></td>
                    </tr>
                       <?php  
                       } 
                       if (strlen($Auth12)>2) {

                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth12."<br><small>".$Auth12JobTitle."</small>"; ?></td>
                      <td><?php 
                          if ($auth12_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth12_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth12_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          }
                          ?></td>
                      <td><?php if ($auth12_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth12_time; ?></td>
                    </tr>
                       <?php  
                       } 

                       if (strlen($Auth13)>2) {

                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth13."<br><small>".$Auth13JobTitle."</small>"; ?></td>
                      <td><?php 
                         if ($auth13_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth13_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-close'></b>Rejected</button><br>";
                             
                              }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          } ?></td>
                      <td><?php if ($auth13_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth13_time; ?></td>
                    </tr>
                       <?php  
                       } 
                       if (strlen($Auth14)>2) {

                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth14."<br><small>".$Auth14JobTitle."</small>"; ?></td>
                      <td><?php 
                          if ($auth14_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth14_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth14_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          }
                           ?></td>
                      <td><?php if ($auth14_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth14_time; ?></td>
                    </tr>
                       <?php  
                       } 

                       if (strlen($Auth15)>2) {

                       ?>
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth15."<br><small>".$Auth15JobTitle."</small>"; ?></td>
                      <td><?php 
                          if ($auth15_status=="Y") {
                          echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-check'></b>Approved</button>";
                         }
                         elseif ($auth15_status=="N") {
                            echo "<button type=\"button\"class=\"btn btn-danger\" ><b class='fa fa-close'></b>Rejected</button>";
                          }
                          elseif ($auth15_status=="W") {
                            echo "<button type=\"button\"class=\"btn btn-warning\" ><b class='fa fa-history'></b>On-hold</button>";
                          }
                          else{
                            echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                          }
                          ?></td>
                      <td><?php if ($auth15_time =="2000-01-01 01:00:00") {
                               echo "----/--/--   --:--:--";
                              }
                              else echo $auth15_time; ?></td>
                    </tr>
                       <?php  
                       } 



                       ?>
                       </tbody>
                          </table>
                          
                          <div class="clearfix"></div>
                          <div class="ln_solid"></div>
                        

                        <tr><h3  style="text-align: center;">Implementation</h3></tr>
                        <table class="table table-bordered">
                          <thead>
                            <th style = "width:30%">Name</th>
                            <th style = "width:30%">Status</th>
                            <th style = "width:30%">Date</th>
                          </thead>
                          <tbody>

                        <tr>
                          <td style="text-align: center;"><?php echo $implementerName."<br><small>".$implementerJobtitle."</small>"; ?></td>
                          <td><?php 
                              if ($implementerStatus ==2) {
                              echo "<button type=\"button\"class=\"btn btn-success\" ><b class='fa fa-lock'></b> implemented</button>";
                             }
                             elseif ($implementerStatus=="1") {
                                echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Implementing</button>";
                              }
                              elseif ($implementerStatus=="3") {
                                echo "<button type=\"button\"class=\"btn btn-warning\" >On-hold</button>";
                              }
                              else{
                                echo "<button type=\"button\"class=\"btn btn-primary\" ><b class='fa fa-cogs'></b>Pending</button>";
                              } 
                               ?></td>
                          <td><?php if ($implementerTime =="2000-01-01 01:00:00") {
                                   echo "----/--/--   --:--:--";
                                  }
                                  else echo $implementerTime; ?></td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="clearfix"></div>
                    <div class="ln_solid"></div>
                       </div>
                      

                    <div>
                      <div class="x_content">

                      <?php  include 'modal.php';


                      if ($fullname==$Auth1 || $fullname==$Auth2 || $fullname==$Auth3 || $fullname==$Auth4 || $fullname==$Auth5 || $fullname==$Auth6 || $fullname==$Auth7 || $fullname==$Auth8 || $fullname==$Auth9 || $fullname==$Auth10 || $fullname==$Auth11 || $fullname==$Auth12 || $fullname==$Auth13 || $fullname==$Auth14 || $fullname==$Auth15) {
                       ?>

                      <button type="button" class="btn btn-round btn-success authorize" id="approve" value="approve">Approve</button>
                      <button type="button" class="btn btn-round btn-danger authorize" value="disapprove"  id="disapprove">Reject</button>
                      <button type="button" id="wait" class="btn btn-round btn-primary authorize" value="wait">Wait</button>

                    <?php }
                      ?>

                      <div class="btn-group" style="float: right;"><button type="button" data-toggle="dropdown" class="btn btn-group btn-primary">More Action</button><ul class="dropdown-menu" role="menu"><li><a  data-id='<?php echo $RequestCode; ?>' class='userinfo'> comments</a></li><li><a  data-id='<?php echo $RequestCode; ?>' class='userinfo1'> Summary</a></li>
                        <?php 
                    if ($fullname = $implementerName) { ?>

                                  <li><a href="/production/authorisation/genAuthorisation.php?gen_value=implementing&<?php echo $genRed; ?>">Pending Implementation</a></li>
                                  <li><a href="/production/authorisation/genAuthorisation.php?gen_value=implemented&<?php echo $genRed; ?>">Implemented</a></li>
                                  </ul></div>
                      <?php
                      
                     } ?>
                      <button type="button" class="btn btn-primary" onclick="printerDiv()"><a class="fa fa-print"></a> Print</button>
                     <!-- <button style="float: right;" type="button" id="close" class="btn btn-primary authorize">Close</button> -->
                      </div>
                    </div>
                </div>
            </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://">
                  Demo text
                </a>
              </li>
              <li>
                <a href="127.0.0.1/about">
                  About Us
                </a>
              </li>
              <li>
                <a href="127.0.0.1/bog">
                  Blog
                </a>
              </li>
              <li>
                <a href="#">
                  Test
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="#" target="_blank">Dev Team</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
  <script type="text/javascript">
        document.getElementById("approve").addEventListener("click", courageA);
      function courageA(){
        var weight = document.getElementById("approve").value;
        window.location.href="../../backend/authorisation/genAuthorisation.php?gen_value="+weight+"&<?php echo $genRed; ?>";
      }

      /*Disapprove*/

      document.getElementById("disapprove").addEventListener("click", courageD);
      function courageD(){
        var weight = document.getElementById("disapprove").value;
        window.location.href="../../backend/authorisation/genAuthorisation.php?gen_value="+weight+"&<?php echo $genRed; ?>";
      }

      /*Wait*/
//<a href="/production/authorisation/genAuthorisation.php?gen_value=wait&<?php //echo $genRed; ?>">Wait</a>
      document.getElementById("wait").addEventListener("click", courage);
      function courage(){
        var weight = document.getElementById("wait").value;
        window.location.href="../../backend/authorisation/genAuthorisation.php?gen_value="+weight+"&<?php echo $genRed; ?>";
      }




      document.getElementById("close").addEventListener("click", close);
      function close(){
        window.location.href = "../../frontend/dashboard.php";
      }

     // });
      

    </script>
</body>

</html>
