<?php
mysql_connect("localhost","root","@Omkar122192");
if (!$con)
  {
  die('Could not connect:'. mysql_error());
  }
 
mysql_select_db("test", $con);
$sql="INSERT INTO publisher(Publisher_Name,Publisher_Address) VALUES('$_POST[publisher_name]','$_POST[pub_add]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "1 record added:):):):):)";
mysql_close($con);
?>
 