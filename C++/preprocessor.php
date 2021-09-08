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
<title>C++ - Preprocessor</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="preprocessor.php">C++ - Preprocessor</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="multithreading.php">C++ - Multithreading</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">C++ Preprocessor</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="templates.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="multithreading.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>The preprocessors are the directives, which give instruction to the compiler to preprocess the information before actual compilation starts.</p>
<p>All preprocessor directives begin with #, and only white-space characters may appear before a preprocessor directive on a line. Preprocessor directives are not C++ statements, so they do not end in a semicolon (;).</p>
<p>You already have seen a <b>#include</b> directive in all the examples. This macro is used to include a header file into the source file.</p>
<p>There are number of preprocessor directives supported by C++ like #include, #define, #if, #else, #line, etc. Let us see important directives:</p>
<h2>The #define Preprocessor:</h2>
<p>The #define preprocessor directive creates symbolic constants. The symbolic constant is called a <b>macro</b> and the general form of the directive is:</p>
<pre class="output">
#define macro-name replacement-text 
</pre>
<p>When this line appears in a file, all subsequent occurrences of macro in that file will be replaced by replacement-text before the program is compiled. For example:</p>
<pre class="output">
#include &lt;iostream&gt;
using namespace std;

#define PI 3.14159

int main ()
{
 
    cout &lt;&lt; "Value of PI :" &lt;&lt; PI &lt;&lt; endl; 

    return 0;
}
</pre>
<p>Now, let us do the preprocessing of this code  to see the result, assume we have source code file, so let us compile it with -E option and redirect the result to test.p. Now, if you will check test.p, it will have lots of information and at the bottom, you will fine the value replaced as follows:</p>
<pre class="output">
$gcc -E test.cpp &gt; test.p

...
int main ()
{
 
    cout &lt;&lt; "Value of PI :" &lt;&lt; 3.14159 &lt;&lt; endl; 

    return 0;
}
</pre>
<h2>Function-Like Macros:</h2>
<p>You can use #define to define a macro which will take argument as follows:</p>
<pre class="output">
#include &lt;iostream&gt;
using namespace std;

#define MIN(a,b) (((a)&lt;(b)) ? a : b)

int main ()
{
   int i, j;
   i = 100;
   j = 30;
   cout &lt;&lt;"The minimum is " &lt;&lt; MIN(i, j) &lt;&lt; endl;

    return 0;
}
</pre>
<p>If we compile and run above code, this would produce the following result:</p>
<pre class="output">
The minimum is 30
</pre>
<h2>Conditional Compilation:</h2>
<p>There are several directives, which can use to compile selectively portions of your program's source code. This process is called conditional compilation.</p>
<p>The conditional preprocessor construct is much like the if selection structure. Consider the following preprocessor code:</p>
<pre class="output">
#ifndef NULL
   #define NULL 0
#endif
</pre>
<p>You can compile a program for debugging purpose and can debugging turn on or off using a single macro as follows:</p>
<pre class="output">
#ifdef DEBUG
   cerr <<"Variable x = " << x << endl;
#endif
</pre>
<p>causes the <b>cerr</b> statement to be compiled in the program if the symbolic constant DEBUG has been defined before directive #ifdef DEBUG. You can use #if 0 statment to comment out a portion of the program as follows:</p>
<pre class="output">
#if 0
   code prevented from compiling
#endif
</pre>
<p>Let us try the following example:</p>
<pre class="output">
#include &lt;iostream&gt;
using namespace std;
#define DEBUG

#define MIN(a,b) (((a)&lt;(b)) ? a : b)

