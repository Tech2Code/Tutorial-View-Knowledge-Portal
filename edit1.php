<?php
$q=$_GET["q"];
$link=mysqli_connect("localhost","root","","tutorial");
 

$res=mysqli_query($link,"SELECT * FROM user WHERE uid ='$q'  ");
$cnt=mysqli_num_rows($res);
if($cnt!=1)
{
header('location:edit.php?x=4');
}
else{
	$r=mysqli_fetch_array($res);
	$a1=$r['fname'];
	$a2=$r['lname'];
	$a3=$r['dob'];
	$a4=$r['gender'];
	$a5=$r['mob'];
	$a6=$r['email'];
	$a7=$r['addi'];
		$a8=$r['uid'];
		
	$data=$a1.",".$a2.",".$a3.",".$a4.",".$a5.",".$a6.",".$a7.",".$a8.",".$q;
echo $data;
}
?>
