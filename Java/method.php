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
<title>Java - Methods</title>
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
<tr><td class="bg"><a class="tab1" target="_top"   href="method.php">Java - Methods</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Methods</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="string.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="class.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">


<hr>
<p>A Java method is a collection of statements that are grouped together to perform an operation. When you call the System.out.println method, for example, the system actually executes several statements in order to display a message on the console.</p>
<p>Now you will learn how to create your own methods with or without return values, invoke a method with or without parameters, overload methods using the same names, and apply method abstraction in the program design.</p>
<h2>Creating Method:</h2>
<p>Considering the following example to explain the syntax of a method:</p>
<pre class="output">
public static int funcName(int a, int b) 
{
  // body
}
</pre>
<p>Here, 
</p><ul>
<li><p><b>public static</b> : modifier.</p></li>
<li><p><b>int</b>: return type</p></li>
<li><p><b>funcName</b>: function name</p></li>
<li><p><b>a, b</b>: formal parameters</p></li>
<li><p><b>int a, int b</b>: list of parameters</p></li>
</ul>
<p>Methods are also known as Procedures or Functions:</p>
<ul>
<li><p><b>Procedures:</b> They don't return any value.</p></li>
<li><p><b>Functions:</b> They return value.</p></li>
</ul>
<p>Method definition consists of a method header and a method body. The same is shown below:
</p><pre class="output">
modifier returnType nameOfMethod (Parameter List) {
 // method body
}
</pre>
<p>The syntax shown above includes:</p>
<ul>
<li><p><b>modifier:</b> It defines the access type of the method and it is optional to use.</p></li>
<li><p><b>returnType:</b> Method may return a value.
</p></li><li><p><b>nameOfMethod:</b> This is the method name. The method signature consists of the method name and the parameter list.</p></li>
<li><p><b>Parameter List:</b> The list of parameters, it is the type, order, and number of parameters of a method. These are optional, method may contain zero parameters.</p></li>
<li><p><b>method body:</b> The method body defines what the method does with statements.</p></li>
</ul>
<h2>Example:</h2>
<p>Here is the source code of the above defined  method called max(). This method takes two parameters num1 and num2 and returns the maximum between the two:</p> 
<pre class="output">
/** the snippet returns the minimum between two numbers */
public static int minFunction(int n1, int n2) 
{
   int min;
   if (n1 > n2)
      min = n2;
   else
      min = n1;

   return min; 
}
</pre>
<h2>Method Calling:</h2>
<p>For using a method, it should be called. There are two ways in which a method is called i.e. method returns a value or returning nothing (no return value).</p>
<p>The process of method calling is simple. When a program invokes a method, the program control gets transferred to the called method. This called method then returns control to the caller in two conditions, when:
</p><ul>
<li><p>return statement is executed.</p></li>
<li><p>reaches the method ending closing brace.</p></li>
</ul>
<p>The methods returning void is considered as call to a statement. Lets consider an example:</p>
<pre class="output">
System.out.println("This is tutorialspoint.com!");
</pre>
<p>The method returning value can be understood by the following example:</p>
<pre class="output">
int result = sum(6, 9);
</pre>
<h2>Example:</h2>
<p>Following is the example to demonstrate how to define a method and how to call it:</p>
<pre class="output">
public class ExampleMinNumber
{
   
   public static void main(String[] args) 
   {
      int a = 11;
      int b = 6;
      int c = minFunction(a, b);
      System.out.println("Minimum Value = " + c);
   }

