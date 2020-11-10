
                      <?php 
                           include '../backend/db_connect.php'; 
                            $fetchOne = "SELECT * FROM `users` where 1";
                            $myResult = mysqli_query($conn,$fetchOne);

                            // $fullname = "Clive Chiwara";
                            if ($myResult->num_rows > 0) {
                             while ($row = mysqli_fetch_assoc($myResult)) {

                                $firstname  = $row['firstname'];
                                $fullname  = $row['fullname'];
                                $lastLogged  = $row['last_logged'];
                                $email  = $row['email'];
                                $jobtitle  = $row['jobtitle'];
                                $regDate  = $row['date_of_registration'];
                                    

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
                               <td><?php echo $firstname; ?></td>
                               <td><?php echo $fullname;  ?></td>
                               <td><p class=""><?php echo $email; ?></p></td>
                               <td><?php echo $jobtitle;  ?></td>
                               <td><?php echo $regDate; ?></td>
                               
                               <td><?php echo $lastLogged;  ?></td>
                               <td class="">
                               <div class="nav-item dropdown">
                                    <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                    
                                    <p class="d-lg-none d-md-block">
                                        Some Actions
                                    </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../backend/user_profile.php?email=<?php echo $email; ?>">View</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                    <a class="dropdown-item" href="#">Make Admin</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                                </td>
                              
                             </tr>
                             <!-- Modal -->
                              

                               <?php
                               //include 'modal.php';
                                 }
                            //  }
                           }
                         