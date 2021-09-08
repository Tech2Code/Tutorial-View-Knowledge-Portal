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
<title>SQL- Data Types</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="datatypes.php" >SQL - Data Types</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="operators.php" >SQL - Operators</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">SQL - Data Types</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="syntax.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="operators.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>SQL data type is an attribute that specifies type of data of any object. Each column, variable and expression has related data type in SQL.</p>
<p>You would use these data types while creating your tables. You would choose a particular data type for a table column based on your requirement.</p>
<p>SQL Server offers six categories of data types for your use:</p>
<h2>Exact Numeric Data Types:</h2>
<table  border='1'class="tab" width=600 >
<tbody><tr><th style="width:30%">DATA TYPE</th><th style="width:35%">FROM</th><th style="width:35%">TO</th></tr>
<tr><td>bigint</td><td>-9,223,372,036,854,775,808</td><td>9,223,372,036,854,775,807</td></tr>
<tr><td>int</td><td>-2,147,483,648</td><td>2,147,483,647</td></tr>
<tr><td>smallint</td><td>-32,768</td><td>32,767</td></tr>
<tr><td>tinyint</td><td>0</td><td>255</td></tr>
<tr><td>bit</td><td>0</td><td>1</td></tr>
<tr><td>decimal</td><td>-10^38 +1</td><td>10^38 -1</td></tr>
<tr><td>numeric</td><td>-10^38 +1</td><td>10^38 -1</td></tr>
<tr><td>money</td><td>-922,337,203,685,477.5808</td><td>+922,337,203,685,477.5807</td></tr>
<tr><td>smallmoney</td><td>-214,748.3648</td><td>+214,748.3647</td></tr>
</tbody></table>
<h2>Approximate Numeric Data Types:</h2>
<table  border='1'class="tab" width=600 >
<tbody><tr><th style="width:30%">DATA TYPE</th><th style="width:35%">FROM</th><th style="width:35%">TO</th></tr>
<tr><td>float</td><td>-1.79E + 308</td><td>1.79E + 308</td></tr>
<tr><td>real</td><td>-3.40E + 38</td><td>3.40E + 38</td></tr>
</tbody></table>
<h2>Date and Time Data Types:</h2>
<table  border='1'class="tab" width=600 >
<tbody><tr><th style="width:30%">DATA TYPE</th><th style="width:35%">FROM</th><th style="width:35%">TO</th></tr>
<tr><td>datetime<br></td><td>Jan 1, 1753</td><td>Dec 31, 9999</td></tr>
<tr><td>smalldatetime</td><td>Jan 1, 1900</td><td>Jun 6, 2079</td></tr>
<tr><td>date</td><td colspan="2">Stores a date like June 30, 1991</td></tr>
<tr><td>time</td><td colspan="2">Stores a time of day like 12:30 P.M.</td></tr>
</tbody></table>
<p><b>Note:</b> Here, datetime has 3.33 milliseconds accuracy where as smalldatetime has 1 minute accuracy.</p>
<h2>Character Strings Data Types:</h2>
<table  border='1'class="tab" width=600 >
<tbody><tr><th style="width:30%">DATA TYPE</th><th style="width:35%">FROM</th><th style="width:35%">TO</th></tr>
<tr><td>char</td><td>char</td><td>Maximum length of 8,000 characters.( Fixed length non-Unicode characters)</td></tr>
<tr><td>varchar</td><td>varchar</td><td>Maximum of 8,000 characters.(Variable-length non-Unicode data).</td></tr>
<tr><td>varchar(max)</td><td>varchar(max)</td><td>Maximum length of 231characters, Variable-length non-Unicode data (SQL Server 2005 only).</td></tr>
<tr><td>text</td><td>text</td><td>Variable-length non-Unicode data with a maximum length of 2,147,483,647 characters.</td></tr>
</tbody></table>
<h2>Unicode Character Strings Data Types:</h2>
<table  border='1'class="tab" width=600 >
<tbody><tr><th style="width:30%">DATA TYPE</th><th style="width:70%">Description</th></tr>
<tr><td>nchar</td><td>Maximum length of 4,000 characters.( Fixed length Unicode)</td></tr>
<tr><td>nvarchar</td><td>Maximum length of 4,000 characters.(Variable length Unicode)</td></tr>
<tr><td>nvarchar(max)</td><td>Maximum length of 231characters (SQL Server 2005 only).( Variable length Unicode)</td></tr>
<tr><td>ntext</td><td>Maximum length of 1,073,741,823 characters. ( Variable length Unicode )</td></tr>
</tbody></table>
<h2>Binary Data Types:</h2>
<table  border='1'class="tab" width=600 >
<tbody><tr><th style="width:30%">DATA TYPE</th><th style="width:70%">Description</th></tr>
<tr><td>binary</td><td>Maximum length of 8,000 bytes(Fixed-length binary data )</td></tr>
<tr><td>varbinary</td><td>Maximum length of 8,000 bytes.(Variable length binary data)</td></tr>
<tr><td>varbinary(max)</td><td>Maximum length of 231 bytes (SQL Server 2005 only). ( Variable length Binary data)</td></tr>
<tr><td>image</td><td>Maximum length of 2,147,483,647 bytes. ( Variable length Binary Data)</td></tr>
</tbody></table>
<h2>Misc Data Types:</h2>
<table  border='1'class="tab" width=600 >
<tbody><tr><th style="width:30%">DATA TYPE</th><th style="width:70%">Description</th></tr>
<tr><td>sql_variant</td><td>Stores values of various SQL Server-supported data types, except text, ntext, and timestamp.</td></tr>
<tr><td>timestamp</td><td>Stores a database-wide unique number that gets updated every time a row gets updated</td></tr>
<tr><td>uniqueidentifier</td><td>Stores a globally unique identifier (GUID)</td></tr>
<tr><td>xml</td><td>Stores XML data. You can store xml instances in a column or a variable (SQL Server 2005 only).</td></tr>
<tr><td>cursor</td><td>Reference to a cursor object</td></tr>
<tr><td>table</td><td>Stores a result set for later processing</td></tr>
</tbody></table>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="syntax.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="operators.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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