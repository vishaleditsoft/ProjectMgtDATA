<?php
if (!isset($_SESSION)) {
  session_start();
}


?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="header.css" />
</head>
<body>
<div id="wrapper">
<header id="top">
 <h1 style="margin:10px;" ><img src="images/dit.jpg"  align="left" alt="dit_img" width="121" height="89" />MY-DITU</h1><br />
    <nav id="mainnav">
      <ul>
        <li><a href="index.php" >Home</a></li>
        <li><a href="#">About</a></li>
		<li><a href="contact.php" class="thispage">Contact</a></li>
        <li><a href="profile.php" >Hello &nbsp;&nbsp; <?php echo htmlspecialchars($_SESSION['myname']); ?></a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
    </nav>
  </header>
</div>
<div id="wrapper">
<div  align="center">
<br />
<form action="#">
<table width="489" height="197" border="0">
  <tr>
    <td>Subject:</td>
    <td >&nbsp;&nbsp;&nbsp;<input type="text" /></td>
  </tr>
  <tr>
    <td>Query:</td>
    <td><textarea cols="40" rows="6" ></textarea></td>
  </tr>
  <tr>
        <td colspan="2" align="center"><input type="submit" /></td>
  </tr>
</table>

</form>
</div>
</div>		
		
</body></html>