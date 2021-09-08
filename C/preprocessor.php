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
<title>C- Preprocesser</title>
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
      <div class="top-green-right">Any Problem to Contact <span class="white">147609303</span></div>
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
<tr><td><a  class="tab1" target="_top"   href="union.php">C - Unions</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="input.php" >C - Input & Output</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="file.php">C - File Input/Output</a><br/></td></tr>
<tr><td class="bg"><a  class="tab1" target="_top"   href="preprocessor.php">C - Preprocessor</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#00f;font-size:18;">C - Preprocessors</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\images\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="file.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="header.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>The <b>C Preprocessor</b> is not part of the compiler, but is a separate step in the compilation process. In simplistic terms, a C Preprocessor is just a text substitution tool and they instruct compiler to do required pre-processing before actual compilation. We'll refer to the C Preprocessor as the CPP.</p>
<p>All preprocessor commands begin with a pound symbol (#). It must be the first nonblank character, and for readability, a preprocessor directive should begin in first column. Following section lists down all important preprocessor directives:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th style="width:20%">Directive</th><th>Description</th></tr>
<tr><td>#define</td><td>Substitutes a preprocessor macro</td></tr>
<tr><td>#include</td><td>Inserts a particular header from another file</td></tr>
<tr><td>#undef</td><td>Undefines a preprocessor macro</td></tr>
<tr><td>#ifdef</td><td>Returns true if this macro is defined</td></tr>
<tr><td>#ifndef</td><td>Returns true if this macro is not defined</td></tr>
<tr><td>#if</td><td>Tests if a compile time condition is true</td></tr>
<tr><td>#else</td><td>The alternative for #if</td></tr>
<tr><td>#elif</td><td>#else an #if in one statement</td></tr>
<tr><td>#endif</td><td>Ends preprocessor conditional</td></tr>
<tr><td>#error</td><td>Prints error message on stderr</td></tr>
<tr><td>#pragma</td><td>Issues special commands to the compiler, using a standardized method</td></tr>
</tbody></table>
<h2>Preprocessors Examples</h2>
<p>Analyze the following examples to understand various directives.</p>
<pre class="output">#define MAX_ARRAY_LENGTH 20
</pre>
<p>This directive tells the CPP to replace instances of MAX_ARRAY_LENGTH with 20. Use <i>#define</i> for constants to increase readability.</p>
<pre class="output">#include &lt;stdio.h&gt;
#include "myheader.h"
</pre>
<p>These directives tell the CPP to get stdio.h from <b>System Libraries</b> and add the text to the current source file. The next line tells CPP to get <b>myheader.h</b> from the local directory and add the content to the current source file.</p>
<pre class="output">#undef  FILE_SIZE
#define FILE_SIZE 42
</pre>
<p>This tells the CPP to undefine existing FILE_SIZE and define it as 42.</p>
<pre class="output">#ifndef MESSAGE
   #define MESSAGE "You wish!"
#endif
</pre>
<p>This tells the CPP to define MESSAGE only if MESSAGE isn't already defined.</p>
<pre class="output">#ifdef DEBUG
   /* Your debugging statements here */
#endif
</pre>
<p>This tells the CPP to do the process the statements enclosed if DEBUG is defined. This is useful if you pass the <i>-DDEBUG</i> flag to gcc compiler at the time of compilation. This will define DEBUG, so you can turn debugging on and off on the fly during compilation.</p>
<h2>Predefined Macros</h2>
<p>ANSI C defines a number of macros. Although each one is available for your use in programming, the predefined macros should not be directly modified.</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th style="width:20%">Macro</th><th>Description</th></tr>
<tr><td>__DATE__</td><td>The current date as a character literal in "MMM DD YYYY" format</td></tr>
<tr><td>__TIME__</td><td>The current time as a character literal in "HH:MM:SS" format</td></tr>
<tr><td>__FILE__</td><td>This contains the current filename as a string literal.</td></tr>
<tr><td>__LINE__</td><td>This contains the current line number as a decimal constant.</td></tr>
<tr><td>__STDC__</td><td>Defined as 1 when the compiler complies with the ANSI standard.</td></tr>
</tbody></table>
<p>Let's try the following example:</p>
<pre class="output">#include &lt;stdio.h&gt;

main()
{
   printf("File :%s\n", __FILE__ );
   printf("Date :%s\n", __DATE__ );
   printf("Time :%s\n", __TIME__ );
   printf("Line :%d\n", __LINE__ );
   printf("ANSI :%d\n", __STDC__ );

}
</pre>
<p>When the above code in a file <b>test.c</b> is compiled and executed, it produces the following result:</p>
<pre class="output">File :test.c
Date :Jun 2 2012
Time :03:36:24
Line :8
ANSI :1
</pre>
<h2>Preprocessor Operators</h2>
<p>The C preprocessor offers following operators to help you in creating macros:</p>
<h5>Macro Continuation (\)</h5>
<p>A macro usually must be contained on a single line. The macro continuation operator is used to continue a macro that is too long for a single line. For example:</p>
<pre class="output">#define  message_for(a, b)  \
    printf(#a " and " #b ": We love you!\n")

</pre>
<h5> Stringize (#)</h5>
<p>The stringize or number-sign operator ('#'), when used within a macro definition, converts a macro parameter into a string constant. This operator may be used only in a macro that has a specified argument or parameter list. For example:</p>
<pre class="output">#include &lt;stdio.h&gt;

#define  message_for(a, b)  \
    printf(#a " and " #b ": We love you!\n")

int main(void)
{
   message_for(Carole, Debra);
   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">Carole and Debra: We love you!
</pre>
<h5>Token Pasting (##)</h5>
<p>The token-pasting operator (##) within a macro definition combines two arguments. It permits two separate tokens in the macro definition to be joined into a single token. For example:</p>
<pre class="output">#include &lt;stdio.h&gt;

#define tokenpaster(n) printf ("token" #n " = %d", token##n)

int main(void)
{
   int token34 = 40;
   
   tokenpaster(34);
   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">token34 = 40
</pre>
<p>How it happened, because this example results in the following actual output from the preprocessor:</p>
<pre class="output">printf ("token34 = %d", token34);
</pre>
<p>This example shows the concatenation of token##n into token34 and here we have used both <b>stringize</b> and <b>token-pasting</b>.</p>
<h5>The defined() Operator</h5>
<p>The preprocessor <b>defined</b> operator is used in constant expressions to determine if an identifier is defined using #define. If the specified identifier is defined, the value is true (non-zero). If the symbol is not defined, the value is false (zero). The defined operator is specified as follows:</p>
<pre class="output">#include &lt;stdio.h&gt;

#if !defined (MESSAGE)
   #define MESSAGE "You wish!"
#endif

int main(void)
{
   printf("Here is the message: %s\n", MESSAGE);  
   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">Here is the message: You wish!
</pre>
<h2>Parameterized Macros</h2>
<p>One of the powerful functions of the CPP is the ability to simulate functions using parameterized macros. For example, we might have some code to square a number as follows:</p>
<pre class="output">int square(int x) {
   return x * x;
}
</pre>
<p>We can rewrite above code using a macro as follows:</p>
<pre class="output">#define square(x) ((x) * (x))
</pre>
<p>Macros with arguments must be defined using the <b>#define</b> directive before they can be used. The argument list is enclosed in parentheses and must immediately follow the macro name. Spaces are not allowed between and macro name and open parenthesis. For example:</p>
<pre class="output">#include &lt;stdio.h&gt;

#define MAX(x,y) ((x) &gt; (y) ? (x) : (y))

int main(void)
{
   printf("Max between 20 and 10 is %d\n", MAX(10, 20));  
   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="output">Max between 20 and 10 is 20
</pre>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="file.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="header.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
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
    <div class="w3"><strong>Designed by: 147609303</div>
  </div>
</div>
</div>
</body>
</html>