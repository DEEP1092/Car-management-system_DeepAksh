<?php
$con=mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect:'. mysql_error());
  }
 
mysql_select_db("test", $con);
$sql="INSERT INTO car(car_name,car_no,color) VALUES('$_POST[car_name]','$_POST[car_no]','$_POST[color]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "1 record added:):):):):)";
mysql_close($con);
?>
 