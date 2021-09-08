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
<title>C++ - Syntax</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="syntax.php" >C++ - Basic Syntax</a><br/></td></tr>
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
<tr><td><a  class="tab1" target="_top"   href="preprocessor.php">C++ - Preprocessor</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="multithreading.php">C++ - Multithreading</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">C++ Basic Syntax</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="environment.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="comments.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>When we consider a C++ program, it can be defined as a collection of objects that communicate via invoking each other's methods. Let us now briefly look into what do class, object, methods and instant variables mean.</p>
<ul>
<li><p><b>Object -</b> Objects have states and behaviors. Example: A dog has states - color, name, breed as well as behaviors - wagging, barking, eating. An object is an instance of a class. </p></li>
<li><p><b>Class -</b> A class can be defined as a template/blueprint that describes the behaviors/states that object of its type support.</p></li>
<li><p><b>Methods -</b> A method is basically a behavior. A class can contain many methods. It is in methods where the logics are written, data is manipulated and all the actions are executed.</p></li>
<li><p><b>Instant Variables -</b> Each object has its unique set of instant variables. An object's state is created by the values assigned to these instant variables.</p></li>
</ul>
<h2>C++ Program Structure:</h2>
<p>Let us look at a simple code that would print the words <i>Hello World</i>.</p>
<pre class="output" style="cursor: default;">#include &lt;iostream&gt;
using namespace std;

// main() is where program execution begins.

