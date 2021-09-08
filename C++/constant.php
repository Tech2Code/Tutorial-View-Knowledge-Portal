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
<title>C++ - Constant</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="constant.php">C++ - Constants/Literals</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">C++ Constants/Literals</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="scope.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="modifier.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>Constants refer to fixed values that the program may not alter and they are called <b>literals</b>.</p>
<p>Constants can be of any of the basic data types and can be divided into Integer Numerals, Floating-Point Numerals, Characters, Strings and Boolean Values.</p>
<p>Again, constants are treated just like regular variables except that their values cannot be modified after their definition.</p>
<h2>Integer literals:</h2>
<p>An integer literal can be a decimal, octal, or hexadecimal constant. A prefix specifies the base or radix: 0x or 0X for hexadecimal, 0 for octal, and nothing for decimal.</p>
<p>An integer literal can also have a suffix that is a combination of U and L, for unsigned and long, respectively. The suffix can be uppercase or lowercase and can be in any order.</p>
<p>Here are some examples of integer literals:</p>
<pre class="output">
212         // Legal
215u        // Legal
0xFeeL      // Legal
078         // Illegal: 8 is not an octal digit
032UU       // Illegal: cannot repeat a suffix
</pre>
<p>Following are other examples of various types of Integer literals:</p>
<pre class="output">
85         // decimal
0213       // octal
0x4b       // hexadecimal
30         // int
30u        // unsigned int
30l        // long
30ul       // unsigned long
</pre>
<h2>Floating-point literals:</h2>
<p>A floating-point literal has an integer part, a decimal point, a fractional part, and an exponent part. You can represent floating point literals either in decimal form or exponential form.</p>
<p>While representing using decimal form, you must include the decimal point, the exponent, or both and while representing using exponential form, you must include the integer part, the fractional part, or both. The signed exponent is introduced by e or E.</p>
<p>Here are some examples of floating-point literals:</p>
<pre class="output">
3.14159       // Legal
314159E-5L    // Legal
510E          // Illegal: incomplete exponent
210f          // Illegal: no decimal or exponent
.e55          // Illegal: missing integer or fraction
</pre>
<h2>Boolean literals:</h2>
<p>There are two Boolean literals and they are part of standard C++ keywords:</p>
<ul>
<li><p> A value of <b>true</b> representing true.</p></li>
<li><p>A value of <b>false</b> representing false.</p></li>
</ul>
<p>You should not consider the value of true equal to 1 and value of false equal to 0.</p>
<h2>Character literals:</h2>
<p>Character literals are enclosed in single quotes. If the literal begins with L (uppercase only), it is a wide character literal (e.g., L'x') and should be stored in <b>wchar_t</b> type of variable . Otherwise, it is a narrow character literal (e.g., 'x') and can be stored in a simple variable of <b>char</b> type.</p>
<p>A character literal can be a plain character (e.g., 'x'), an escape sequence (e.g., '\t'), or a universal character (e.g., '\u02C0'). </p>
<p>There are certain characters in C++ when they are preceded by a backslash they will have special meaning and they are used to represent like newline (\n) or tab (\t). Here, you have a list of some of such escape sequence codes:</p>
<table  border='1'class="tab" width=600 height=400>
<tbody><tr><th>Escape sequence</th><th>Meaning</th></tr>
<tr><td>\\</td><td>\ character</td></tr>
<tr><td>\'</td><td> ' character</td></tr>
<tr><td>\"</td><td>" character</td></tr>
<tr><td>\?</td><td>? character</td></tr>
<tr><td>\a</td><td>Alert or bell</td></tr>
<tr><td>\b</td><td>Backspace</td></tr>
<tr><td>\f</td><td>Form feed</td></tr>
<tr><td>\n</td><td>Newline</td></tr>
<tr><td>\r</td><td>Carriage return</td></tr>
<tr><td>\t</td><td>Horizontal tab</td></tr>
<tr><td>\v</td><td>Vertical tab</td></tr>
<tr><td>\ooo</td><td>Octal number of one to three digits</td></tr>
<tr><td>\xhh . . .</td><td>Hexadecimal number of one or more digits</td></tr>
</tbody></table>
<p>Following is the example to show few escape sequence characters:</p>
<pre class="output">
#include &lt;iostream&gt;
using namespace std;

int main()
{
   cout &lt;&lt; "Hello\tWorld\n\n";
   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">Hello   World
</pre>
<h2>String literals:</h2>
<p>String literals are enclosed in double quotes. A string contains characters that are similar to character literals: plain characters, escape sequences, and universal characters.</p>
<p>You can break a long line into multiple lines using string literals and separate them using whitespaces.</p>
<p>Here are some examples of string literals. All the three forms are identical strings.</p>
<pre class="output">
"hello, dear"

"hello, \

dear"

"hello, " "d" "ear"
</pre>
<h2>Defining Constants:</h2>
<p>There are two simple ways in C++ to define constants:</p>
<ul>
<li><p>Using <b>#define</b> preprocessor.</p></li>
<li><p>Using <b>const</b> keyword.</p></li>
</ul>
<h2>The #define Preprocessor:</h2>
<p>Following is the form to use #define preprocessor to define a constant:</p>
<pre class="output">#define identifier value</pre>
<p>Following example explains it in detail:</p>
<pre class="output">
#include &lt;iostream&gt;
using namespace std;

#define LENGTH 10   
#define WIDTH  5
#define NEWLINE '\n'

int main()
{

   int area;  
   
   area = LENGTH * WIDTH;
   cout &lt;&lt; area;
   cout &lt;&lt; NEWLINE;
   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">50
</pre>
<h2>The const Keyword:</h2>
<p>You can use <b>const</b> prefix to declare constants with a specific type as follows:</p>
<pre class="output">
const type variable = value;
</pre>
<p>Following example explains it in detail:</p>
<pre class="output">
#include &lt;iostream&gt;
using namespace std;

int main()
{
   const int  LENGTH = 10;
   const int  WIDTH  = 5;
   const char NEWLINE = '\n';
   int area;  
   
   area = LENGTH * WIDTH;
   cout &lt;&lt; area;
   cout &lt;&lt; NEWLINE;
   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">50
</pre>
<p>Note that it is a good programming practice to define constants in CAPITALS.</p>
<br>
<hr>




</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="scope.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="modifier.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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