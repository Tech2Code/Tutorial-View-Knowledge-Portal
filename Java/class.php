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
<title>Java - Class</title>
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
<tr><td class="bg"><a class="tab1" target="_top"   href="class.php">Java - Objects & Classes</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Objects and Classes</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="method.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="inheritance.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>Java is an Object-Oriented Language. As a language that has the Object Oriented feature, Java supports the following fundamental concepts:</p>
<ul class="list">
<li>Polymorphism</li>
<li>Inheritance</li>
<li>Encapsulation</li>
<li>Abstraction</li>
<li>Classes</li>
<li>Objects</li>
<li>Instance</li>
<li>Method</li>
<li>Message Parsing</li>
</ul>
<p>In this chapter, we will look into the concepts Classes and Objects.</p>
<ul class="list">
<li><p><b>Object -</b> Objects have states and behaviors. Example: A dog has states - color, name, breed as well as behaviors -wagging, barking, eating. An object is an instance of a class. </p></li>
<li><p><b>Class -</b> A class can be defined as a template/blue print that describes the behaviors/states that object of its type support.</p></li>
</ul>
<h2>Objects in Java:</h2>
<p>Let us now look deep into what are objects. If we consider the real-world we can find many objects around us, Cars, Dogs, Humans, etc. All these objects have a state and behavior.</p>
<p>If we consider a dog, then its state is - name, breed, color, and the behavior is - barking, wagging, running</p>
<p>If you compare the software object with a real world object, they have very similar characteristics.</p>
<p>Software objects also have a state and behavior. A software object's state is stored in fields and behavior is shown via methods.</p>
<p>So in software development, methods operate on the internal state of an object and the object-to-object communication is done via methods.</p>
<h2>Classes in Java:</h2>
<p>A class is a blue print from which individual objects are created.</p>
<p>A sample of a class is given below:</p>
<pre class="output">
public class Dog
{
   String breed;
   int age;
   String color;

   void barking()
   {
   }
   
   void hungry()
   {
   }
   
   void sleeping()
   {
   }
}
</pre>
<p>A class can contain any of the following variable types.</p>
<ul>
<li><p><b>Local variables: </b>Variables defined inside methods, constructors or blocks are called local variables. The variable will be declared and initialized within the method and the variable will be destroyed when the method has completed.</p></li>
<li><p><b>Instance variables: </b>Instance variables are variables within a class but outside any method. These variables are instantiated when the class is loaded. Instance variables can be accessed from inside any method, constructor or blocks of that particular class.</p></li>
<li><p><b>Class variables: </b>Class variables are variables declared with in a class, outside any method, with the static keyword.</p></li>
</ul>
<p>A class can have any number of methods to access the value of various kinds of methods. In the above example, barking(), hungry() and sleeping() are methods.</p>
<p>Below mentioned are some of the important topics that need to be discussed when looking into classes of the Java Language.</p>
<h2>Constructors:</h2>
<p>When discussing about classes, one of the most important sub topic would be constructors. Every class has a constructor. If we do not explicitly write a constructor for a class the Java compiler builds a default constructor for that class.</p>
<p>Each time a new object is created, at least one constructor will be invoked. The main rule of constructors is that they should have the same name as the class. A class can have more than one constructor.</p>
<p>Example of a constructor is given below:</p>
<pre class="output">
public class Puppy{
   public Puppy(){
   }

   public Puppy(String name){
      // This constructor has one parameter, name.
   }
}
</pre>
<p>Java also supports Singleton Classes where you would be able to create only one instance of a class.</p>
<h2>Creating an Object:</h2>
<p>As mentioned previously, a class provides the blueprints for objects. So basically an object is created from a class. In Java, the new key word is used to create new objects. </p>
<p>There are three steps when creating an object from a class:</p>
<ul>
<li><p><b>Declaration: </b>A variable declaration with a variable name with an object type.</p></li>
<li><p><b>Instantiation: </b>The 'new' key word is used to create the object.</p></li>
<li><p><b>Initialization: </b>The 'new' keyword is followed by a call to a constructor. This call initializes the new object.</p></li>
</ul>
<p>Example of creating an object is given below:</p>
<pre class="output">
public class Puppy
{

   public Puppy(String name)
   {
      // This constructor has one parameter, name.
      System.out.println("Passed Name is :" + name ); 
   }
   public static void main(String []args)
   {
      // Following statement would create an object myPuppy
      Puppy myPuppy = new Puppy( "tommy" );
   }
}
</pre>
<p>If we compile and run the above program, then it would produce the following result:</p>
<pre class="output">
Passed Name is :tommy
</pre>
<h2>Accessing Instance Variables and Methods:</h2>
<p>Instance variables and methods are accessed via created objects. To access an instance variable the fully qualified path should be as follows:</p>
<pre class="output">
/* First create an object */
ObjectReference = new Constructor();

/* Now call a variable as follows */
ObjectReference.variableName;

/* Now you can call a class method as follows */
ObjectReference.MethodName();
</pre>
<h2>Example:</h2>
<p>This example explains how to access instance variables and methods of a class:</p>
<pre class="output">
public class Puppy
{
   
   int puppyAge;

   public Puppy(String name)
   {
      // This constructor has one parameter, name.
      System.out.println("Passed Name is :" + name ); 
   }
   public void setAge( int age )
   {
       puppyAge = age;
   }

