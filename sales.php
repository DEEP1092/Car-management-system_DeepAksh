<?php
$con=mysql_connect();
if (!$con)
  {
  die('Could not connect:'. mysql_error());
  }
 
mysql_select_db("test", $con);
$sql="INSERT INTO sales(cust_No,car_name,model_no) VALUES('$_POST[cust_no]','$_POST[Car_name]','$_POST[Model_no]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "1 record added:):):):):)";
mysql_close($con);
?>
 