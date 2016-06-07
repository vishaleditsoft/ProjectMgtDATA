<HTML>
<HEAD>
	<TITLE>PAGE</TITLE>
	<!-- Latest compiled and minified CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</HEAD>
<BODY>
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid" >
			<!--logo-->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">EditSoft</a>
			</div>
			<!--menu items-->
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li ><a href="#">About</a></li>
					<li ><a href="#">Contact</a></li>
				
				</ul>
			</div>
		</div> 
	</nav>



	

<!-- signup with rows form code and large-->



		<div >
			<div class="modal-dialog modal-sm">
			<!--for small <div class="modal-dialog modal-sm"> -->
				<div class="modal-content">
					<!-- header -->
					<div class="modal-header" style="background-color:whitesmoke;">
						
						<h3 class="modal-title">sign-up</h3>
					</div>
					<!-- body -->
					<div class="modal-body">
						<form role="form" action="manger_registraion.php" method="POST" >
							
							<div class="form-group" >
									<div ><input type="text" class="form-control" placeholder="Name" name="manager_name"></div>
							</div>	
							<div class="form-group">
								<input type="email"  placeholder="E-mail" class="form-control" name="manager_email" >
							</div>	
							<div class="form-group">
								<input type="text"  placeholder="Password" name="manager_password"class="form-control">
							</div>
							
							<div class="form-group">
								<input type="text"  placeholder="Mobile-Number" class="form-control" name="manager_phone_no" maxlength="10">
							</div>

							<div class="form-group">
								<input type="text"  placeholder="Company Name" name="company_name"class="form-control">
							</div>
							
							<div class="form-group">
							<input type="submit" class="btn btn-primary btn-block" name="submit" value="Sign-up" />
							</div>

						</form>
					</div>
					<!-- modal-footer -->
					
				</div>
			</div>
		</div>





</BODY>
</HTML>		

