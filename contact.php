<?php
session_start();// Inialize session
$a=$_SESSION['auth'];
if (!isset($_SESSION['userid'])) // Check, if username session is NOT set then this page will jump to login page
{
header('Location: index.php');
}

 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
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
	function check_value()
	{
		if(trim(document.contacts.author.value)=='')
		{
			alert("Please Enter Your Name");
			document.contacts.author.focus();
			return false;
		}
		if(trim(document.contacts.mobile.value) == '')
		{
			alert("Kindly Enter Your Mobile Number");
			document.contacts.mobile.focus();
			return (false);
		}
		if(document.contacts.email.value == '')
		{
			alert("Kindly Enter Your Email ID");
			document.contacts.email.focus();
			return (false);
		}
		if (document.contacts.email.value && !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(document.contacts.email.value)))
		{
			alert("Invalid Email ID. Kindly enter the correct ID.");
			document.contacts.email.focus();
			return (false);
		}
        if(trim(document.contacts.message.value) == '')
		{
			alert("Kindly Enter Your Message");
			document.contacts.message.focus();
			return (false);
		}
		document.contacts.submit();
	}
</script>

</head>

<body>


<div class="main">
  <div class="top-main">
<div class="wrapper">
    <div class="top-inner-main" >
      <div class="top-green-left">All Service to Programming Language</div>
      <div class="top-green-right">Any Problem to Contact <span class="white">Keshav Kumar</span></div>
    </div>
    <div class="logo-main">
      <div class="logo"><a href="home.php"><img src="images/logo.png" alt="logo" class="border" /></a></div>
      <div class="master-card">We Accept All Major Credit Cards &nbsp;&nbsp;<img src="images/visa.png" alt="visa" width="32" height="20" align="absmiddle" />&nbsp;&nbsp; <img src="images/master.png" alt="visa" width="32" height="20" align="absmiddle" /></div>
      <div class="logo-side"><img src="images/cour1.jpg" alt="image" width=200 height=65/></div>
    </div>
    <div class="btn-main">
      <a href="index.php"><div class="btn-b">Home</div></a>
      <a href="c/home.php"><div class="btn-b">C</div></a>
      <a href="c++/home.php"><div class="btn-b">C++</div></a>
      <a href="java/home.php"><div class="btn-b">Java</div></a>
      <a href="sql/home.php"><div class="btn-b">SQL</div></a>
      <a href="about.php"><div class="btn-b">About us</div></a>
      <a href="contact.php"><div class="btn-current-index">Contact Us</div></a>
      <a href="logout.php"><div class="btn-b">Logout</div></a>
    </div>
</div>
  </div>
<div class="wrapper">
<div class="main-banner">

<img src="images/contactus.jpg" class="fade"/>

</div>
<div class="text-main">
 <div class="content-left">
	<div class="inner-left-main"><span class="blue-hd">Contact Us</span><br />
    <center><img src=pic/map.png /></center>
	<font size=3 >
<dl>
<dt><b>Address</b></dt>
<dd>- F-49 milap Nagar, Uttam Nagar<br><br></dd>
<dt><b>E-mail</b></dt>
<dd>- kkeshav313@gmail.com<br><br></dd>
<dt><b>Mobile No.</b></dt>
<dd>- +91 9899249938 </dd>
</dl>
</font>



	</div>
  

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
    <div class="copy">Copyright 2017 by Refsnes Data. All Rights Reserved. </div>
    <div class="w3"><strong>Designed by: Keshav Kumar</div>
  </div>
</div>
</div>
</div>
</body>
</html>
