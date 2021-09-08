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
<title>C- Function</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="function.php">C - Functions</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#00f;font-size:18;">C - Functions</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\images\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="loop.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="scope.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>A function is a group of statements that together perform a task. Every C program has at least one function, which is <b>main()</b>, and all the most trivial programs can define additional functions.</p>
<p>You can divide up your code into separate functions. How you divide up your code among different functions is up to you, but logically the division usually is so each function performs a specific task.</p>
<p>A function <b>declaration</b> tells the compiler about a function's name, return type, and parameters. A function <b>definition</b> provides the actual body of the function.</p>
<p>The C standard library provides numerous built-in functions that your program can call. For example, function <b>strcat()</b> to concatenate two strings, function <b>memcpy()</b> to copy one memory location to another location and many more functions.</p>
<p>A function is known with various names like a method  or a sub-routine or a procedure, etc.</p>
<h2>Defining a Function:</h2>
<p>The general form of a function definition in C programming language is as follows:</p>
<pre class="output">return_type function_name( parameter list )
{
   body of the function
}
</pre>
<p>A function definition in C programming language consists of a <i>function header</i> and a <i>function body</i>. Here are all the parts of a function:</p>
<ul>
<li><p><b>Return Type</b>: A function may return a value. The <b>return_type</b> is the data type of the value the function returns. Some functions perform the desired operations without returning a value. In this case, the return_type is the keyword <b>void</b>.</p></li>
<li><p><b>Function Name:</b> This is the actual name of the function. The function name and the parameter list together constitute the function signature.</p></li>
<li><p><b>Parameters:</b> A parameter is like a placeholder. When a function is invoked, you pass a value to the parameter. This value is referred to as actual parameter or argument. The parameter list refers to the type, order, and number of the parameters of a function. Parameters are optional; that is, a function may contain no parameters.</p></li>
<li><p><b>Function Body:</b> The function body contains a collection of statements that define what the function does.</p></li>
</ul>
<h2>Example:</h2>
<p>Following is the source code for a function called <b>max()</b>. This function takes two parameters num1 and num2 and returns the maximum between the two:</p>
<pre class="output">/* function returning the max between two numbers */
int max(int num1, int num2) 
{
   /* local variable declaration */
   int result;
 
   if (num1 &gt; num2)
      result = num1;
   else
      result = num2;
 
   return result; 
}
</pre>
<h2>Function Declarations:</h2>
<p>A function <b>declaration</b> tells the compiler about a function name and how to call the function. The actual body of the function can be defined separately.</p>
<p>A function declaration has the following parts:</p>
<pre class="output">return_type function_name( parameter list );
</pre>
<p>For the above defined function max(), following is the function declaration:</p>
<pre class="output">int max(int num1, int num2);
</pre>
<p>Parameter names are not important in function declaration only their type is required, so following is also valid declaration:</p>
<pre class="output">int max(int, int);
</pre>
<p>Function declaration is required when you define a function in one source file and you call that function in another file. In such case you should declare the function at the top of the file calling the function.</p>
<h2>Calling a Function:</h2>
<p>While creating a C function, you give a definition of what the function has to do. To use a function, you will have to call that function to perform the defined task.</p>
<p>When a program calls a function, program control is transferred to the called function. A called function performs defined task and when its return statement is executed or when its function-ending closing brace is reached, it returns program control back to the main program.</p>
<p>To call a function, you simply need to pass the required parameters along with function name, and if function returns a value, then you can store returned value. For example:</p>
<pre class="output">#include &lt;stdio.h&gt;
 
/* function declaration */
int max(int num1, int num2);
 
int main ()
{
   /* local variable definition */
   int a = 100;
   int b = 200;
   int ret;
 
   /* calling a function to get max value */
   ret = max(a, b);
 
   printf( "Max value is : %d\n", ret );
 
   return 0;
}
 
/* function returning the max between two numbers */
int max(int num1, int num2) 
{
   /* local variable declaration */
   int result;
 
   if (num1 &gt; num2)
      result = num1;
   else
      result = num2;
 
   return result; 
}
</pre>
<p>I kept max() function along with main() function and compiled the source code. While running final executable, it would produce the following result:</p>
<pre class="output">Max value is : 200
</pre>
<h2>Function Arguments:</h2>
<p>If a function is to use arguments, it must declare variables that accept the values of the arguments. These variables are called the <b>formal parameters</b> of the function.</p>
<p>The formal parameters behave like other local variables inside the function and are created upon entry into the function and destroyed upon exit.</p>
<p>While calling a function, there are two ways that arguments can be passed to a function:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th style="width:30%">Call Type</th><th>Description</th></tr>
<tr><td> Call by value</td><td>This method copies the actual value of an argument into the formal parameter of the function. In this case, changes made to the parameter inside the function have no effect on the argument. </td> </tr>
<tr><td> Call by reference</td><td>This method copies the address of an argument into the formal parameter. Inside the function, the address is used to access the actual argument used in the call. This means that changes made to the parameter affect the argument.</td> </tr>
</tbody></table>
<p>By default, C uses <b>call by value</b> to pass arguments. In general, this means that code within a function cannot alter the arguments used to call the function and above mentioned example while calling max() function used the same method.</p>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="loop.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="scope.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
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