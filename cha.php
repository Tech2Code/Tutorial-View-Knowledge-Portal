<?php
session_start();
$a1=$_SESSION['userid'];

$a2=$_GET['t2'];
$a3=$_GET['t3'];
include("database/mydb.php");
$res=mysql_query("select * from userid where uid='$a1' and pwd='$a2'");
$cnt=mysqli_num_rows($res);
if($cnt==1)
{
	mysql_query("update userid set pwd='$a3' where uid='$a1' ");
	header("location:change.php");
}
else
{
	header("location:change.php?x=2");
}

?>