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
<title>SQL- Operators</title>
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
      <a href="../java/home.php"><div class="btn-b">Java</div></a>
      <a href="../sql/home.php"><div class="btn-current-index">SQL</div></a>
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
<tr><td><marquee direction="right" scrolldellay="500" style="color:#996600;font-size:19;"><img src="..\pic\sql.png" alt=" SQL" align="middle" width="180" height="147"/></marquee></td></tr>
<tr ><td><a  class="tab1" target="_top"    href="home.php" >SQL - Home</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"    href="overview.php">SQL - Overview</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="rdbms.php" >SQL - RDBMS Concepts</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="databases.php" >SQL - Databases</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="syntax.php" >SQL - Syntax</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="datatypes.php" >SQL - Data Types</a><br/></td></tr>
<tr><td class="bg"><a  class="tab1" target="_top"   href="operators.php" >SQL - Operators</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="expressions.php">SQL - Expressions</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="cdatabase.php">SQL - Create Database</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="ddatabase.php">SQL - Drop Database</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="selectdatabase.php">SQL - Select Database</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="createtable.php" >SQL - Create Table</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="droptable.php" >SQL - Drop Table</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="insertquery.php">SQL - Insert Query</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="selectquery.php">SQL - Select Query</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="whereclause.php">SQL - Where Clause</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="andclause.php" >SQL - AND & OR Clauses</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="updatequery.php">SQL - Update Query</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="deletequery.php">SQL - Delete Query</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="likeclause.php">SQL - Like Clause</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="topclause.php" >SQL - Top Clause</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="orderby.php">SQL - Order By</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="groupby.php">SQL - Group By</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="distinct.php">SQL - Distinct Keyword</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="constraints.php">SQL - Constraints</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="usingjoin.php" >SQL - Using Joins</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="union.php" >SQL - Union</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="null.php">SQL - NULL Values</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="alias.php">SQL - Alias Syntax</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="indexes.php">SQL - Indexes</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="alter.php">SQL - Alter Command</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="usingviews.php">SQL - using Views</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="having.php">SQL - Having Clause</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="transaction.php">SQL - Transactions</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="wildcard.php">SQL - Wildcards</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">SQL - Operators</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="datatypes.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="expressions.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<h2>What is an Operator in SQL?</h2>
<p>An operator is a reserved word or a character used primarily in an SQL statement's WHERE clause to perform operation(s), such as comparisons and arithmetic operations.</p>
<p>Operators are used to specify conditions in an SQL statement and to serve as conjunctions for multiple conditions in a statement.</p>
<ul>
<li><p>Arithmetic operators</p></li>
<li><p>Comparison operators</p></li>
<li><p>Logical operators</p></li>
<li><p>Operators used to negate conditions</p></li>
</ul>
<h2>SQL Arithmetic Operators:</h2>
<p>Assume variable a holds 10 and variable b holds 20, then:</p>

<table  border='1'class="tab" width=600 >
<tbody><tr>
<th style="width:20%">Operator</th><th style="width:45%">Description</th><th>Example</th>
</tr>
<tr>
<td>+</td><td>Addition - Adds values on either side of the operator</td><td> a + b will give 30</td>
</tr>
<tr>
<td>-</td><td>Subtraction - Subtracts right hand operand from left hand operand</td><td> a - b will give -10</td>
</tr>
<tr>
<td>*</td><td>Multiplication - Multiplies values on either side of the operator</td><td> a * b will give 200</td>
</tr>
<tr>
<td>/</td><td>Division - Divides left hand operand by right hand operand</td><td> b / a will give 2</td>
</tr>
<tr>
<td>%</td><td>Modulus - Divides left hand operand by right hand operand and returns remainder</td><td> b % a will give 0</td>
</tr>
</tbody></table>
<h2>SQL Comparison Operators:</h2>
<p>Assume variable a holds 10 and variable b holds 20, then:</p>

<table  border='1'class="tab" width=600 >
<tbody><tr>
<th style="width:20%">Operator</th><th style="width:45%">Description</th><th>Example</th>
</tr>
<tr>
<td>=</td><td> Checks if the values of two operands are equal or not, if yes then condition becomes true.</td><td> (a = b) is not true. </td>
</tr>
<tr>
<td>!=</td><td> Checks if the values of two operands are equal or not, if values are not equal then condition becomes true.</td><td> (a != b) is true. </td>
</tr>
<tr>
<td>&lt;&gt;</td><td>Checks if the values of two operands are equal or not, if values are not equal then condition becomes true.</td><td> (a &lt;&gt; b) is true. </td>
</tr>
<tr>
<td>&gt;</td><td> Checks if the value of left  operand is greater than the value of right operand, if yes then condition becomes true.</td><td> (a &gt; b) is not true. </td>
</tr>
<tr>
<td>&lt;</td><td> Checks if the value of left  operand is less than the value of right operand, if yes then condition becomes true.</td><td> (a &lt; b) is true. </td>
</tr>
<tr>
<td>&gt;=</td><td> Checks if the value of left  operand is greater than or equal to the value of right operand, if yes then condition becomes true.</td><td> (a &gt;= b) is not true. </td>
</tr>
<tr>
<td>&lt;=</td><td> Checks if the value of left  operand is less than or equal to the value of right operand, if yes then condition becomes true.</td><td> (a &lt;= b) is true. </td>
</tr>
<tr>
<td>!&lt;</td><td> Checks if the value of left  operand is not less than the value of right operand, if yes then condition becomes true.</td><td> (a !&lt; b) is false. </td>
</tr>
<tr>
<td>!&gt;</td><td> Checks if the value of left  operand is not greater than the value of right operand, if yes then condition becomes true.</td><td> (a !&gt; b) is true. </td>
</tr>
</tbody></table>
<h2>SQL Logical Operators:</h2>
<p>Here is a list of all the logical operators available in SQL.</p>

<table  border='1'class="tab" width=600 >
<tbody><tr>
<th style="width:20%">Operator</th><th style="width:80%">Description</th>
</tr>
<tr>
<td>ALL</td><td>The ALL operator is used to compare a value to all values in another value set.</td>
</tr>
<tr>
<td>AND</td><td>The AND operator allows the existence of multiple conditions in an SQL statement's WHERE clause.</td>
</tr>
<tr>
<td>ANY</td><td>The ANY operator is used to compare a value to any applicable value in the list according to the condition.</td>
</tr>
<tr>
<td>BETWEEN</td><td>The BETWEEN operator is used to search for values that are within a set of values, given the minimum value and the maximum value.</td>
</tr>
<tr>
<td>EXISTS</td><td>The EXISTS operator is used to search for the presence of a row in a specified table that meets certain criteria.</td>
</tr>
<tr>
<td>IN</td><td>The IN operator is used to compare a value to a list of literal values that have been specified.</td>
</tr>
<tr>
<td>LIKE</td><td>The LIKE operator is used to compare a value to similar values using wildcard operators.</td>
</tr>
<tr>
<td>NOT</td><td>The NOT operator reverses the meaning of the logical operator with which it is used. Eg: NOT EXISTS, NOT BETWEEN, NOT IN, etc. <b>This is a negate operator.</b></td>
</tr>
<tr>
<td>OR</td><td>The OR operator is used to combine multiple conditions in an SQL statement's WHERE clause.</td>
</tr>
<tr>
<td>IS NULL</td><td>The NULL operator is used to compare a value with a NULL value.</td>
</tr>
<tr>
<td>UNIQUE</td><td>The UNIQUE operator searches every row of a specified table for uniqueness (no duplicates).</td>
</tr>
</tbody></table>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="datatypes.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="expressions.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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