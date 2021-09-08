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
<title>SQL- Using Views</title>
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
<tr><td><a  class="tab1" target="_top"   href="indexes.php">SQL - Indexes</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="alter.php">SQL - Alter Command</a><br/></td></tr>
<tr><td class="bg"><a  class="tab1" target="_top"   href="usingviews.php">SQL - using Views</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="having.php">SQL - Having Clause</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="transaction.php">SQL - Transactions</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="wildcard.php">SQL - Wildcards</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">SQL - Using Views</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="alter.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="having.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>A view is nothing more than a SQL statement that is stored in the database with an associated name. A view is actually a composition of a table in the form of a predefined SQL query.</p>
<p>A view can contain all rows of a table or select rows from a table. A view can be created from one or many tables which depends on the written SQL query to create a view.</p>
<p>Views, which are kind of virtual tables, allow users to do the following:</p>
<ul class="list">
<li><p>Structure data in a way that users or classes of users find natural or intuitive.</p></li>
<li><p>Restrict access to the data such that a user can see and (sometimes) modify exactly what they need and no more.</p></li>
<li><p>Summarize data from various tables which can be used to generate reports.</p></li>
</ul>
<h2>Creating Views:</h2>
<p>Database views are created using the <b>CREATE VIEW</b> statement. Views can be created from a single table, multiple tables, or another view.</p>
<p>To create a view, a user must have the appropriate system privilege according to the specific implementation.</p>
<p>The basic CREATE VIEW syntax is as follows:</p>
<pre class="output">
CREATE VIEW view_name AS
SELECT column1, column2.....
FROM table_name
WHERE [condition];</pre>
<p>You can include multiple tables in your SELECT statement in very similar way as you use them in normal SQL SELECT query.</p>
<h2>Example:</h2>
<p>Consider the CUSTOMERS table having the following records:</p>
<pre class="output">
+----+----------+-----+-----------+----------+
| ID | NAME     | AGE | ADDRESS   | SALARY   |
+----+----------+-----+-----------+----------+
|  1 | Ramesh   |  32 | Ahmedabad |  2000.00 |
|  2 | Khilan   |  25 | Delhi     |  1500.00 |
|  3 | kaushik  |  23 | Kota      |  2000.00 |
|  4 | Chaitali |  25 | Mumbai    |  6500.00 |
|  5 | Hardik   |  27 | Bhopal    |  8500.00 |
|  6 | Komal    |  22 | MP        |  4500.00 |
|  7 | Muffy    |  24 | Indore    | 10000.00 |
+----+----------+-----+-----------+----------+</pre>
<p>Now, following is the example to create a view from CUSTOMERS table. This view would be used to have customer name and age from CUSTOMERS table:</p>
<pre class="output">
SQL &gt; CREATE VIEW CUSTOMERS_VIEW AS
SELECT name, age
FROM  CUSTOMERS;</pre>
<p>Now, you can query CUSTOMERS_VIEW in similar way as you query an actual table. Following is the example:</p>
<pre class="output">SQL &gt; SELECT * FROM CUSTOMERS_VIEW;</pre>
<p>This would produce the following result:</p>
<pre class="output">
+----------+-----+
| name     | age |
+----------+-----+
| Ramesh   |  32 |
| Khilan   |  25 |
| kaushik  |  23 |
| Chaitali |  25 |
| Hardik   |  27 |
| Komal    |  22 |
| Muffy    |  24 |
+----------+-----+</pre>
<h2>The WITH CHECK OPTION:</h2>
<p>The WITH CHECK OPTION is a CREATE VIEW statement option. The purpose of the WITH CHECK OPTION is to ensure that all UPDATE and INSERTs satisfy the condition(s) in the view definition.</p>
<p>If they do not satisfy the condition(s), the UPDATE or INSERT returns an error.</p>
<p>The following is an example of creating same  view CUSTOMERS_VIEW with the WITH CHECK OPTION:</p>
<pre class="output">CREATE VIEW CUSTOMERS_VIEW AS
SELECT name, age
FROM  CUSTOMERS
WHERE age IS NOT NULL
WITH CHECK OPTION;</pre>
<p>The WITH CHECK OPTION in this case should deny the entry of any NULL values in the view's AGE column, because the view is defined by data that does not have a NULL value in the AGE column.</p>
<h2>Updating a View:</h2>
<p>A view can be updated under certain conditions:</p>
<ul>
<li><p>The SELECT clause may not contain the keyword DISTINCT.</p></li>
<li><p>The SELECT clause may not contain summary functions.</p></li>
<li><p>The SELECT clause may not contain set functions.</p></li>
<li><p>The SELECT clause may not contain set operators.</p></li>
<li><p>The SELECT clause may not contain an ORDER BY clause.</p></li>
<li><p>The FROM clause may not contain multiple tables.</p></li>
<li><p>The WHERE clause may not contain subqueries.</p></li>
<li><p>The query may not contain GROUP BY or HAVING.</p></li>
<li><p>Calculated columns may not be updated.</p></li>
<li><p>All NOT NULL columns from the base table must be included in the view in order for the INSERT query to function.</p></li>
</ul>
<p>So if a view satisfies all the above-mentioned rules then you can update a view. Following is an example to update the age of Ramesh:</p>
<pre class="output">SQL &gt; UPDATE CUSTOMERS_VIEW
      SET AGE = 35
      WHERE name='Ramesh';</pre>