   public int getAge( )
   {
       System.out.println("Puppy's age is :" + puppyAge ); 
       return puppyAge;
   }
   public static void main(String []args)
   {
      /* Object creation */
      Puppy myPuppy = new Puppy( "tommy" );

      /* Call class method to set puppy's age */
      myPuppy.setAge( 2 );

      /* Call another class method to get puppy's age */
      myPuppy.getAge( );

      /* You can access instance variable as follows as well */
      System.out.println("Variable Value :" + myPuppy.puppyAge ); 
   }
}
</pre>
<p>If we compile and run the above program, then it would produce the following result:</p>
<pre class="output">
Passed Name is :tommy
Puppy's age is :2
Variable Value :2
</pre>
<h2>Source file declaration rules:</h2>
<p>As the last part of this section let's now look into the source file declaration rules. These rules are essential when declaring classes, <i>import</i> statements and <i>package</i> statements in a source file.</p>
<ul>
<li><p>There can be only one public class per source file.</p></li>
<li><p>A source file can have multiple non public classes.</p></li>
<li><p>The public class name should be the name of the source file as well which should be appended by <b>.java</b> at the end. For example : The class name is . <i>public class Employee{}</i> Then the source file should be as Employee.java.</p></li>
<li><p>If the class is defined inside a package, then the package statement should be the first statement in the source file.</p></li>
<li><p>If import statements are present then they must be written between the package statement and the class declaration. If there are no package statements then the import statement should be the first line in the source file. </p></li>
<li><p>Import and package statements will imply to all the classes present in the source file. It is not possible to declare different import and/or package statements to different classes in the source file.</p></li>
</ul>
<p>Classes have several access levels and there are different types of classes; abstract classes, final classes, etc. I will be explaining about all these in the access modifiers chapter.</p>
<p>Apart from the above mentioned types of classes, Java also has some special classes called Inner classes and Anonymous classes.</p>
<h2>Java Package:</h2>
<p>In simple, it is a way of categorizing the classes and interfaces. When developing applications in Java,  hundreds of classes and interfaces will be written, therefore categorizing these classes is a must as well as makes life much easier.</p>
<h2>Import statements:</h2>
<p>In Java if a fully qualified name, which includes the package and the class name, is given then the compiler can easily locate the source code or classes. Import statement is a way of giving the proper location for the compiler to find that particular class.</p>
<p>For example, the following line would ask compiler to load all the classes available in directory java_installation/java/io :</p>
<pre class="output">
import java.io.*;
</pre><h2>A Simple Case Study:</h2>
<p>For our case study, we will be creating two classes. They are Employee and EmployeeTest.</p>
<p>First open notepad and add the following code. Remember this is the Employee class and the class is a public class. Now, save this source file with the name Employee.java.</p>
<p>The Employee class has four instance variables name, age, designation and salary. The class has one explicitly defined constructor, which takes a parameter.</p>
<pre class="output">
import java.io.*;
public class Employee
{
   String name;
   int age;
   String designation;
   double salary;
	
   // This is the constructor of the class Employee
   public Employee(String name)
   {
      this.name = name;
   }
   // Assign the age of the Employee  to the variable age.
   public void empAge(int empAge)
   {
      age =  empAge;
   }
   /* Assign the designation to the variable designation.*/
   public void empDesignation(String empDesig)
   {
      designation = empDesig;
   }
   /* Assign the salary to the variable	salary.*/
   public void empSalary(double empSalary)
   {
      salary = empSalary;
   }
   /* Print the Employee details */
   public void printEmployee()
   {
      System.out.println("Name:"+ name );
      System.out.println("Age:" + age );
      System.out.println("Designation:" + designation );
      System.out.println("Salary:" + salary);
   }
}
</pre>
<p>As mentioned previously in this tutorial, processing starts from the main method. Therefore in-order for us to run this Employee class there should be main method and objects should be created. We will be creating a separate class for these tasks.</p>
<p>Given below is the <i>EmployeeTest</i> class, which creates two instances of the class Employee and invokes the methods for each object to assign values for each variable.</p>
<p>Save the following code in EmployeeTest.java file</p>
<pre class="output">
import java.io.*;
public class EmployeeTest
{

   public static void main(String args[])
   {
      /* Create two objects using constructor */
      Employee empOne = new Employee("James Smith");
      Employee empTwo = new Employee("Mary Anne");

      // Invoking methods for each object created
      empOne.empAge(26);
      empOne.empDesignation("Senior Software Engineer");
      empOne.empSalary(1000);
      empOne.printEmployee();

      empTwo.empAge(21);
      empTwo.empDesignation("Software Engineer");
      empTwo.empSalary(500);
      empTwo.printEmployee();
   }
}
</pre>
<p>Now, compile both the classes and then run <i>EmployeeTest</i> to see the result as follows:</p>
<pre class="output">
C :> javac Employee.java
C :> vi EmployeeTest.java
C :> javac  EmployeeTest.java
C :> java EmployeeTest
Name:James Smith
Age:26
Designation:Senior Software Engineer
Salary:1000.0
Name:Mary Anne
Age:21
Designation:Software Engineer
Salary:500.0
</pre>


<hr>



</td>
</td><tr>
<td style="text-align:left;"><a  href="method.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="inheritance.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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