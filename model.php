<?php
$con=mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect:'. mysql_error());
  }
 
mysql_select_db("test", $con);
$sql="INSERT INTO model(Model_name) VALUES('$_POST[model_name]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "1 record added:):):):):)";
mysql_close($con);
?>
 