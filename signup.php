

<?php
session_start();
if(isset($_SESSION['manager_id']))
{

	header("location:dashboard.php");
}
?>



<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/green/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 13:49:14 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Login</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>
<!--  -->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay" style="background-color:#41bd76;"></div>
                    <h3 class="text-center m-t-10 text-white"> Sign In to <strong>EditSoft</strong> </h3>
                </div> 


                <div class="panel-body">
               <form role="form" action="manger_registraion.php" method="POST" >
							
							<div class="form-group" >
									<div ><input type="text" class="form-control" placeholder="Name" name="manager_name" required autofocus></div>
							</div>	
							<div class="form-group">
								<input type="email" required  placeholder="E-mail" class="form-control" name="manager_email" >
							</div>	
							<div class="form-group">
								<input type="password" required  placeholder="Password" name="manager_password"class="form-control">
							</div>
							
							<div class="form-group">
								<input type="text" required  placeholder="Mobile-Number" class="form-control" name="manager_phone_no" maxlength="10" minlength="10">
							</div>

							<div class="form-group">
								<input type="text"  placeholder="Company Name" required name="company_name"class="form-control">
							</div>
							
							<div class="form-group">
							<input type="submit" class="btn btn-primary btn-block" name="submit" value="Sign-up" />
							</div>

						</form>

                    <div class="form-group m-t-30">
                        <div class="col-sm-5">
                        
                            
                        </div>
                        <div class="col-sm-7 text-right">
                        <br>
                            <a href="index.php">Login</a>
                        </div>
                    </div>
                </div>                                 
                
            </div>
        </div>

        
    
        <!-- Main  -->
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
	
	</body>

</html>