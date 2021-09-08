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
<title>C++ - Data Types</title>
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
      <a href="../c++/home.php"><div class="btn-current-index">C++</div></a>
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
<tr><td><marquee direction="right" scrolldellay="500" style="color:#996600;font-size:19;"><img src="..\pic\cpp.png" alt=" Java" align="middle" width="180" height="147"/></marquee></td></tr>
<tr ><td><a  class="tab1" target="_top"    href="home.php" >C++ - Home</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"    href="overview.php">C++ - Overview</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="environment.php" >C++ - Environment Setup</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="syntax.php" >C++ - Basic Syntax</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="comments.php" >C++ - Comments</a><br/></td></tr>
<tr><td class="bg"><a  class="tab1" target="_top"   href="datatype.php" >C++ - Data Types</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="variable.php" >C++ - Variable Types</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="scope.php">C++ - Variable Scope</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="constant.php">C++ - Constants/Literals</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="modifier.php">C++ - Modifier Types</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="storage.php">C++ - Stroage Classes</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="operator.php" >C++ - Operators</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="loop.php" >C++ - Loop Types</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="decision.php" >C++ - Decision Making</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="function.php">C++ - Functions</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="number.php">C++ - Numbers</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="array.php">C++ - Arrays</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="string.php" >C++ - Strings</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="pointer.php">C++ - Pointers</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="basic.php">C++ - Basic Input/Output</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="class.php">C++ - Classes & Objects</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="inheritance.php" >C++ - Inheritance</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="overloading.php">C++ - Overloading</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="polymorphism.php">C++ - Polymorphism</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="abstraction.php">C++ - Abstraction</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="encapsulation.php">C++ - Encapsulation</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="interfaces.php" >C++ - Interfaces</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="file.php">C++ - Files & Streams</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="exception.php">C++ - Exception Handling</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="dynamic.php">C++ - Dynamic Memory</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="templates.php">C++ - Templates</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="preprocessor.php">C++ - Preprocessor</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="multithreading.php">C++ - Multithreading</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">C++ Data Types</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="comments.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="variable.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>While doing programming in any programming language, you need to use various variables to store various information. Variables are nothing but reserved memory locations to store values. This means that when you create a variable you reserve some space in memory.</p>
<p>You may like to store information of various data types like character, wide character, integer, floating point, double floating point, boolean etc. Based on the data type of a variable, the operating system allocates memory and decides what can be stored in the reserved memory.</p>
<h2>Primitive Built-in Types:</h2>
<p>C++ offer the programmer a rich assortment of built-in as well as user defined data types. Following table lists down seven basic C++ data types:</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr><th width="50%">Type</th><th>Keyword</th></tr>
<tr><td>Boolean</td><td>bool</td></tr>
<tr><td>Character</td><td>char</td></tr>
<tr><td>Integer</td><td>int</td></tr>
<tr><td>Floating point</td><td>float</td></tr>
<tr><td>Double floating point</td><td>double</td></tr>
<tr><td>Valueless</td><td> void</td></tr>
<tr><td>Wide character</td><td>wchar_t</td></tr>
</tbody></table>
<p>Several of the basic types can be modified using one or more of these type modifiers:</p>
<ul >
<li><p>signed</p></li>
<li><p>unsigned</p></li>
<li><p>short</p></li>
<li><p>long</p></li>
</ul>
<p>The following table shows the variable type, how much memory it takes to store the value in memory, and what is maximum and minimum vaue which can be stored in such type of variables.</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr><th>Type</th><th>Typical Bit Width</th><th>Typical Range</th></tr>
<tr><td>char</td><td>1byte</td><td>-128 to 127 or 0 to 255</td></tr>
<tr><td>unsigned char</td><td>1byte</td><td>0 to 255</td></tr>
<tr><td>signed char</td><td>1byte</td><td>-128 to 127</td></tr>
<tr><td>int</td><td>4bytes</td><td>-2147483648 to 2147483647</td></tr>
<tr><td>unsigned int</td><td>4bytes</td><td>0 to 4294967295</td></tr>
<tr><td>signed int</td><td>4bytes</td><td>-2147483648 to 2147483647</td></tr>
<tr><td>short int</td><td>2bytes</td><td>-32768 to 32767</td></tr>
<tr><td>unsigned short int</td><td>Range</td><td>0 to 65,535</td></tr>
<tr><td>signed short int</td><td>Range</td><td>-32768 to 32767</td></tr>
<tr><td>long int</td><td>4bytes</td><td>-2,147,483,647 to 2,147,483,647</td></tr>
<tr><td>signed long int</td><td>4bytes</td><td>same as long int</td></tr>
<tr><td>unsigned long int</td><td>4bytes</td><td>0 to 4,294,967,295</td></tr>
<tr><td>float</td><td>4bytes</td><td>+/- 3.4e +/- 38 (~7 digits)</td></tr>
<tr><td>double</td><td>8bytes</td><td>+/- 1.7e +/- 308 (~15 digits)</td></tr>
<tr><td>long double</td><td>8bytes</td><td>+/- 1.7e +/- 308 (~15 digits)</td></tr>
<tr><td>wchar_t</td><td>2 or 4 bytes</td><td>1 wide character</td></tr>
</tbody></table>
<p>The sizes of variables might be different from those shown in the above table, depending on the compiler and the computer you are using.</p>
<p>Following is the example, which will produce correct size of various data types on your computer.</p>
<pre class="output">
#include &lt;iostream&gt;
using namespace std;

