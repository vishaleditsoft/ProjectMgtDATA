<?php include("header.php");?>


                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="projects.php" class="waves-effect "><i class="md md-my-library-books"></i><span>Projects</span></a>
                            </li>
							    
                            
                             <li>
                                <a href="members.php" class="waves-effect"><i class="fa fa-user-plus"></i><span> Members </span></a>
                            </li>
                            <!-- <li class="has_sub">
                                <a href="members.php" class="waves-effect"><i class="md md-mail"></i><span> Members</span><span class="pull-right"><i class="md md-add"></i></span></a>
                                
                            </li> -->

                            <li>
                                <a href="calendar.php" class="waves-effect active"><i class="md md-event"></i><span> Calendar </span></a>
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
            </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 
            <!-- ========== Left Sidebar Start ========== -->

            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

 

                        <div class="row">
                            <div class="col-lg-12">

                                <div class="row">

                                    <div class="col-md-9">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div id="calendar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->

                                      <!-- end row -->

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
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

        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="assets/pages/jquery.fullcalendar.js"></script>

	
	</body>

<!-- Mirrored from moltran.coderthemes.com/green/calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 13:48:01 GMT -->
</html>