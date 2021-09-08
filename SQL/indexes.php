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
<title>SQL- Index</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="indexes.php">SQL - Indexes</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">SQL - Indexes</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="alias.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="alter.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>Indexes are special lookup tables that the database search engine can use to speed up data retrieval. Simply put, an index is a pointer to data in a table. An index in a database is very similar to an index in the back of a book.</p>
<p>For example, if you want to reference all pages in a book that discuss a certain topic, you first refer to the index, which lists all topics alphabetically and are then referred to one or more specific page numbers.</p>
<p>An index helps speed up SELECT queries and WHERE clauses, but it slows down data input, with UPDATE and INSERT statements. Indexes can be created or dropped with no effect on the data.</p>
<p>Creating an index involves the CREATE INDEX statement, which allows you to name the index, to specify the table and which column or columns to index, and to indicate whether the index is in ascending or descending order.</p>
<p>Indexes can also be unique, similar to the UNIQUE constraint, in that the index prevents duplicate entries in the column or combination of columns on which there's an index.</p>
<h2>The CREATE INDEX Command:</h2>
<p>The basic syntax of <b>CREATE INDEX</b> is as follows:</p>
<pre class="output">CREATE INDEX index_name ON table_name;</pre>
<h2>Single-Column Indexes:</h2>
<p>A single-column index is one that is created based on only one table column. The basic syntax is as follows:</p>
<pre class="output">CREATE INDEX index_name
ON table_name (column_name);</pre>
<h2>Unique Indexes:</h2>
<p>Unique indexes are used not only for performance, but also for data integrity. A unique index does not allow any duplicate values to be inserted into the table. The basic syntax is as follows:</p>
<pre class="output">CREATE UNIQUE INDEX index_name
on table_name (column_name);</pre>
<h2>Composite Indexes:</h2>
<p>A composite index is an index on two or more columns of a table. The basic syntax is as follows:</p>
<pre class="output">CREATE INDEX index_name
on table_name (column1, column2);</pre>
<p>Whether to create a single-column index or a composite index, take into consideration the column(s) that you may use very frequently in a query's WHERE clause as filter conditions.</p>
<p>Should there be only one column used, a single-column index should be the choice. Should there be two or more columns that are frequently used in the WHERE clause as filters, the composite index would be the best choice.</p>
<h2>Implicit Indexes:</h2>
<p>Implicit indexes are indexes that are automatically created by the database server when an object is created. Indexes are automatically created for primary key constraints and unique constraints.</p>
<h2>The DROP INDEX Command:</h2>
<p>An index can be dropped using SQL <b>DROP</b> command. Care should be taken when dropping an index because performance may be slowed or improved.</p>
<p>The basic syntax is as follows:</p>
<pre class="output">DROP INDEX index_name;</pre>
<p>You can check <a href="sql-index.php">INDEX Constraint</a> chapter to see actual examples on Indexes.</p>
<h2>When should indexes be avoided?</h2>
<p>Although indexes are intended to enhance a database's performance, there are times when they  should be avoided. The following guidelines indicate when the use of an index should be reconsidered:</p>
<ul>
<li><p>Indexes should not be used on small tables.</p></li>
<li><p>Tables that have frequent, large batch update  or insert operations.</p></li>
<li><p>Indexes should not be used on columns that contain a high number of NULL values.</p></li>
<li><p>Columns that are frequently manipulated should not be indexed.</p></li>
</ul>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="alias.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="alter.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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