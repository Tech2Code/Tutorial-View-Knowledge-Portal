<?php
$a1=$_GET[t1];
$a2=$_GET[t2];
$link=mysqli_connect("localhost","root","","tutorial");
 
$res=mysqli_query($link,"select * from userid where uid='$a1' and pwd='$a2' ");
$cnt=mysqli_num_rows($res);
if($cnt==1)
{
	mysqli_query($link,"delete from userid where uid='$a1' ");
	mysqli_query($link,"delete from user where uid='$a1' ");
	header("location:delete.php?x=1");
}
else
{
	header("location:delete.php?x=2");
}

?>