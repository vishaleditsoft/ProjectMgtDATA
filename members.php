<?php include("header.php");?>


                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="projects.php" class="waves-effect "><i class="md md-my-library-books"></i><span>Projects</span></a>
                            </li>
							    
                            
                             <li>
                                <a href="members.php" class="waves-effect active"><i class="fa fa-user-plus"></i><span> Members </span></a>
                            </li>
                            <!-- <li class="has_sub">
                                <a href="members.php" class="waves-effect"><i class="md md-mail"></i><span> Members</span><span class="pull-right"><i class="md md-add"></i></span></a>
                                
                            </li> -->

                            <li>
                                <a href="calendar.php" class="waves-effect"><i class="md md-event"></i><span> Calendar </span></a>
                            </li>
							 <li>
							 <?php 
							
							 $memail=$_SESSION['manger_email'];
							$qurr="select `status` from `messages` where `status`='1' and `to`='$memail'";
							 $res=mysqli_query($conn,$qurr);
							 $rcout=mysqli_num_rows($res);
							 ?>
                                <a href="inbox.php" class="waves-effect"><i class="md md-messenger"></i><span> Messages (<?php echo $rcout;?>) </span></a>
                            </li>
						
                            
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
                    <div class="clearfix"></div>
                </div>
            </div>                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="well "><h4 >All Members List</h4></div>
                            </div>
                        </div>

                        <!-- add member link -->
                        <div class="row" style="margin-bottom:20px;">
                            <div class="col-sm-6">
                               <button class="btn btn-danger" data-toggle="modal" data-target="#add">Add new member</button>
                             
                            </div>

                        </div>


                        <!-- add member link end -->
                        <!-- Start Widget -->
                        <!--Widget-4 -->
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-striped">
                                    <tr>
                                        <th>sr</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>  </th>
                                        <th>  </th>
                                    </tr>
                                    <?php 
                                    $qu="select * from members ";
                                     $ex=mysqli_query($conn,$qu);
                                     while($r=mysqli_fetch_array($ex)){
                                     echo "<tr>
                                        <td>".$r['mem_id']."</td>
                                        <td>".$r['mem_name']."</td>
                                        <td>".$r['mem_email']."</td>
                                        <td>".$r['mem_mobile']."</td>
                                       <td ><a  href='javascript:;' class='md-trigger btn btn-primary waves-effect waves-light' > Edit</a></td>
                                         <td >
                                         <form action='mem_up_del.php' method='POST'>
                                             <input type='hidden' name='deldat' value='".$r['mem_id']."'>
                                             
                                             <input type='Submit' value='Delete' id='del". $r['mem_id']." class='btn btn-primary waves-effect waves-light' >
                                         </form>
                                        </td>
                                    </tr>";
                                }
  


                                    ?>



                                </table>



<!--  -->
                            </div>
                          

                        </div>
                        



                        </div>

                       
                        <!-- End row -->



                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Editsoft.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


           
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.app.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/plugins/moment/moment.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
        
        
        <!-- flot Chart -->
        <script src="assets/plugins/flot-chart/jquery.flot.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- jQuery  -->
        <script src="assets/pages/jquery.todo.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/pages/jquery.chat.js"></script>
        
        <!-- jQuery  -->
        <script src="assets/pages/jquery.dashboard.js"></script>
        
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

    



<!-- login form code -->

        <div class="modal fade" id="add">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <!-- header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title text-success">ADD new member</h3>
                    </div>
                    
                    <!-- body(form) -->
                    <div class="modal-body">
                        <form role="form" method="post" action="addmember.php">
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="user_name" >
                            </div>

                            <div class="form-group">
                                <input type="" class="form-control" placeholder="E-mail" name="email"> 
                            </div>
                                  <div class="form-group">
                                <input type="" class="form-control" placeholder="Mobile" name="mobile"> 
                            </div>
                        <button type="submit" class="btn btn-primary btn-block" name="add_mem">Add</button>


                        </form>
                    </div>

                    <!-- footer -->
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="update">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <!-- header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title text-success">ADD new member</h3>
                    </div>
                    
                    <!-- body(form) -->
                    <div class="modal-body">
                        <form role="form" method="post" action="addmember.php">
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="user_name" >
                            </div>

                            <div class="form-group">
                                <input type="" class="form-control" placeholder="E-mail" name="email"> 
                            </div>
                                  <div class="form-group">
                                <input type="" class="form-control" placeholder="Mobile" name="mobile"> 
                            </div>
                        <button type="submit" class="btn btn-primary btn-block" name="add_mem">Add</button>


                        </form>
                    </div>

                    <!-- footer -->
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>


    </body>

<!-- Mirrored from moltran.coderthemes.com/green/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 13:46:41 GMT -->
</html>


