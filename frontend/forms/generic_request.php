<?php 



include '../../backend/db_connect.php';
include '../../backend/profile_control.php';
//include '../../../iapprove/production/message_handler.php';


  /*Fetch All system users*/
   $sql3 = "SELECT * FROM users WHERE 1 ORDER BY firstname ASC ";
   $Allusers = $conn->query($sql3);
  

   
error_reporting(0);
session_start();
ob_start();

$conn = new PDO('mysql:host=localhost;dbname=gisp', 'root', 'P@55w0rd');

function fill_event1_list($conn)
{
  $querys = "SELECT  * FROM users WHERE  jobtitle='Supervisor' OR jobtitle ='Deputy Head' OR jobtitle='Head GISP' ORDER BY fullname ASC";
  $statements = $conn->prepare($querys);
  $statements->execute();
  $results = $statements->fetchAll();
  $output = '';
  foreach($results as $row)
  {
    $output .= '<option value="'.$row["fullname"].'">'.$row["jobtitle"]." -> ".$row["fullname"].'</option>';
  }
  return $output;
    
}


function myUsers($conn)
{
  $querys = "SELECT  * FROM users WHERE  1 ORDER BY fullname ASC";
  $statements = $conn->prepare($querys);
  $statements->execute();
  $results = $statements->fetchAll();
  $output = '';
  foreach($results as $row)
  {
    $output .= '<option value="'.$row["fullname"].'">'.$row["jobtitle"]." -> ".$row["fullname"].'</option>';
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
  <link href="../../assets/css/material-dashboard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
  <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   
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
          </div>
         
          <div class="collapse navbar-collapse justify-content-end">

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
          
          <div class="row" style="margin-left: 20px;" id="myTable">
              <div class="col-md-10 col-sm-10 col-xs-12">
                <div class="x_panel">
                <form enctype="multipart/form-data" id="demo-form2" data-parsley-validate="" action="../../backend/generic_insert.php" method="POST" style="border: double; 2px #CDCDCD; width:110%;" class="form-horizontal dropzone form-label-left" novalidate="" >
                      <div >
                        <img style="margin-left: 38%; margin-top:30px; height: 112px;" src="..\..\assets\img\gisp_logo.jpg" alt="logo">
                        <h3 style="text-align: center;">General Request Form</h3>
                      </div>
                      <br>

                        <h4 style="text-align: center;"><b>Applicant’s Section</b></h4>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span class="required"></span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input name="gen_requestor" type="text" class="form-control has-feedback-left" id="inputSuccess2"  readonly="readonly" value="<?php echo "Requested by: ".$fullname; ?>">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>
                          <div class="col-md-1 col-sm-6 col-xs-12 form-group has-feedback">

                          </div>
                          <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                            <input name="gen_id" type="text" class="form-control has-feedback-left" id="inputSuccess3"  readonly="readonly"  value="<?php $gen_id = "REQ". date("YmdHis"); echo "$gen_id"; ?>">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>
                        </div>
                      </div>
                      <h4 style="text-align: center;"><b>Request Details Section</b></h4>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Request Name: </label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <!-- <textarea class="form-control" rows="3" required="required" placeholder="Business Change Control" name="gen_name" style="margin: 0px 4.375px 0px 0px; height: 46px; width: 606px;"></textarea> -->
                          <input type="text" name = "gen_name" class = "form-control col-md-12" rows=""3/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Description of Request: </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3"  name="gen_description" style="margin: 0px 4.375px 0px 0px; height: 46px; width: 606px;"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Priority:  </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <textarea class="form-control" rows="3" required="required" name="gen_impact_analysis" style="margin: 0px 4.375px 0px 0px; height: 46px; width: 606px;"></textarea> -->
                          <select class="form-control" rows="3" required="required" name="gen_impact_analysis" style="margin: 0px 4.375px 0px 0px; height: 46px; width: 606px;">
                            <option>Select One</option>
                            <option>Urgent</option>
                            <option>Normal</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Explanation:<br><small>(OPTIONAL)</small> </label>
                        <div class="col-md-7 col-sm-6 col-xs-12">
                          <textarea class="ckeditor col-md-7 col-sm-6 col-xs-12" id="details" name="req_justification" cols="100" rows="10" required></textarea>  
                            </div>
                      </div>
                      

                       
                      <h4 style="text-align: center;"><b>Uploads</b></h4>

                      <div class= "">
                        <div class="col-md-3 col-sm-3 col-xs-12"></div>
                        <div class="col-md-7 col-sm-9 col-xs-12">
                          <div class="card">
                            <input type="file" style="width:100%; margin-top:10px; margin-bottom:10px; margin-left:10px;" required="required" name="fileToUpload[]" multiple />  
                          </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12"></div>
                      </div>    
                      <div class= "clearfix"></div>
                       <h4 style="text-align:center;"><b>Authorisation Section</b></h4>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span class="required"></span><b></b>
                        </label>
                        <div class="col-md-7 col-sm-6 col-xs-12" >
                          <div class="card text-center">
            
                             <div class="card-body">
                                <div class="form-row" class="col-md-10" >
                                    <div class="form-group col-md-10">
                                      <input type="number" name="" class="input form-control" placeholder="Enter the number of authorisers you want to add">
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
                                                <label>Fill The Fields</label>
                                                <select class="form-control  has-feedback-left" style="height:35px;" name="0" id="fullname2">
                                                  <option>Assign To</option>
                                                  <!-- <option value="">Select Event Type</option> -->
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
                             <select class="form-control  has-feedback-left" name="Implementer1" style="height:35px;" id="ImplementerName">
                                                  <option>Assign To</option>
                                                  <option value="">Select Event Type</option>
                                                    <?php echo myUsers($conn);?>
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
   <!-- jQuery -->
   <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <!-- <script src="../vendors/fastclick/lib/fastclick.js"></script> -->
    <!-- NProgress -->
    <!-- <script src="../vendors/nprogress/nprogress.js"></script> -->
    
    <!-- bootstrap-daterangepicker -->
    <!-- <script src="../vendors/moment/min/moment.min.js"></script> -->
    <!-- <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script> -->
    <!-- bootstrap-datetimepicker -->    
    <!-- <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script> -->
    
    <!-- bootstrap-datetimepicker -->    
    <!-- <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script> -->
    
    <!-- Dropzone.js -->
    <!-- <script type="text/javascript" src="../vendors/dropzone/dist/dropzone.js"></script> -->

    <!-- Custom Theme Scripts -->
    <!-- <script src="../../build/js/custom.min.js"></script> -->

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
    temp_html += '<div class="row"><div class="col-md-12"><div class="form-group"><select  style="height:35px;"class="form-control  has-feedback-left" name='+countVal+' id='+fuls+countVal+'><option>Assign To</option><option value="">Select Event Type</option><?php echo fill_event1_list($conn);?></select></div></div></div>';
    }
    testo = document.getElementById(countVal);
    console.log(testo);
    $('.forms').append(temp_html);
    });
    });


    </script>

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