<head>
<body>
<?php
$con= mysql_connect();
if (!$con)
  {
  die('Could not connect:'. mysql_error());
  }
 
mysql_select_db("test",$con);
$sql="INSERT INTO customer VALUES('$_POST[cust_no]','$_POST[cust_name]','$_POST[cust_add]','$_POST[cust_ph]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "1 record added:):):):):)";
mysql_close($con);
?>
</body>
 </head>