<p>This would ultimately update the base table CUSTOMERS and same would reflect in the view itself. Now, try to query base table, and SELECT statement would produce the following result:</p>
<pre class="output">
+----+----------+-----+-----------+----------+
| ID | NAME     | AGE | ADDRESS   | SALARY   |
+----+----------+-----+-----------+----------+
|  1 | Ramesh   |  35 | Ahmedabad |  2000.00 |
|  2 | Khilan   |  25 | Delhi     |  1500.00 |
|  3 | kaushik  |  23 | Kota      |  2000.00 |
|  4 | Chaitali |  25 | Mumbai    |  6500.00 |
|  5 | Hardik   |  27 | Bhopal    |  8500.00 |
|  6 | Komal    |  22 | MP        |  4500.00 |
|  7 | Muffy    |  24 | Indore    | 10000.00 |
+----+----------+-----+-----------+----------+</pre>
<h2>Inserting Rows into a View:</h2>
<p>Rows of data can be inserted into a view. The same rules that apply to the UPDATE command also apply to the INSERT command.</p>
<p>Here we can not insert rows in CUSTOMERS_VIEW because we have not included all the NOT NULL columns in this view, otherwise you can insert rows in a view in similar way as you insert them in a table.</p>
<h2>Deleting Rows into a View:</h2>
<p>Rows of data can be deleted from a view. The same rules that apply to the UPDATE and INSERT commands apply to the DELETE command.</p>
<p>Following is an example to delete a record having AGE= 22.</p>
<pre class="output">SQL &gt; DELETE FROM CUSTOMERS_VIEW
      WHERE age = 22;</pre>
<p>This would ultimately delete a row from the base table CUSTOMERS and same would reflect in the view itself. Now, try to query base table, and SELECT statement would produce the following result:</p>
<pre class="output">
+----+----------+-----+-----------+----------+
| ID | NAME     | AGE | ADDRESS   | SALARY   |
+----+----------+-----+-----------+----------+
|  1 | Ramesh   |  35 | Ahmedabad |  2000.00 |
|  2 | Khilan   |  25 | Delhi     |  1500.00 |
|  3 | kaushik  |  23 | Kota      |  2000.00 |
|  4 | Chaitali |  25 | Mumbai    |  6500.00 |
|  5 | Hardik   |  27 | Bhopal    |  8500.00 |
|  7 | Muffy    |  24 | Indore    | 10000.00 |
+----+----------+-----+-----------+----------+</pre>
<h2>Dropping Views:</h2>
<p>Obviously, where you have a view, you need a way to drop the view if it is no longer needed. The syntax is very simple as given below:</p>
<pre class="output">DROP VIEW view_name;</pre>
<p>Following is an example to drop CUSTOMERS_VIEW from CUSTOMERS table:</p>
<pre class="output">
DROP VIEW CUSTOMERS_VIEW;
</pre>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="alter.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="having.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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