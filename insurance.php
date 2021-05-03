<?php
$con=mysql_connect("localhost", "root","");
if (!$con)
  {
  die('Could not connect:'. mysql_error());
  }
 
mysql_select_db("test", $con);
$sql="INSERT INTO insurance(ins_name,s_date,exp_date) VALUES('$_POST[ins_name]','$_POST[s_date]','$_POST[exp_date]')";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
echo "1 record added:):):):):)";
mysql_close($con);
?>
 