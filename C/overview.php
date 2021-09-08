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
<title>C - Overview</title>
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
      <a href="../c/home.php"><div class="btn-current-index">C</div></a>
      <a href="../c++/home.php"><div class="btn-b">C++</div></a>
      <a href="../java/home.php"><div class="btn-b">Java</div></a>
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
<tr><td><marquee direction="right" scrolldellay="15" style="color:#00f;font-size:18;"><img src="..\images\c.png" alt="C" width="180" height="147"/></marquee></td></tr>
<tr ><td><a  class="tab1" target="_top"    href="home.php" >C - Home</a><br/></td></tr>
<tr><td class="bg"><a  class="tab1" target="_top"    href="overview.php">C - Overview</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="environment.php" >C - Environment Setup</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="program.php" >C - Program Structure</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="syntax.php" >C - Basic Syntax</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="datatype.php" >C - Data Types</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="variable.php" >C - Variable Types</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="constant.php">C - Constants</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="storage.php">C - Stroage Classes</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="operator.php" >C - Operators</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="decision.php" >C - Decision Making</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="loop.php" >C - Loop Types</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="function.php">C - Functions</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="scope.php">C - Scope Rules</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="array.php">C - Arrays</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="string.php" >C - Strings</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="pointer.php">C - Pointers</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="structure.php">C - Structures</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="union.php">C - Unions</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="input.php" >C - Input & Output</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="file.php">C - File Input/Output</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="preprocessor.php">C - Preprocessor</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="header.php">C - Header files</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="type.php">C - Type Casting</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="error.php" >C - Error Handling</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="recursion.php">C - Recursion</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="argument.php">C - Variables Arguments</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="memory.php">C - Memory Management</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="command.php">C - Command Line Arguments</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../images/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#00f;font-size:18;">C - Language Overview</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\images\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="home.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="environment.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>C is a general-purpose, high-level language that was originally developed by Dennis M. Ritchie to develop the UNIX operating system at Bell Labs. C was originally first implemented on the DEC PDP-11 computer in 1972.</p>
<p>In 1978, Brian Kernighan and Dennis Ritchie produced the first publicly available description of C, now known as the K&amp;R standard.</p>
<p>The UNIX operating system, the C compiler, and essentially all UNIX applications programs have been written in C. The C has now become a widely used professional language for various reasons.</p>
<ul>
<li><p>Easy to learn</p></li>
<li><p>Structured language</p></li>
<li><p>It produces efficient programs.</p></li>
<li><p>It can handle low-level activities.</p></li>
<li><p>It can be compiled on a variety of computer platforms.</p></li>
</ul>
<h2>Facts about C</h2>
<ul>
<li><p>C was invented to write an operating system called UNIX.</p></li>
<li><p>C is a successor of B language which was introduced around 1970</p></li>
<li><p>The language was formalized in 1988 by the American National Standard Institute (ANSI).</p></li>
<li><p>The UNIX OS was totally written in C by 1973.</p></li>
<li><p>Today C is the most widely used and popular System Programming Language.</p></li>
<li><p>Most of the state-of-the-art softwares have been implemented using C.</p></li>
<li><p>Today's most popular Linux OS and RBDMS MySQL have been written in C.</p></li>
</ul>
<h2>Why to use C?</h2>
<p>C was initially used for system development work, in particular the programs that make-up the operating system. C was adopted  as a system development language because it produces code that runs nearly as fast as code written in assembly language. Some examples of the use of C might be:</p>
<ul>
<li><p>Operating Systems</p></li>
<li><p>Language Compilers</p></li>
<li><p>Assemblers</p></li>
<li><p>Text Editors</p></li>
<li><p>Print Spoolers</p></li>
<li><p>Network Drivers</p></li>
<li><p>Modern Programs</p></li>
<li><p>Databases</p></li>
<li><p>Language Interpreters</p></li>
<li><p>Utilities</p></li>
</ul>
<h2>C Programs</h2>
<p>A C program can vary from 3 lines to millions of lines and it should be written into one or more text files with extension <b>".c"</b>; for example, <i>hello.c</i>. You can use <b>"vi"</b>, <b>"vim"</b> or any other text editor to write your C program into a file. </p>
<p>This tutorial assumes that you know how to edit a text file and how to write source code inside a program file.</p>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="home.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="environment.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
</tr>
</td></table>
<td valign="top" width=200>
<table >

<td align=right><a href='../logout.php' target='_top'><img src="../images/logout.ico" width=50 height=50/></a><br>Logout</td></tr>
<?php
if ($a!=1)
{
echo "<tr>
<td ><a href='../delete.php' target='_top'><img src='../images/delete.ico' width=50 height=50/></a><br>Delete Account</td>
<td align=right><a href='../edit.php' target='_top'><img src='../images/edit.ico' width=50 height=50/></a><br>Edit Account</td></tr>";}?>
<tr><td colspan="2"><img src="../images/rp1.gif" width=200 height=180/></td></tr>
<tr><td colspan="2"><img src="../images/rp4.gif" width=200 height=180/></td></tr>
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