int main ()
{
   int i, j;
   i = 100;
   j = 30;
#ifdef DEBUG
   cerr &lt;&lt;"Trace: Inside main function" &lt;&lt; endl;
#endif

#if 0
   /* This is commented part */
   cout &lt;&lt; MKSTR(HELLO C++) &lt;&lt; endl;
#endif

   cout &lt;&lt;"The minimum is " &lt;&lt; MIN(i, j) &lt;&lt; endl;

#ifdef DEBUG
   cerr &lt;&lt;"Trace: Coming out of main function" &lt;&lt; endl;
#endif
    return 0;
}
</pre>
<p>If we compile and run above code, this would produce the following result:</p>
<pre class="output">
Trace: Inside main function
The minimum is 30
Trace: Coming out of main function
</pre>
<h2>The # and ## Operators:</h2>
<p>The # and ## preprocessor operators are available in C++ and ANSI/ISO C. The # operator causes a replacement-text token to be converted to a string surrounded by quotes. </p>
<p>Consider the following macro definition:</p>
<pre class="output">
#include &lt;iostream&gt;
using namespace std;

#define MKSTR( x ) #x

int main ()
{
    cout &lt;&lt; MKSTR(HELLO C++) &lt;&lt; endl;

    return 0;
}
</pre>
<p>If we compile and run above code, this would produce the following result:</p>
<pre class="output">
HELLO C++
</pre>
<p>Let us see how it worked. It is simple to understand that the C++ preprocessor turns the line:</p>
<pre class="output">
cout &lt;&lt; MKSTR(HELLO C++) &lt;&lt; endl;
</pre>
<p>into the following line:</p>
<pre class="output">
  cout &lt;&lt; "HELLO C++" &lt;&lt; endl;
</pre>
<p>The ## operator is used to concatenate two tokens. Here is an example:</p>
<pre class="output">
#define CONCAT( x, y )  x ## y
</pre>
<p>When CONCAT appears in the program, its arguments are concatenated and used to replace the macro. For example, CONCAT(HELLO, C++) is replaced by "HELLO C++" in the program as follows.</p>
<pre class="output">#include &lt;iostream&gt;
using namespace std;

#define concat(a, b) a ## b
int main()
{
   int xy = 100;
   
   cout &lt;&lt; concat(x, y);
   return 0;
}</pre>
<p>If we compile and run above code, this would produce the following result:</p>
<pre class="output">100</pre>
<p>Let us see how it worked. It is simple to understand that the C++ preprocessor transforms:</p>
<pre class="output">
cout &lt;&lt; concat(x, y);
</pre>
<p>into the following line:</p>
<pre class="output">
  cout &lt;&lt; xy;
</pre>
<h2>Predefined C++ Macros:</h2>
<p>C++ provides a number of predefined macros mentioned below:</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr><th width="30%">Macro</th><th>Description</th></tr>
<tr><td>__LINE__</td><td>This contain the current line number of the program when it is being compiled.</td></tr>
<tr><td>__FILE__</td><td>This contain the current file name of the program when it is being compiled.</td></tr>
<tr><td>__DATE__</td><td>This contains a string of the form month/day/year that is the date of the translation of the source file into object code.</td></tr>
<tr><td>__TIME__</td><td>This contains a string of the form hour:minute:second that is the time at which the program was compiled.</td></tr>
</tbody></table>
<p>Let us see an example for all the above macros:</p>
<pre class="output">
#include &lt;iostream&gt;
using namespace std;

int main ()
{
    cout &lt;&lt; "Value of __LINE__ : " &lt;&lt; __LINE__ &lt;&lt; endl;
    cout &lt;&lt; "Value of __FILE__ : " &lt;&lt; __FILE__ &lt;&lt; endl;
    cout &lt;&lt; "Value of __DATE__ : " &lt;&lt; __DATE__ &lt;&lt; endl;
    cout &lt;&lt; "Value of __TIME__ : " &lt;&lt; __TIME__ &lt;&lt; endl;

    return 0;
}
</pre>
<p>If we compile and run above code, this would produce the following result:</p>
<pre class="output">
Value of __LINE__ : 6
Value of __FILE__ : test.cpp
Value of __DATE__ : Feb 28 2011
Value of __TIME__ : 18:52:48
</pre>
<br>
<hr>




</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="templates.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="multithreading.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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