int main()
{
   cout &lt;&lt; "Size of char : " &lt;&lt; sizeof(char) &lt;&lt; endl;
   cout &lt;&lt; "Size of int : " &lt;&lt; sizeof(int) &lt;&lt; endl;
   cout &lt;&lt; "Size of short int : " &lt;&lt; sizeof(short int) &lt;&lt; endl;
   cout &lt;&lt; "Size of long int : " &lt;&lt; sizeof(long int) &lt;&lt; endl;
   cout &lt;&lt; "Size of float : " &lt;&lt; sizeof(float) &lt;&lt; endl;
   cout &lt;&lt; "Size of double : " &lt;&lt; sizeof(double) &lt;&lt; endl;
   cout &lt;&lt; "Size of wchar_t : " &lt;&lt; sizeof(wchar_t) &lt;&lt; endl;
   return 0;
}
</pre>
<p>This example uses  <b>endl</b>, which inserts a new-line character after every line and &lt;&lt; operator is being used to pass multiple values out to the screen. We are also using <b>sizeof()</b> function to get size of various data types.</p>
<p>When the above code is compiled and executed, it produces the following result which can vary from machine to machine:</p>
<pre class="output">Size of char : 1
Size of int : 4
Size of short int : 2
Size of long int : 4
Size of float : 4
Size of double : 8
Size of wchar_t : 4
</pre>
<h2>typedef Declarations:</h2>
<p>You can create a new name for an existing type using <b>typedef</b>. Following is the simple syntax to define a new type using typedef:</p>
<pre class="output">
typedef type newname; 
</pre>
<p>For example, the following tells the compiler that feet is another name for int:</p>
<pre class="output">
typedef int feet;
</pre>
<p>Now, the following declaration is perfectly legal and creates an integer variable called distance:</p>
<pre class="output">feet distance;</pre>
<h2>Enumerated Types:</h2>
<p>An enumerated type declares an optional type name  and a set of zero or more identifiers that can be used as values of the type. Each enumerator is a constant whose type is the enumeration.</p>
<p>To create an enumeration requires the use of the keyword <b>enum</b>. The general form of an enumeration type is:</p>
<pre class="output">
enum enum-name { list of names } var-list; 
</pre>
<p>Here, the enum-name is the enumeration's type name. The list of names is comma separated.</p>
<p>For example, the following code defines an enumeration of colors called colors and the variable c of type color. Finally, c is assigned the value "blue".</p>
<pre class="output">
enum color { red, green, blue } c;
c = blue;
</pre>
<p>By default, the value of the first name is 0, the second name has the value 1, the third has the value 2, and so on. But you can give a name a specific value by adding an initializer. For example, in the following enumeration, <b>green</b> will have the value 5.</p>
<pre class="output">
enum color { red, green=5, blue };
</pre>
<p>Here, <b>blue</b> will have a value of 6 because each name will be one greater than the one that precedes it.</p>
<br>
<hr>



</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="comments.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
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