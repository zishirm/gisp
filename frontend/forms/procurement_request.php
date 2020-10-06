<?php 



include '../../../../iapprove/production/db_connect.php';
//include '../../../iapprove/production/profile_control.php';
//include '../../../iapprove/production/message_handler.php';


  /*Fetch All system users*/
   $sql3 = "SELECT users.*, departments.name FROM users INNER JOIN departments ON users.department = departments.id WHERE 1 ORDER BY firstname ASC ";
   $Allusers = $conn->query($sql3);
  
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>


  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Leave Application
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            

            <!-- menu profile quick info -->
            <?php
           //include $_SERVER['DOCUMENT_ROOT']."/production/commons/menuprofile.php";
          ?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php

           //include "sidebar.php";
           ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          </div>
        </div>
<?php

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
        <!-- top navigation -->
        <?php
      //include $_SERVER['DOCUMENT_ROOT']."/production/commons/topNav.php";
      ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Change Request</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form enctype="multipart/form-data" id="demo-form2" data-parsley-validate="" action="generic_insert.php" method="POST" style="border: double; 2px #CDCDCD; width:110%;" class="form-horizontal dropzone form-label-left" novalidate="" >
                      <div >
                        <img style="margin-left: 42%; height: 112px;" src="..\..\assets\img\gisp_logo.jpg" alt="logo">
                        <h3 style="text-align: center;">Leave application</h3>
                      </div>
                      <br>

                        <h4 style="text-align: center;"><b>Applicant’s Section</b></h4>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name"><span class="required"></span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input name="gen_requestor" type="text" class="form-control has-feedback-left" id="inputSuccess2"  readonly="readonly" value="<?php echo "Requested by: ".$fullname; ?>">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input name="gen_id" type="text" class="form-control has-feedback-left" id="inputSuccess3"  readonly="readonly"  value="<?php $gen_id = "REQ". date("YmdHis"); echo "$gen_id"; ?>">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
                      </div>
                      <h4 style="text-align: center;"><b>Request Details Section</b></h4>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Request Name: </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" required="required" placeholder="Business Change Control" name="gen_name" style="margin: 0px 4.375px 0px 0px; height: 46px; width: 606px;"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Description of Request: </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3"  name="gen_description" style="margin: 0px 4.375px 0px 0px; height: 46px; width: 606px;"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Impact Analysis:  </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" required="required" name="gen_impact_analysis" style="margin: 0px 4.375px 0px 0px; height: 46px; width: 606px;"></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Request Justification: </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="width: 624px;">
                          <textarea class="ckeditor" id="details" name="req_justification" cols="100" style="width: 606px;" rows="10" required></textarea>  
                            </div>
                      </div>
                      

                       
                      <h4 style="text-align: center;"><b>Uploads</b></h4>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span class="required"></span><b></b>
                        </label>
                          <div class="col-md-7 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label class="control-label">Attach File</label><br>
                                <div class="form-control col-md-1">
                                <input type="file" required="required" style="width:99%;" name="fileToUpload[]" multiple >  
                                </div>
                            </div>
                        </div>
                      </div>
                      


                       <h4 style="text-align: center;"><b>Authorisation Section</b></h4>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span class="required"></span><b></b>
                        </label>
                        <div class="col-md-7 col-sm-6 col-xs-12" >
                          <div class="card text-center">
            
                             <div class="card-body">
                                <div class="form-row" class="col-md-10" >
                                    <div class="form-group col-md-10">
                                      <input type="number" name="" class="input form-control" placeholder="Enter the number of authorisers you want to set">
                                     </div>
                                    <div class="form-group col-md-2">
                                        <div class="text-center">
                                           <button class="btn btn-sm btn-primary generator" type="submit">Generate</button>
                                       </div>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="card text-center">
                                  
                                     <div class="card-body">
                                         <div class="forms">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="form-group">
                                                <label>Fullname</label>
                                                <select class="form-control  has-feedback-left" name="0" id="fullname2">
                                                  <option>Assign To</option>
                                                  <option value="">Select Event Type</option>
                                                    <?php echo fill_event1_list($conn);?>
                                                </select>
                                                </div>
                                              </div>
                                          </div>
                                         </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                         
                        </div>
                      </div>
                      <div class="ln_solid"></div>


                      <h4 style="text-align: center;"><b>Implementation Section</b></h4>

                       <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Implementer 1: </label>
                        <div class="col-md-7 col-sm-6 col-xs-12" style="">
                        <div class="col-md-12 col-sm-5 col-xs-12">
                          <div >
                             <select class="form-control  has-feedback-left" name="Implementer1" id="ImplementerName">
                                                  <option>Assign To</option>
                                                  <option value="">Select Event Type</option>
                                                    <?php echo fill_event1_list($conn);?>
                                                </select>
                          </div>
                        </div>
                        </div>
                      </div>

                      
                      <div class="ln_solid"></div>


                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" onsubmit="replaceMyTextArea()" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>



                      <div class="form-group" style="padding: 5px;">
                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>


            




          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            NMB iApprove. 
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
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
    <script src="../../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    

    <!-- CKeditor -->
    <script src="../../vendors/ckeditor/ckeditor.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
    $('.card').css('margin-top', 30);
    $('.generator').click(function(e){
    e.preventDefault();
    let input = $('.input').val();
    let temp_html = '';
    for(i = 1; i <= input; i++){
      countVal = i;
      auth = "auth";
      jobtitles = "JobTitle";
      fuls = "fullname";
    temp_html += '<div class="row"><div class="col-md-12"><div class="form-group"><select class="form-control  has-feedback-left" name='+countVal+' id='+fuls+countVal+'><option>Assign To</option><option value="">Select Event Type</option><?php echo fill_event1_list($conn);?></select></div></div></div>';
    }
    testo = document.getElementById(countVal);
    console.log(testo);
    $('.forms').append(temp_html);
    });
    });


    </script>


    <!-- Initialize datetimepicker -->
<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
<script>
$(document).ready(function(){ 
  $('#fullname0').change(function(){
        var fullname = $('#fullname0').val();
        var btn_action = 'load_event2';
        $.ajax({
            url:"courageDemoFunctionAction.php",
            method:"POST",
            data:{fullname:fullname, btn_action:btn_action},
            success:function(data)
            {
                $('#jobtitle0').html(data);
            }
        });
    });
  
  
  
  $('#fullname1').change(function(){
        var fullname = $('#fullname1').val();
        var btn_action = 'load_event2';
        $.ajax({
            url:"courageDemoFunctionAction.php",
            method:"POST",
            data:{fullname:fullname, btn_action:btn_action},
            success:function(data)
            {
                $('#jobtitle1').html(data);
            }
        });
    });

   $('#fullname2').change(function(){
        var fullname = $('#fullname2').val();
        var btn_action = 'load_event2';
        $.ajax({
            url:"courageDemoFunctionAction.php",
            method:"POST",
            data:{fullname:fullname, btn_action:btn_action},
            success:function(data)
            {
                $('#jobtitle1').html(data);
            }
        });
    });
  
  $('#fullname3').change(function(){
        var fullname = $('#fullname3').val();

        var btn_action = 'load_event2';
        $.ajax({
            url:"courageDemoFunctionAction.php",
            method:"POST",
            data:{fullname:fullname, btn_action:btn_action},
            success:function(data)
            {
                $('#jobtitle3').html(data);
            }
        });
    });
  
  


    });

</script>
  </body>
</html>

