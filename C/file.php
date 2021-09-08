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
<title>C- File</title>
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
<tr><td><a  class="tab1" target="_top"   href="union.php">C - Unions</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="input.php" >C - Input & Output</a><br/></td></tr>
<tr><td class="bg"><a  class="tab1" target="_top"   href="file.php">C - File Input/Output</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#00f;font-size:18;">C - File I/O</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\images\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="file.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="preprocessor.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>Last chapter explained about standard input and output devices handled by C programming language. This chapter we will see how C programmers can create, open, close text or binary files for their data storage.</p>
<p>A file represents a sequence of bytes, does not matter if it is a text file or binary file. C programming language provides access on high level functions as well as low level (OS level) calls to handle file on your storage devices. This chapter will take you through important calls for the file management.</p> 
<h2>Opening Files</h2>
<p>You can use the <b>fopen( )</b> function to create a new file or to open an existing file, this call will initialize an object of the type <b>FILE</b>, which contains all the information necessary to control the stream. Following is the prototype of this function call:</p>
<pre class="output">FILE *fopen( const char * filename, const char * mode );
</pre>
<p>Here, <b>filename</b> is string literal, which you will use to name your file and access <b>mode</b> can have one of the following values:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th style="width:5%">Mode</th><th>Description</th></tr>
<tr><td>r</td><td>Opens an existing text file for reading purpose.</td></tr>
<tr><td>w</td><td>Opens a text file for writing, if it does not exist then a new file is created. Here your program will start writing content from the beginning of the file.</td></tr>
<tr><td>a</td><td>Opens a text file for writing in appending mode, if it does not exist then a new file is created. Here your program will start appending content in the existing file content.</td></tr>
<tr><td>r+</td><td>Opens a text file for reading and writing both.</td></tr>
<tr><td>w+</td><td>Opens a text file for reading and writing both. It first truncate the file to zero length if it exists otherwise create the file if it does not exist.</td></tr>
<tr><td>a+</td><td>Opens a text file for reading and writing both. It creates the file if it does not exist. The reading will start from the beginning but writing can only be appended.</td></tr>
</tbody></table>
<p>If you are going to handle binary files then you will use below mentioned access modes instead of the above mentioned:</p>
<pre class="output">"rb", "wb", "ab", "rb+", "r+b", "wb+", "w+b", "ab+", "a+b"
</pre>
<h2>Closing a File</h2>
<p>To close a file, use the fclose( ) function. The prototype of this function is:</p>
<pre class="output"> int fclose( FILE *fp );
</pre>
<p>The <b>fclose( )</b> function returns zero on success, or <b>EOF</b> if there is an error in closing the file. This function actually, flushes any data still pending in the buffer to the file, closes the file, and releases any memory used for the file. The EOF is a constant defined in the header file <b>stdio.h</b>.</p>
<p>There are various functions provide by C standard library to read and write a file character by character or in the form of a fixed length string.  Let us see few of the in the next section.</p>
<h2>Writing a File</h2>
<p>Following is the simplest function to write individual characters to a stream:</p>
<pre class="output">int fputc( int c, FILE *fp );
</pre>
<p>The function <b>fputc()</b> writes the character value of the argument c to the output stream referenced by fp. It returns the written character written on success otherwise <b>EOF</b> if there is an error. You can use the following functions to write a null-terminated string to a stream:</p> 
<pre class="output">int fputs( const char *s, FILE *fp );
</pre>
<p>The function <b>fputs()</b> writes the string <b>s</b> to the output stream referenced by fp. It returns a non-negative value on success, otherwise <b>EOF</b> is returned in case of any error. You can use <b>int fprintf(FILE *fp,const char *format, ...)</b> function as well to write a string into a file.  Try the following example:</p>
<blockquote>Make sure you have <b>/tmp</b> directory available, if its not then before proceeding, you must create this directory on your machine.</blockquote>
<pre class="output">#include &lt;stdio.h&gt;

main()
{
   FILE *fp;

   fp = fopen("/tmp/test.txt", "w+");
   fprintf(fp, "This is testing for fprintf...\n");
   fputs("This is testing for fputs...\n", fp);
   fclose(fp);
}
</pre>
<p>When the above code is compiled and executed, it creates a new file <b>test.txt</b> in /tmp directory and writes two lines using two different functions. Let us read this file in next section.</p>
<h2>Reading a File</h2>
<p>Following is the simplest function to read a single character from a file:</p>
<pre class="output">int fgetc( FILE * fp );
</pre>
<p>The <b>fgetc()</b> function reads a character from the input file referenced by fp. The return value is the character read, or in case of any error it returns <b>EOF</b>. The following functions allow you to read a string from a stream:</p>
<pre class="output">char *fgets( char *buf, int n, FILE *fp );
</pre>
<p>The functions <b>fgets()</b> reads up to n - 1 characters from the input stream referenced by fp. It copies the read string into the buffer <b>buf</b>, appending a <b>null</b> character to terminate the string.</p>
<p>If this function encounters a newline character '\n' or the end of the file EOF before they have read the maximum number of characters, then it returns only the characters read up to that point including new line character. You can also use <b>int fscanf(FILE *fp, const char *format, ...)</b> function to read strings from a file but it stops reading after the first space character encounters.</p>
<pre class="output">#include &lt;stdio.h&gt;

main()
{
   FILE *fp;
   char buff[255];

   fp = fopen("/tmp/test.txt", "r");
   fscanf(fp, "%s", buff);
   printf("1 : %s\n", buff );

   fgets(buff, 255, (FILE*)fp);
   printf("2: %s\n", buff );
   
   fgets(buff, 255, (FILE*)fp);
   printf("3: %s\n", buff );
   fclose(fp);

}
</pre>
<p>When the above code is compiled and executed, it reads the file created in previous section and produces the following result:</p>
<pre class="output">1 : This
2: is testing for fprintf...

3: This is testing for fputs...
</pre>
<p>Let's see a little more detail about what happened here. First <b>fscanf()</b> method read just <b>This</b> because after that it encountered a space, second call is for <b>fgets()</b> which read the remaining line till it encountered end of line. Finally last call <b>fgets()</b> read second line completely.</p>
<h2>Binary I/O Functions</h2>
<p>There are following two functions, which can be used for binary input and output:</p>
<pre class="output">size_t fread(void *ptr, size_t size_of_elements, 
             size_t number_of_elements, FILE *a_file);
              
size_t fwrite(const void *ptr, size_t size_of_elements, 
             size_t number_of_elements, FILE *a_file);
</pre>
<p>Both of these functions should be used to read or write blocks of memories - usually arrays or structures.</p>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="file.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="preprocessor.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
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