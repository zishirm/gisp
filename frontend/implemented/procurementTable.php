
                      <?php 
                        //    include '../backend/db_connect.php'; 
                            $fetchOne = "SELECT procurement_req.*, procurement_auth.* FROM `procurement_req` JOIN procurement_auth ON  procurement_req.proc_id=procurement_auth.proc_id WHERE implementation_status>1";
                            $myResult = mysqli_query($conn,$fetchOne);

                            // $fullname = "Clive Chiwara";
                            if ($myResult->num_rows > 0) {
                             while ($row = mysqli_fetch_assoc($myResult)) {

                                    $refNumber  = $row['proc_id'];
                                    //$refNumber;  = $row['proc_id'];
                                    $dateSent  = $row['req_date'];
                                    //$projectName  = $row['projectName'];
                                    $sender  = $row['gen_requestor'];
                                    $auth1_name  = $row['auth1_name'];
                                    $auth2_name  = $row['auth2_name'];
                                    $auth3_name  = $row['auth3_name'];
                                    $auth4_name  = $row['auth4_name'];
                                    $auth5_name  = $row['auth5_name'];
                                    $auth6_name  = $row['auth6_name'];
                                    $auth7_name  = $row['auth7_name'];
                                    $auth8_name  = $row['auth8_name'];
                                    $auth9_name  = $row['auth9_name'];
                                    $auth10_name  = $row['auth10_name'];
                                    $auth11_name  = $row['auth11_name'];
                                    $auth12_name  = $row['auth12_name'];
                                    $auth13_name  = $row['auth13_name'];
                                    $auth14_name  = $row['auth14_name'];
                                    $auth15_name  = $row['auth15_name'];
                                    $auth1_status  = $row['auth1_status'];
                                    $auth2_status  = $row['auth2_status'];
                                    $auth3_status  = $row['auth3_status'];
                                    $auth4_status  = $row['auth4_status'];
                                    $auth5_status  = $row['auth5_status'];
                                    $auth6_status  = $row['auth6_status'];
                                    $auth7_status  = $row['auth7_status'];
                                    $auth8_status  = $row['auth8_status'];
                                    $auth9_status  = $row['auth9_status'];
                                    $auth10_status  = $row['auth10_status'];
                                    $auth11_status  = $row['auth11_status'];
                                    $auth12_status  = $row['auth12_status'];
                                    $auth13_status  = $row['auth13_status'];
                                    $auth14_status  = $row['auth14_status'];
                                    $auth15_status  = $row['auth15_status'];
                                    $auth1_time  = $row['auth1_time'];
                                    $auth2_time  = $row['auth2_time'];
                                    $auth3_time  = $row['auth3_time'];
                                    $auth4_time  = $row['auth4_time'];
                                    $auth5_time  = $row['auth5_time'];
                                    $auth6_time  = $row['auth6_time'];
                                    $auth7_time  = $row['auth7_time'];
                                    $auth8_time  = $row['auth8_time'];
                                    $auth9_time  = $row['auth9_time'];
                                    $auth10_time  = $row['auth10_time'];
                                    $auth11_time  = $row['auth11_time'];
                                    $auth12_time  = $row['auth12_time'];
                                    $auth13_time  = $row['auth13_time'];
                                    $auth14_time  = $row['auth14_time'];
                                    $auth15_time  = $row['auth15_time'];
                                    $authStatus  = $row['authStatus'];
                                    $implementer  = $row['implementer_name'];
                                   
                                    $authCount =$row['authCount'];
                                    $gen_name =$row['gen_name'];
                                    $recipient = $row['implementer_name'];
                                    $percen = ($authCount/$row['totalAuth'])*100;

                                    $genRed = "genId={$refNumber}&sender={$sender}";

                                    // if (($fullname==$auth1_name || $fullname==$auth2_name || $fullname==$auth3_name || $fullname==$auth4_name || $fullname==$auth5_name || $fullname==$auth6_name || $fullname==$auth7_name || $fullname==$auth8_name || $fullname==$auth9_name || $fullname==$auth10_name || $fullname==$auth11_name || $fullname==$auth12_name || $fullname==$auth13_name || $fullname==$auth14_name || $fullname==$auth15_name  || $fullname ==$sender || $fullname ==$implementer) && $percen < 100) {

                              

                               ?>
                               <tr>
                               <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" checked>
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    </label>
                                </div>
                               </td>
                               <td><?php echo $refNumber; ?></td>
                               <td><?php echo $sender;  ?></td>
                               <td><p class=""><?php echo $gen_name; ?></p></td>
                               <td>
                                AUTHORIZED
                                </td>
                               <td><?php echo "Procurement Request"; ?><br><small>Created <br><?php  echo $dateSent; ?></small><br></td>
                               
                               <td>HIGH</td>
                               <td class="" onclick="windows.location:views/form_view.php";>
                                    <a href="views/proc_view.php?genId=<?php echo $refNumber ?>&sender=<?php echo $sender ?>">OPEN</a> 
                                    
                                </td>
                              
                             </tr>
                             <!-- Modal -->
                              

                               <?php
                               //include 'modal.php';
                                 }
                            //  }
                           }
                         