<?php
mysql_connect("localhost","root","@Omkar122192");
if (!$con)
  {
  die('Could not connect:'. mysql_error());
  }
 
mysql_select_db("test", $con);
$sql="INSERT INTO author(Author_Name,Country) VALUES('$_POST[author_name]','$_POST[country]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "1 record added:):):):):)";
mysql_close($con);
?>
 