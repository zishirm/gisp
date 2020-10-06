<?php 



include '../../../iapprove/production/db_connect.php';
//include '../../../iapprove/production/profile_control.php';
//include '../../../iapprove/production/message_handler.php';


  /*Fetch All system users*/
   $sql3 = "SELECT users.*, departments.name FROM users INNER JOIN departments ON users.department = departments.id WHERE 1 ORDER BY firstname ASC ";
   $Allusers = $conn->query($sql3);
  

   
error_reporting(0);
session_start();
ob_start();

$conn = new PDO('mysql:host=localhost;dbname=iapprove', 'root', 'P@55w0rd');

 function fill_event1_list($conn)
{
  $querys = "SELECT Distinct fullname FROM users ORDER BY fullname ASC";
  $statements = $conn->prepare($querys);
  $statements->execute();
  $results = $statements->fetchAll();
  $output = '';
  foreach($results as $row)
  {
    $output .= '<option value="'.$row["fullname"].'">'.$row["fullname"].'</option>';
  }
  return $output;
    
}


function fill_event2_list($conn, $event1)
{
  $querys = "SELECT distinct jobtitle FROM users 
  WHERE fullname = '".$event1."'
  ORDER BY jobtitle ASC";
  $statements = $conn->prepare($querys);
  $statements->execute();
  $results = $statements->fetchAll();
  $output = '<option value="">Select Event</option>';
  foreach($results as $row)
  {
    $output .= '<option value="'.$row["jobtitle"].'">'.$row["jobtitle"].'</option>';
  }
  return $output;
}


function fill_event3_list($conn)
{
  $querys = "SELECT distinct jobtitle FROM users WHERE jobtitle IS NOT NULL
  ORDER BY jobtitle ASC";
  $statements = $conn->prepare($querys);
  $statements->execute();
  $results = $statements->fetchAll();
  $output = '';
  foreach($results as $row)
  {
    $output .= '<option value="'.$row["jobtitle"].'">'.$row["jobtitle"].'</option>';
  }
  return $output;
}
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
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
         
          <div class="collapse navbar-collapse justify-content-end">

          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">table_chart</i>
                  </div>
                  <p class="card-category">Reports</p>
                  <h3 class="card-title">42350
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="javascript:;">Get More Space...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">add_task</i>
                  </div>
                  <p class="card-category"> Add New</p>
                  <p class="card-title">Request</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">comment</i>
                  </div>
                  <p class="card-category">Comments</p>
                  <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Github
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-warning"></i>
                  </div>
                  <p class="card-category">Overdue</p>
                  <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row" style="margin-left: 20px;" id="myTable">
              <div class="col-md-10 col-sm-10 col-xs-12">
                <div class="x_panel">
                  <div class="x_content" style="border: double; 2px #CDCDCD;">

                    <div >
                      <img style="margin-left: 42%; height: 112px;" src="images/nmb-logo.png" alt="logo">
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
                                  echo "REQ2727272". " ". "<br>";
                              ?>

                            </td>
                            <td colspan="2">Date Logged: ..................................
                            <?php  $dateSent1 = date('YYYY-MM-DD'); ?>
                                
                              </td>
                          </tr>
                          <tr>
                             <td colspan="2">Requested by: .......................... 
                              <?php
                                          echo "Test User";
                              ?>
                            </td>
                             <td colspan="2">Time Logged: ................................
                             <?php  $timeSent1 = date();   ?>
                                
                              </td>
                          </tr>
                          <tr>
                            <td colspan="4" style="text-align:center; text-transform: uppercase;"><h4><b>Change Details Section</b></h4></td>
                          </tr>
                          <tr>
                             <td colspan="4"><b>Description of Request:</b> <br>

                              <?php echo "Lorep ipsum";?>
                             </td>
                          </tr>
                          <tr>
                             <td colspan="4"><b>Reason/Benefit for Changes:</b> <br>
                              <?php echo "Justified"; ?>
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
                              include '../../../../iapprove/production/db_connect.php';
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
                            <th class="col-md-4 col-sm-4">Name</th>
                            <th class="col-md-4 col-sm-4">Status</th>
                            <th class="col-md-4 col-sm-4">Date</th>
                          </thead>
                          <tbody>
                            
                       <?php if (strlen($Auth1)>2) {

                    ?>

                    <tr>
                      <td style="text-align: center;"><?php echo $Auth1."<br><small>".$Auth1JobTitle."</small>"; ?></td>
                      <td></td>
                      <td></td>
                    </tr>
                    
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth2."<br><small>".$Auth2JobTitle."</small>"; ?></td>
                      <td></td>
                      <td></td>
                    </tr>
                       
                       <tr>
                      <td style="text-align: center;"><?php echo $Auth3."<br><small>".$Auth3JobTitle."</small>"; ?></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td style="text-align: center;"><?php echo $Auth4."<br><small>".$Auth4JobTitle."</small>"; ?></td>
                      <td></td>
                      <td></td>
                    </tr>
                      
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
                            <th class="col-md-4 col-sm-4">Name</th>
                            <th class="col-md-4 col-sm-4">Status</th>
                            <th class="col-md-4 col-sm-4">Date</th>
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
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
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
   <!-- jQuery -->
   <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    
    <!-- Dropzone.js -->
    <!-- <script type="text/javascript" src="../vendors/dropzone/dist/dropzone.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    

    <!-- CKeditor -->
    <script src="../vendors/ckeditor/ckeditor.js"></script>

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
</body>

</html>