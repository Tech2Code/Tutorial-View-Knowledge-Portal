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
<title>C- Header</title>
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
<tr><td Class="bg"><a  class="tab1" target="_top"   href="header.php">C - Header files</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#00f;font-size:18;">C - Header Files</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\images\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="preprocessor.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="type.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>A header file is a file with extension <b>.h</b> which  contains C function declarations and macro definitions and to be shared between several source files. There are two types of header files: the files that the programmer writes and the files that come with your compiler.</p>
<p>You request the use of a header file in your program by including it, with the C preprocessing directive <b>#include</b> like you have seen inclusion of <b>stdio.h</b> header file, which comes along with your compiler.</p>
<p>Including a header file is equal to copying the content of the header file but we do not do it because it will be very much error-prone and it is not a good idea to copy the content of header file in the source files, specially if we have multiple source file comprising our program.</p>
<p>A simple practice in C or C++ programs is that we keep all the constants, macros, system wide global variables, and function prototypes in header files and include that header file wherever it is required.</p>
<h2>Include Syntax</h2>
<p>Both user and system header files are included using the preprocessing directive <b>#include</b>. It has following two forms:</p>
<pre class="output">#include &lt;file&gt;
</pre>
<p>This form is used for system header files. It searches for a file named file in a standard list of system directories. You can prepend directories to this list with the -I option while compiling your source code.</p>
<pre class="output">#include "file"
</pre>
<p>This form is used for header files of your own program. It searches for a file named file in the directory containing the current file. You can prepend directories to this list with the -I option while compiling your source code.</p>
<h2>Include Operation</h2>
<p>The <b>#include</b> directive works by directing the C preprocessor to scan the specified file as input before continuing with the rest of the current source file. The output from the preprocessor contains the output already generated, followed by the output resulting from the included file, followed by the output that comes from the text after the <b>#include</b> directive. For example, if you have a header file header.h as follows:</p>
<pre class="output">char *test (void);
</pre>
<p>and a main program called <i>program.c</i> that uses the header file, like this:</p>
<pre class="output">int x;
#include "header.h"

int main (void)
{
   puts (test ());
}
</pre>
<p>the compiler will see the same token stream as it would if program.c read</p>
<pre class="output">int x;
char *test (void);

int main (void)
{
   puts (test ());
}
</pre>
<h2>Once-Only Headers</h2>
<p>If a header file happens to be included twice, the compiler will process its contents twice and will result an error. The standard way to prevent this is to enclose the entire real contents of the file in a conditional, like this:</p>
<pre class="output">#ifndef HEADER_FILE
#define HEADER_FILE

the entire header file file

#endif
</pre>
<p>This construct is commonly known as a wrapper <b>#ifndef</b>. When the header is included again, the conditional will be false, because HEADER_FILE is defined. The preprocessor will skip over the entire contents of the file, and the compiler will not see it twice.</p>
<h2>Computed  Includes</h2>
<p>Sometimes it is necessary to select one of several different header files to be included into your program. They might specify configuration parameters to be used on different sorts of operating systems, for instance. You could do this with a series of conditionals as follows:</p>
<pre class="output">#if SYSTEM_1
   # include "system_1.h"
#elif SYSTEM_2
   # include "system_2.h"
#elif SYSTEM_3
   ...
#endif
</pre>
<p>But as it grows, it becomes tedious, instead the preprocessor offers the ability to use a macro for the header name. This is called a <b>computed include</b>. Instead of writing a header name as the direct argument of <b>#include</b>, you simply put a macro name there instead:</p>
<pre class="output"> #define SYSTEM_H "system_1.h"
 ...
 #include SYSTEM_H
</pre>
<p>SYSTEM_H will be expanded, and the preprocessor will look for system_1.h as if the <b>#include</b> had been written that way originally. SYSTEM_H could be defined by your Makefile with a -D option.</p>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="preprocessor.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="type.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
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
    <div class="copy">Copyright 2017   by Refsnes Data. All Rights Reserved. </div>
    <div class="w3"><strong>Designed by: Keshav kumar</div>
  </div>
</div>
</div>
</body>
</html>