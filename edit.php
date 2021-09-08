<?php
error_reporting(0);
session_start();// Inialize session
$a=$_SESSION['auth'];
if (!isset($_SESSION['userid'])) // Check, if username session is NOT set then this page will jump to login page
{
header('Location: index.php');
}
$link=mysqli_connect("localhost","root","","tutorial");
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Account</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/mystyle.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/tutorial.gif" type="image/x-icon" />

<!-- Skitter Styles -->
	<link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
	
	<!-- Skitter JS -->


	<script type="text/javascript" language="javascript" src="js/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>
	<!-- Init Skitter -->
	<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('.box_skitter_large').skitter({
				theme: 'clean',
				numbers_align: 'center',
				progressbar:false, 
				dots: true, 
				preview: true
			});
		});
	</script>

<script type="text/javascript">
	var innert = '';
	var thnkx = document.URL;
	var thnkx1 = thnkx.split("#"); 
	if(thnkx1.length == 2)
	{
		if(thnkx1[1]=='thanks')
		{
			innert = 'Thanks for submitting your query. We will get back to you soon!';
		}
	}
	
	function trim(str)
	{
		return str.replace(/^\s+|\s+$/g, "");
	}
			
		</script>
<style>
p{word-spacing:10px;}
</style>
<script type="text/javascript">

var xmlhttp;
function showUser(str)
{
	
	if (str=="")
	{
		document.getElementById("userid").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=showdata;
	xmlhttp.open("GET","edit1.php?q="+str,true);
	xmlhttp.send();
}
function showdata()
{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
		var resp=xmlhttp.responseText;
		arr=new Array();
		arr=resp.split(",");
		document.getElementById("t11").value=arr[0];
		document.getElementById("t12").value=arr[1];
		document.getElementById("t13").value=arr[2];
		document.getElementById("t14").value=arr[3];
		document.getElementById("t15").value=arr[4];
		document.getElementById("t16").value=arr[5];
		document.getElementById("t17").value=arr[6];
		document.getElementById("t18").value=arr[7];
		document.getElementById("t19").value=arr[8];

	}
	if(document.frm1.user.value!=document.frm1.user1.value)
	{
		document.getElementById("t11").value="";
		document.getElementById("t12").value="";
		document.getElementById("t13").value="";
		document.getElementById("t14").value="";
		document.getElementById("t15").value="";
		document.getElementById("t16").value="";
		document.getElementById("t17").value="";
		document.getElementById("t18").value="";
		document.getElementById("t19").value="";
		alert("Please enter valid userid");
		document.frm1.userid.value="";
		document.frm1.userid.focus();
	}
}
</script>
</head>
<body>

<body>
<div class="main">
  <div class="top-main">
<div class="wrapper">
    <div class="top-inner-main" >
      <div class="top-green-left">All Service to Programming Language</div>
      <div class="top-green-right">Any Problem to Contact <span class="white">147609303</span></div>
    </div>
    <div class="logo-main">
      <div class="logo"><a href="home.php"><img src="images/logo.png" alt="logo" class="border" /></a></div>
      <div class="master-card">We Accept All Major Credit Cards &nbsp;&nbsp;<img src="images/visa.png" alt="visa" width="32" height="20" align="absmiddle" />&nbsp;&nbsp; <img src="images/master.png" alt="visa" width="32" height="20" align="absmiddle" /></div>
      <div class="logo-side"><img src="images/cour1.jpg" alt="image" width=200 height=65/></div>
    </div>
    <div class="btn-main">
      <a href="index.php"><div class="btn-current-index">Home</div></a>
      <a href="c/home.php"><div class="btn-b">C</div></a>
      <a href="c++/home.php"><div class="btn-b">C++</div></a>
      <a href="java/home.php"><div class="btn-b">Java</div></a>
      <a href="sql/home.php"><div class="btn-b">SQL</div></a>
      <a href="about.php"><div class="btn-b">About us</div></a>
      <a href="contact.php"><div class="btn-b">Contact Us</div></a>
      <a href="logout.php"><div class="btn-b">Logout</div></a>
    </div>
</div>
  </div>
