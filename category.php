<?php 

// Script Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
// Run a select query to get my letest 6 items
// Connect to the MySQL database  
include "mysql/connect_to_mysql.php"; 
mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Categories</title>
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
</head>

<body>
<div align="center" id="content">
  <?php include_once("header.php");?>
  
  <div id="pageContent">
  <?php include_once("categoryheader.php");?>
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    
  	  <td width="35%" valign="top">
      <marquee><img src="images/h (1).png" height=390><img src="images/h (2).png" height=390><img src="images/h (3).png" height=390><img src="images/h (4).png" height=390><img src="images/h (5).png" height=390><img src="images/h (6).png" height=390><img src="images/h (7).png" height=390><img src="images/h (8).png" height=390><img src="images/h (9).png" height=390><img src="images/h (10).png" height=390><img src="images/h (11).png" height=390><img src="images/h (13).png" height=390><img src="images/h (14).png" height=390><img src="images/h (15).png" height=390><img src="images/h (16).png" height=390><img src="images/h (17).png" height=390><img src="images/h (18).png" height=390><img src="images/h (19).png" height=390></marquee>
</td>
    
  </tr>
  
</table>

  </div>
  <?php include_once("footer.php");?>
</div>
</body>
</html>