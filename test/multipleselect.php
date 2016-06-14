<!DOCTYPE html>
<html>
<body>

<form action="multipleselect.php">
<select name="cars[]" multiple>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
<input type="submit">
</form>

<p>Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.</p>

</body>
</html>

<?php
if(isset($_GET['cars']))
{ 
	$a=$_GET['cars'];
	foreach($a as $b){
		echo $b;
	}

}
?>