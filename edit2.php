<?php
$a1=$_GET[userid];
$a2=$_GET[t1];
$a3=$_GET[t2];
$a4=$_GET[t3];
$a5=$_GET[t4];
$a6=$_GET[t5];
$a7=$_GET[t6];
$a8=$_GET[t7];
$a9=$_GET[t8];
$link=mysqli_connect("localhost","root","","tutorial");
 
$res=mysqli_query($link,"select * from user where uid='$a1'");
$cnt=mysqli_num_rows($res);
if($cnt==1)
{
	mysqli_query($link,"update userid set auth='$a9' where uid='$a1' ");
	mysqli_query($link,"update user set fname='$a2',lname='$a3',dob='$a4',gender='$a5',mob='$a6',email='$a7',addi='$a8' where uid='$a1' ");
	header("location:edit.php?x=1");
}
else
{
header("location:edit.php?x=2");
}

?>