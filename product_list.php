<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
  
include "mysql/connect_to_mysql.php"; 
$List = "";
$sql = mysql_query("SELECT * FROM products ORDER BY date_added DESC LIMIT 6");
$productCount = mysql_num_rows($sql);
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
			 $List .= '<table width="100%" border="0" cellspacing="0" cellpadding="6">
        <tr>
          <td width="17%" valign="top"><a href="product.php?id=' . $id . '"><img style="border:#666 1px solid;" src="images_inventory/' . $id . '.jpg" alt="' . $product_name . '" width="77" height="102" border="1" /></a></td>
          <td width="83%" valign="top">' . $product_name . '<br />
            $' . $price . '<br />
            <a href="product.php?id=' . $id . '">View Product Details</a></td>
        </tr>
      </table>';
    }
} else {
	$List = "We have no products listed in our store yet";
}
mysql_close();
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products Of the store</title>
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
</head>

<body>
<div align="center" id="content">
<?php include_once("header.php");?>
<div id="pageContent">
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    
    <td width="35%" valign="top"><h3>Latest Designer Fashions</h3>

      <p><?php echo $List; ?><br />
        </p>
      <p><br />
      </p> </td>

  </tr>
</table>
</div>
<?php include_once("footer.php");?>
</div>
</body>
</html>