<?php
session_start();// Inialize session
$a=$_SESSION['auth'];
if (!isset($_SESSION['userid'])) // Check, if username session is NOT set then this page will jump to login page
{
header('Location: index.php');
}
include("../database/mydb.php");
?>
<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Java - Home</title>
<link rel="stylesheet" type="text/css" href="tutorial.css">
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/mystyle.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/tutorial.gif" type="image/x-icon" />

<!-- Skitter Styles -->
	<link href="../css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
	
	<!-- Skitter JS -->


	<script type="text/javascript" language="javascript" src="../js/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="../js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="../js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" language="javascript" src="../js/jquery.skitter.min.js"></script>
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

<div class="main" width="1020">
  <div class="top-main">
<div class="wrapper">
    <div class="top-inner-main" >
      <div class="top-green-left">All Service to Programming Language</div>
      <div class="top-green-right">Any Problem to Contact <span class="white">Keshav kumar</span></div>
    </div>
    <div class="logo-main">
      <div class="logo"><a href="home.php"><img src="../images/logo.png" alt="logo" class="border" /></a></div>
      <div class="master-card">We Accept All Major Credit Cards &nbsp;&nbsp;<img src="../images/visa.png" alt="visa" width="32" height="20" align="absmiddle" />&nbsp;&nbsp; <img src="../images/master.png" alt="visa" width="32" height="20" align="absmiddle" /></div>
      <div class="logo-side"><img src="../images/cour1.jpg" alt="image" width=200 height=65/></div>
    </div>
    <div class="btn-main">
      <a href="../index.php"><div class="btn-b">Home</div></a>
      <a href="../c/home.php"><div class="btn-b">C</div></a>
      <a href="../c++/home.php"><div class="btn-b">C++</div></a>
      <a href="../java/home.php"><div class="btn-current-index">Java</div></a>
      <a href="../sql/home.php"><div class="btn-b">SQL</div></a>
      <a href="../about.php"><div class="btn-b">About us</div></a>
      <a href="../contact.php"><div class="btn-b">Contact Us</div></a>
      <a href="../logout.php"><div class="btn-b">Logout</div></a>
    </div>
</div>
  </div></div>
<center>
<table width="1020">
<tr><td class="menu2" width="171" align="left" valign="top">
<div style="margin-left:1px;margin-top:5px">
<h2 class="left"></h2>
<table  Align=center class="print" width="180">
<tr><td><marquee direction="right" scrolldellay="500" ><img src="..\pic\java.png" alt=" Java" align="middle" width="180" height="147"/></marquee></td></tr>
<tr ><td  class="bg"><a class="tab1" target="_top"    href="home.php" >Java - Home</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"    href="overview.php">Java - Overview</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="environment.php" >Java - Environment Setup</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="syntax.php" >Java - Basic Syntax</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="datatype.php" >Java - Basic Datatypes</a><br/></td></tr>
<tr><td ><a class="tab1" target="_top"   href="variable.php" >Java - Variable Types</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="modifier.php" >Java - Modifier Types</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="operator.php" >Java - Operators</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="loop.php" >Java - Loop Control</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="decision.php" >Java - Decision Making</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="array.php">Java - Arrays</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="string.php" >Java - String</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="method.php">Java - Methods</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="class.php">Java - Objects & Classes</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="inheritance.php" >Java - Inheritance</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="overriding.php">Java - Overriding</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="polymorphism.php">Java - Polymorphism</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="abstraction.php">Java - Abstraction</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="encapsulation.php">Java - Encapsulation</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="interfaces.php" >Java - Interfaces</a><br/></td></tr>
<tr><td ><a class="tab1" target="_top"   href="package.php">Java - Packages</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="file.php">Java - File & I/O</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="exception.php">Java - Exception</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="multithreading.php">Java - Multithreading</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="applet.php">Java - Applet</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Tutorial</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="home.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="overview.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<h1 align=center>Java Tutorial</h1>
<div>
<p>Java is a high-level programming language originally developed by Sun Microsystems and released in 1995. Java runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX. This tutorial gives a complete understanding of Java.</p>
<p>This reference will take you through simple and practical approach while learning Java Programming language.</p>
</div>
<h1 align=center>Audience</h1>
<p>This reference has been prepared for the beginners to help them understand the basic to advanced concepts related to Java Programming language.</p>
<h1 align=center>Prerequisites</h1>
<p>Before you start doing practice with various types of examples given in this reference, I'm making an assumption that you are already aware about what is a computer program and what is a computer programming language?</p>
<h1 align=center>Compile/Execute Java Programs</h1>
<p>For most of the examples given in this tutorial you will find <b>Try it</b> option, so just make use of it and enjoy your learning.</p>
<pre style="cursor: default;" class="output">
public class MyFirstJavaProgram
{
	public static void main(String []args)
	{
		System.out.println("Hello World");
	}
}
</pre>
<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="../home.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="overview.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
</td></table>
<td valign="top" width=200>
<table >

<td align=right><a href='../logout.php' target='_top'><img src="../pic/logout.ico" width=50 height=50/></a><br>Logout</td></tr>
<?php
if ($a!=1)
{
echo "<tr>
<td ><a href='../delete.php' target='_top'><img src='../pic/delete.ico' width=50 height=50/></a><br>Delete Account</td>
<td align=right><a href='../edit.php' target='_top'><img src='../pic/edit.ico' width=50 height=50/></a><br>Edit Account</td></tr>";}?>
<tr><td colspan="2"><img src="../pic/rp1.gif" width=200 height=180/></td></tr>
<tr><td colspan="2"><img src="../pic/rp4.gif" width=200 height=180/></td></tr>
</td>


</tr>
</table>
</div></table>
</center>

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

</body>
</html>