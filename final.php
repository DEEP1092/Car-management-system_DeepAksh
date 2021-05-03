<html>
<body>
<?php
$we=0;
$ad=0;
$pd=$_POST["pid"];
if($_POST["Q1WE"]=="Q1O3WE")
{
$we=$we+1;
}
else if($_POST["Q1WE"]=="Q1O5WE")
{
$we=$we+0;
}
else
{
$we=$we-1;
}
if($_POST["Q2WE"]=="Q2O1WE")
{
$we=$we+1;
}
else if($_POST["Q2WE"]=="Q2O5WE")
{
$we=$we+0;
}
else
{
$we=$we-1;
}
if($_POST["Q3WE"]=="Q3O4WE")
{
$we=$we+1;
}
else if($_POST["Q3WE"]=="Q3O5WE")
{
$we=$we+0;
}
else
{
$we=$we-1;
}
if($_POST["Q4WE"]=="Q4O2WE")
{
$we=$we+1;
}
else if($_POST["Q4WE"]=="Q4O5WE")
{
$we=$we+0;
}
else
{
$we=$we-1;
}
if($_POST["Q5WE"]=="Q5O2WE")
{
$we=$we+1;
}
else if($_POST["Q5WE"]=="Q5O5WE")
{
$we=$we+0;
}
else
{
$we=$we-1;
}
if($_POST["Q6WE"]=="Q6O4WE")
{
$we=$we+1;
}
else if($_POST["Q6WE"]=="Q6O5WE")
{
$we=$we+0;
}
else
{
$we=$we-1;
}
if($_POST["Q7WE"]=="Q7O1WE")
{
$we=$we+1;
}
else if($_POST["Q7WE"]=="Q7O5WE")
{
$we=$we+0;
}
else
{
$we=$we-1;
}
if($_POST["Q8WE"]=="Q8O3WE")
{
$we=$we+1;
}
else if($_POST["Q8WE"]=="Q8O5WE")
{
$we=$we+0;
}
else
{
$we=$we-1;
}
if($_POST["Q9WE"]=="Q9O4WE")
{
$we=$we+1;
}
else if($_POST["Q9WE"]=="Q9O5WE")
{
$we=$we+0;
}
else
{
$we=$we-1;
}
if($_POST["Q10WE"]=="Q10O3WE")
{
$we=$we+1;
}
else if($_POST["Q10WE"]=="Q10O5WE")
{
$we=$we+0;
}
else
{
$we=$we-1;
}
if($_POST["Q1AD"]=="Q1O3AD")
{
$ad=$ad+1;
}
else if($_POST["Q1AD"]=="Q1O5AD")
{
$ad=$ad+0;
}
else
{
$ad=$ad-1;
}
if($_POST["Q2AD"]=="Q2O4AD")
{
$ad=$ad+1;
}
else if($_POST["Q2AD"]=="Q2O5AD")
{
$ad=$ad+0;
}
else
{
$ad=$ad-1;
}
if($_POST["Q3AD"]=="Q3O4AD")
{
$ad=$ad+1;
}
else if($_POST["Q3AD"]=="Q3O5AD")
{
$ad=$ad+0;
}
else
{
$ad=$ad-1;
}
if($_POST["Q4AD"]=="Q4O1AD")
{
$ad=$ad+1;
}
else if($_POST["Q4AD"]=="Q4O5AD")
{
$ad=$ad+0;
}
else
{
$ad=$ad-1;
}
if($_POST["Q5AD"]=="Q5O4AD")
{
$ad=$ad+1;
}
else if($_POST["Q5AD"]=="Q5O5AD")
{
$ad=$ad+0;
}
else
{
$ad=$ad-1;
}
if($_POST["Q6AD"]=="Q6O3AD")
{
$ad=$ad+1;
}
else if($_POST["Q6AD"]=="Q6O5AD")
{
$ad=$ad+0;
}
else
{
$ad=$ad-1;
}
if($_POST["Q7AD"]=="Q7O4AD")
{
$ad=$ad+1;
}
else if($_POST["Q7AD"]=="Q7O5AD")
{
$ad=$ad+0;
}
else
{
$ad=$ad-1;
}
if($_POST["Q8AD"]=="Q8O2AD")
{
$ad=$ad+1;
}
else if($_POST["Q8AD"]=="Q8O5AD")
{
$ad=$ad+0;
}
else
{
$ad=$ad-1;
}
if($_POST["Q9AD"]=="Q9O2AD")
{
$ad=$ad+1;
}
else if($_POST["Q9AD"]=="Q9O5AD")
{
$ad=$ad+0;
}
else
{
$ad=$ad-1;
}
if($_POST["Q10AD"]=="Q10O3AD")
{
$ad=$ad+1;
}
else if($_POST["Q10AD"]=="Q10O5AD")
{
$ad=$ad+0;
}
else
{
$ad=$ad-1;
}
$con = mysql_connect();
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("test", $con);
$result = mysql_query("UPDATE student SET adbms=$ad,WE=$we WHERE p_id=$pd");
$result1 = mysql_query("UPDATE student SET attmpt='YES' WHERE p_id=$pd");
if($we>=4&&$ad>=4)
{
$result2 = mysql_query("UPDATE student SET pass='P' WHERE p_id=$pd");
}
mysql_close($con);
?>
<CENTER><A HREF="http://localhost/test/welcome.html">YOUR MARKS HAVE BEEN STORED SUCCESSFULLY<A/></CENTER>
</body>
</html>