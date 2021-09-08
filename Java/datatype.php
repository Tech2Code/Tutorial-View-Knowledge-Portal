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
<title>Java - Data Types</title>
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
<tr><td><a class="tab1" target="_top"    href="overview.php">Java - Overview</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="environment.php" >Java - Environment Setup</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="syntax.php" >Java - Basic Syntax</a><br/></td></tr>
<tr><td class="bg"><a class="tab1" target="_top"   href="datatype.php" >Java - Basic Datatypes</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Basic Data Types</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="syntax.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="variable.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>

<p>Variables are nothing but reserved memory locations to store values. This means that when you create a variable you reserve some space in memory.</p>
<p>Based on the data type of a variable, the operating system allocates memory and decides what can be stored in the reserved memory. Therefore, by assigning different data types to variables, you can store integers, decimals, or characters in these variables.</p>
<p>There are two data types available in Java:</p>
<ul >
<li><p>Primitive Data Types</p></li>
<li><p>Reference/Object Data Types</p></li>
</ul>
<h2>Primitive Data Types:</h2>
<p>There are eight primitive data types supported by Java. Primitive data types are predefined by the language and named by a keyword. Let us now look into detail about the eight primitive data types.</p>
<h2>byte:</h2>
<ul >
<li><p>Byte data type is an 8-bit signed two's complement integer.</p></li>
<li><p>Minimum value is -128 (-2^7)</p></li>
<li><p>Maximum value is 127 (inclusive)(2^7 -1)</p></li>
<li><p>Default value is 0</p></li>
<li><p>Byte data type is used to save space in large arrays, mainly in place of integers, since a byte is four times smaller than an int.</p></li>
<li><p>Example:  byte a = 100 , byte b = -50</p></li>
</ul>
<h2>short:</h2>
<ul >
<li><p>Short data type is a 16-bit signed two's complement integer. </p></li>
<li><p>Minimum value is -32,768 (-2^15)</p></li>
<li><p>Maximum value is 32,767 (inclusive) (2^15 -1)</p></li>
<li><p>Short data type can also be used to save memory as byte data type. A short is 2 times smaller than an int</p></li>
<li><p>Default value is 0.</p></li>
<li><p>Example: short  s = 10000, short r = -20000</p></li>
</ul>
<h2>int:</h2>
<ul >
<li><p>Int data type is a 32-bit signed two's complement integer.</p></li>
<li><p>Minimum value is - 2,147,483,648.(-2^31)</p></li>
<li><p>Maximum value is 2,147,483,647(inclusive).(2^31 -1)</p></li>
<li><p>Int is generally used as the default data type for integral values unless there is a concern about memory.</p></li>
<li><p>The default value is 0.</p></li>
<li><p>Example: int a = 100000, int b = -200000</p></li>
</ul>
<h2>long:</h2>
<ul >
<li><p>Long data type is a 64-bit signed two's complement integer. </p></li>
<li><p>Minimum value is -9,223,372,036,854,775,808.(-2^63)</p></li>
<li><p>Maximum value is 9,223,372,036,854,775,807 (inclusive). (2^63 -1)</p></li>
<li><p>This type is used when a wider range than int is needed.</p></li>
<li><p>Default value is 0L.</p></li>
<li><p>Example: long a = 100000L, int b = -200000L</p></li>
</ul>
<h2>float:</h2>
<ul >
<li><p>Float data type is a single-precision 32-bit IEEE 754 floating point. </p></li>
<li><p>Float is mainly used to save memory in large arrays of floating point numbers.</p></li>
<li><p>Default value is 0.0f.</p></li>
<li><p>Float data type is never used for precise values such as currency. </p></li>
<li><p>Example: float f1 = 234.5f</p></li>
</ul>
<h2>double:</h2>
<ul >
<li><p>double data type is a double-precision 64-bit IEEE 754 floating point.</p></li> 
<li><p>This data type is generally used as the default data type for decimal values, generally the default choice. </p></li>
<li><p>Double data type should never be used for precise values such as currency.</p></li>
<li><p>Default value is 0.0d.</p></li>
<li><p>Example: double d1 = 123.4</p></li>
</ul>
<h2>boolean:</h2>
<ul >
<li><p>boolean data type represents one bit of information.</p></li>
<li><p>There are only two possible values: true and false.</p></li>
<li><p>This data type is used for simple flags that track true/false conditions.</p></li>
<li><p>Default value is false.</p></li>
<li><p>Example: boolean one = true</p></li>
</ul>
<h2>char:</h2>
<ul >
<li><p>char data type is a single 16-bit Unicode character. </p></li>
<li><p>Minimum value is '\u0000' (or 0).</p></li>
<li><p>Maximum value is  '\uffff' (or 65,535 inclusive).</p></li>
<li><p>Char data type is used to store any character.</p></li> 
<li><p>Example: char letterA ='A'</p></li>
</ul>
<h2>Reference Data Types:</h2>
<ul >
<li><p>Reference variables are created using defined constructors of the classes. They are used to access objects. These variables are declared to be of a specific type that cannot be changed. For example, Employee, Puppy etc.</p></li> 
<li><p>Class objects, and various type of array variables come under reference data type.</p></li>
<li><p>Default value of any reference variable is null.</p></li> 
<li><p>A reference variable can be used to refer to any object of the declared type or any compatible type.</p></li> 
<li><p>Example: Animal animal = new Animal("giraffe");</p></li> 
</ul>
<h2>Java Literals:</h2>
<p>A literal is a source code representation of a fixed value. They are represented directly in the code without any computation.</p>
<p>Literals can be assigned to any primitive type variable. For example:</p>
<pre class="output">
byte a = 68;
char a = 'A'
</pre>
<p>byte, int, long, and short can be expressed in decimal(base 10), hexadecimal(base 16) or octal(base 8) number systems as well.</p>
<p>Prefix 0 is used to indicate octal and prefix 0x indicates hexadecimal when using these number systems for literals. For example:</p>
<pre class="output">
int decimal = 100;
int octal = 0144;
int hexa =  0x64;
</pre>
<p>String literals in Java are specified like they are in most other languages by enclosing a sequence of characters between a pair of double quotes. Examples of string literals are:</p>
<pre class="output">
"Hello World"
"two\nlines"
"\"This is in quotes\""
</pre>
<p>String and char types of literals can contain any Unicode characters. For example:</p>
<pre class="output">
char a = '\u0001';
String a = "\u0001";
</pre>
<p>Java language supports few special escape sequences for String and char literals as well. They are:</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr><th>Notation</th><th>Character represented</th></tr>
<tr><td>\n</td><td>Newline (0x0a)</td></tr>
<tr><td>\r</td><td>Carriage return (0x0d)</td></tr>
<tr><td>\f</td><td>Formfeed (0x0c)</td></tr>
<tr><td>\b</td><td>Backspace (0x08)</td></tr>
<tr><td>\s</td><td>Space (0x20)</td></tr>
<tr><td>\t</td><td>tab</td></tr>
<tr><td>\" </td><td>Double quote</td></tr>
<tr><td>\'</td><td>Single quote</td></tr>
<tr><td>\\</td><td>backslash</td></tr>
<tr><td>\ddd</td><td>Octal character (ddd)</td></tr>
<tr><td>\uxxxx</td><td>Hexadecimal UNICODE character (xxxx)</td></tr>
</tbody></table>
<h2>What is Next?</h2>
<p>This chapter explained you various data types, next topic explains different variable types and their usage. This will give you a good understanding about how they can be used in the Java classes, interfaces, etc.</p>
<br>




<hr/>
</td>
</td><tr>
<td style="text-align:left;"><a  href="syntax.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="variable.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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