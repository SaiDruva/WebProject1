<?php 


error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
 
include "mysql/connect_to_mysql.php"; 
mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Store Home Page</title>
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
</head>
<body>
<div align="center" id="content">
  <?php include_once("header.php");?>
  <div id="pageContent">
  <table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    
    <td width="35%" valign="top"><h3>Welcome to the Online Store!!! </h3>
      
      </p>
      <img src="images/d21.jpg" width="440" height="396" /><img src="images/d22.jpg" width="440" height="396" /></td>
    
  </tr>
  <tr>
    <td><a href="product_list.php"><img src="images/ads.jpg" width="880" height="436" /></a></td></tr>
</table>

  </div>
  <?php include_once("footer.php");?>
</div>
</body>
</html>