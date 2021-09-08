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
<title>C++ - Strings</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="string.php" >C++ - Strings</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">C++ Strings</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="array.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="pointer.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>C++ provides following two types of string representations:</p>
<ul>
<li><p>The C-style character string.</p></li>
<li><p>The string class type introduced with Standard C++.</p></li>
</ul>
<h2>The C-Style Character String:</h2>
<p>The C-style character string originated within the C language and continues to be supported within C++.  This string is actually a one-dimensional array of characters which is terminated by a <b>null</b> character '\0'. Thus a null-terminated string contains the characters that comprise the string followed by a <b>null</b>.</p>
<p>The following declaration and initialization create a string consisting of the word "Hello". To hold the null character at the end of the array, the size of the character array containing the string is one more than the number of characters in the word "Hello."</p>
<pre class="output">
char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};
</pre>
<p>If you follow the rule  of array initialization, then you can write the above statement as follows: </p>
<pre class="output">
char greeting[] = "Hello";
</pre>
<p>Following is the memory presentation of above defined string in C/C++:</p>
<center>
<img src="../pic/string_representation.jpg" alt="String Presentation in C/C++">
</center>
<p>Actually, you do not place the null character at the end of a string constant. The C++ compiler automatically places the '\0' at the end of the string when it initializes the array. Let us try to print above-mentioned string:</p>
<pre class="output">
#include &lt;iostream&gt;

using namespace std;

int main ()
{
   char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};

   cout &lt;&lt; "Greeting message: ";
   cout &lt;&lt; greeting &lt;&lt; endl;

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces result something as follows:</p>
<pre class="output">
Greeting message: Hello
</pre>
<p>C++ supports a wide range of functions that manipulate null-terminated strings:</p>
<table  border='1'class="tab" width=600 height=400>
<tbody><tr><th width="5%">S.N.</th><th>Function &amp; Purpose</th></tr>
<tr><td>1</td><td><b>strcpy(s1, s2);</b><br>Copies string s2 into string s1.</td></tr>
<tr><td>2</td><td><b>strcat(s1, s2);</b><br>Concatenates string s2 onto the end of string s1.</td></tr>
<tr><td>3</td><td><b>strlen(s1);</b><br>Returns the length of string s1.</td></tr>
<tr><td>4</td><td><b>strcmp(s1, s2);</b><br>Returns 0 if s1 and s2 are the same; less than 0 if s1&lt;s2; greater than 0 if s1&gt;s2.</td></tr>
<tr><td>5</td><td><b>strchr(s1, ch);</b><br>Returns a pointer to the first occurrence of character ch in string s1.</td></tr>
<tr><td>6</td><td><b>strstr(s1, s2);</b><br>Returns a pointer to the first occurrence of string s2 in string s1.</td></tr>
</tbody></table>
<p>Following example makes use of few of the above-mentioned functions:</p>
<pre class="output">
#include &lt;iostream&gt;
#include &lt;cstring&gt;

using namespace std;

int main ()
{
   char str1[10] = "Hello";
   char str2[10] = "World";
   char str3[10];
   int  len ;

   // copy str1 into str3
   strcpy( str3, str1);
   cout &lt;&lt; "strcpy( str3, str1) : " &lt;&lt; str3 &lt;&lt; endl;

   // concatenates str1 and str2
   strcat( str1, str2);
   cout &lt;&lt; "strcat( str1, str2): " &lt;&lt; str1 &lt;&lt; endl;

   // total lenghth of str1 after concatenation
   len = strlen(str1);
   cout &lt;&lt; "strlen(str1) : " &lt;&lt; len &lt;&lt; endl;

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces result something as follows:</p>
<pre class="output">
strcpy( str3, str1) : Hello
strcat( str1, str2): HelloWorld
strlen(str1) : 10
</pre>
<h2>The String Class in C++:</h2>
<p>The standard C++ library provides a <b>string</b> class type that supports all the operations mentioned above, additionally much more functionality. We will study this class in C++ Standard Library but for now let us check following example:</p>
<p>At this point, you may not understand this example because so far we have not discussed Classes and Objects. So can have a look and proceed until you have understanding on Object Oriented Concepts.</p> 
<pre class="output">
#include &lt;iostream&gt;
#include &lt;string&gt;

using namespace std;

int main ()
{
   string str1 = "Hello";
   string str2 = "World";
   string str3;
   int  len ;

   // copy str1 into str3
   str3 = str1;
   cout &lt;&lt; "str3 : " &lt;&lt; str3 &lt;&lt; endl;

   // concatenates str1 and str2
   str3 = str1 + str2;
   cout &lt;&lt; "str1 + str2 : " &lt;&lt; str3 &lt;&lt; endl;

   // total lenghth of str3 after concatenation
   len = str3.size();
   cout &lt;&lt; "str3.size() :  " &lt;&lt; len &lt;&lt; endl;

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces result something as follows:</p>
<pre class="output">
str3 : Hello
str1 + str2 : HelloWorld
str3.size() :  10
</pre>
<br>
<hr>




</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="array.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="pointer.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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
<.php>