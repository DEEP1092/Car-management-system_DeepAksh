<?php
$con=mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect:'. mysql_error());
  }
 
mysql_select_db("test", $con);
$sql="INSERT INTO go(name,age,gender,address,city,ph_no,e_id) VALUES('$_POST[name]','$_POST[age]','$_POST[gender]','$_POST[address]','$_POST[city]','$_POST[ph_no]','$_POST[e_id]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "1 record added:):):):):)";
mysql_close($con);
?>
 