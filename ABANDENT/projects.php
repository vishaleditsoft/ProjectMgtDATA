<?php include("header.php");?>
	


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
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <div class="panel panel-default"> 
                                    <div class="panel-heading">
                                        <h3 class="panel-title"> Project Names </h3>
                                    </div> 
                                    <div class="panel-body">
                                        <table class="table table-striped"> 
                                            <tbody> 
													<?php
                                                                $sr=1;  
																$man_id=$_SESSION['manager_id'];
																?> <?php
																$proj_ret="select * from project where `project_manger_id`='$man_id'";
																$procquer=mysqli_query($conn,$proj_ret);
																while($result=mysqli_fetch_assoc($procquer)) 
																{?>
    															<tr>                                         <td style="width:10%;"><a style="width:100%;padding: 3px 0px;" href="javascript:;" class=" btn btn-primary waves-effect waves-light" >  
                                                                <?php echo $sr;$sr+=1; ?></a></td>
																
																<td style="width:70%;"> <a style="width:100%;" href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="mo<?php echo $result['project_id'];?>">	
																<?php echo $result['project_name'];?></a> 
																</td>
																<td style="width:10%;"><a style="width:100%;" href="javascript:;" class="md-trigger btn btn-primary waves-effect waves-light" data-modal="ed<?php echo $result['project_id'];?>">	
																Edit</a></td>
																<td style="width:10%;"><form action="delproj.php" method="POST"><input type="hidden" name="deldat" value="<?php echo $result['project_id'];?>"><input type="Submit" value="Delete" class="btn btn-primary" style="    padding: 3px 19px;" id="del<?php $result['project_id'];?>"></form>
																
																
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
													<li><strong>Project Documents</strong> <a href=<?php echo $result['project_document'];?> target="_blank">Downloads</a></li>
                                                </ul>
                                                <button class="md-close btn-sm btn-primary waves-effect waves-light">Close me!</button>
                                            </div>                                        </div>
                                    </div>
													 <div class="md-modal md-effect-8" id="ed<?php echo $result['project_id'];?>">
                                        <div class="md-content">
                                            <h3>Project Details</h3>
                                            <div>
                                                <form role="form" action="editproj.php" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Project Name</label>
                                                            <input class="form-control form-white" value=<?php echo $result['project_name'];?> placeholder="Project name" type="text" name="proj_name">
															
                                                        </div>
														
                                                        <div class="col-md-6">
                                                            <label class="control-label">Discription</label>
															<input class="form-control form-white" placeholder="Descption of Project" type="text" name="proj_desc" value="<?php echo $result['project_desc'];?>">
                                                        </div>
														 <div class="col-md-6">
                                                            <label class="control-label">Assign to</label>
															<input class="form-control form-white" id="assignto" placeholder="Memmber to Assign to Project" type="text" name="assign_to" value="<?php echo $result['assign_to'];?>"> 
                                                        </div>
														<div class="col-md-6">
                                                            <label class="control-label">Member ID</label>
                                                            <input class="form-control form-white" class="memid"	placeholder="Member" type="text" name="proj_member_id">
                                                        </div>
														<div class="col-md-6">
                                                            <label class="control-label">Milestion</label>
															<input class="form-control form-white" placeholder="Milestone" type="text" value="<?php echo $result['project_milestone'];?>" name="mile_stone">
                                                        </div>
														
														
													<div class="col-md-6">
                                                            <label class="control-label">Deadline</label>
                                                            <div class="input-group">
							                                    <input type="text" class="form-control form-white" placeholder="mm/dd/yyyy" id="proi<?php echo $result['project_id'];?>" name="proj_dead" value="<?php echo $result['project_end_date'];?>">
							                                    <span class="input-group-addon">
							                                    <i class="glyphicon glyphicon-calendar"></i></span>
							                                </div>
															
                                                        </div>
														<div class="col-md-6">
                                                            <label class="control-label">Documents</label>
															<input class="form-control" placeholder="Project Documents" type="file" name="proj_doco">
														</div>
                                                    </div>
													<input type="hidden" name="pid" value="<?php echo $result['project_id']; ?>">
													<div class="row">
													<div class="col-md-6">
														<button type="submit" class="btn btn-default waves-effect">Submit</button>

													</div>
													</div>
                                                </form>
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
                                                <form role="form" action="addproject.php" method="POST" enctype="multipart/form-data">
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
														 <select id="membrs" multiple="multiple">
																<?php include('connection.php');
																$quer="select * from members";
																$res=mysqli_query($conn,$quer);
																while($rt=mysqli_fetch_assoc($res))
															{
																?>
																<option value="<?php echo $rt['mem_id'];?>"><?php echo $rt['mem_name']; ?></option>
																<?php }?>
															</select>
															<button>Set</button>
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
							                                    <input type="text" class="form-control form-white" placeholder="mm/dd/yyyy" id="datepicker1" name="proj_dead">
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
														<button type="submit" id="btnSelected"  class="btn btn-default waves-effect">Submit</button>

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
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>
        
        <!-- CUSTOM JS -->
      
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
		 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css"
        rel="stylesheet" type="text/css" />
       <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
        rel="stylesheet" type="text/css" />
    <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
        type="text/javascript"></script>
		
		   <script type="text/javascript">
        $(function () {
            $('#membrs').multiselect({
                includeSelectAllOption: true
            });
			
			
            $('#btnSelected').click(function () {
               var message = ""; 
				var selected = $("#membrs option:selected");
                selected.each(function () {
                    message += $(this).val() +  ",";
                });
                      $.post('addpro.php',{menname:message})
					  
					  
					  });
        });
    </script>
    
		
        <script src="assets/js/jquery.app.js"></script>

        <!-- Modal-Effect -->
        <script src="assets/plugins/modal-effect/js/classie.js"></script>
        <script src="assets/plugins/modal-effect/js/modalEffects.js"></script>

        <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		

        <script>
            jQuery(document).ready(function() {
            	  // Date Picker
                jQuery('#datepicker1').datepicker();
                 jQuery('#datepicker2').datepicker();
                                    						});
			</script>
	</body>

<!-- Mirrored from moltran.coderthemes.com/green/modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 13:48:02 GMT -->
</html>