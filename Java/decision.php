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
<title>Java - Decision</title>
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
<tr><td class="bg"><a class="tab1" target="_top"   href="decision.php" >Java - Decision Making</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java Decision Making</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="loop.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="array.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>

<p>There are two types of decision making statements in Java. They are:</p>
<ul>
<li><p>if statements</p></li>
<li><p>switch statements</p></li>
</ul>
<h2>The if Statement:</h2>
<p>An if statement consists of a Boolean expression followed by one or more statements.</p>
<h2>Syntax:</h2>
<p>The syntax of an if statement is:</p>
<pre class="output">
if(Boolean_expression)
{
   //Statements will execute if the Boolean expression is true
}
</pre>
<p>If the Boolean expression evaluates to true then the block of code inside the if statement will be executed. If not the first set of code after the end of the if statement (after the closing curly brace) will be executed.</p>
<h2>Example:</h2>
<pre class="output">
public class Test 
{
   public static void main(String args[])
   {
      int x = 10;
      if( x &lt; 20 )
	  {
         System.out.print("This is if statement");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">This is if statement
</pre>
<h2>The if...else Statement:</h2>
<p>An if statement can be followed by an optional <i>else</i> statement, which executes when the Boolean expression is false.</p>
<h2>Syntax:</h2>
<p>The syntax of an if...else is:</p>
<pre class="output">
if(Boolean_expression)
{
   //Executes when the Boolean expression is true
}
else
{
   //Executes when the Boolean expression is false
}
</pre>
<h2>Example:</h2>
<pre class="output">
public class Test 
{

   public static void main(String args[])
   {
      int x = 30;

      if( x &lt; 20 )
	  {
         System.out.print("This is if statement");
      }
	  else
	  {
         System.out.print("This is else statement");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">This is else statement
</pre>
<h2>The if...else if...else Statement:</h2>
<p>An if statement can be followed by an optional <i>else if...else</i> statement, which is very useful to test various conditions using single if...else if statement.</p>
<p>When using if , else if , else statements there are few points to keep in mind.</p>
<ul>
<li><p>An if can have zero or one else's and it must come after any else if's.</p></li>
<li><p>An if can have zero to many else if's and they must come before the else.</p></li>
<li><p>Once an else if succeeds, none of the remaining else if's or else's will be tested.</p></li>
</ul>
<h2>Syntax:</h2>
<p>The syntax of an if...else is:</p>
<pre class="output">
if(Boolean_expression 1)
{
   //Executes when the Boolean expression 1 is true
}
else if(Boolean_expression 2)
{
   //Executes when the Boolean expression 2 is true
}
else if(Boolean_expression 3)
{
   //Executes when the Boolean expression 3 is true
}
else 
{
   //Executes when the none of the above condition is true.
}
</pre>
<h2>Example:</h2>
<pre class="output">
public class Test 
{
   public static void main(String args[])
   {
      int x = 30;

      if( x == 10 )
	  {
         System.out.print("Value of X is 10");
      }
	  else if( x == 20 )
	  {
         System.out.print("Value of X is 20");
      }
	  else if( x == 30 )
	  {
         System.out.print("Value of X is 30");
      }
	  else
	  {
         System.out.print("This is else statement");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">Value of X is 30
</pre>
<h2>Nested if...else Statement:</h2>
<p>It is always legal to nest if-else statements which means you can use one if or else if statement inside another if or else if statement.</p>
<h2>Syntax:</h2>
<p>The syntax for a nested if...else is as follows:</p>
<pre class="output">
if(Boolean_expression 1)
{
   //Executes when the Boolean expression 1 is true
   if(Boolean_expression 2)
   {
      //Executes when the Boolean expression 2 is true
   }
}
</pre>
<p>You can nest <i>else if...else</i> in the similar way as we have nested <i>if</i> statement.</p>
<h2>Example:</h2>
<pre class="output">public class Test 
{

   public static void main(String args[])
   {
      int x = 30;
      int y = 10;

      if( x == 30 ){
         if( y == 10 ){
             System.out.print("X = 30 and Y = 10");
          }
       }
    }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">X = 30 and Y = 10
</pre>
<h2>The switch Statement:</h2>
<p>A <i>switch</i> statement allows a variable to be tested for equality against a list of values. Each value is called a case, and the variable being switched on is
checked for each case.</p>
<h2>Syntax:</h2>
<p>The syntax of enhanced for loop is:</p>
<pre class="output">
switch(expression)
{
    case value :
       //Statements
       break; //optional
    case value :
       //Statements
       break; //optional
    //You can have any number of case statements.
    default : //Optional
       //Statements
}
</pre>
<p>The following rules apply to a switch statement:</p>
<ul>
<li><p>The variable used in a switch statement can only be a byte, short, int, or char.</p></li>
<li><p>You can have any number of case statements within a switch. Each case is followed by the value to be compared to and a colon.</p></li>
<li><p>The value for a case must be the same data type as the variable in the switch and it must be a constant or a literal.</p></li>
<li><p>When the variable being switched on is equal to a case, the statements following that case will execute until a <i>break</i> statement is reached.</p></li>
<li><p>When a <i>break</i> statement is reached, the switch terminates, and the flow of control jumps to the next line following the switch statement.</p></li>
<li><p>Not every case needs to contain a break. If no break appears, the flow of control will <i>fall through </i> to subsequent cases until a break is reached.</p></li>
<li><p>A <i>switch</i> statement can have an optional default case, which must appear at the end of the switch. The default case can be used for performing a task when none of the cases is true. No break is needed in the default case.</p></li>
</ul>
<h2>Example:</h2>
<pre class="output">public class Test 
{

   public static void main(String args[])
   {
      //char grade = args[0].charAt(0);
      char grade = 'C';

      switch(grade)
      {
         case 'A' :
            System.out.println("Excellent!"); 
            break;
         case 'B' :
         case 'C' :
            System.out.println("Well done");
            break;
         case 'D' :
            System.out.println("You passed");
         case 'F' :
            System.out.println("Better try again");
            break;
         default :
            System.out.println("Invalid grade");
      }
      System.out.println("Your grade is " + grade);
   }
}
</pre>
<p>Compile and run above program using various command line arguments. This would produce the following result:</p>
<pre class="output">$ java Test
Well done
Your grade is a C
$
</pre>
<h2>What is Next?</h2>
<p>Next chapter discuses about the Number class (in the java.lang package) and its subclasses in Java Language.</p>
<p>We will be looking into some of the situations where you would use instantiations of these classes rather than the primitive data types, as well as classes such as formatting, mathematical functions that you need to know about when working with Numbers. </p>
<br>
<hr>





</td>
</td><tr>
<td style="text-align:left;"><a  href="loop.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="array.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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