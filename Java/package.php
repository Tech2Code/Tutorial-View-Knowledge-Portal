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
<title>Java - Packages</title>
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
<tr><td  class="bg"><a class="tab1" target="_top"   href="package.php">Java - Packages</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="file.php">Java - File & I/O</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="exception.php">Java - Exception</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="multithreading.php">Java - Multithreading</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="applet.php">Java - Applet</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Packages</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="interfaces.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="file.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>Packages are used in Java in order to prevent naming conflicts, to control access, to make searching/locating and usage of classes, interfaces, enumerations and annotations easier, etc.</p>
<p>A Package can be defined as a grouping of related types(classes, interfaces, enumerations and annotations ) providing access protection and name space management.</p>
<p>Some of the existing packages in Java are::</p>
<ul>
<li><p><b>java.lang</b> - bundles the fundamental classes</p></li>
<li><p><b>java.io</b> -  classes for input , output functions are bundled in this package</p></li>
</ul>
<p>Programmers can define their own packages to bundle group of classes/interfaces, etc. It is a good practice to group related classes implemented by you so that a programmer can easily determine that the classes, interfaces, enumerations, annotations are related.</p>
<p>Since the package creates a new namespace there won't be any name conflicts with names in other packages. Using packages, it is easier to provide access control and it is also easier to locate the related classes.</p>
<h2>Creating a package:</h2>
<p>When creating a package, you should choose a name for the package and put a <b>package</b> statement with that name at the top of every source file that contains the classes, interfaces, enumerations, and annotation types that you want to include in the package.</p>
<p>The <b>package</b> statement should be the first line in the source file. There can be only one package statement in each source file, and it applies to all types in the file. </p>
<p>If a package statement is not used then the class, interfaces, enumerations, and annotation types will  be put into an unnamed package.</p>
<h2>Example:</h2>
<p>Let us look at an example that creates a package called <b>animals</b>. It is common practice to use lowercased names of packages to avoid any conflicts with the names of classes, interfaces.</p>
<p>Put an interface in the package <i>animals</i>:</p>
<pre class="output">
/* File name : Animal.java */
package animals;

interface Animal 
{
   public void eat();
   public void travel();
}
</pre>
<p>Now, put an implementation in the same package <i>animals</i>:</p>
<pre class="output">package animals;

/* File name : MammalInt.java */
public class MammalInt implements Animal
{

   public void eat()
   {
      System.out.println("Mammal eats");
   }

   public void travel()
   {
      System.out.println("Mammal travels");
   } 

   public int noOfLegs()
   {
      return 0;
   }

   public static void main(String args[])
   {
      MammalInt m = new MammalInt();
      m.eat();
      m.travel();
   }
} 
</pre>
<p>Now, you compile these two files and put them in a sub-directory called <b>animals</b> and try to run as follows:</p>
<pre class="output">
$ mkdir animals
$ cp Animal.class  MammalInt.class animals
$ java animals/MammalInt
Mammal eats
Mammal travels
</pre>
<h2>The import Keyword:</h2>
<p>If a class wants to use another class in the same package, the package name does not need to be used. Classes in the same package find each other without
any special syntax.</p>
<h2>Example:</h2>
<p>Here, a class named Boss is added to the payroll package that already contains Employee. The Boss can then refer to the Employee class without using the payroll prefix, as demonstrated by the following Boss class.</p>
<pre class="output">
package payroll;

public class Boss
{
   public void payEmployee(Employee e)
   {
      e.mailCheck();
   }
}
</pre>
<p>What happens if Boss is not in the payroll package? The Boss class must then use one of the following techniques for referring to a class in a different package.</p>
<ul>
<li><p>The fully qualified name of the class can be used. For example:</p></li>
</ul>
<pre class="output">
payroll.Employee
</pre>
<ul>
<li><p>The package can be imported using the import keyword and the wild card (*). For example:</p></li>
</ul>
<pre class="output">
import payroll.*;
</pre>
<ul>
<li><p>The class itself can be imported using the import keyword. For example:</p></li>
</ul>
<pre class="output">
import payroll.Employee;
</pre>
<p><b>Note:</b> A class file can contain any number of import statements. The import statements must appear after the package statement and before the class declaration.</p>
<h2>The Directory Structure of Packages:</h2>
<p>Two major results occur when a class is placed in a package:</p>
<ul>
<li><p>The name of the package becomes a part of the name of the class, as we just discussed in the previous section.</p></li>
<li><p>The name of the package must match the directory structure where the corresponding bytecode resides.</p></li>
</ul>
<p>Here is simple way of managing your files in Java:</p>
<p>Put the source code for a class, interface, enumeration, or annotation type in a text file whose name is the simple name of the type and whose extension is <b>.java</b>. For example:</p>
<pre class="output">
// File Name :  Car.java

