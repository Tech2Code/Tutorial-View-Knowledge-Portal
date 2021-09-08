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
<title>Java - Vriable</title>
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
<tr><td class="bg" ><a class="tab1" target="_top"   href="variable.php" >Java - Variable Types</a><br/></td></tr>
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
<tr><td><a class="tab1" target="_top"   href="file.php">Java - File & I/O</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="exception.php">Java - Exception</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="multithreading.php">Java - Multithreading</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="applet.php">Java - Applet</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java- Variable Types</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="datatype.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="modifier.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>A variable provides us with named storage that our programs can manipulate. Each variable in Java has a specific type, which determines the size and layout of the variable's memory; the range of values that can be stored within that memory; and the set of operations that can be applied to the variable.</p>
<p>You must declare all variables before they can be used. The basic form of a variable declaration is shown here:</p>
<pre class="output">
data type variable [ = value][, variable [= value] ...] ;
</pre>
<p>Here <i>data type</i> is one of Java's datatypes and <i>variable</i> is the name of the variable. To declare more than one variable of the specified type, you can use a comma-separated list.</p>
<p>Following are valid examples of variable declaration and initialization in Java:</p>
<pre class="output">
int a, b, c;         // Declares three ints, a, b, and c.
int a = 10, b = 10;  // Example of initialization
byte B = 22;         // initializes a byte type variable B.
double pi = 3.14159; // declares and assigns a value of PI.
char a = 'a';        // the char variable a iis initialized with value 'a'
</pre>
<p>This chapter will explain various variable types available in Java Language. There are three kinds of variables in Java:</p>
<ul >
<li><p>Local variables </p></li>
<li><p>Instance variables </p></li>
<li><p>Class/static variables</p></li>
</ul>
<h2>Local variables:</h2>
<ul>
<li><p>Local variables are declared in methods, constructors, or blocks.</p></li>
<li><p>Local variables are created when the method, constructor or block is entered and the variable will be destroyed once it exits the method, constructor or block.</p></li>
<li><p>Access modifiers cannot be used for local variables.</p></li>
<li><p>Local variables are visible only within the declared method, constructor or block.</p></li>
<li><p>Local variables are implemented at stack level internally.</p></li>
<li><p>There is no default value for local variables so local variables should be declared and an initial value should be assigned before the first use.</p></li>
</ul>
<h2>Example:</h2>
<p>Here, <i>age</i> is a local variable. This is defined inside <i>pupAge()</i> method and its scope is limited to this method only.</p>
<pre class="output">
public class Test
{ 
   public void pupAge()
   {
      int age = 0;
      age = age + 7;
      System.out.println("Puppy age is : " + age);
   }
   
   public static void main(String args[])
   {
      Test test = new Test();
      test.pupAge();
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">Puppy age is: 7
</pre>
<h2>Example:</h2>
<p>Following example uses <i>age</i> without initializing it, so it would give an error at the time of compilation.</p>
<pre class="output">
public class Test
{ 
   public void pupAge()
   {
      int age;
      age = age + 7;
      System.out.println("Puppy age is : " + age);
   }
   
   public static void main(String args[])
   {
      Test test = new Test();
      test.pupAge();
   }
}
</pre>
<p>This would produce the following error while compiling it:</p>
<pre class="output">Test.java:4:variable number might not have been initialized
age = age + 7;
         ^
1 error
</pre>
<h2>Instance variables:</h2>
<ul>
<li><p>Instance variables are declared in a class, but outside a method, constructor or any block.</p></li>
<li><p>When a space is allocated for an object in the heap, a slot for each instance variable value is created.</p></li>
<li><p>Instance variables are created when an object is created with the use of the keyword 'new' and destroyed when the object is destroyed.</p></li>
<li><p>Instance variables hold values that must be referenced by more than one method, constructor or block, or essential parts of an object's state that must be present throughout the class.</p></li>
<li><p>Instance variables can be declared in class level before or after use.</p></li>
<li><p>Access modifiers can be given for instance variables.</p></li>
<li><p>The instance variables are visible for all methods, constructors and block in the class. Normally, it is recommended to make these variables private (access level). However visibility for subclasses can be given for these variables with the use of access modifiers.</p></li>
<li><p>Instance variables have default values. For numbers the default value is 0, for Booleans it is false and for object references it is null. Values can be assigned during the declaration or within the constructor.</p></li>
<li><p>Instance variables can be accessed directly by calling the variable name inside the class. However within static methods and different class ( when instance variables are given accessibility) should be called using the fully qualified name . <i>ObjectReference.VariableName</i>.</p></li>
</ul>
<h2>Example:</h2>
<pre class="output">
import java.io.*;

public class Employee
{
   // this instance variable is visible for any child class.
   public String name;
   
   // salary  variable is visible in Employee class only.
   private double salary;
   
   // The name variable is assigned in the constructor. 
   public Employee (String empName)
   {
      name = empName;
   }

   // The salary variable is assigned a value.
   public void setSalary(double empSal)
   {
      salary = empSal;
   }
   
   // This method prints the employee details.
   public void printEmp()
   {
      System.out.println("name  : " + name );
      System.out.println("salary :" + salary);
   }

   public static void main(String args[])
   {
      Employee empOne = new Employee("Ransika");
      empOne.setSalary(1000);
      empOne.printEmp();
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">name  : Ransika
salary :1000.0
</pre>
<h2>Class/static variables:</h2>
<ul >
<li><p>Class variables also known as static variables are declared with the <i>static</i> keyword in a class, but outside a method, constructor or a block. </p></li>
<li><p>There would only be one copy of each class variable per class, regardless of how many objects are created from it.</p></li>
<li><p>Static variables are rarely used other than being declared as constants. Constants are variables that are declared as public/private, final and static. Constant variables never change from their initial value.</p></li>
<li><p>Static variables are stored in static memory. It is rare to use static variables other than declared final and used as either public or private constants.</p></li>
<li><p>Static variables are created when the program starts and destroyed when the program stops.</p></li>
<li><p>Visibility is similar to instance variables. However, most static variables are declared public since they must be available for users of the class.</p></li>
<li><p>Default values are same as instance variables. For numbers, the default value is 0; for Booleans, it is false; and for object references, it is null. Values can be assigned during the declaration or within the constructor. Additionally values can be assigned in special static initializer blocks.</p></li>
<li><p>Static variables can be accessed by calling with the class name . <i>ClassName.VariableName</i>.</p></li>
<li><p>When declaring class variables as public static final, then variables names (constants) are all in upper case. If the static variables are not public and final the naming syntax is the same as instance and local variables.</p></li>
</ul>
<h2>Example:</h2>
<pre class="output">
import java.io.*;

public class Employee
{
   // salary  variable is a private static variable
   private static double salary;

   // DEPARTMENT is a constant
   public static final String DEPARTMENT = "Development ";

   public static void main(String args[])
   {
      salary = 1000;
      System.out.println(DEPARTMENT+"average salary:"+salary);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">Development average salary:1000
</pre>
<p><b>Note:</b> If the variables are access from an outside class the constant should be accessed as Employee.DEPARTMENT</p>
<h2>What is Next?</h2>
<p>You already have used access modifiers ( public &amp; private ) in this chapter. The next chapter will explain you Access Modifiers and Non Access Modifiers in detail.</p>
<br>
<hr>





</td>
</td><tr>
<td style="text-align:left;"><a  href="datatype.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="modifier.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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