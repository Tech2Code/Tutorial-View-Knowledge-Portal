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
<title>C - Unions & Typedef</title>
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
<tr><td Class="bg"><a  class="tab1" target="_top"   href="union.php">C - Unions</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#00f;font-size:18;">C - Unions & Typedef</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\images\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="structure.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="input.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>A <b>union</b> is a special data type available in C that enables you to store different data types in the same memory location. You can define a union with many members, but only one member can contain a value at any given time. Unions provide an efficient way of using the same memory location for multi-purpose.</p>
<h2>Defining a Union</h2>
<p>To define a union, you must use the <b>union</b> statement in very similar was as you did while defining structure. The union statement defines a new data type, with more than one member for your program. The format of the union statement is as follows:</p>
<pre class="output">union [union tag]
{
   member definition;
   member definition;
   ...
   member definition;
} [one or more union variables];  
</pre>
<p>The <b>union tag</b> is optional and each member definition is a normal variable definition, such as int i; or float f; or any other valid variable definition. At the end of the union's definition, before the final semicolon, you can specify one or more union variables but it is optional. Here is the way you would define a union type named Data which has the three members i, f, and str:</p>
<pre class="output">union Data
{
   int i;
   float f;
   char  str[20];
} data;  
</pre>
<p>Now, a variable of <b>Data</b> type can store an integer, a floating-point number, or a string of characters. This means that a single variable ie. same memory location can be used to store multiple types of data. You can use any built-in or user defined data types inside a union based on your requirement.</p>
<p>The memory occupied by a union will be large enough to hold the largest member of the union. For example, in above example Data type will occupy 20 bytes of memory space because this is the maximum space which can be occupied by character string. Following is the example which will display total memory size occupied by the above union:</p>
<pre class="output">#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
 
union Data
{
   int i;
   float f;
   char  str[20];
};
 
int main( )
{
   union Data data;        

   printf( "Memory size occupied by data : %d\n", sizeof(data));

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">Memory size occupied by data : 20
</pre>
<h2>Accessing Union Members</h2>
<p>To access any member of a union, we use the <b>member access operator (.)</b>. The member access operator is coded as a period between the union variable name and the union member that we wish to access. You would use <b>union</b> keyword to define variables of union type. Following is the example to explain usage of union:</p>
<pre class="output">#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
 
union Data
{
   int i;
   float f;
   char  str[20];
};
 
int main( )
{
   union Data data;        

   data.i = 10;
   data.f = 220.5;
   strcpy( data.str, "C Programming");

   printf( "data.i : %d\n", data.i);
   printf( "data.f : %f\n", data.f);
   printf( "data.str : %s\n", data.str);

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">data.i : 1917853763
data.f : 4122360580327794860452759994368.000000
data.str : C Programming
</pre>
<p>Here, we can see that values of <b>i</b> and <b>f</b> members of union got corrupted because final value assigned to the variable has occupied the memory location and this is the reason that the value if <b>str</b> member is getting printed very well. Now let's look into the same example once again where we will use one variable at a time which is the main purpose of having union:</p>
<pre class="output">#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
 
union Data
{
   int i;
   float f;
   char  str[20];
};
 
int main( )
{
   union Data data;        

   data.i = 10;
   printf( "data.i : %d\n", data.i);
   
   data.f = 220.5;
   printf( "data.f : %f\n", data.f);
   
   strcpy( data.str, "C Programming");
   printf( "data.str : %s\n", data.str);

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">data.i : 10
data.f : 220.500000
data.str : C Programming
</pre>
<p>Here, all the members are getting printed very well because one member is being used at a time.</p>
<h2>Typedef</h2>
<p>The C programming language provides a keyword called <b>typedef</b>, which you can use to give a type a new name. Following is an example to define a term <b>BYTE</b> for one-byte numbers:</p>
<pre class="output">typedef unsigned char BYTE;</pre>
<p>After this type definitions, the identifier BYTE can be used as an abbreviation for the type <b>unsigned char, for example:</b>.
</p><pre class="output">BYTE  b1, b2;</pre>
<p>By convention, uppercase letters are used for these definitions to remind the user that the type name is really a symbolic abbreviation, but you can use lowercase, as follows:</p>
<pre class="output">typedef unsigned char byte;</pre>
<p>You can use <b>typedef</b> to give a name to user defined data type as well. For example you can use typedef with structure to define a new data type and then use that data type to define structure variables directly as follows:</p>
<pre class="output">#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
 
typedef struct Books
{
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
} Book;
 
int main( )
{
   Book book;
 
   strcpy( book.title, "C Programming");
   strcpy( book.author, "Nuha Ali"); 
   strcpy( book.subject, "C Programming Tutorial");
   book.book_id = 6495407;
 
   printf( "Book title : %s\n", book.title);
   printf( "Book author : %s\n", book.author);
   printf( "Book subject : %s\n", book.subject);
   printf( "Book book_id : %d\n", book.book_id);

   return 0;
}</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">Book  title : C Programming
Book  author : Nuha Ali
Book  subject : C Programming Tutorial
Book  book_id : 6495407
</pre>
<h2>typedef vs #define</h2>
<p>The <b>#define</b> is a C-directive which is also used to define the aliases for various data types similar to <b> typedef</b> but with following differences:</p>
<ul>
<li><p>The <b>typedef</b> is limited to giving symbolic names to types only where as <b>#define</b> can be used to define alias for values as well, like you can define 1 as ONE etc.</p></li>
<li><p>The <b>typedef</b> interpretation is performed by the compiler where as <b>#define</b> statements are processed by the pre-processor.</p></li>
</ul>
<p>Following is a simplest usage of #define:</p>
<pre class="output">#include &lt;stdio.h&gt;
 
#define TRUE  1
#define FALSE 0
 
int main( )
{
   printf( "Value of TRUE : %d\n", TRUE);
   printf( "Value of FALSE : %d\n", FALSE);

   return 0;
}</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">Value of TRUE : 1
Value of FALSE : 0
</pre>
<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="structure.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="input.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
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
</div></body>
<html>