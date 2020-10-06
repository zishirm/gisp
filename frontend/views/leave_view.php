<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IT dev Home Page | </title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><i class="fa fa-paw"></i> <span>iApprove</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php
             //include $_SERVER['DOCUMENT_ROOT']."/production/commons/menuprofile.php";
            ?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php
              //include $_SERVER['DOCUMENT_ROOT']."/production/commons/sidebar.php";
              ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="Logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
         <?php
     // include $_SERVER['DOCUMENT_ROOT']."/production/commons/topNav.php";
      ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><u> </u></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

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
                            <th class="col-md-4 col-sm-4">Name</th>
                            <th class="col-md-4 col-sm-4">Status</th>
                            <th class="col-md-4 col-sm-4">Date</th>
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
        <!-- /page content -->

        
      </div>

    </div>
    <!-- footer content -->
        <footer>
          <div class="pull-rgight">
           <p style="text-align: center;"> NMB iApprove </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
    
     <script type="text/javascript">
        document.getElementById("approve").addEventListener("click", courageA);
      function courageA(){
        var weight = document.getElementById("approve").value;
        window.location.href="/production/authorisation/genAuthorisation.php?gen_value="+weight+"&<?php echo $genRed; ?>";
      }

      /*Disapprove*/

      document.getElementById("disapprove").addEventListener("click", courageD);
      function courageD(){
        var weight = document.getElementById("disapprove").value;
        window.location.href="/production/authorisation/genAuthorisation.php?gen_value="+weight+"&<?php echo $genRed; ?>";
      }

      /*Wait*/
//<a href="/production/authorisation/genAuthorisation.php?gen_value=wait&<?php //echo $genRed; ?>">Wait</a>
      document.getElementById("wait").addEventListener("click", courage);
      function courage(){
        var weight = document.getElementById("wait").value;
        window.location.href="/production/authorisation/genAuthorisation.php?gen_value="+weight+"&<?php echo $genRed; ?>";
      }




      document.getElementById("close").addEventListener("click", close);
      function close(){
        window.location.href = "/production/dashboard_developer.php?elementId=asm";
      }

     // });
      

    </script>

    <script src="../../src/js/customModal.js"></script>
    
    
<script language="javascript" type="text/javascript">
function printerDiv(myTable) {
//Get the HTML of div

var divElements = document.getElementById("myTable").innerHTML;

//Get the HTML of whole page
var oldPage = document.body.innerHTML;

//Reset the pages HTML with divs HTML only

     document.body.innerHTML = 

     "<html><head><title></title></head><body>" + 
     divElements + "</body>";



//Print Page
window.print();

//Restore orignal HTML
document.body.innerHTML = oldPage;

}
</script>
  </body>
</html>
<?php

    $conn->close();

?>

