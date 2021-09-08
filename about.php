<?php
session_start();// Inialize session
$a=$_SESSION['auth'];
if (!isset($_SESSION['userid'])) // Check, if username session is NOT set then this page will jump to login page
{
header('Location: index.php');
}
$con=mysqli_connect("localhost","root","","tutorial");
mysqli_connect("localhost","root","");
mysqli_select_db($con,"tutorial");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>
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


</head>

<body>

<body>
<div class="main">
  <div class="top-main">
<div class="wrapper">
    <div class="top-inner-main" >
      <div class="top-green-left">All Service to Programming Language</div>
      <div class="top-green-right">Any Problem to Contact <span class="white">Keshav kumar</span></div>
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
      <a href="about.php"><div class="btn-current-index">About us</div></a>
      <a href="contact.php"><div class="btn-b">Contact Us</div></a>
      <a href="logout.php"><div class="btn-b">Logout</div></a>
    </div>
</div>
  </div>
<div class="wrapper">
<div class="main-banner">

<a href="#fade"><img src="images/about.png" class="fade"/>

</div>
<div class="text-main">
 <div class="content-left">
	<div class="inner-left-main"><span class="blue-hd">Company</span><br />
    
	<p>Tutorial view originated from the idea that there exists a class of readers who respond better to online content and prefer to learn new skills at their own pace from the comforts of their drawing rooms.</p>
<p>The journey commenced with a single tutorial on HTML in 2017 and elated by the response it generated, we worked our way to adding fresh tutorials to our repository which now proudly flaunts a wealth of tutorials and allied articles on topics ranging from programming languages to web designing to academics and much more.</p>
<p>Our content and resources are freely available and we prefer to keep it that way to encourage our readers acquire as many skills as they would like to. We don’t force our readers to sign up with us or submit their details either. No preconditions and no impediments. Simply Easy Learning!</p>
<br /><span class="blue-hd">Mission</span><br />

<p>Our mission is to deliver <b>Simply Easy Learning</b> with clear, crisp, and to-the-point content on a wide range of technical and non-technical subjects without any preconditions and impediments.</p>
<table align=center cellspacing='8' cellpadding='8'><tr><td><img src='images/online.png' /><br><p>Instructor led online training delivered by industry experts on various technical and non-technical subjects and it's really in simple and easy steps.</p></td></tr><tr><td><img src='images/tutorial1.png' /><br><p>The biggest online tutorials library having a collection of the most acclaimed tutorials on various technical and non technical subjects.</p></td></tr><tr><td><img src='images/coding.png' /><br><p>Edit, Compile, Execute and Share your C, C++, Java,SQL or any project in your social networks using simple links.</p></td></tr></table>

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
    <div class="w3"><strong>Designed by: Keshav kumar</div>
  </div>
</div>
</div>
</div>
</body>
</html>
