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
<title>C- Operator</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="operator.php" >C - Operators</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#00f;font-size:18;">C - Operators</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\images\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="storage.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="decision.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>An operator is a symbol that tells the compiler to perform specific mathematical or logical manipulations. C language is rich in built-in operators and provides the following types of operators:</p>
<ul>
<li><p>Arithmetic Operators</p></li>
<li><p>Relational Operators</p></li>
<li><p>Logical Operators</p></li>
<li><p>Bitwise Operators</p></li>
<li><p>Assignment Operators</p></li>
<li><p>Misc Operators</p></li>
</ul>
<p>This tutorial will explain the arithmetic, relational, logical, bitwise, assignment and other operators one by one.</p>
<h2>Arithmetic Operators</h2>
<p>Following table shows all the arithmetic operators supported by C language. Assume variable <b>A</b> holds 10 and variable <b>B</b> holds 20 then:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th style="width:10%">Operator</th><th style="width:55%;">Description</th><th>Example</th></tr>
<tr><td>+</td><td>Adds two operands</td><td> A + B will give 30</td></tr>
<tr><td>-</td><td>Subtracts second operand from the first</td><td> A - B will give -10</td></tr>
<tr><td>*</td><td>Multiplies both operands</td><td> A * B will give 200</td></tr>
<tr><td>/</td><td>Divides numerator by de-numerator</td><td> B / A will give 2</td></tr>
<tr><td>%</td><td>Modulus Operator and remainder of after an integer division</td><td> B % A will give 0</td></tr>
<tr><td>++</td><td>Increments operator increases integer value by one</td><td> A++ will give 11</td></tr>
<tr><td>--</td><td>Decrements operator decreases integer value by one</td><td> A-- will give 9</td></tr>
</tbody></table>
<h2>Relational Operators</h2>
<p>Following table shows all the relational operators supported by C language. Assume variable <b>A</b> holds 10 and variable <b>B</b> holds 20, then:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th style="width:10%">Operator</th><th style="width:55%;">Description</th><th>Example</th></tr>
<tr><td>==</td><td> Checks if the values of two operands are equal or not, if yes then condition becomes true.</td><td> (A == B) is not true. </td></tr>
<tr><td>!=</td><td> Checks if the values of two operands are equal or not, if values are not equal then condition becomes true.</td><td> (A != B) is true. </td></tr>
<tr><td>&gt;</td><td> Checks if the value of left  operand is greater than the value of right operand, if yes then condition becomes true.</td><td> (A &gt; B) is not true. </td></tr>
<tr><td>&lt;</td><td> Checks if the value of left  operand is less than the value of right operand, if yes then condition becomes true.</td><td> (A &lt; B) is true. </td></tr>
<tr><td>&gt;=</td><td> Checks if the value of left  operand is greater than or equal to the value of right operand, if yes then condition becomes true.</td><td> (A &gt;= B) is not true. </td></tr>
<tr><td>&lt;=</td><td> Checks if the value of left  operand is less than or equal to the value of right operand, if yes then condition becomes true.</td><td> (A &lt;= B) is true. </td></tr>
</tbody></table>
<h2>Logical Operators</h2>
<p>Following table shows all the logical operators supported by C language. Assume variable <b>A</b> holds 1 and variable <b>B</b> holds 0, then:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th style="width:10%">Operator</th><th style="width:55%;">Description</th><th>Example</th></tr>
<tr><td>&amp;&amp;</td><td> Called Logical AND  operator. If both the operands are non-zero, then condition becomes true.</td><td> (A &amp;&amp; B) is false. </td></tr>
<tr><td>||</td><td>Called Logical OR Operator.  If any of the two operands is non-zero, then condition becomes true.</td><td> (A || B) is true. </td></tr>
<tr><td>!</td><td>Called Logical NOT Operator.  Use to reverses the logical state of its operand. If a condition is true then Logical NOT operator will make false.</td><td> !(A &amp;&amp; B) is true. </td></tr>
</tbody></table>
<h2>Bitwise Operators</h2>
<p>Bitwise operator works on bits and perform bit-by-bit operation. The truth tables for &amp;, |, and ^ are as follows:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th style="width:20%">p</th><th style="width:20%">q</th><th style="width:20%">p &amp; q</th><th style="width:20%">p | q</th><th style="width:20%">p ^ q</th></tr>
<tr><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>0</td><td>1</td><td>0</td><td>1</td><td>1</td></tr>
<tr><td>1</td><td>1</td><td>1</td><td>1</td><td>0</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td></tr>
</tbody></table>
<p>Assume if A = 60; and B = 13; now in binary format they will be as follows:</p>
<p>A = 0011 1100</p>
<p>B = 0000 1101</p>
<p>-----------------</p>
<p>A&amp;B = 0000 1100</p>
<p>A|B = 0011 1101</p>
<p>A^B = 0011 0001</p>
<p>~A&nbsp; = 1100 0011</p>
<p>The Bitwise operators supported by C language are listed in the following table. Assume variable A holds 60 and variable B holds 13, then:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th style="width:10%">Operator</th><th style="width:55%;">Description</th><th>Example</th></tr>
<tr><td>&amp;</td><td> Binary AND Operator copies a bit to the result if it exists in both operands. </td><td> (A &amp; B) will give 12, which is 0000 1100</td></tr>
<tr><td>|</td><td> Binary OR Operator copies a bit if it exists in either operand. </td><td> (A | B) will give 61, which is 0011 1101</td></tr>
<tr><td>^</td><td> Binary XOR Operator copies the bit if it is set in one operand but not both. </td><td> (A ^ B) will give 49, which is 0011 0001</td></tr>
<tr><td>~</td><td> Binary Ones Complement Operator is unary and has the effect of 'flipping' bits. </td><td> (~A ) will give -61, which is 1100 0011 in 2's complement form.</td></tr>
<tr><td>&lt;&lt;</td><td> Binary Left Shift Operator. The left operands value is moved left by the number of bits specified by the right operand. </td><td> A &lt;&lt; 2 will give 240 which is 1111 0000</td></tr>
<tr><td>&gt;&gt;</td><td> Binary Right Shift Operator. The left operands value is moved right by the number of bits specified by the right operand. </td><td> A &gt;&gt; 2 will give 15 which is 0000 1111</td></tr>
</tbody></table>
<h2>Assignment Operators</h2>
<p>There are following assignment operators supported by C language:</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th style="width:10%">Operator</th><th style="width:55%;">Description</th><th>Example</th></tr>
<tr><td>=</td><td>Simple assignment operator, Assigns values from right side operands to left side operand</td><td> C = A + B will assign value of A + B into C</td></tr>
<tr><td>+=</td><td>Add AND assignment operator, It adds right operand to the left operand and assign the result to left operand</td><td> C += A is equivalent to C = C + A</td></tr>
<tr><td>-=</td><td>Subtract AND assignment operator, It subtracts right operand from the left operand and assign the result to left operand</td><td> C -= A is equivalent to C = C - A</td></tr>
<tr><td>*=</td><td>Multiply AND assignment operator, It multiplies right operand with the left operand and assign the result to left operand</td><td> C *= A is equivalent to C = C * A</td></tr>
<tr><td>/=</td><td>Divide AND assignment operator, It divides left operand with the right operand and assign the result to left operand</td><td> C /= A is equivalent to C = C / A</td></tr>
<tr><td>%=</td><td>Modulus AND assignment operator, It takes modulus using two operands and assign the result to  left operand</td><td> C %= A is equivalent to C = C % A</td></tr>
<tr><td>&lt;&lt;=</td><td>Left shift AND assignment operator </td><td> C &lt;&lt;= 2 is same as  C = C &lt;&lt; 2</td></tr>
<tr><td>&gt;&gt;=</td><td>Right shift AND assignment operator </td><td> C &gt;&gt;= 2 is same as  C = C &gt;&gt; 2</td></tr>
<tr><td>&amp;=</td><td>Bitwise AND assignment operator</td><td> C &amp;= 2 is same as  C = C &amp; 2</td></tr>
<tr><td>^=</td><td>bitwise exclusive OR and assignment operator</td><td> C ^= 2 is same as  C = C ^ 2</td></tr>
<tr><td>|=</td><td>bitwise inclusive OR and assignment operator</td><td> C |= 2 is same as  C = C | 2</td></tr>
</tbody></table>
<h2> Misc Operators ? sizeof &amp; ternary</h2>
<p>There are few other important operators including <b>sizeof</b> and <b>? :</b>  supported by C Language.</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr><th style="width:10%">Operator</th><th style="width:55%;">Description</th><th>Example</th></tr>
<tr>
<td>sizeof()</td><td>Returns the size of an variable.</td><td> sizeof(a), where a is integer, will return 4.</td>
</tr>
<tr>
<td>&amp;</td><td>Returns the address of an variable.</td><td>&amp;a; will give actual address of the variable.</td>
</tr>
<tr>
<td>*</td><td>Pointer to a variable.</td><td>*a; will pointer to a variable.</td>
</tr>
<tr>
<td>? :</td><td>Conditional Expression</td><td> If Condition is true ? Then value X : Otherwise value Y</td>
</tr>
</tbody></table>
<h2>Operators Precedence in C</h2>
<p>Operator precedence determines the grouping of terms in an expression. This affects how an expression is evaluated. Certain operators have higher precedence than others; for example, the multiplication operator has higher precedence than the addition operator.</p>
<p>For example x = 7 + 3 * 2; here, x is assigned 13, not 20 because operator * has higher precedence than +, so it first gets multiplied with 3*2 and then adds into 7.</p>
 <p>Here, operators with the highest precedence appear at the top of the table, those with the lowest appear at the bottom. Within an expression, higher precedence operators will be evaluated first.</p>