   /** returns the minimum of two numbers */
   public static int minFunction(int n1, int n2)
   {
      int min;
      if (n1 > n2)
         min = n2;
      else
         min = n1;

      return min; 
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">
Minimum value = 6
</pre>
<h2>The void Keyword:</h2>
<p>The void keyword allows us to create methods which do not return a value. Here, in the following example we're considering a void method <i>methodRankPoints</i>. This method is a void method which does not return any value. Call to a void method must be a statement i.e. <i>methodRankPoints(255.7);</i>. It is a Java statement which ends with a semicolon as shown below.</p>
<h2>Example:</h2>
<pre class="output">
public class ExampleVoid 
{

   public static void main(String[] args)
   {
      methodRankPoints(255.7);
   }

   public static void methodRankPoints(double points) 
   {
      if (points >= 202.5) {
	  
         System.out.println("Rank:A1");
      }
      else if (points >= 122.4) 
	  {
         System.out.println("Rank:A2");
      }
      else
	  {
         System.out.println("Rank:A3");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">Rank:A1</pre>
<h2>Passing Parameters by Value:</h2>
<p> While working under calling process, arguments is to be passed. These should be in the same order as their respective parameters in the method specification. Parameters can be passed by value or by reference.</p>
<p>Passing Parameters by Value means calling a method with a parameter. Through this the argument value is passed to the parameter.</p>
<h2>Example:</h2>
<p>The following program shows an example of passing parameter by value. The values of the arguments remains the same even after the method invocation.</p>
<pre class="output">
public class swappingExample 
{

   public static void main(String[] args)
   {
      int a = 30;
      int b = 45;

      System.out.println("Before swapping, a = " +
                          a + " and b = " + b);

      // Invoke the swap method
      swapFunction(a, b);
      System.out.println("\n**Now, Before and After swapping values will be same here**:");
      System.out.println("After swapping, a = " +
                         a + " and b is " + b);
   }

   public static void swapFunction(int a, int b) 
   {
   
      System.out.println("Before swapping(Inside), a = " + a
                           + " b = " + b);
      // Swap n1 with n2
      int c = a;
      a = b;
      b = c;

      System.out.println("After swapping(Inside), a = " + a
                           + " b = " + b);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">Before swapping, a = 30 and b = 45
Before swapping(Inside), a = 30 b = 45
After swapping(Inside), a = 45 b = 30

**Now, Before and After swapping values will be same here**:
After swapping, a = 30 and b is 45
</pre>
<h2>Method Overloading:</h2>
<p>When a class has two or more methods by same name but different parameters, it is known as method overloading. It is different from overriding. In overriding a method has same method name, type, number of parameters etc.</p>
<p>Lets consider the example shown before for finding minimum numbers of integer type. If, lets say we want to find minimum number of double type. Then the concept of Overloading will be introduced to create two or more methods with the same name but different parameters.</p><p>
</p><p></p>
<p>The below example explains the same:</p>
<pre class="output">
public class ExampleOverloading
{

   public static void main(String[] args) 
   {
      int a = 11;
      int b = 6;
      double c = 7.3;
      double d = 9.4;
      int result1 = minFunction(a, b);
      // same function name with different parameters
      double result2 = minFunction(c, d);
      System.out.println("Minimum Value = " + result1);
      System.out.println("Minimum Value = " + result2);
   }

  // for integer
   public static int minFunction(int n1, int n2) 
   {
      int min;
      if (n1 > n2)
         min = n2;
      else
         min = n1;

      return min; 
   }
   // for double
   public static double minFunction(double n1, double n2) 
   {
     double min;
      if (n1 > n2)
         min = n2;
      else
         min = n1;

      return min; 
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">
Minimum Value = 6
Minimum Value = 7.3
</pre>
<p>Overloading methods makes program readable. Here, two methods are given same name but with different parameters. The minimum number from integer and double types is the result.</p>
<h2>Using Command-Line Arguments:</h2>
<p>Sometimes you will want to pass information into a program when you run it. This is accomplished by passing command-line arguments to main( ).</p>
<p>A command-line argument is the information that directly follows the program's name on the command line when it is executed. To access the command-line arguments inside a Java program is quite easy.they are stored as strings in the String array passed to main( ).</p>
<h2>Example:</h2>
<p>The following program displays all of the command-line arguments that it is called with:</p>
<pre class="output">
public class CommandLine 
{

   public static void main(String args[])
   { 
      for(int i=0; i&lsaquo;args.length; i++){
         System.out.println("args[" + i + "]: " +
                                           args[i]);
      }
   }
}
</pre>
<p>Try executing this program as shown here:</p>
<pre class="output">
java CommandLine this is a command line 200 -100
</pre>
<p>This would produce the following result:</p>
<pre class="output">
args[0]: this
args[1]: is
args[2]: a
args[3]: command
args[4]: line
args[5]: 200
args[6]: -100
</pre>
<h2>The Constructors:</h2>
<p>A constructor initializes an object when it is created. It has the same name as its class and is syntactically similar to a method. However, constructors have no explicit return type.</p>
<p>Typically, you will use a constructor to give initial values to the instance variables defined by the class, or to perform any other startup procedures required to create a fully formed object.</p>
<p>All classes have constructors, whether you define one or not, because Java automatically provides a default constructor that initializes all member variables to zero. However, once you define your own constructor, the default constructor is no longer used.</p>
<h2>Example:</h2>
<p>Here is a simple example that uses a constructor:</p>
<pre class="output">
// A simple constructor.
class MyClass {
   int x;
   
   // Following is the constructor
   MyClass() {
      x = 10;
   }
}
</pre>
<p>You would call constructor to initialize objects as follows:</p>
<pre class="output"> 
public class ConsDemo 
{

   public static void main(String args[]) 
   {
      MyClass t1 = new MyClass();
      MyClass t2 = new MyClass();
      System.out.println(t1.x + " " + t2.x);
   }
}
</pre>
<p>Most often, you will need a constructor that accepts one or more parameters. Parameters are added to a constructor in the same way that they are added to a method, just declare them inside the parentheses after the constructor's name.</p>
<h2>Example:</h2>
<p>Here is a simple example that uses a constructor:</p>
<pre class="output">
// A simple constructor.
class MyClass 
{
   int x;
   
   // Following is the constructor
   MyClass(int i ) 
   {
      x = i;
   }
}
</pre>
<p>You would call constructor to initialize objects as follows:</p>
<pre class="output" >
public class ConsDemo 
{

   public static void main(String args[]) 
   {
      MyClass t1 = new MyClass( 10 );
      MyClass t2 = new MyClass( 20 );
      System.out.println(t1.x + " " + t2.x);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">10 20</pre>
<h2>Variable Arguments(var-args):</h2>
<p>JDK 1.5 enables you to pass a variable number of arguments of the same type to a method. The parameter in the method is declared as follows:</p>
<pre class="output"><span class="pln">typeName</span><span class="pun">...</span><span class="pln"> parameterName</span></pre>
<p>In the method declaration, you specify the type followed by an ellipsis (...) Only one variable-length parameter may be specified in a method, and this parameter must be the last parameter. Any regular parameters must precede it.</p>
<h2>Example:</h2>
<pre class="output">
public class VarargsDemo 
{

   public static void main(String args[]) 
   {
      // Call method with variable args  
	  printMax(34, 3, 3, 2, 56.5);
      printMax(new double[]{1, 2, 3});
   }

   public static void printMax( double... numbers) 
   {
   if (numbers.length == 0) {
      System.out.println("No argument passed");
      return;
   }

   double result = numbers[0];

   for (int i = 1; i <  numbers.length; i++)
      if (numbers[i] >  result)
      result = numbers[i];
      System.out.println("The max value is " + result);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">
The max value is 56.5
The max value is 3.0
</pre>
<h2>The finalize( ) Method:</h2>
<p>It is possible to define a method that will be called just before an object's final destruction by the garbage collector. This method is called <b>finalize( )</b>, and it can be used to ensure that an object terminates cleanly.</p>
<p>For example, you might use finalize( ) to make sure that an open file owned by that object is closed.</p>
<p>To add a finalizer to a class, you simply define the finalize( ) method. The Java runtime calls that method whenever it is about to recycle an object of that class.</p>
<p>Inside the finalize( ) method, you will specify those actions that must be performed before an object is destroyed.</p>
<p>The finalize( ) method has this general form:</p>
<pre class="output">
protected void finalize( )
{
   // finalization code here
}
</pre>
<p>Here, the keyword protected is a specifier that prevents access to finalize( ) by code defined outside its class.</p>
<p>This means that you cannot know when or even if finalize( ) will be executed. For example, if your program ends before garbage collection occurs, finalize( ) will not execute.</p>
<br>
<hr>




</td>
</td><tr>
<td style="text-align:left;"><a  href="string.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="class.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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