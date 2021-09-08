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
<title>C++ - Exception</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="exception.php">C++ - Exception Handling</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="dynamic.php">C++ - Dynamic Memory</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="templates.php">C++ - Templates</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="preprocessor.php">C++ - Preprocessor</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="multithreading.php">C++ - Multithreading</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">C++ Exception Handling</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="file.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="dynamic.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>

<p>An exception is a problem that arises during the execution of a program. A C++ exception is a response to an exceptional circumstance that arises while a program is running, such as an attempt to divide by zero.</p>
<p>Exceptions provide a way to transfer control from one part of a program to another. C++ exception handling is built upon three keywords: <b>try, catch,</b> and <b>throw</b>.</p>
<ul>
<li><p><b>throw:</b> A program throws an exception when a problem shows up. This is done using a <b>throw</b> keyword.</p></li>
<li><p><b>catch:</b> A program catches an exception with an exception handler at the place in a program where you want to handle the problem. The <b>catch</b> keyword indicates the catching of an exception.</p></li>
<li><p><b>try:</b> A <b>try</b> block identifies a block of code for which particular exceptions will be activated. It's followed by one or more catch blocks.</p></li>
</ul>
<p>Assuming a block will raise an exception, a method catches an exception using a combination of the <b>try</b> and <b>catch</b> keywords. A try/catch block is placed around the code that might generate an
exception. Code within a try/catch block is referred to as protected code, and the syntax for using try/catch looks like the following:</p>
<pre class="output">
try
{
   // protected code
}catch( ExceptionName e1 )
{
   // catch block
}catch( ExceptionName e2 )
{
   // catch block
}catch( ExceptionName eN )
{
   // catch block
}
</pre>
<p>You can list down multiple <b>catch</b> statements to catch different type of exceptions in case your <b>try</b> block raises more than one exception in different situations.</p>
<h2>Throwing Exceptions:</h2>
<p>Exceptions can be thrown anywhere within a code block using  <b>throw</b> statements. The operand of the throw statements determines a type for the exception and can be any expression and the type of the result of the expression determines the type of exception thrown.</p>
<p>Following is an example of throwing an exception when dividing by zero condition occurs:</p>
<pre class="output">
double division(int a, int b)
{
   if( b == 0 )
   {
      throw "Division by zero condition!";
   }
   return (a/b);
}
</pre>
<h2>Catching Exceptions:</h2>
<p>The <b>catch</b> block following the <b>try</b> block catches any exception. You can specify what type of exception you want to catch and this is determined by the exception declaration that appears in parentheses following the keyword catch.</p> 
<pre class="output">
try
{
   // protected code
}catch( ExceptionName e )
{
  // code to handle ExceptionName exception
}
</pre>
<p>Above code will catch an exception of <b>ExceptionName</b> type. If you want to specify that a catch block should handle any type of exception that is thrown in a try block, you must put an ellipsis, ...,  between the parentheses enclosing the exception declaration as follows:</p>
<pre class="output">
try
{
   // protected code
}catch(...)
{
  // code to handle any exception
}
</pre>
<p>The following is an example, which throws a division by zero exception and we catch it in catch block.</p>
<pre class="output">
#include &lt;iostream&gt;
using namespace std;

double division(int a, int b)
{
   if( b == 0 )
   {
      throw "Division by zero condition!";
   }
   return (a/b);
}

int main ()
{
   int x = 50;
   int y = 0;
   double z = 0;
 
   try {
     z = division(x, y);
     cout &lt;&lt; z &lt;&lt; endl;
   }catch (const char* msg) {
     cerr &lt;&lt; msg &lt;&lt; endl;
   }

   return 0;
}
</pre>
<p>Because we are raising an exception of type <b>const char*</b>, so while catching this exception, we have to use const char* in catch block. If we compile and run above code, this would produce the following result:</p>
<pre class="output">Division by zero condition!
</pre>
<h2>C++ Standard Exceptions:</h2>
<p>C++ provides a list of standard exceptions defined in <b>&lt;exception&gt;</b>  which we can use in our programs. These are arranged in a parent-child class hierarchy shown below:</p>
<center>
<img src="../pic/cpp_exceptions.jpg" alt="C++ Exceptions Hierarchy">
</center>
<p>Here is the small description of each exception mentioned in the above hierarchy:</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr><th width="24%">Exception</th><th>Description</th></tr>
<tr><td><b>std::exception</b></td><td>An exception and parent class of all the standard C++ exceptions.</td></tr>
<tr><td>std::bad_alloc</td><td>This can be thrown by <b>new</b>.</td></tr>
<tr><td>std::bad_cast</td><td>This can be thrown by <b>dynamic_cast</b>.</td></tr>
<tr><td>std::bad_exception</td><td>This is useful device to handle unexpected exceptions in a C++ program</td></tr>
<tr><td>std::bad_typeid</td><td>This can be thrown by <b>typeid</b>.</td></tr>
<tr><td><b>std::logic_error</b></td><td>An exception that theoretically can be detected by reading the code.</td></tr>
<tr><td>std::domain_error</td><td>This is an exception thrown when a mathematically invalid domain is used</td></tr>
<tr><td>std::invalid_argument</td><td>This is thrown due to invalid arguments.</td></tr>
<tr><td>std::length_error</td><td>This is thrown when a too big std::string is created</td></tr>
<tr><td>std::out_of_range</td><td>This can be thrown by the at method from for example a std::vector and std::bitset&lt;&gt;::operator[]().</td></tr>
<tr><td><b>std::runtime_error</b></td><td>An exception that theoretically can not be detected by reading the code.</td></tr>
<tr><td>std::overflow_error</td><td>This is thrown if a mathematical overflow occurs.</td></tr>
<tr><td>std::range_error</td><td>This is occured when you try to store a value which is out of range.</td></tr>
<tr><td>std::underflow_error</td><td>This is thrown if a mathematical underflow occurs.</td></tr>
</tbody></table>
<h2>Define New Exceptions:</h2>
<p>You can define your own exceptions by inheriting and overriding <b>exception</b> class functionality. Following is the example, which shows how you can use std::exception class to implement your own exception in standard way:</p>
<pre class="output">
#include &lt;iostream&gt;
#include &lt;exception&gt;
using namespace std;

struct MyException : public exception
{
  const char * what () const throw ()
  {
    return "C++ Exception";
  }
};
 
int main()
{
  try
  {
    throw MyException();
  }
  catch(MyException& e)
  {
    std::cout &lt;&lt; "MyException caught" &lt;&lt; std::endl;
    std::cout &lt;&lt; e.what() &lt;&lt; std::endl;
  }
  catch(std::exception& e)
  {
    //Other errors
  }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">MyException caught
C++ Exception
</pre>
<p>Here, <b>what()</b> is a public method provided by exception class and it has been overridden by all the child exception classes. This returns the cause of an exception.</p>
<br>
<hr>



</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="file.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="dynamic.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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