<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="header.css" />
</head>
		

<body >
<div id="wrapper">
<header id="top">
 <h1 style="margin:10px;" ><img src="images/dit.jpg"  align="left" alt="dit_img" width="121" height="89" />MY-DITU</h1><br />
    <nav id="mainnav">
      <ul>
        <li><a href="index.php" class="thispage">Home</a></li>
        <li><a href="#">About</a></li>
		<li><a href="contact.php">Contact</a></li>
        <li><a href="profile.php">Hello &nbsp;&nbsp; <?php echo htmlspecialchars($_SESSION['myname']); ?></a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
    </nav>
  </header>
  </div>



</body>
</html>