int main()
{
   cout &lt;&lt; "Hello World"; // prints Hello World
   return 0;
}
</pre>
<p>Let us look various parts of the above program:</p>
<ul>
<li><p>The C++ language defines several headers, which contain information that is either necessary or useful to your program. For this program, the header <b>&lt;iostream&gt;</b> is needed.</p></li>
<li><p>The line <b>using namespace std;</b> tells the compiler to use the std namespace. Namespaces are a relatively recent addition to C++.</p></li>
<li><p>The next line <b>// main() is where program execution begins.</b> is a single-line comment available in C++. Single-line comments begin with // and stop at the end of the line.</p></li>
<li><p>The line <b>int main()</b> is the main function where program execution begins.</p></li>
<li><p>The next line <b>cout &lt;&lt; "This is my first C++ program.";</b> causes the message "This is my first C++ program" to be displayed on the screen.</p></li>
<li><p>The next line <b>return 0;</b> terminates main( )function and causes it to return the value 0 to the calling process.</p></li>
</ul>
<h2>Compile &amp; Execute C++ Program:</h2>
<p>Let's look at how to save the file, compile and run the program. Please follow the steps given below:</p>
<ul>
<li><p>Open a text editor and add the code as above.</p></li>
<li><p>Save the file as:  hello.cpp</p></li>
<li><p>Open a command prompt and go to the directory where you saved the file.</p></li>
<li><p>Type 'g++ hello.cpp ' and press enter to compile your code. If there are no errors in your code the command prompt will take you to the next line and would generate a.out executable file.</p></li>
<li><p>Now, type ' a.out' to run your program.</p></li>	
<li><p>You will be able to see ' Hello World ' printed on the window.</p></li>
</ul>
<pre class="output">$ g++ hello.cpp
$ ./a.out
Hello World
</pre>
<p>Make sure that g++ is in your path and that you are running it in the directory containing file hello.cpp.</p>
<p>You can compile C/C++ programs using makefile. For more details, you can check <a href="http://www.tutorialspoint.com/makefile/index.htm" target="_blank">Makefile Tutorial</a>.</p>
<h2>Semicolons &amp; Blocks in C++:</h2>
<p>In C++, the semicolon is a statement terminator. That is, each individual statement must be ended with a semicolon. It indicates the end of one logical entity.</p>
<p>For example, following are three different statements:</p>
<pre class="output">x = y;
y = y+1;
add(x, y);
</pre>
<p>A block is a set of logically connected statements that are surrounded by opening and closing braces. For example:</p>
<pre class="output">{
   cout &lt;&lt; "Hello World"; // prints Hello World
   return 0;
}
</pre>
<p>C++ does not recognize the end of the line as a terminator. For this reason, it does not matter where on a line you put a statement. For example:</p>
<pre class="output">x = y;
y = y+1;
add(x, y);
</pre>
<p>is the same as</p>
<pre class="output">x = y; y = y+1; add(x, y);
</pre>
<h2>C++ Identifiers:</h2>
<p>A C++ identifier is a name used to identify a variable, function, class, module, or any other user-defined item. An identifier starts with a letter A to Z or a to z or an underscore (_) followed by zero or more letters, underscores, and digits (0 to 9).</p>
<p>C++ does not allow punctuation characters such as @, $, and % within identifiers. C++ is a case-sensitive programming language.  Thus, <b>Manpower</b> and <b>manpower</b> are two different identifiers in C++.</p>
<p>Here are some examples of acceptable identifiers:</p>
<pre class="output">mohd       zara    abc   move_name  a_123
myname50   _temp   j     a23b9      retVal
</pre>
<h2>C++ Keywords:</h2>
<p>The following list shows the reserved words in C++. These reserved words may not be used as constant or variable or any other identifier names.</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr><td>asm</td><td>else</td><td>new</td><td>this</td></tr>
<tr><td>auto</td><td>enum</td><td>operator</td><td>throw</td></tr>
<tr><td>bool</td><td>explicit</td><td>private</td><td>true</td></tr>
<tr><td>break</td><td>export</td><td>protected</td><td>try</td></tr>
<tr><td>case</td><td>extern</td><td>public</td><td>typedef</td></tr>
<tr><td>catch</td><td>false</td><td>register</td><td>typeid</td></tr>
<tr><td>char</td><td>float</td><td>reinterpret_cast</td><td>typename</td></tr>
<tr><td>class</td><td>for</td><td>return</td><td>union</td></tr>
<tr><td>const</td><td>friend</td><td>short</td><td>unsigned</td></tr>
<tr><td>const_cast</td><td>goto</td><td>signed</td><td>using</td></tr>
<tr><td>continue</td><td>if</td><td>sizeof</td><td>virtual</td></tr>
<tr><td>default</td><td>inline</td><td>static</td><td>void</td></tr>
<tr><td>delete</td><td>int</td><td>static_cast</td><td>volatile</td></tr>
<tr><td>do</td><td>long</td><td>struct</td><td>wchar_t</td></tr>
<tr><td>double</td><td>mutable</td><td>switch</td><td>while</td></tr>
<tr><td>dynamic_cast</td><td>namespace</td><td>template</td><td>&nbsp;</td></tr>
</tbody></table>
<h2>Trigraphs:</h2>
<p>A few characters have an alternative representation, called a trigraph sequence. A trigraph is a three-character sequence that represents a single character and the sequence always starts with two question marks.</p>
<p>Trigraphs are expanded anywhere they appear, including within string literals and character literals, in comments, and in preprocessor directives.</p>
<p>Following are most frequently used trigraph sequences:</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr><th>Trigraph</th><th>Replacement</th></tr>
<tr><td>??=</td><td>#</td></tr>
<tr><td>??/</td><td>\</td></tr>
<tr><td>??'</td><td>^</td></tr>
<tr><td>??(</td><td>[</td></tr>
<tr><td>??)</td><td>]</td></tr>
<tr><td>??!</td><td>|</td></tr>
<tr><td>??&lt;</td><td>{</td></tr>
<tr><td>??&gt;</td><td>}</td></tr>
<tr><td>??-</td><td>~</td></tr>
</tbody></table>
<p>All the compilers do not support trigraphs and they are not advised to be used because of their confusing nature.</p>
<h2>Whitespace in C++:</h2>
<p>A line containing only whitespace, possibly with a comment, is known as a blank line, and C++ compiler totally ignores it.</p>
<p>Whitespace is the term used in C++ to describe blanks, tabs, newline characters and comments. Whitespace separates one part of a statement from another and enables the compiler to identify where one element in a statement, such as int, ends and the next element begins. Therefore, in the statement,</p>
<pre class="output">int age;
</pre>
<p>there must be at least one whitespace character (usually a space) between int and age for the compiler to be able to distinguish them. On the other hand, in the statement</p>
<pre class="output">fruit = apples + oranges;   // Get the total fruit
</pre>
<p>no whitespace characters are necessary between fruit and =, or between = and apples, although you are free to include some if you wish for readability purpose.</p>
<br>
<hr>



</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="environment.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="comments.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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