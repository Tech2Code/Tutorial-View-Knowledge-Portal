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
<title>C++ - Basic</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="basic.php">C++ - Basic Input/Output</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">C++ Basic Input/Output</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="pointer.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="class.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>The C++ standard libraries provide an extensive set of input/output capabilities which we will see in subsequent chapters. This chapter will discuss very basic and most common I/O operations required for C++ programming.</p>
<p>C++ I/O occurs in streams, which are sequences of bytes.  If bytes flow from a device like a keyboard, a disk drive, or a network connection etc. to main memory, this is called <b>input operation</b> and if bytes flow from main memory to a device like a display screen, a printer, a disk drive, or a network connection, etc, this is called <b>output operation</b>.</p>
<h2>I/O Library Header Files:</h2>
<p>There are following header files important to C++ programs:</p>
<table  border='1'class="tab" width=600 height=400>
<tbody><tr><th width="20%">Header File</th><th>Function and Description</th></tr>
<tr><td>&lt;iostream&gt;</td><td>This file defines the <b>cin, cout, cerr</b> and <b>clog</b> objects, which correspond to the standard input stream, the standard output stream, the un-buffered standard error stream and the buffered standard error stream, respectively.</td> </tr>
<tr><td>&lt;iomanip&gt;</td><td>This file declares services useful for performing formatted I/O with so-called parameterized stream manipulators, such as <b>setw</b> and <b>setprecision</b>.</td> </tr>
<tr><td>&lt;fstream&gt;</td><td>This file declares services for user-controlled file processing. We will discuss about it in detail in File and Stream related chapter.</td> </tr>
</tbody></table>
<h2>The standard output stream (cout):</h2>
<p>The predefined object <b>cout</b> is an instance of <b>ostream</b> class. The cout object is said to be "connected to" the standard output device, which usually is the display screen. The <b>cout</b> is used in conjunction with the stream insertion operator, which is written as &lt;&lt; which are two less than signs as shown in the following example.</p>
<pre class="output">#include &lt;iostream&gt;
 
using namespace std;
 
int main( )
{
   char str[] = "Hello C++";
 
   cout &lt;&lt; "Value of str is : " &lt;&lt; str &lt;&lt; endl;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">Value of str is : Hello C++
</pre>
<p>The C++ compiler also determines the data type of variable to be output and selects the appropriate stream insertion operator to display the value. The &lt;&lt; operator is overloaded to output data items of built-in types integer, float, double,  strings and pointer values.</p>
<p>The insertion operator &lt;&lt; may be used more than once in a single statement as shown above and <b>endl</b> is used to add a new-line at the end of the line.</p>
<h2>The standard input stream (cin):</h2>
<p>The predefined object <b>cin</b> is an instance of <b>istream</b> class. The cin object is said to be attached to the standard input  device, which usually is the keyboard. The <b>cin</b> is used in conjunction with the stream extraction operator, which is written as &gt;&gt; which are two greater than signs as shown in the following example.</p>
<pre class="output">#include &lt;iostream&gt;
 
using namespace std;
 
int main( )
{
   char name[50];
 
   cout &lt;&lt; "Please enter your name: ";
   cin &gt;&gt; name;
   cout &lt;&lt; "Your name is: " &lt;&lt; name &lt;&lt; endl;
 
}
</pre>
<p>When the above code is compiled and executed, it will prompt you to enter a name. You enter a value and then hit enter to see the result something as follows:</p>
<pre class="output">Please enter your name: cplusplus
Your name is: cplusplus
</pre>
<p>The C++ compiler also determines the data type of the entered value and selects the appropriate stream extraction operator to extract the value and store it in the given variables.</p>
<p>The stream extraction operator &gt;&gt; may be used more than once in a single statement. To request more than one datum you can use the following:</p>
<pre class="output">cin &gt;&gt; name &gt;&gt; age;
</pre>
<p>This will be equivalent to the following two statements:</p>
<pre class="output">cin &gt;&gt; name;
cin &gt;&gt; age;
</pre>
<h2>The standard error stream (cerr):</h2>
<p>The predefined object <b>cerr</b> is an instance of <b>ostream</b> class. The cerr object is said to be attached to the standard error device, which is also a display screen but the object <b>cerr</b> is un-buffered and each stream insertion to cerr causes its output to appear immediately.</p>
<p>The <b>cerr</b> is also used in conjunction with the stream insertion operator as shown in the following example.</p>
<pre class="output">#include &lt;iostream&gt;
 
using namespace std;
 
int main( )
{
   char str[] = "Unable to read....";
 
   cerr &lt;&lt; "Error message : " &lt;&lt; str &lt;&lt; endl;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">Error message : Unable to read....
</pre>
<h2>The standard log stream (clog):</h2>
<p>The predefined object <b>clog</b> is an instance of <b>ostream</b> class. The clog object is said to be attached to the standard error device, which is also a display screen but the object <b>clog</b> is buffered. This means that each insertion to clog could cause its output to be held in a buffer until the buffer is filled or until the buffer is flushed.</p>
<p>The <b>clog</b> is also used in conjunction with the stream insertion operator as shown in the following example.</p>
<pre class="output">#include &lt;iostream&gt;
 
using namespace std;
 
int main( )
{
   char str[] = "Unable to read....";
 
   clog &lt;&lt; "Error message : " &lt;&lt; str &lt;&lt; endl;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">Error message : Unable to read....
</pre>
<p>You would not be able to see any difference in cout, cerr and clog with these small examples, but while writing and executing big programs then difference becomes obvious. So this is good practice to display error messages using cerr stream and while displaying other log messages then clog should be used.</p>
<br>
<hr>



</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="pointer.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="class.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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
<td align=right><a href='../edit.php' target='_top'><img src='../pic/edit.ico' width=50 height=50/></a><br>Edit Account</td></tr>";
}
?>
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
    <div class="w3"><strong>Designed by:Keshav kumar</div>
  </div>
</div>
</div>

</body>
</html>