<?php
mysql_connect("localhost","root","@Omkar122192");
if (!$con)
  {
  die('Could not connect:'. mysql_error());
  }
 
mysql_select_db("test", $con);
$sql="INSERT INTO book(ISBN,Title,Publishing_Year,Unit_Price,Author_Name) VALUES('$_POST[ISBN]','$_POST[title]','$_POST[pub_year]','$_POST[unit_price]','$_POST[author_name]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "1 record added:):):):):)";
mysql_close($con);
?>
 