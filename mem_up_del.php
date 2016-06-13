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
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php


if(isset($_POST['deldat']))
	{
		$del=$_POST['deldat']; 
		$quer="delete from members where mem_id=$del";
		$querp=mysqli_query($conn,$quer);
	}

if(isset($_POST['up_dat_id']))
	{

		$up_dat_id=$_POST['up_dat_id']; 
	$quer="select * from members where mem_id=$up_dat_id";
		$querp=mysqli_query($conn,$quer);

		$row=mysqli_fetch_assoc($querp);
		?>

        <div >
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <!-- header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title text-success">update member</h3>
                    </div>
                    
                    <!-- body(form) -->
                    <div class="modal-body">
                        <form role="form" method="post" action="mem_up_del.php">
                            
                            <div class="form-group">
                                <input type="text" class="form-control" value="<?php echo $row['mem_name']; ?>" placeholder="Name" name="user_name" >
                            </div>
							<div class="form-group">
                                <input type="hidden" class="form-control" value="<?php echo $row['mem_id']; ?>"  name="mem_id" >
                            </div>
                            <div class="form-group">
                                <input type="" class="form-control" value="<?php echo $row['mem_email']; ?>"  placeholder="E-mail" name="email"> 
                            </div>
                                  <div class="form-group">
                                <input type="" class="form-control" placeholder="Mobile" name="mobile" value="<?php echo $row['mem_mobile']; ?>" > 
                            </div>
                        <button type="submit" class="btn btn-primary btn-block" name="up_mem_button">update</button>


                        </form>
                    </div>

                    <!-- footer -->
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>






		<?php

	}


 ?>

<?php

if(isset($_POST['up_mem_button'])){

$user_name=$_POST['user_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

$mem_id=$_POST['mem_id'];
$q="update members set mem_name='$user_name' , mem_email ='$email' , mem_mobile ='$mobile' where mem_id='$mem_id'";
$exe=mysqli_query($conn,$q);
header("location:members.php");

}
?>

</body>
</html>