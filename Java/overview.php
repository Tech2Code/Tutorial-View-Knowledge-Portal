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
<title>Java - Overview</title>
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
<tr ><td ><a class="tab1" target="_top"    href="home.php" >Java - Home</a><br/></td></tr>
<tr><td class="bg"><a class="tab1" target="_top"    href="overview.php">Java - Overview</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Overview</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="home.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="environment.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>Java programming language was originally developed by Sun Microsystems which was initiated by James Gosling and released in 1995 as core component of Sun Microsystems' Java platform (Java 1.0 [J2SE]).</p>
<p>As of December 2008, the latest release of the Java Standard Edition is 6 (J2SE). With the advancement of Java and its widespread popularity, multiple configurations were built to suite various types of platforms. Ex: J2EE for Enterprise Applications, J2ME for Mobile Applications.</p>
<p>Sun Microsystems has renamed the new J2 versions as Java SE, Java EE and Java ME respectively. Java is guaranteed to be <b>Write Once, Run Anywhere.</b></p>
<p>Java is:</p>
<ul>
<li><p><b>Object Oriented:</b> In Java, everything is an Object. Java can be easily extended since it is based on the Object model.</p></li>
<li><p><b>Platform independent:</b> Unlike many other programming languages including C and C++, when Java is compiled, it is not compiled into platform specific machine, rather into platform independent byte code. This byte code is distributed over the web and interpreted by virtual Machine (JVM) on whichever platform it is being run.</p></li>
<li><p><b>Simple:</b>Java is designed to be easy to learn. If you understand the basic concept of OOP Java would be easy to master.</p></li>
<li><p><b>Secure:</b> With Java's secure feature it enables to develop virus-free, tamper-free systems. Authentication techniques are based on public-key encryption.</p></li>
<li><p><b>Architectural-neutral :</b>Java compiler generates an architecture-neutral object file format which makes the compiled code to be executable on many processors, with the presence of Java runtime system.</p></li>
<li><p><b>Portable:</b>Being architectural-neutral and having no implementation dependent aspects of the specification makes Java portable. Compiler in Java is written in ANSI C with a clean portability boundary which is a POSIX subset.</p></li>
<li><p><b>Robust:</b>Java makes an effort to eliminate error prone situations by emphasizing mainly on compile time error checking and runtime checking.</p></li>
<li><p><b>Multithreaded:</b> With Java's multithreaded feature it is possible to write programs that can do many tasks simultaneously. This design feature allows developers to construct smoothly running interactive applications.</p></li>
<li><p><b>Interpreted:</b>Java byte code is translated on the fly to native machine instructions and is not stored anywhere. The development process is more rapid and analytical since the linking is an incremental and light weight process. </p></li>
<li><p><b>High Performance:</b> With the use of Just-In-Time compilers, Java enables high performance.</p></li>
<li><p><b>Distributed:</b>Java is designed for the distributed environment of the internet.</p></li>
<li><p><b>Dynamic:</b> Java is considered to be more dynamic than C or C++ since it is designed to adapt to an evolving environment. Java programs can carry extensive amount of run-time information that can be used to verify and resolve accesses to objects on run-time.</p></li>
</ul><br/>
<h2><u>History of Java:</u></h2>
<p>James Gosling initiated the Java language project in June 1991 for use in one of his many set-top box projects. The language, initially called Oak after an oak tree that stood outside Gosling's office, also went by the name Green and ended up later being renamed as Java, from a list of random words.</p>
<p>Sun released the first public implementation as Java 1.0 in 1995. It promised <b>Write Once, Run Anywhere</b> (WORA), providing no-cost run-times on popular platforms. </p>
<p>On 13 November 2006, Sun released much of Java as free and open source software under the terms of the GNU General Public License (GPL).</p>
<p>On 8 May 2007, Sun finished the process, making all of Java's core code free and open-source, aside from a small portion of code to which Sun did not hold the copyright.</p>
<br/><h2 ><u>Tools you will need:</u></h2>
<p>For performing the examples discussed in this tutorial, you will need a Pentium 200-MHz computer with a minimum of 64 MB of RAM (128 MB of RAM recommended).</p>
<p>You also will need the following softwares:</p>
<ul >
<li><p>Linux 7.1 or Windows 95/98/2000/XP operating system.</p></li>
<li><p>Java JDK 5</p></li>
<li><p>Microsoft Notepad or any other text editor</p></li>
</ul>
<p>This tutorial will provide the necessary skills to create GUI, networking, and Web applications using Java.</p><br/>
<h2><u>What is Next?</u></h2>
<p>Next chapter will guide you to where you can obtain Java and its documentation. Finally, it instructs you on how to install Java and prepare an environment to develop Java applications.</p><br/><br/>





</td>
</td>
<tr>
<td style="text-align:left;"><a  href="home.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="environment.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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