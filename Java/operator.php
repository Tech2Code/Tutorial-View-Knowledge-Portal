
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
<title>Java - Operator</title>
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
<tr><td class="bg"><a class="tab1" target="_top"   href="operator.php" >Java - Operators</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Basic Operators</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="modifier.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="loop.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>Java provides a rich set of operators to manipulate variables. We can divide all the Java operators into the following groups:</p>
<ul >
<li><p>Arithmetic Operators</p></li>
<li><p>Relational Operators</p></li>
<li><p>Bitwise Operators</p></li>
<li><p>Logical Operators</p></li>
<li><p>Assignment Operators</p></li>
<li><p>Misc Operators</p></li>
</ul>
<h2>The Arithmetic Operators:</h2>
<p>Arithmetic operators are used in mathematical expressions in the same way that they are used in algebra. The following table lists the arithmetic operators:</p>
<p>Assume integer variable A holds 10 and variable B holds 20, then:</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr>
<th>Operator</th><th>Description</th><th style="width:20%;">Example</th>
</tr>
<tr>
<td>+</td><td>Addition - Adds values on either side of the operator</td><td> A + B will give 30</td>
</tr>
<tr>
<td>-</td><td>Subtraction - Subtracts right hand operand from left hand operand</td><td> A - B will give -10</td>
</tr>
<tr>
<td>*</td><td>Multiplication - Multiplies values on either side of the operator</td><td> A * B will give 200</td>
</tr>
<tr>
<td>/</td><td>Division - Divides left hand operand by right hand operand</td><td> B / A will give 2</td>
</tr>
<tr>
<td>%</td><td>Modulus - Divides left hand operand by right hand operand and returns remainder</td><td> B % A will give 0</td>
</tr>
<tr>
<td>++</td><td>Increment - Increases the value of operand by 1</td><td> B++ gives 21</td>
</tr>
<tr>
<td>--</td><td>Decrement - Decreases the value of operand by 1</td><td> B-- gives 19</td>
</tr>
</tbody></table>
<h2>The Relational Operators:</h2>
<p>There are following relational operators supported by Java language</p>
<p>Assume variable A holds 10 and variable B holds 20, then:</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr>
<th>Operator</th><th>Description</th><th style="width:20%;">Example</th>
</tr>
<tr>
<td>==</td><td> Checks if the values of two operands are equal or not, if yes then condition becomes true.</td><td> (A == B) is not true. </td>
</tr>
<tr>
<td>!=</td><td> Checks if the values of two operands are equal or not, if values are not equal then condition becomes true.</td><td> (A != B) is true. </td>
</tr>
<tr>
<td>&gt;</td><td> Checks if the value of left  operand is greater than the value of right operand, if yes then condition becomes true.</td><td> (A &gt; B) is not true. </td>
</tr>
<tr>
<td>&lt;</td><td> Checks if the value of left  operand is less than the value of right operand, if yes then condition becomes true.</td><td> (A &lt; B) is true. </td>
</tr>
<tr>
<td>&gt;=</td><td> Checks if the value of left  operand is greater than or equal to the value of right operand, if yes then condition becomes true.</td><td> (A &gt;= B) is not true. </td>
</tr>
<tr>
<td>&lt;=</td><td> Checks if the value of left  operand is less than or equal to the value of right operand, if yes then condition becomes true.</td><td> (A &lt;= B) is true. </td>
</tr>
</tbody></table>
<h2>The Bitwise Operators:</h2>
<p>Java defines several bitwise operators, which can be applied to the integer types, long, int, short, char, and byte.</p>
<p>Bitwise operator works on bits and performs bit-by-bit operation. Assume if a = 60; and b = 13; now in binary format they will be as follows:</p>
<p>a = 0011 1100</p>
<p>b = 0000 1101</p>
<p>-----------------</p>
<p>a&amp;b = 0000 1100</p>
<p>a|b = 0011 1101</p>
<p>a^b = 0011 0001</p>
<p>~a&nbsp; = 1100 0011</p>
<p>The following table lists the bitwise operators:</p>
<p>Assume integer variable A holds 60 and variable B holds 13 then:</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr>
<th>Operator</th><th>Description</th><th style="width:20%;">Example</th>
</tr>
<tr>
<td>&amp;</td><td> Binary AND Operator copies a bit to the result if it exists in both operands. </td><td> (A &amp; B) will give 12 which is 0000 1100</td>
</tr>
<tr>
<td>|</td><td> Binary OR Operator copies a bit if it exists in either operand. </td><td> (A | B) will give 61 which is 0011 1101</td>
</tr>
<tr>
<td>^</td><td> Binary XOR Operator copies the bit if it is set in one operand but not both. </td><td> (A ^ B) will give 49 which is 0011 0001</td>
</tr>
<tr><td>~</td><td> Binary Ones Complement Operator is unary and has the effect of 'flipping' bits. </td><td>(~A ) will give -61 which is 1100 0011 in 2's complement form due to a signed binary number.</td></tr>
<tr>
<td>&lt;&lt;</td><td> Binary Left Shift Operator. The left operands value is moved left by the number of bits specified by the right operand. </td><td> A &lt;&lt; 2 will give 240 which is 1111 0000</td>
</tr>
<tr>
<td>&gt;&gt;</td><td> Binary Right Shift Operator. The left operands value is moved right by the number of bits specified by the right operand. </td><td> A &gt;&gt; 2 will give 15 which is 1111</td>
</tr>
<tr>
<td>&gt;&gt;&gt;</td><td> Shift right zero fill operator. The left operands value is moved right by the number of bits specified by the right operand and shifted values are filled up with zeros. </td><td> A &gt;&gt;&gt;2 will give 15 which is 0000 1111</td>
</tr>
</tbody></table>
<h2>The Logical Operators:</h2>
<p>The following table lists the logical operators:</p>
<p>Assume Boolean variables A holds true and variable B holds false, then:</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr>
<th>Operator</th><th>Description</th><th style="width:20%;">Example</th>
</tr>
<tr>
<td>&amp;&amp;</td><td> Called Logical AND  operator. If both the operands are non-zero, then the condition becomes true.</td><td> (A &amp;&amp; B) is false. </td>
</tr>
<tr>
<td>||</td><td>Called Logical OR Operator.  If any of the two operands are non-zero, then the condition becomes true.</td><td> (A || B) is true. </td>
</tr>
<tr>
<td>!</td><td>Called Logical NOT Operator.  Use to reverses the logical state of its operand. If a condition is true then Logical NOT operator will make false.</td><td> !(A &amp;&amp; B) is true. </td>
</tr>
</tbody></table>
<h2>The Assignment Operators:</h2>
<p>There are following assignment operators supported by Java language:</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr>
<th>Operator</th><th>Description</th><th style="width:20%;">Example</th>
</tr>
<tr>
<td>=</td><td>Simple assignment operator, Assigns values from right side operands to left side operand</td><td> C = A + B will assign value of A + B into C</td>
</tr>
<tr>
<td>+=</td><td>Add AND assignment operator, It adds right operand to the left operand and assign the result to left operand</td><td> C += A is equivalent to C = C + A</td>
</tr>
<tr>
<td>-=</td><td>Subtract AND assignment operator, It subtracts right operand from the left operand and assign the result to left operand</td><td> C -= A is equivalent to C = C - A</td>
</tr>
<tr>
<td>*=</td><td>Multiply AND assignment operator, It multiplies right operand with the left operand and assign the result to left operand</td><td> C *= A is equivalent to C = C * A</td>
</tr>
<tr>
<td>/=</td><td>Divide AND assignment operator, It divides left operand with the right operand and assign the result to left operand</td><td> C /= A is equivalent to C = C / A</td>
</tr>
<tr>
<td>%=</td><td>Modulus AND assignment operator, It takes modulus using two operands and assign the result to  left operand</td><td> C %= A is equivalent to C = C % A</td>
</tr>
<tr>
<td>&lt;&lt;=</td><td>Left shift AND assignment operator </td><td> C &lt;&lt;= 2 is same as  C = C &lt;&lt; 2</td>
</tr>
<tr>
<td>&gt;&gt;=</td><td>Right shift AND assignment operator </td><td> C &gt;&gt;= 2 is same as  C = C &gt;&gt; 2</td>
</tr>
<tr>
<td>&amp;=</td><td>Bitwise AND assignment operator</td><td> C &amp;= 2 is same as  C = C &amp; 2</td>
</tr>
<tr>
<td>^=</td><td>bitwise exclusive OR and assignment operator</td><td> C ^= 2 is same as  C = C ^ 2</td>
</tr>
<tr>
<td>|=</td><td>bitwise inclusive OR and assignment operator</td><td> C |= 2 is same as  C = C | 2</td>
</tr>
</tbody></table>
<h2>Misc Operators</h2>
<p>There are few other operators supported by Java Language.</p>
<h2>Conditional Operator ( ? : ):</h2>
<p>Conditional operator is also known as the ternary operator. This operator consists of three operands and is used to evaluate Boolean expressions. The goal of the operator is to decide which value should be assigned to the variable. The operator is written as:</p>
<pre class="output">
variable x = (expression) ? value if true : value if false
</pre>
<p>Following is the example:</p>
<pre class="output">
public class Test {

