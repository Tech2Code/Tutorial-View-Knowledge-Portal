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
<title>C- Data Types</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="datatype.php" >C - Data Types</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#00f;font-size:18;">C - Data Types</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\images\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="syntax.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="variable.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>In the C programming language, data types refer to an extensive system used for declaring variables or functions of different types. The type of a variable determines how much space it occupies in storage and how the bit pattern stored is interpreted.</p>
<p>The types in C can be classified as follows:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th>S.N.</th><th>Types and Description</th></tr>
<tr><td>1</td><td><b>Basic Types:</b><br>They are arithmetic types and consists of the two types: (a) integer types and (b) floating-point types.</td></tr>
<tr><td>2</td><td><b>Enumerated types:</b><br>They are again arithmetic types and they are used to define variables that can only be assigned certain discrete integer values throughout the program.</td></tr>
<tr><td>3</td><td><b>The type void:</b><br>The type specifier <i>void</i> indicates that no value is available.</td></tr>
<tr><td>4</td><td><b>Derived types:</b><br>They include (a) Pointer types, (b) Array types, (c) Structure types, (d) Union types and (e) Function types.</td></tr>
</tbody></table>
<p>The array types and structure types are referred to collectively as the aggregate types. The type of a function specifies the type of the function's return value. We will see basic types in the following section, whereas, other types will be covered in the upcoming chapters.</p>
<h2>Integer Types</h2>
<p>Following table gives you details about standard integer types with its storage sizes and value ranges:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th>Type</th><th>Storage size</th><th>Value range</th></tr>
<tr><td>char</td><td>1 byte</td><td>-128 to 127 or 0 to 255</td></tr>
<tr><td>unsigned char</td><td>1 byte</td><td>0 to 255</td></tr>
<tr><td>signed char</td><td>1 byte</td><td>-128 to 127</td></tr>
<tr><td>int</td><td>2 or 4 bytes</td><td>-32,768 to 32,767 or -2,147,483,648 to 2,147,483,647</td></tr>
<tr><td>unsigned int</td><td>2 or 4 bytes</td><td>0 to 65,535 or 0 to 4,294,967,295</td></tr>
<tr><td>short</td><td>2 bytes</td><td>-32,768 to 32,767</td></tr>
<tr><td>unsigned short</td><td>2 bytes</td><td>0 to 65,535</td></tr>
<tr><td>long</td><td>4 bytes</td><td>-2,147,483,648 to 2,147,483,647</td></tr>
<tr><td>unsigned long</td><td>4 bytes</td><td>0 to 4,294,967,295</td></tr>
</tbody></table>
<p>To get the exact size of a type or a variable on a particular platform, you can use the <b>sizeof</b> operator. The expressions <i>sizeof(type)</i> yields the storage size of the object or type in bytes. Following is an example to get the size of int type on any machine:</p>
<pre class="output">#include &lt;stdio.h&gt;
#include &lt;limits.h&gt;

int main()
{
   printf("Storage size for int : %d \n", sizeof(int));
   
   return 0;
}
</pre>
<p>When you compile and execute the above program it produces the following result on Linux:</p>
<pre class="output">Storage size for int : 4
</pre>
<h2>Floating-Point Types</h2>
<p>Following table gives you details about standard floating-point types with storage sizes and value ranges and their precision:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th>Type</th><th>Storage size</th><th>Value range</th><th>Precision</th></tr>
<tr><td>float</td><td>4 byte</td><td>1.2E-38 to 3.4E+38</td><td>6 decimal places</td></tr>
<tr><td>double</td><td>8 byte</td><td>2.3E-308 to 1.7E+308</td><td>15 decimal places</td></tr>
<tr><td>long double</td><td>10 byte</td><td>3.4E-4932 to 1.1E+4932</td><td>19 decimal places</td></tr>
</tbody></table>
<p>The header file float.h defines macros that allow you to use these values and other details about the binary representation of real numbers in your programs. Following example will print storage space taken by a float type and its range values:</p>
<pre class="output">#include &lt;stdio.h&gt;
#include &lt;float.h&gt;

int main()
{
   printf("Storage size for float : %d \n", sizeof(float));
   printf("Minimum float positive value: %E\n", FLT_MIN );
   printf("Maximum float positive value: %E\n", FLT_MAX );
   printf("Precision value: %d\n", FLT_DIG );
   
   return 0;
}
</pre>
<p>When you compile and execute the above program, it produces the following result on Linux:</p>
<pre class="output">Storage size for float : 4
Minimum float positive value: 1.175494E-38
Maximum float positive value: 3.402823E+38
Precision value: 6
</pre>
<h2>The void Type</h2>
<p>The void type specifies that no value is available. It is used in three kinds of situations:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th>S.N.</th><th>Types and Description</th></tr>
<tr><td>1</td><td><b>Function returns as void</b><br>There are various functions in C which do not return value  or you can say they return void. A function with no return value has the return type as void. For example <b>void exit (int status);</b></td></tr>
<tr><td>2</td><td><b>Function arguments as void</b><br>There are various functions in C which do not accept any parameter. A function with no parameter can accept as a void. For example, <b>int rand(void);</b></td></tr>
<tr><td>3</td><td><b>Pointers to void </b><br>A pointer of type void * represents the address of an object, but not its type. For example a memory allocation function <b>void *malloc( size_t size );</b> returns a pointer to void which can be casted to any data type.</td></tr>
</tbody></table>
<p>The void type may not be understood to you at this point, so let us proceed and we will cover these concepts in the upcoming chapters.</p>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="syntax.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="variable.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
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
    <div class="copy">Copyright 2015  by Refsnes Data. All Rights Reserved. </div>
    <div class="w3"><strong>Designed by: Keshav kumar</div>
  </div>
</div>
</div>
</center>
</body>
</html>