<table border='1'class="tab" width=500 height=400>
<tbody><tr> <th>Category&nbsp;</th> <th>Operator&nbsp;</th><th>Associativity&nbsp;</th> </tr> 
<tr> <td>Postfix&nbsp;</td><td>() [] -&gt; .  ++   - - &nbsp;</td> <td>Left to right&nbsp;</td> </tr>
<tr> <td>Unary&nbsp;</td> <td>+  -   !  ~  ++  - -   (type)*  &amp;  sizeof&nbsp;</td> <td>Right to left&nbsp;</td></tr> 
<tr> <td>Multiplicative &nbsp;</td> <td>*  /  %&nbsp;</td><td>Left to right&nbsp;</td> </tr> 
<tr> <td>Additive &nbsp;</td><td>+  -&nbsp;</td> <td>Left to right&nbsp;</td> </tr>
<tr> <td>Shift &nbsp;</td> <td>&lt;&lt; &gt;&gt;&nbsp;</td> <td>Left to right&nbsp;</td> </tr> 
<tr> <td>Relational &nbsp;</td><td>&lt; &lt;=  &gt; &gt;=&nbsp;</td> <td>Left to right&nbsp;</td> </tr>
<tr> <td>Equality &nbsp;</td> <td>==  !=&nbsp;</td> <td>Left to right&nbsp;</td> </tr> 
<tr> <td>Bitwise AND&nbsp;</td><td>&amp;&nbsp;</td> <td>Left to right&nbsp;</td> </tr> 
<tr> <td>Bitwise XOR&nbsp;</td> <td>^&nbsp;</td> <td>Left to right&nbsp;</td></tr> 
<tr> <td>Bitwise OR&nbsp;</td> <td>|&nbsp;</td> <td>Left to right&nbsp;</td></tr> 
<tr> <td>Logical AND&nbsp;</td><td>&amp;&amp;&nbsp;</td> <td>Left to right&nbsp;</td></tr>
<tr><td>Logical OR&nbsp;</td> <td>||&nbsp;</td> <td>Left to right&nbsp;</td></tr> 
<tr> <td>Conditional&nbsp;</td><td>?:&nbsp;</td> <td>Right to left&nbsp;</td> </tr>
<tr><td>Assignment&nbsp;</td> <td>=  +=  -=  *=  /=  %=&gt;&gt;=  &lt;&lt;=  &amp;=  ^=   |=&nbsp;</td><td>Right to left&nbsp;</td></tr>
<tr> <td>Comma&nbsp;</td> <td>,&nbsp;</td> <td>Left to right&nbsp;</td></tr> 
</tbody></table>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="storage.php"><img src="../images/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="decision.php"><img src="../images/next1.gif" width=90 height=30/></a></td>
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