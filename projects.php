
<?php 

include_once('connection.php');
session_start(); 
if(!isset($_SESSION['manager_id'])){
header("Location:index.php");
   
}
?>
<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/green/modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 13:48:02 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">
 <link href="assets/plugins/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
		<link href="assets/plugins/modal-effect/css/component.css" rel="stylesheet">
        
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
         <link href="assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
		<script src="assets/js/modernizr.min.js"></script>
	        <!-- jQuery  -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script type = "text/javascript" 
         src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
      <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
   <script type="text/javascript" language="javascript">
		 $(function(){
		 var mytags= <?php include('member_autocomple.php'); ?>;
		 $(".memid").autocomplete({
			 
			source:mytags
	   });
	 //  alert(mytags);
	   });
		 </script>


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65046120-1', 'auto');
  ga('send', 'pageview');
 <title>Project Management System</title>
		<script type="text/javascript">
		window.setInterval('refreshdiv()',5000);
		function refreshdiv()
		{
			document.getElementById("notific").innerHTML='<object type="text/html" data="loadphpscr.php">';
		}
		
		</script>
       

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index-2.html" class="logo"><i class="md md-terrain"></i> <span>Editsoft</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default"  role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <style>
							 .navbar-default
							{
								background-color : #323a46;
							
							}
							.text-center
							{
								background-color : #323a46;
							
							}
							</style>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group" id="notific">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
			<li>
                                <a href="calendar.html" class="waves-effect active"><i class="md md-event"></i><span> Calendar </span></a>
                            </li>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

          
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Manager <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                   


                    <!--- Divider -->
                     <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Manager <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">Administrator</p>
                        </div>
                    </div>
                   


                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="projects.php" class="waves-effect active"><i class="md md-my-library-books"></i><span>Projects</span></a>
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
							 <?php include('connection.php');
							
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
                                    <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Elements</a></li>
                                    <li class="active">Modals</li>
                                </ol>
                            </div>
                        </div>


                        <!-- Bootstrap Modals -->
                        <!-- End of row -->

 <!-- End row -->



                        <!-- Modals Examples -->
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <div class="panel panel-default"> 
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> Project Names </h3>
                                    </div> 
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> Project Names </h3>
                                    </div> 
                                    <div class="panel-body">
                                        <table class="table"> 
                                             
                                            <tbody> 
													<?php 
																$man_id=$_SESSION['manager_id'];
																?> <?php
																$proj_ret="select * from project where `project_manger_id`='$man_id'";
																$procquer=mysqli_query($conn,$proj_ret);
																while($result=mysqli_fetch_assoc($procquer)) 
																{?>
																<tr>
																
																<td ><a style="width:100%;" href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="mo<?php echo $result['project_id'];?>">	
																<?php echo $result['project_name'];?></a> 
																</td>
																</tr>
															 <div class="md-modal md-effect-8" id="mo<?php echo $result['project_id'];?>">
                                        <div class="md-content">
                                            <h3>Project Details</h3>
                                            <div>
                                                <p><?php echo $result['project_name'];?></p>
                                                <ul>
                                                    <li><strong>Assign To</strong> <?php echo $result['assign_to'];?></li>
                                                    <li><strong>Description</strong> <?php echo $result['project_desc'];?></li>
													<li><strong>Project Milestone</strong> <?php echo $result['project_milestone'];?></li>
													<li><strong>Project Creation date</strong> <?php echo $result['project_creation_date'];?></li>
													<li><strong>Project End date</strong> <?php echo $result['project_end_date'];?></li>
													<li><strong>Project Last update</strong> <?php echo $result['project_last_update'];?></li>
													<li><strong>Project Documents</strong> <a href=<?php echo $result['project_document'];?>>Downloads</a></li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>                                        </div>
                                    </div>


																<?php 
																}?>
                                                     
                                               
                                            
                                            </tbody> 
                                        </table> 
                                    </div>

									<div class="modal fade none-border" id="add-category">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title"><strong>Add</strong> a Project</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" action="addproject.php" method="POST">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Project Name</label>
                                                            <input class="form-control form-white" placeholder="Project name" type="text" name="proj_name">
                                                        </div>
														
                                                        <div class="col-md-6">
                                                            <label class="control-label">Discription</label>
															<input class="form-control form-white" placeholder="Descption of Project" type="text" name="proj_desc">
                                                        </div>
														 <div class="col-md-6">
                                                            <label class="control-label">Assign to</label>
															<input class="form-control form-white" id="assignto" placeholder="Memmber to Assign to Project" type="text" name="assign_to">
                                                        </div>
														<div class="col-md-6">
                                                            <label class="control-label">Member ID</label>
                                                            <input class="form-control form-white" class="memid"	placeholder="Member" type="text" name="proj_member_id">
                                                        </div>
														<div class="col-md-6">
                                                            <label class="control-label">Milestion</label>
															<input class="form-control form-white" placeholder="Milestone" type="text" name="mile_stone">
                                                        </div>
														
													<div class="col-md-6">
                                                            <label class="control-label">Deadline</label>
                                                            <div class="input-group">
							                                    <input type="text" class="form-control form-white" placeholder="mm/dd/yyyy" id="datepicker" name="proj_dead">
							                                    <span class="input-group-addon">
							                                    <i class="glyphicon glyphicon-calendar"></i></span>
							                                </div>
															
                                                        </div>
														<div class="col-md-6">
                                                            <label class="control-label">Documents</label>
															<input class="form-control" placeholder="Project Documents" type="file" name="proj_doco">
														</div>
                                                    </div>
													<div class="row">
													<div class="col-md-6">
														<button type="submit" class="btn btn-default waves-effect">Submit</button>

													</div>
													</div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
													 <div class="row">
                        <div class="col-lg-2 col-md-offset-10">
                            <a href="#" data-target="#add-category" data-toggle="modal"><i class="md md-add-circle" style="font-size:6.5em;color:#33b86c;"></i></a>
                        </div>    
                    </div>


                                    
                                   
                                    
                                    <div class="md-overlay"></div><!-- the overlay element -->


                                </div> <!-- Panel -->
                            </div> <!-- Col -->
                        </div> <!-- Row -->

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
        
        <!-- CUSTOM JS -->
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

        <!-- Modal-Effect -->
        <script src="assets/plugins/modal-effect/js/classie.js"></script>
        <script src="assets/plugins/modal-effect/js/modalEffects.js"></script>

        <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	

        <script>
            jQuery(document).ready(function() {
            	  // Date Picker
                jQuery('#datepicker').datepicker();
                            });
        </script>
	</body>

<!-- Mirrored from moltran.coderthemes.com/green/modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 13:48:02 GMT -->
</html>