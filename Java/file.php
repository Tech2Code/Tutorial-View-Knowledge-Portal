<?php
session_start();// Inialize session
$a=$_SESSION['auth'];
if (!isset($_SESSION['userid'])) // Check, if username session is NOT set then this page will jump to login page
{
header('Location: index.php');
}
include("../database/mydb.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Java - File</title>
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
      <a href="../c++/home.php"><div class="btn-b">C++</div></a>
      <a href="../java/home.php"><div class="btn-current-index">Java</div></a>
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
<tr><td><marquee direction="right" scrolldellay="500" ><img src="..\pic\java.png" alt=" Java" align="middle" width="180" height="147"/></marquee></td></tr>
<tr ><td ><a class="tab1" target="_top"    href="home.php" >Java - Home</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"    href="overview.php">Java - Overview</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="environment.php" >Java - Environment Setup</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="syntax.php" >Java - Basic Syntax</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="datatype.php" >Java - Basic Datatypes</a><br/></td></tr>
<tr><td ><a class="tab1" target="_top"   href="variable.php" >Java - Variable Types</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="modifier.php" >Java - Modifier Types</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="operator.php" >Java - Operators</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="loop.php" >Java - Loop Control</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="decision.php" >Java - Decision Making</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="array.php">Java - Arrays</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="string.php" >Java - String</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="method.php">Java - Methods</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="class.php">Java - Objects & Classes</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="inheritance.php" >Java - Inheritance</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="overriding.php">Java - Overriding</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="polymorphism.php">Java - Polymorphism</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="abstraction.php">Java - Abstraction</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="encapsulation.php">Java - Encapsulation</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="interfaces.php" >Java - Interfaces</a><br/></td></tr>
<tr><td ><a class="tab1" target="_top"   href="package.php">Java - Packages</a><br/></td></tr>
<tr><td class="bg"><a class="tab1" target="_top"   href="file.php">Java - File & I/O</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="exception.php">Java - Exception</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="multithreading.php">Java - Multithreading</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="applet.php">Java - Applet</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Streams, Files and I/O</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="package.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="exception.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>The java.io package contains nearly every class you might ever need to perform input and output (I/O) in Java. All these streams represent an input source and an output destination. The stream in the java.io package supports many data  such as primitives, Object, localized characters, etc.</p>
<p>A stream can be defined as a sequence of data. The InputStream is used to read data from a source and the OutputStream is used for writing data to a destination.</p>
<p>Java provides strong but flexible support for I/O related to Files and networks but this tutorial covers very basic functionality related to streams and I/O. We would see most commonly used example one by one:</p>
<h2>Byte Streams</h2>
<p>Java byte streams are used to perform input and output of 8-bit bytes. Though there are many classes  related to byte streams but the most frequently used classes are , <b>FileInputStream</b> and <b>FileOutputStream</b>. Following is an example which makes use of these two classes to copy an input file into an output file:</p>
<pre class="output">
import java.io.*;

public class CopyFile 
{
   public static void main(String args[]) throws IOException
   {
      FileInputStream in = null;
      FileOutputStream out = null;

      try {
         in = new FileInputStream("input.txt");
         out = new FileOutputStream("output.txt");
         
         int c;
         while ((c = in.read()) != -1)
		 {
            out.write(c);
         }
      }finally {
         if (in != null) 
		 {
            in.close();
         }
         if (out != null) 
		 {
            out.close();
         }
      }
   }
}
</pre>
<p>Now let's have a file <b>input.txt</b> with the following content:</p>
<pre class="output">This is test for copy file.
</pre>
<p>As a next step, compile above program and execute it, which will result in creating output.txt file with the same content as we have in input.txt. So let's put above code in CopyFile.java file and do the following:</p>
<pre class="output">$javac CopyFile.java
$java CopyFile
</pre>
<h2>Character Streams</h2>
<p>Java <b>Byte</b> streams  are used to perform input and output of 8-bit bytes, where as Java <b>Character</b> streams are used to perform input and output for 16-bit unicode. Though there are many classes  related to character streams but the most frequently used classes are , <b>FileReader </b> and <b>FileWriter.</b>. Though internally FileReader uses FileInputStream and FileWriter uses FileOutputStream but here major difference is that FileReader reads two bytes at a time and  FileWriter writes two bytes at a time.</p>

<p>We can re-write above example which makes use of these two classes to copy an input file (having unicode characters) into an output file:</p>
<pre class="output">
import java.io.*;

public class CopyFile 
{
   public static void main(String args[]) throws IOException
   {
      FileReader in = null;
      FileWriter out = null;

      try {
         in = new FileReader("input.txt");
         out = new FileWriter("output.txt");
         
         int c;
         while ((c = in.read()) != -1) 
		 {
            out.write(c);
         }
      }finally {
         if (in != null) 
		 {
            in.close();
         }
         if (out != null) 
		 {
            out.close();
         }
      }
   }
}
</pre>
<p>Now let's have a file <b>input.txt</b> with the following content:</p>
<pre class="output">This is test for copy file.
</pre>
<p>As a next step, compile above program and execute it, which will result in creating output.txt file with the same content as we have in input.txt. So let's put above code in CopyFile.java file and do the following:</p>
<pre class="output">$javac CopyFile.java
$java CopyFile
</pre>
<h2>Standard Streams</h2>
<p>All the programming languages provide support for standard I/O where user's program can take input from a keyboard and then produce output on the computer screen. If you are aware if C or C++ programming languages, then you must be aware of three standard  devices STDIN, STDOUT and STDERR. Similar way Java provides following three standard streams </p>
<ul>
<li><p><b>Standard Input:</b> This is used to feed the data to user's program and usually a keyboard is used as standard input stream and represented as <b>System.in</b>.</p></li>
<li><p><b>Standard Output:</b> This is used to output the data produced by the user's program and usually a computer screen is used to standard output stream and represented as <b>System.out</b>.</p></li>
<li><p><b>Standard Error:</b> This is used to output the error data produced by the user's program and usually a computer screen is used to standard error stream and represented as <b>System.err</b>.</p></li>
</ul>
<p>Following is a simple program which creates <b>InputStreamReader</b> to read standard input stream until the user types a "q":</p>
<pre class="output">
import java.io.*;

public class ReadConsole 
{
   public static void main(String args[]) throws IOException
   {
      InputStreamReader cin = null;

      try {
         cin = new InputStreamReader(System.in);
         System.out.println("Enter characters, 'q' to quit.");
         char c;
         do {
            c = (char) cin.read();
            System.out.print(c);
         } while(c != 'q');
      }finally {
         if (cin != null) {
            cin.close();
         }
      }
   }
}
</pre>
<p>Let's keep above code in ReadConsole.java file and try to compile and execute it as below. This program continues reading and outputting same character until we press 'q':</p>
<pre class="output">
$javac ReadConsole.java
$java ReadConsole
Enter characters, 'q' to quit.
1
1
e
e
q
q
</pre>
<h2>Reading and Writing Files:</h2>
<p>As described earlier, A stream can be defined as a sequence of data. The <b>InputStream</b> is used to read data from a source and the <b>OutputStream</b> is used for writing data to a destination.</p>
<p>Here is a hierarchy of classes to deal with Input and Output streams.</p>
<center>
<img src="../pic/iostreams.jpg" alt="Java I/O Streams">
</center>
<p>The two important streams are <b>FileInputStream</b> and <b>FileOutputStream</b>, which would be discussed in this tutorial:</p>
<h2>FileInputStream:</h2>
<p>This stream is used for reading data from the files. Objects can be created using the keyword new and there are several types of constructors available.</p>
<p>Following constructor takes a file name as a string to create an input stream object to read the file.:</p>
<pre class="output">
InputStream f = new FileInputStream("C:/java/hello");
</pre>
<p>Following constructor takes a file object to create an input stream object to read the file. First we create a file object using File() method as follows:</p>
<pre class="output">
File f = new File("C:/java/hello");
InputStream f = new FileInputStream(f);
</pre>
<p>Once you have <i>InputStream</i> object in hand, then there is a list of helper methods which can be used to read to stream or to do other operations on the stream.</p>
<table  border='1'class="tab" width=600 height=400>
<tbody><tr>
<th>SN</th><th>Methods with Description</th></tr>
<tr><td>1</td><td><b>public void close() throws IOException{}</b><br>This method closes the file output stream. Releases any system resources associated with the file. Throws an IOException.</td></tr>
<tr><td>2</td><td><b>protected void finalize()throws IOException {}</b><br>This method cleans up the connection to the file. Ensures that the close method of this file output stream is called when there are no more references to this stream. Throws an IOException.</td></tr>
<tr><td>3</td><td><b>public int read(int r)throws IOException{}</b><br>This method reads the specified byte of data from the InputStream. Returns an int.
Returns the next byte of data and -1 will be returned if it's end of file. </td></tr>
<tr><td>4</td><td><b>public int read(byte[] r) throws IOException{}</b><br>This method reads r.length bytes from the input stream into an array. Returns the total number of bytes read. If end of file -1 will be returned.</td></tr>
<tr><td>5</td><td><b>public int available() throws IOException{}</b><br>Gives the number of bytes that can be read from this file input stream. Returns an int.</td></tr>
</tbody></table>
<p>There are other important input streams available, for more detail you can refer to the following links:</p>
<ul>
<li>ByteArrayInputStream</li>
<li>DataInputStream</li>
</ul>
<h2>FileOutputStream:</h2>
<p>FileOutputStream is used to create a file and write data into it. The stream would create a file, if it doesn't already exist, before opening it for output.</p>
<p>Here are two constructors which can be used to create a FileOutputStream object.</p>
<p>Following constructor takes a file name as a string to create an input stream object to write the file:</p>
<pre class="output">
OutputStream f = new FileOutputStream("C:/java/hello"); 
</pre>
<p>Following constructor takes a file object to create an output stream object to write the file. First, we create a file object using File() method as follows:</p>
<pre class="output">
File f = new File("C:/java/hello");
OutputStream f = new FileOutputStream(f);
</pre>
<p>Once you have <i>OutputStream</i> object in hand, then there is a list of helper methods, which can be used to write to stream or to do other operations on the stream.</p>
<table  border='1'class="tab" width=600 height=400>
<tbody><tr>
<th>SN</th><th>Methods with Description</th></tr>
<tr><td>1</td><td><b>public void close() throws IOException{}</b><br>This method closes the file output stream. Releases any system resources associated with the file. Throws an IOException.</td></tr>
<tr><td>2</td><td><b>protected void finalize()throws IOException {}</b><br>This method cleans up the connection to the file. Ensures that the close method of this file output stream is called when there are no more references to this stream. Throws an IOException.</td></tr>
<tr><td>3</td><td><b>public void write(int w)throws IOException{}</b><br>This methods writes the specified byte to the output stream.</td></tr>
<tr><td>4</td><td><b>public void write(byte[] w)</b><br>Writes w.length bytes from the mentioned byte array to the OutputStream.</td></tr>
</tbody></table>
<p>There are other important output streams available, for more detail you can refer to the following links:</p>
<ul>
<li>ByteArrayOutputStream</li>
<li>DataOutputStream</li>
</ul>
<h2>Example:</h2>
<p>Following is the example to demonstrate InputStream and OutputStream:</p>
<pre class="output">
import java.io.*;

public class fileStreamTest
{

   public static void main(String args[])
   {
   
   try{
      byte bWrite [] = {11,21,3,40,5};
      OutputStream os = new FileOutputStream("test.txt");
      for(int x=0; x < bWrite.length ; x++)
	  {
         os.write( bWrite[x] ); // writes the bytes
      }
      os.close();
     
      InputStream is = new FileInputStream("test.txt");
      int size = is.available();

      for(int i=0; i< size; i++)
	  {
         System.out.print((char)is.read() + "  ");
      }
      is.close();
   }catch(IOException e)
   {
      System.out.print("Exception");
   }	
   }
}
</pre>
<p>The above code would create file test.txt and would write given numbers in binary format. Same would be output on the stdout screen.</p>
<h2>File Navigation and I/O:</h2>
<p>There are several other classes that we would be going through to get to know the basics of File Navigation and I/O.</p>
<ul >
<li>File Class</li>
<li>FileReader  Class</li>
<li>FileWriter  Class</li>
</ul>
<h2>Directories in Java:</h2>
<p>A directory is a File which can contains a list of other files and directories. You use <b>File</b> object to create directories, to list down files available in a directory. For complete detail check a list of all the methods which you can call on File object and what are related to directories.</p>
<h2>Creating Directories:</h2>
<p>There are two useful <b>File</b> utility methods, which can be used to create directories:</p>
<ul>
<li><p>The <b>mkdir( )</b> method creates a directory, returning true on success and false on failure. Failure indicates that the path specified in the File object already exists, or that the directory cannot be created because the entire path does not exist yet.</p></li>
<li><p>The <b>mkdirs()</b> method creates both a directory and all the parents of the directory.</p></li>
</ul>
<p>Following example creates "/tmp/user/java/bin" directory:</p>
<pre class="output">
import java.io.File;

public class CreateDir 
{
   public static void main(String args[]) 
   {
      String dirname = "/tmp/user/java/bin";
      File d = new File(dirname);
      // Create directory now.
      d.mkdirs();
  }
}
</pre>
<p>Compile and execute above code to create "/tmp/user/java/bin".</p>
<p><b>Note:</b> Java  automatically takes care of path separators on UNIX and Windows as per conventions. If you use a forward slash (/) on a Windows version of Java, the path will still resolve correctly.</p>
<h2>Listing Directories:</h2>
<p>You can use <b>list( )</b> method provided by <b>File</b> object to list down all the files and directories available in a directory as follows:</p>
<pre class="output">
import java.io.File;

public class ReadDir 
{
   public static void main(String[] args) 
   {
      
      File file = null;
      String[] paths;
            
      try{      
         // create new file object
         file = new File("/tmp");
                                 
         // array of files and directory
         paths = file.list();
            
         // for each name in the path array
         for(String path:paths)
         {
            // prints filename and directory name
            System.out.println(path);
         }
      }catch(Exception e)
	  {
         // if any error occurs
         e.printStackTrace();
      }
   }
}
</pre>
<p>This would produce following result based on the directories and files available in your <b>/tmp</b> directory:</p>
<pre class="output">test1.txt
test2.txt
ReadDir.java
ReadDir.class
</pre>
<br>
<hr>





</td>
</td><tr>
<td style="text-align:left;"><a  href="package.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
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