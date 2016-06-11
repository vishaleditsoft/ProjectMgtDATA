<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
#form{
background-color:#00ccff;
padding:20px;
margin:10px;
width:500px;
}
</style>
</head>
<body> 

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr =$idErr= $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

   if (empty($_POST["name"])) 
   {
     $nameErr = "Name is required";
   } 
   else
    {
     $name = test_input($_POST["name"]);
   		}
   
   if (empty($_POST["email"])) 
   {
     $emailErr = "Email is required";
   	} 
	else {
		     $email1 = test_input($_POST["email"]);
			if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) 
			{
 		 		$emailErr = "Invalid email format"; 
		 	}
			else{
		 	$email=$email1;
				}		 
		 }

   
     
   if (empty($_POST["subj"])) {
     $websiteErr = "subject is must";
   } else {
     $website = test_input($_POST["subj"]);
   }
   
   if (empty($_POST["id"])) {
     $idErr = "college id  is must";
   } else {
     $id = test_input($_POST["id"]);
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Contact form</h2>

<form id="form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		 <table width="442" border="2">
  <tr>
    <td width="187" height="31"> Name:</td>
    <td width="237">    <input type="text" name="name">
		   <span class="error">* <?php echo $nameErr;?></span></td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;<input type="text" name="email">
		   <span class="error">* <?php echo $emailErr;?></span></td>
  </tr>
  <tr>
    <td height="34">&nbsp;</td>
    <td>&nbsp; <input type="text" name="subj">
		   <span class="error">*<?php echo $websiteErr;?></span></td>
  </tr>
  <tr>
    <td height="34">&nbsp;</td>
    <td>&nbsp;<input type="text" name="id">
		   <span class="error">*<?php echo $idErr;?></span></td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
    <td>&nbsp;<textarea name="comment" rows="5" cols="40"></textarea></td>
  </tr>
  <tr>
    <td height="34">&nbsp;</td>
    <td>&nbsp; <input type="radio" name="gender" value="female">Female
		   <input type="radio" name="gender" value="male">Male
		   <span class="error">* <?php echo $genderErr;?></span></td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;<input type="submit" name="submit" value="Submit"> </td>
    
  </tr>
</table>

		  
		
		   <br><br>
		   E-mail: 
		   <br><br>
		   Subject:
		   <br><br>
		   ID: 
		   <br><br>
		   Comment: 
		   <br><br>
		   Gender:
		  
		   <br><br>
		   

</form>

<?php

if($name!="" && $id!="" &&$email!="" && $website!="" && $comment!="" && $gender!="")
		{
		echo "<h2>your Enterd fields</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $website;
		echo "<br>";
		echo $id;
		echo "<br>";
		echo $comment;
		echo "<br>";
		echo $gender;
		$to="vishalguptahmh@gmail.com,ram.@asd.com";
		$subject=$website;
		$message="college-id:".$id."\r\n"."Gender:".$gender."\r\n".$comment;
		$headers = 'From: '.$email . "\r\n";
		$headers .= 'Cc: myboss@example.com' . "\r\n";
		
		mail($to,$subject,$message,$headers);
		}

?>

</body>
</html>