   public static void main(String args[]){
      int a , b;
      a = 10;
      b = (a == 1) ? 20: 30;
      System.out.println( "Value of b is : " +  b );

      b = (a == 10) ? 20: 30;
      System.out.println( "Value of b is : " + b );
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">
Value of b is : 30
Value of b is : 20
</pre>
<h2>instanceof Operator:</h2>
<p>This operator is used only for object reference variables. The operator checks whether the object is of a particular type(class type or interface type).  instanceof operator is wriiten as:</p>
<pre class="output">
( Object reference variable ) instanceof  (class/interface type)
</pre>
<p>If the object referred by the variable on the left side of the operator passes the IS-A check for the class/interface type on the right side, then the result will be true. Following is the example:</p>
<pre class="output">
public class Test 
{

   public static void main(String args[])
   {
      String name = "James";
      // following will return true since name is type of String
      boolean result = name instanceof String;  
      System.out.println( result );
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">true</pre>
<p>This operator will still return true if the object being compared is the assignment compatible with the type on the right. Following is one more example:</p>
<pre class="output">
class Vehicle {}

public class Car extends Vehicle 
{
   public static void main(String args[])
   {
      Vehicle a = new Car();
      boolean result =  a instanceof Car;
      System.out.println( result );
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">true</span></pre>
<h2>Precedence of Java Operators:</h2>
<p>Operator precedence determines the grouping of terms in an expression. This affects how an expression is evaluated. Certain operators have higher precedence than others; for example, the multiplication operator has higher precedence than the addition operator:</p>
<p>For example, x = 7 + 3 * 2; here  x is assigned 13, not 20 because operator * has higher precedence than +, so it first gets multiplied with 3*2 and then adds into 7.</p>
<p>Here, operators with the highest precedence appear at the top of the table, those with the lowest appear at the bottom. Within an expression, higher precedence operators will be evaluated first.</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr><th>Category&nbsp;</th> <th>Operator&nbsp;</th>
<th style="width:20%;">Associativity&nbsp;</th> </tr> <tr> <td>Postfix&nbsp;</td>
<td>() [] . (dot operator)</td> <td>Left to
right&nbsp;</td> </tr> <tr> <td>Unary&nbsp;</td> 
<td>++ - - !  ~ </td> <td>Right to left&nbsp;</td>
</tr> <tr> <td>Multiplicative &nbsp;</td> <td>*  /  %&nbsp;</td>
<td>Left to right&nbsp;</td> </tr> <tr> <td>Additive &nbsp;</td>
<td>+  -&nbsp;</td> <td>Left to right&nbsp;</td> </tr>
<tr> <td>Shift &nbsp;</td> <td>&gt;&gt; &gt;&gt;&gt; &lt;&lt; &nbsp;</td> <td>Left
to right&nbsp;</td> </tr> <tr> <td>Relational &nbsp;</td>
<td>&gt; &gt;=  &lt; &lt;= &nbsp;</td> <td>Left to right&nbsp;</td> </tr>
<tr> <td>Equality &nbsp;</td> <td>==  !=&nbsp;</td> <td>Left
to right&nbsp;</td> </tr> <tr> 
<td>Bitwise AND&nbsp;</td>
<td>&amp;&nbsp;</td> <td>Left to right&nbsp;</td> </tr> <tr> <td>Bitwise
XOR&nbsp;</td> <td>^&nbsp;</td> <td>Left to right&nbsp;</td>
</tr> <tr> <td>Bitwise OR&nbsp;</td> <td>|&nbsp;</td> <td>Left
to right&nbsp;</td> </tr> <tr> <td>Logical AND&nbsp;</td>
<td>&amp;&amp;&nbsp;</td> <td>Left to right&nbsp;</td> </tr> <tr>
<td>Logical OR&nbsp;</td> <td>||&nbsp;</td> <td>Left to
right&nbsp;</td> </tr> <tr> <td>Conditional&nbsp;</td>
<td>?:&nbsp;</td> <td>Right to left&nbsp;</td> </tr> <tr>
<td>Assignment&nbsp;</td> <td>=  +=  -=  *=  /=  %=
&gt;&gt;=  &lt;&lt;=  &amp;=  ^=   |=&nbsp;</td> <td>Right to left&nbsp;</td>
</tr> <tr> <td>Comma&nbsp;</td> <td>,&nbsp;</td> <td>Left to
right&nbsp;</td> </tr> </tbody></table>
<h2>What is Next?</h2>
<p>Next chapter would explain about loop control in Java programming. The chapter will describe various types of loops and how these loops can be used in Java program development and for what purposes they are being used.</p>
<br>
<hr>




</td>
</td><tr>
<td style="text-align:left;"><a  href="modifier.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="loop.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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