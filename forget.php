<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/green/recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 13:49:14 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65046120-1', 'auto');
  ga('send', 'pageview');

</script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body>

<?php 
if(isset($_POST['reset'])){

		$email=$_POST['email'];
		include("connection.php");
		$query="select * from admin where admin_email_id='$email'";
		$exe=mysqli_query($conn,$query);
		if(mysqli_num_rows($exe)>0){
				echo '
				<div class="wrapper-page">
				<div class="alert alert-success alert-dismissable ">
				                       Check your  <b>Email</b> instructions will be sent to you!
				                    </div>
				</div>
				';
				$row=mysqli_fetch_assoc($exe);
				$activation= $row['activation'];

				$to=$email;
				$subject="Requesting for password change.";
				$body=" 
				

				Click on this link to change your account  Password: 
				
				http://". $_SERVER['SERVER_NAME']."/Project_management/activation.php?admin_email_id=$email&act=$activation

				";
				mail($to ,$subject,$body,"From: vishal.editsoft@gmail.com");

		}
		else{

				echo '
				<div class="wrapper-page">
				<div class="alert alert-danger alert-dismissable ">
				                        
				                       You havent register ..!! so please register.
				                    </div>
				</div>



				';


		}


}
else{



echo '





        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">

                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay" style="    background: #41bd76;"></div>
                    <h3 class="text-center m-t-10 text-white"> Reset Password </h3>
                </div> 

                <div class="panel-body">
                 <form method="post" action="forget.php" role="form" class="text-center"> 
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Enter your <b>Email</b> and instructions will be sent to you!
                    </div>
                    <div class="form-group m-b-0"> 
                        <div class="input-group"> 
                            <input type="email" name="email" class="form-control input-lg" placeholder="Enter Email" required=""> 
                            <span class="input-group-btn"> <button name="reset" type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Reset</button> </span> 
                        </div> 
                    </div> 
                    
                </form>

                </div>                                 
                
            </div>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>

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

';
}

?>
	
	</body>

<!-- Mirrored from moltran.coderthemes.com/green/recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 13:49:14 GMT -->
</html>