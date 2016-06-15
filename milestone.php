<?php include("header.php");

$status_count=0;
$total_rows=0;

include("connection.php");

$pid=$_REQUEST['milestone'];

$qurt="SELECT * FROM  `project_milestone` where pid='$pid'";
$qupro=mysqli_query($conn,$qurt);
while($res=mysqli_fetch_assoc($qupro))
{
    $total_rows++;
    $status=$res['status'];
    if($status=="completed"){
    $status_count++;
    }
}
if($total_rows==0){
    $total_rows++;
}
$status_count=(($status_count)* 100 )/($total_rows);
?>

<script type = "text/javascript"  src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
 <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
 </script>

<script type="text/javascript">

$(document).ready(function(){


    $("#add_milestone_btn").click(function(){
        $("#form_add_milestone").toggle(1000);
    });
 $("#form_add_milestone").hide();


    var maxField = 10; 
    var addButton = $('.add_button'); 
    var wrapper = $('.field_wrapper');
    var fieldHTML = '<div><input type="text" name="field_val[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });




});
</script> 

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
                           <h2>Current Milestone </h2> 

                           <div class="mini-stat clearfix bx-shadow bg-white">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-eye"></i></span>
                                    <div class="mini-stat-info text-right text-dark">
                                        <span id="msg" class="counter text-dark"><?php echo $status_count; ?></span>
                                        Project Completed
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Target <span class="pull-right"><?php echo $status_count; ?>%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-primary  wow animated progress-animated animated"  role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $status_count; ?>%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-right">
                                        <button id="add_milestone_btn" class="btn btn-primary">Add milestone</button>
                                        <form id="form_add_milestone" action="mangeit.php" method="POST">
                                            <div class="field_wrapper">
                                                <div>
                                                    <input type="text" name="field_val[]" />
                                                    <input type="hidden" name="pid" value="<?php echo $pid ; ?> ">
                                                        <a  class="add_button"> <i class="fa fa-plus-circle"></i></a>
                                                </div>
                                            </div>
                                            <button type="Submit">Assign</button>
                                        </form>
                                    </div>
                                </div>
                            </div><br>

                                    <?php  
                                    
                                    $qurt="SELECT * FROM  `project_milestone` where pid='$pid'";
                                    $qupro=mysqli_query($conn,$qurt);
                                    while($res=mysqli_fetch_assoc($qupro))
                                    {
                                    $status=$res['status'];
                                    if($status=="completed"){
                                    $status_count++;
                                    }
                                     ?>
                                    

                            <div class="well " style="background:white;">
                                <div class="row">
                                   
                                   <form id="f1<?php echo $res['proj_mile_id']; ?>">
                                    <input type="hidden" name="proj_mile_id" value="<?php echo $res['proj_mile_id']; ?>" >
                                     <input type="hidden" name="pid" value="<?php echo $res['pid']; ?>" >
                                    <div class="col-md-9" align="center"><?php echo $res['project_mile']; ?></div>
                                    <div class="col-md-2 ">
                                        <select name="status" >
                                            <option  <?php if(isset($status) && $status=="pending") echo  "selected"; ?> >pending</option>
                                            <option <?php if(isset($status) && $status=="completed") echo  "selected"; ?> >completed</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-1">
                                        <button type="button" onClick="return chk(<?php echo $res['proj_mile_id']; ?>)" class="btn btn-info">Change</button>

                                    </div>
                                
                                   </form>
                                

                                </div>
                                
                            </div>

                            <?php   }    ?>




                


                        



                    </div>
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

    

<script type="text/javascript">
    
    function chk(i)
    {   var f1="#f1"+i;
        var dataString=$(f1).serialize();
        window.console.log(dataString);
        $.ajax(
            {
                type:"POST" ,
                url:"mangeit.php"  ,
                data:dataString ,
                cache:false,
                success :function(html){
                                    $('#msg').html(html);
                                    $('.pull-right').text(html+"%");
                                    $('.progress-bar').css("width",html+"%");
                                    alert("data has been changed..!");
                                    
                                    },
                error:function(){ $('#msg').html('<p>An error has occurred</p>');}
                                                                                                    
                
        });
      
        return false;
        
        // alert(f1);
        
    }

</script>


 

    </body>

<!-- Mirrored from moltran.coderthemes.com/green/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 13:46:41 GMT -->
</html>