<div class="wrapper">
<div class="main-banner">
<div class="box_skitter box_skitter_large">
					<ul>
						<li><a href="#fade"><img src="images/banner.jpg" class="fade"/></a></li>
						<li><a href="#fade"><img src="images/banner1.jpg" class="fade"/></a></li>
						<li><a href="#fade"><img src="images/banner2.jpg" class="fade"/></a></li>
						<li><a href="#fade"><img src="images/banner3.jpg" class="fade"/></a></li>
					</ul>
				</div>
</div>
<div class="text-main">
 <div class="content-left">
	<div class="inner-left-main"><span class="blue-hd">Edit Account</span><br />
<form action=edit2.php name=frm1>
<table align=center><tr><td><img src='pic/user1.png'/></td><td><input type=text name=userid onblur="showUser(this.value)"></td></tr></table><br><br>
<table align=center cellspacing='6' cellpadding='6'frame=box>
<tr><th colspan=2><font color=blue size=4><marquee width="100%" height="50px" behavior="alternate" direction="down" scrolldelay="150">
                                  <marquee behavior="alternate" width="100%" scrolldelay="150">Edit Account...</marquee>
                         </marquee><hr></font></th></tr>
<?php
		$a=$_GET[x];
		if($a==1)
		{
			echo"<tr bgcolor=pink><td colspan=2><font color=blue><center>Account updated  Succesfully</font></td></tr>";
		}
		if($a==2||$a==4)
		{
			echo"<tr bgcolor=#eeeeee><td colspan=2><font color=red><center>User Id Invalid</font></td></tr>";
		}
		?>
<tr><th>First Name:</th><td><input type=text name=t1 id=t11 required/*><br></td></tr>
<tr><th>Last Name:</th><td><input type=text name=t2 id=t12 required/*><br></td></tr>
<tr><th>Date of Birth:</th><td><input type=date name=t3 id=t13 required/*><br></td></tr>
<tr><th>Gender:</th><td><select name=t4 id=t14><option value='0'>I am ....</option><option value='male'>Male</option><option value='female'>Female</option><option value='others'>Others</option></select><br></td></tr>
<tr><th>Mobile no.:</th><td><input type=text name=t5 id=t15 required/*><br></td></tr>
<tr><th>E-mail:</th><td><input type=text name=t6 id=t16 required/*><br></td></tr>
<tr><th>Address:</th><td><input type=text name=t7 id=t17 required/*><input type=hidden name=user id=t18><input type=hidden name=user1 id=t19><br></td></tr>
<tr><th>Auth type:</th><td><select name=t8><option value='1'>User</option><option value='2'>Employee</option><br></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;</td><td align=right><input type=submit value=' &nbsp;&nbsp;Update &nbsp;&nbsp;' ><br></td></tr>
</table>
</form>
</div>
		<div class="contct-box-b">
	 <div class="ryt-navigation">
	  
        <div class="pro_headings"> Our Services:</div>
        <a href="home.php" ><div class="services-box"><div class="bullet-services"></div>Home</div></a>
		<a href="change.php" ><div class="services-box"><div class="bullet-services"></div>Change Password</div></a>
<a href="about.php" ><div class="services-box"><div class="bullet-services"></div>About Us</div></a>
<a href="contact.php" ><div class="services-box"><div class="bullet-services"></div>Contact Us</div></a>
<a href="logout.php" ><div class="services-box"><div class="bullet-services"></div>Logout</div></a>
<?php if($a!=1){echo"
<a href='delete.php' ><div class='services-box'><div class='bullet-services'></div>Delete account</div></a>
";}
?>
          </div>
   <br /></div>
</div>
</div>


<div class="footer-main">
<div class="wrapper">
  <div class="footer-inner">
Tutorial View is for learning, training only. We do not warrant the correctness of its content.
		The risk from using it lies entirely with the user.
		<br />
		While using this site, you agree to have read and accepted our
		terms of use and
		privacy policy.<br />
</div>
  <div class="w3-name-main">
    <div class="copy">Copyright 2017  by Refsnes Data. All Rights Reserved. </div>
    <div class="w3"><strong>Designed by: 147609303</div>
  </div>
</div>
</div>
</div>
</body>
</html>
