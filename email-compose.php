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
                                <a href="calendar.php" class="waves-effect"><i class="md md-event"></i><span> Calendar </span></a>
                            </li>
							 <li>
							 <?php 
							 $memail=$_SESSION['manger_email'];
							$qurr="select `status` from `messages` where `status`='1' and `to`='$memail'";
							 $res=mysqli_query($conn,$qurr);
							 $rcout=mysqli_num_rows($res);
							 ?>
                                <a href="inbox.php" class="waves-effect active"><i class="md md-messenger"></i><span> Messages (<?php echo $rcout;?>) </span></a>
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
            </div>
            <!-- Left Sidebar End --> 

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
                            
                            <!-- Left sidebar -->
                            <div class="col-md-4 col-lg-3">
                                <a href="inbox.php" class="btn btn-danger waves-effect waves-light btn-block">Back to Inbox</a>
                                <div class="panel panel-default p-0 m-t-20">
                                    <div class="panel-body p-0">
                                        <div class="list-group mail-list">
                                          <a href="inbox.php" class="list-group-item no-border active"><i class="fa fa-download m-r-5"></i>Inbox <b>(8)</b></a>
                                          <a href="email-sent.php" class="list-group-item no-border"><i class="fa fa-paper-plane-o m-r-5"></i>Sent Mail</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default p-0 p-t-20 m-t-20">
                                    <div class="panel-body p-0">
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <!-- End Left sidebar -->   
                            
                            <!-- Right Sidebar -->
                            <div class="col-md-8 col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12">
                                                                            </div>
                                </div>
                                
                                <div class="panel panel-default m-t-20">
                                    <div class="panel-body p-t-30">
                                        
                                        <form role="form" action="sendemail.php" method="post">
                                            <div class="form-group">
                                                <input type="email" id="toemail" name="temail" class="form-control" placeholder="To">
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="wysihtml5 form-control" placeholder="Message body" style="height: 200px" name="emailcont"></textarea>
                                            </div>
											 <button class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
                                        </form>
                                    </div> <!-- panel -body -->
                                </div> <!-- panel -->
                            </div> <!-- End Rightsidebar -->
                        
                        </div><!-- End row -->



                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
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

        <!--Editor-->
        <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
		  <script type = "text/javascript" 
         src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

      <script type = "text/javascript" language = "javascript">
	  
	  
	   $(function() {
	   var mytags= <?php include('autocomple.php'); ?>;
	   $("#toemail").autocomplete({
	   source:mytags
	   });
	   });
		 </script>
        <script>
            jQuery(document).ready(function(){
                $('.wysihtml5').wysihtml5();
            });
        </script>

	
	</body>

<!-- Mirrored from moltran.coderthemes.com/green/email-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 13:47:46 GMT -->
</html>