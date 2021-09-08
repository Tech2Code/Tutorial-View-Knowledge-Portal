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
<title>C++ - File</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="file.php">C++ - Files & Streams</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">C++ Files and Streams</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="interfaces.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="exception.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>So far, we have been using the <b>iostream</b> standard library, which provides <b>cin</b> and <b>cout</b> methods for reading from standard input and writing to standard output respectively.</p>
<p>This tutorial will teach you how to read and write from a file. This requires another standard C++ library called <b>fstream</b>, which defines three new data types:</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr><th width="30%">Data Type</th><th>Description</th></tr>
<tr> <td>ofstream</td><td>This data type represents the output file stream and is used to create files and to write information to files.</td></tr>
<tr> <td>ifstream</td><td>This data type represents the input file stream and  is used to read information from files.</td> </tr>
<tr> <td>fstream</td><td>This data type represents the file stream generally, and has the capabilities of both ofstream and ifstream which means it can create files, write information to files, and read information from files.</td> </tr>
</tbody></table>
<p>To perform file processing in C++, header files &lt;iostream&gt; and &lt;fstream&gt; must be included in your C++ source file.</p>
<h2>Opening a File:</h2>
<p>A file must be opened before you can read from it or write to it. Either the <b>ofstream</b> or <b>fstream</b> object may be used to open a file for writing and ifstream object is used to open a file for reading purpose only.</p>
<p>Following is the standard syntax for open() function, which is a member of fstream, ifstream, and ofstream objects.</p>
<pre class="output">
void open(const char *filename, ios::openmode mode);
</pre>
<p>Here, the first argument specifies the name and location of the file to be opened and the second argument of the <b>open()</b> member function defines the mode in which the file should be opened.</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr><th width="30%">Mode Flag</th><th>Description</th></tr>
<tr> <td>ios::app</td><td>Append mode. All output to that file to be appended to the end.</td></tr>
<tr> <td>ios::ate</td><td>Open a file for output and move the read/write control to the end of the file.</td></tr>
<tr> <td>ios::in</td><td>Open a file for reading.</td></tr>
<tr> <td>ios::out</td><td>Open a file for writing.</td></tr>
<tr> <td>ios::trunc</td><td>If the file already exists, its contents will be truncated before opening the file.</td></tr>
</tbody></table>
<p>You can combine two or more of these values by <b>OR</b>ing them together. For example if you want to open a file in write mode and want to truncate it in case it already exists, following will be the syntax:</p>
<pre class="output">
ofstream outfile;
outfile.open("file.dat", ios::out | ios::trunc );
</pre>
<p>Similar way, you can open a file for reading and writing purpose as follows:</p>
<pre class="output">
fstream  afile;
afile.open("file.dat", ios::out | ios::in );
</pre>
<h2>Closing a File</h2>
<p>When a C++ program  terminates it automatically closes flushes all the streams, release all the allocated memory and close all the opened files. But it is always a good practice that a programmer should close all the opened files before program termination.</p>
<p>Following is the standard syntax for close() function, which is a member of fstream, ifstream, and ofstream objects.</p>
<pre class="output">
void close();
</pre>
<h2>Writing to a File:</h2>
<p>While doing C++ programming, you write information to a file from your program using the stream insertion operator (&lt;&lt;) just as you use that operator to output information to the screen. The only difference is that you use an <b>ofstream</b> or <b>fstream</b> object instead of the <b>cout</b> object.</p>
<h2>Reading from a File:</h2>
<p>You read information from a file into your program using the stream extraction operator (&gt;&gt;) just as you use that operator to input information from the keyboard. The only difference is that you use an <b>ifstream</b> or <b>fstream</b> object instead of the <b>cin</b> object.</p>
<h2>Read &amp; Write Example:</h2>
<p>Following is the C++ program which opens a file in reading and writing mode. After writing information inputted by the user to a file named afile.dat, the program reads information from the file and outputs it onto the screen:</p>
<pre class="output">
#include &lt;fstream&gt;
#include &lt;iostream&gt;
using namespace std;
 
int main ()
{
    
   char data[100];

   // open a file in write mode.
   ofstream outfile;
   outfile.open("afile.dat");

   cout &lt;&lt; "Writing to the file" &lt;&lt; endl;
   cout &lt;&lt; "Enter your name: "; 
   cin.getline(data, 100);

   // write inputted data into the file.
   outfile &lt;&lt; data &lt;&lt; endl;

   cout &lt;&lt; "Enter your age: "; 
   cin &gt;&gt; data;
   cin.ignore();
   
   // again write inputted data into the file.
   outfile &lt;&lt; data &lt;&lt; endl;

   // close the opened file.
   outfile.close();

   // open a file in read mode.
   ifstream infile; 
   infile.open("afile.dat"); 
 
   cout &lt;&lt; "Reading from the file" &lt;&lt; endl; 
   infile &gt;&gt; data; 

   // write the data at the screen.
   cout &lt;&lt; data &lt;&lt; endl;
   
   // again read the data from the file and display it.
   infile &gt;&gt; data; 
   cout &lt;&lt; data &lt;&lt; endl; 

   // close the opened file.
   infile.close();

   return 0;
}
</pre>
<p>When the above code is compiled and executed, it produces the following sample input and output:</p>
<pre class="output">
$./a.out
Writing to the file
Enter your name: Zara
Enter your age: 9
Reading from the file
Zara
9
</pre>
<p>Above examples make use of additional functions from cin object, like getline() function to read the line from outside and ignore() function to ignore the extra characters left by previous read statement.</p>
<h2>File Position Pointers:</h2>
<p>Both <b>istream</b> and <b>ostream</b> provide member functions for repositioning the file-position pointer. These member functions are <b>seekg</b> ("seek get") for istream and <b>seekp</b> ("seek put") for ostream.</p>
<p>The argument to seekg and seekp normally is a long integer. A second argument can be specified to indicate the seek direction. The seek direction can be <b>ios::beg</b> (the default) for positioning relative to the beginning of a stream, <b>ios::cur</b> for positioning relative to the current position in a stream or <b>ios::end</b> for positioning relative to the end of a stream.</p>
<p>The file-position pointer is an integer value that specifies the location in the file as a number of bytes from the file's starting location. Some examples of positioning the "get" file-position pointer are:</p>
<pre class="output">
// position to the nth byte of fileObject (assumes ios::beg)
fileObject.seekg( n );

// position n bytes forward in fileObject
fileObject.seekg( n, ios::cur );

// position n bytes back from end of fileObject
fileObject.seekg( n, ios::end );

// position at end of fileObject
fileObject.seekg( 0, ios::end );
</pre>
<br>
<hr>




</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="interfaces.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="exception.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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