package vehicle;

public class Car 
{
   // Class implementation.   
}
</pre>
<p>Now, put the source file in a directory whose name reflects the name of the package to which the class belongs:</p>
<pre class="output">
....\vehicle\Car.java
</pre>
<p>Now, the qualified class name and  pathname would be as below:</p>
<ul>
<li><p>Class name -&gt;  vehicle.Car</p></li>
<li><p>Path name -&gt;   vehicle\Car.java (in windows)</p></li>
</ul>
<p>In general, a company uses its reversed Internet domain name for its package names.  Example: A company's Internet domain name is apple.com, then all its  package names would start with com.apple. Each component of the package name corresponds to a subdirectory.</p>
<p> Example: The company had a com.apple.computers package that contained a Dell.java source file, it would be contained in a series of subdirectories like this:</p>
<pre class="output">
....\com\apple\computers\Dell.java
</pre>
<p>At the time of compilation, the compiler creates a different output file for each class, interface and enumeration defined in it. The base name of the output file is the name of the type, and its extension is <b> .class</b></p>
<p>For example:</p>
<pre class="output">
// File Name: Dell.java

package com.apple.computers;
public class Dell
{
      
}
class Ups
{
      
}
</pre>
<p>Now, compile this file as follows using -d option:</p>
<pre class="output">
$javac -d . Dell.java
</pre>
<p>This would put compiled files as follows:</p>
<pre class="output">
.\com\apple\computers\Dell.class
.\com\apple\computers\Ups.class
</pre>
<p>You can import all the classes or interfaces defined in <i>\com\apple\computers\</i> as follows:</p>
<pre class="output">
import com.apple.computers.*;
</pre>
<p>Like the .java source files, the compiled .class files should be in a series of directories that reflect the package name. However, the path to the .class files does not have to be the same as the path to the .java source files. You can arrange your source and class directories separately, as: </p>
<pre class="output">
&lt;path-one&gt;\sources\com\apple\computers\Dell.java

&lt;path-two&gt;\classes\com\apple\computers\Dell.class
</pre>
<p>By doing this, it is possible to give the classes directory to other programmers without revealing your sources. You also need to manage source and class files in this manner so that the compiler and the Java Virtual Machine (JVM) can find all the types your program uses. </p>
<p>The full path to the classes directory, &lt;path-two&gt;\classes, is called the class path, and is set with the CLASSPATH system variable. Both the compiler and the JVM construct the path to your .class files by adding the package name to the class path.</p>
<p>Say &lt;path-two&gt;\classes is the class path, and the package name is com.apple.computers, then the compiler and JVM will look for .class files in &lt;path-two&gt;\classes\com\apple\compters.</p>
<p>A class path may include several paths. Multiple paths should be separated by a semicolon (Windows) or colon (Unix). By default, the compiler and the JVM search the current directory and the JAR file containing the Java platform classes so that these directories are automatically in the class path.</p>
<h2>Set CLASSPATH System Variable:</h2>
<p>To display the current CLASSPATH variable, use the following commands in Windows and UNIX (Bourne shell): </p>
<ul>
<li><p>In Windows -&gt; C:\&gt; set CLASSPATH</p></li>
<li><p>In UNIX -&gt; % echo $CLASSPATH</p></li>
</ul>
<p>To delete the current contents of the CLASSPATH variable, use :</p>
<ul>
<li><p>In Windows -&gt; C:\&gt; set CLASSPATH=</p></li>
<li><p>In UNIX -&gt; % unset CLASSPATH; export CLASSPATH</p></li>
</ul>
<p>To set the CLASSPATH variable: </p>
<ul>
<li><p>In Windows -&gt; set CLASSPATH=C:\users\jack\java\classes</p></li>
<li><p>In UNIX -&gt; % CLASSPATH=/home/jack/java/classes; export CLASSPATH</p></li>
</ul>
<br>
<hr>




</td>
</td><tr>
<td style="text-align:left;"><a  href="interfaces.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="file.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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