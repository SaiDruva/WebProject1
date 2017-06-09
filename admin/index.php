<?php 
session_start();
if (!isset($_SESSION["admin"])) {
    header("location: login.php"); 
    exit();
}

$adminID = preg_replace('#[^0-9]#i', '', $_SESSION["id"]);
$admin = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["admin"]); 
$password = preg_replace('#[^A-Za-z0-9]#i', '', $_SESSION["password"]);  
include "../mysql/connect_to_mysql.php"; 
$sql = mysql_query("SELECT * FROM admin WHERE id='$adminID' AND username='$admin' AND password='$password' LIMIT 1");  
$existCount = mysql_num_rows($sql); 
if ($existCount == 0) { 
	 echo "Your login session data is not on record in the database.";
     exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Store Admin Area</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" media="screen" />
</head>

<body>
<div align="center" id="content">
  <?php include_once("../header.php");?>
  <div id="pageContent"><br />
    <div align="left" style="margin-left:24px;">
      <h2>Hello admin!!! </h2>
      <p><a href="inventory_list.php">Manage Inventory</a><br /></p>
      <p><a href="logout.php">Logout</a><br /></p>
      
      
    </div>
    <br />
  <br />
  <br />
  </div>
  <?php include_once("../footer.php");?>
</div>
</body>
</html>