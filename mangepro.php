<html>
<head>

<script type = "text/javascript"  src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
 <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
 </script>

<script type="text/javascript">

$(document).ready(function(){
    $(".button1").click(function(){
        $("#form1").toggle();


    });
 $("#form1").hide();
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
</head>
 
 


<table>
<th>Milestone</th><th>Status</th>
<?php
// $qurt="SELECT * FROM  `project_milestone` where pid=$del";
// $qupro=mysqli_query($conn,$qurt);
// while($res=mysqli_fetch_assoc($qupro))
// {
?>

<tr>
<td>
<?php //echo $res['project_mile']; ?>
    
</td>
<td>
<?php //echo $res['status'];?>
    
</td>
</tr>


	<?php

// }
?>
</table>
<button class="button1">click to open form</button>
<form id="form1" action="mangepro.php" method="POST">
    <div class="field_wrapper">
        <div>
			<input type="text" name="field_val[]" />
			<a  class="add_button"> Add field</a>
    	</div>
    </div>
    <button type="Submit">Assign</button>
</form>
</body>
</html>

   
   
   