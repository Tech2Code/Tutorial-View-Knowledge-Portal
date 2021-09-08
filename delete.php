<?php
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
<title>Delete Account</title>
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
		<script>
			function f1()
			{
				if(confirm("Are you really want to Delete Account"))
				{
					document.frm1.submit();
				}
			}
			<?php
		$a=$_GET[x];
		if($a==1)
		{
			echo"alert('Removed Account  Succesfully');";
		}
		if($a==2)
		{
			echo"alert('User Id/Password Invalid');";
		}
		?>
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
	<div class="contct-box"><span class="blue-hd">Delete Account</span><br />
    <div class="quote-main" >
        <div class="quote-hd">Delete Account</div>
        <div class="form-blue"><span class="form-small-hd">Please enter your details below and we will be in touch.</span><br />
<div class="form-query">
 <form action="del.php"  enctype="multipart/form-data" name="frm1" id="contacts" onsubmit="return check_value();">
   
<div class="form-inner">
          <label for="old"></label><br /><br />
          <input type="text" placeholder="User ID" name="t1" id="mobile" />
    </div>
<div class="form-inner">
          <label for="new1"></label>
          <input type="password" placeholder="Password" name="t2" id="email" />
    </div>

<div class="login-btn"><br/><br />
  <input type="submit" name="button" id="button" value="Submit" />
</div>

  </form>
</div>
        </div>
      </div></div>
  
  <div class="contct-box-b">
	 <div class="ryt-navigation">
	  
        <div class="pro_headings"> Our Services:</div>
        <a href="home.php" ><div class="services-box"><div class="bullet-services"></div>Home</div></a>
		<a href="change.php" ><div class="services-box"><div class="bullet-services"></div>Change Password</div></a>
<a href="about.php" ><div class="services-box"><div class="bullet-services"></div>About Us</div></a>
<a href="contact.php" ><div class="services-box"><div class="bullet-services"></div>Contact Us</div></a>
<a href="logout.php" ><div class="services-box"><div class="bullet-services"></div>Logout</div></a>
<?php if($a!=1){echo"
<a href='edit.php' ><div class='services-box'><div class='bullet-services'></div>Edit account</div></a>
";}
?></div>
          </div>
   <br /></div>
    </div>
  </div>
  <br />
  

    
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
