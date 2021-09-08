<?php
session_start();
$a1=$_POST['userid'];
$a2=$_POST['pwd'];
$link=mysqli_connect("localhost","root","","tutorial");
 
$res=mysqli_query($link,"select * from userid where uid='$a1' and pwd='$a2' ");
$cnt=mysqli_num_rows($res);
if($cnt==0)
{ 
   header("location:index.php?x=2");
}
else
{
	$r=mysqli_fetch_array($res);
	$a3=$r['auth'];
	$_SESSION['auth']=$a3;
	$_SESSION['userid'] = $_POST['userid'];
	
	header("location:home.php");
	
	
}
?>