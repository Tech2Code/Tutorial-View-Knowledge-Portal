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
<title>C- Environment</title>
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
<tr><td><a  class="tab1" target="_top"    href="overview.php">C - Overview</a><br/></td></tr>
<tr><td class="bg"><a  class="tab1" target="_top"   href="environment.php" >C - Environment Setup</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#00f;font-size:18;">C - Environment Setup</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\images\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="overview.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="program.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<h2>Local Environment Setup</h2>
<p>If you are still willing to set up your environment for C programming language, you need the following two softwares available on your computer, (a) Text Editor and (b) The C Compiler.</p>
<h2>Text Editor</h2>
<p>This will be used to type your program. Examples of few editors include Windows Notepad, OS Edit command, Brief, Epsilon, EMACS, and vim or vi.</p>
<p>Name and version of text editor can vary on different operating systems. For example, Notepad will be used on Windows, and vim or vi can be used on windows as well as Linux or UNIX.</p>
<p>The files you create with your editor are called source files and contain program source code. The source files for C programs are typically named with the extension "<b>.c</b>".</p>
<p>Before starting your programming, make sure you have one text editor in place and you have enough experience to write a computer program, save it in a file, compile it and finally execute it.</p>
<h2>The C Compiler</h2>
<p>The source code written in source file is the human readable source for your program. It needs to be "compiled", to turn into machine language so that your CPU can actually execute the program as per instructions given.</p>
<p>This C programming language compiler will be used to compile your source code into final executable program. I assume you have basic knowledge about a programming language compiler.</p>
<p>Most frequently used and free available compiler is GNU C/C++ compiler, otherwise you can have compilers either from HP or Solaris if you have respective Operating Systems.</p>
<p>Following section guides you on how to install GNU C/C++ compiler on various OS. I'm mentioning C/C++ together because GNU gcc compiler works for both C and C++ programming languages.</p>
<h2>Installation on UNIX/Linux</h2>
<p>If you are using <b>Linux or UNIX</b>, then check whether GCC is installed on your system by entering the following command from the command line:</p>
<pre class="output">$ gcc -v
</pre>
<p>If you have GNU compiler installed on your machine, then it should print a message something as follows:</p>
<pre class="output">Using built-in specs.
Target: i386-redhat-linux
Configured with: ../configure --prefix=/usr .......
Thread model: posix
gcc version 4.1.2 20080704 (Red Hat 4.1.2-46)
</pre>
<p>If GCC is not installed, then you will have to install it yourself using the detailed instructions available at <a href="http://gcc.gnu.org/install/" rel="nofollow" target="_blank">http://gcc.gnu.org/install/</a></p>
<p>This tutorial has been written based on Linux and all the given examples have been compiled on Cent OS flavor of Linux system.</p>
<h2>Installation on Mac OS</h2>
<p>If you use Mac OS X, the easiest way to obtain GCC is to download the Xcode development environment from Apple's web site and follow the simple installation instructions. Once you have Xcode setup, you will be able to use GNU compiler for C/C++.</p>
<p>Xcode is currently available at <a href="http://developer.apple.com/technologies/tools/" rel="nofollow" target="_blank">developer.apple.com/technologies/tools/</a>.</p>
<h2>Installation on Windows</h2>
<p>To install GCC at Windows you need to install MinGW. To install MinGW, go to the MinGW homepage, <a href="http://www.mingw.org/" rel="nofollow" target="_blank"> www.mingw.org</a>, and follow the link to the MinGW download page. Download the latest version of the MinGW installation program, which should be named MinGW-&lt;version&gt;.exe.</p>
<p>While installing MinWG, at a minimum, you must install gcc-core, gcc-g++, binutils, and the MinGW runtime, but you may wish to install more.</p>
<p>Add the bin subdirectory of your MinGW installation to your <b>PATH</b> environment variable, so that you can specify these tools on the command line by their simple names.</p>
<p>When the installation is complete, you will be able to run gcc, g++, ar, ranlib, dlltool, and several other GNU tools from the Windows command line.</p>



<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="overview.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="program.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
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