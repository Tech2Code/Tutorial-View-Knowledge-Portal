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
<title>C++ - Number</title>
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
<tr><td><a  class="tab1" target="_top"   href="datatype.php" >C++ - Data Types</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="variable.php" >C++ - Variable Types</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="scope.php">C++ - Variable Scope</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="constant.php">C++ - Constants/Literals</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="modifier.php">C++ - Modifier Types</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="storage.php">C++ - Stroage Classes</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="operator.php" >C++ - Operators</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="loop.php" >C++ - Loop Types</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="decision.php" >C++ - Decision Making</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="function.php">C++ - Functions</a><br/></td></tr>
<tr><td class="bg"><a  class="tab1" target="_top"   href="number.php">C++ - Numbers</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">Numbers In C++</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="function.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="array.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>Normally, when we work with Numbers, we use primitive data types such as int, short, long, float and double, etc. The number data types, their possible values and number ranges have been explained while discussing C++ Data Types.</p>
<h2>Defining Numbers in C++:</h2>
<p>You have already defined numbers in various examples given in previous chapters. Here is another consolidated example to define various types of numbers in C++:</p>
<pre class="output">
#include &lt;iostream&gt;
using namespace std;
 
int main ()
{
   // number definition:
   short  s;
   int    i;
   long   l;
   float  f;
   double d;
   
   // number assignments;
   s = 10;      
   i = 1000;    
   l = 1000000; 
   f = 230.47;  
   d = 30949.374;
   
   // number printing;
   cout &lt;&lt; "short  s :" &lt;&lt; s &lt;&lt; endl;
   cout &lt;&lt; "int    i :" &lt;&lt; i &lt;&lt; endl;
   cout &lt;&lt; "long   l :" &lt;&lt; l &lt;&lt; endl;
   cout &lt;&lt; "float  f :" &lt;&lt; f &lt;&lt; endl;
   cout &lt;&lt; "double d :" &lt;&lt; d &lt;&lt; endl;
 
   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">
short  s :10
int    i :1000
long   l :1000000
float  f :230.47
double d :30949.4
</pre>
<h2>Math Operations in C++:</h2>
<p>In addition to the various functions you can create, C++ also includes some useful functions you can use. These functions are available in standard C and C++ libraries and called <b>built-in</b> functions. These are functions that can be included in your program and then use.</p>
<p>C++ has a rich set of mathematical operations, which can be performed on various numbers. Following table lists down some useful built-in mathematical functions available in C++.</p>
<p>To utilize these functions you need to include the math header file <b>&lt;cmath&gt;</b>.</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr><th width="5%">S.N.</th><th>Function &amp; Purpose</th></tr>
<tr><td>1</td><td><b>double cos(double);</b><br>This function takes an angle (as a double) and returns the cosine.</td></tr>
<tr><td>2</td><td><b>double sin(double);</b><br>This function takes an angle (as a double) and returns the sine.</td></tr>
<tr><td>3</td><td><b>double tan(double);</b><br>This function takes an angle (as a double) and returns the tangent.</td></tr>
<tr><td>4</td><td><b>double log(double);</b><br>This function takes a number and returns the natural log of that number.</td></tr>
<tr><td>5</td><td><b>double pow(double, double);</b><br>The first is a number you wish to raise and the second is the power you wish to raise it to.</td></tr>
<tr><td>6</td><td><b>double hypot(double, double);</b><br>If you pass this function the length of two sides of a right triangle, it will return you the length of the hypotenuse.</td></tr>
<tr><td>7</td><td><b>double sqrt(double);</b><br>You pass this function a number and it gives you this square root.</td></tr>
<tr><td>8</td><td><b>int abs(int);</b><br>This function returns the absolute value of an integer that is passed to it.</td></tr>
<tr><td>9</td><td><b>double fabs(double);</b><br>This function returns the absolute value of any decimal number passed to it.</td></tr>
<tr><td>10</td><td><b>double floor(double);</b><br>Finds the integer which is less than or equal to the argument passed to it.</td></tr>
</tbody></table>
<p>Following a simple example to show few of the mathematical operations:</p>
<pre class="output">
#include &lt;iostream&gt;
#include &lt;cmath&gt;
using namespace std;
 
int main ()
{
   // number definition:
   short  s = 10;
   int    i = -1000;
   long   l = 100000;
   float  f = 230.47;
   double d = 200.374;

   // mathematical operations;
   cout &lt;&lt; "sin(d) :" &lt;&lt; sin(d) &lt;&lt; endl;
   cout &lt;&lt; "abs(i)  :" &lt;&lt; abs(i) &lt;&lt; endl;
   cout &lt;&lt; "floor(d) :" &lt;&lt; floor(d) &lt;&lt; endl;
   cout &lt;&lt; "sqrt(f) :" &lt;&lt; sqrt(f) &lt;&lt; endl;
   cout &lt;&lt; "pow( d, 2) :" &lt;&lt; pow(d, 2) &lt;&lt; endl;
 
   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">
sign(d) :-0.634939
abs(i)  :1000
floor(d) :200
sqrt(f) :15.1812
pow( d, 2 ) :40149.7
</pre>
<h2>Random Numbers in C++:</h2>
<p>There are many cases where you will wish to generate a random number. There are actually two functions you will need to know about random number generation. The first is <b>rand()</b>, this function will only return a pseudo random number. The way to fix this is to first call the <b>srand()</b> function.</p>
<p>Following is a simple example to generate few random numbers. This example makes use of <b>time()</b> function to get the number of seconds on your system time, to randomly seed the rand() function: </p>
<pre class="output">
#include &lt;iostream&gt;
#include &lt;ctime&gt;
#include &lt;cstdlib&gt;

using namespace std;
 
int main ()
{
   int i,j;
 
   // set the seed
   srand( (unsigned)time( NULL ) );

   /* generate 10  random numbers. */
   for( i = 0; i &lt; 10; i++ )
   {
      // generate actual random number
      j= rand();
      cout &lt;&lt;" Random Number : " &lt;&lt; j &lt;&lt; endl;
   }

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">
 Random Number : 1748144778
 Random Number : 630873888
 Random Number : 2134540646
 Random Number : 219404170
 Random Number : 902129458
 Random Number : 920445370
 Random Number : 1319072661
 Random Number : 257938873
 Random Number : 1256201101
 Random Number : 580322989
</pre>
<br>
<hr>




</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="function.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="array.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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