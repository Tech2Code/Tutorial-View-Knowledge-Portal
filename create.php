<?php
$a1=$_POST['fname'];
$a2=$_POST['lname'];
$a3=$_POST['uid'];
$a4=$_POST['pwd1'];
$a5=$_POST['dob'];
$a6=$_POST['gender'];
$a7=$_POST['mob'];
$a8=$_POST['email'];
$a9=$_POST['add'];
$link=mysqli_connect("localhost","root","","tutorial");
 
$res=mysqli_query($link,"select * from userid where uid='$a3'  ");
$cnt=mysqli_num_rows($res);
if($cnt==0)
{
	mysqli_query($link,"insert into userid values('$a3','$a4','1')");
	mysqli_query($link,"insert into user values('$a1','$a2','$a3','$a5','$a6','$a7','$a8','$a9')");
	header("location:registerd.html");
}
else
{
	header("location:create_account.php?x=3");
}
?>