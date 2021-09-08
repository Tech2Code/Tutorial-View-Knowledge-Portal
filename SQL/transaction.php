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
<title>SQL- Transaction</title>
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
<tr><td><a  class="tab1" target="_top"   href="usingviews.php">SQL - using Views</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="having.php">SQL - Having Clause</a><br/></td></tr>
<tr><td class="bg"><a  class="tab1" target="_top"   href="transaction.php">SQL - Transactions</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="wildcard.php">SQL - Wildcards</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">SQL - Transactions</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="having.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="wildcard.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>A transaction is a unit of work that is performed against a database. Transactions are units or sequences of work accomplished in a logical order, whether in a manual fashion by a user or automatically by some sort of a database program.</p>
<p>A transaction is the propagation of one or more changes to the database. For example, if you are creating a record or updating a record or deleting a record from the table, then you are performing transaction on the table. It is important to control transactions to ensure data integrity and to handle database errors.</p>
<p>Practically, you will club many SQL queries into a group  and you will execute all of them together as a part of a transaction.</p>
<h2>Properties of Transactions:</h2>
<p>Transactions have the following four standard properties, usually referred to by the acronym ACID:</p>
<ul>
<li><p><b>Atomicity:</b> ensures that all operations within the work unit are completed successfully; otherwise, the transaction is aborted at the point of failure, and previous operations are rolled back to their former state.</p></li>
<li><p><b>Consistency:</b> ensures that the database properly changes states upon a successfully committed transaction.</p></li>
<li><p><b>Isolation:</b> enables transactions to operate independently of and transparent to each other.</p></li>
<li><p><b>Durability:</b> ensures that the result or effect of a committed transaction persists in case of a system failure.</p></li>
</ul>
<h2>Transaction Control:</h2>
<p>There are following commands used to control transactions:</p>
<ul>
<li><p><b>COMMIT:</b>  to save the changes.</p></li>
<li><p><b>ROLLBACK:</b> to rollback the changes.</p></li>
<li><p><b>SAVEPOINT:</b> creates points within groups of transactions in which to ROLLBACK</p></li>
<li><p><b>SET TRANSACTION:</b> Places a name on a transaction.</p></li>
</ul>
<p>Transactional control commands are only used with the DML commands INSERT, UPDATE and DELETE only. They can not be used while creating tables or dropping them because these operations are automatically commited in the database.</p>
<h2>The COMMIT Command:</h2>
<p>The COMMIT command is the transactional command used to save changes invoked by a transaction to the database.</p>
<p>The COMMIT command saves all transactions to the database since the last COMMIT or ROLLBACK command.</p>
<p>The syntax for COMMIT command is as follows:</p>
<pre class="output">COMMIT;</pre>
<h2>Example:</h2>
<p>Consider the CUSTOMERS table having the following records:</p>
<pre class="output">+----+----------+-----+-----------+----------+
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
<p>Following is the example which would delete records from the table having age = 25 and then COMMIT the changes in the database.</p>
<pre class="output">SQL&gt; DELETE FROM CUSTOMERS
     WHERE AGE = 25;
SQL&gt; COMMIT;</pre>
<p>As a result, two rows from the table would be deleted and SELECT statement would produce the following result:</p>
<pre class="output">+----+----------+-----+-----------+----------+
| ID | NAME     | AGE | ADDRESS   | SALARY   |
+----+----------+-----+-----------+----------+
|  1 | Ramesh   |  32 | Ahmedabad |  2000.00 |
|  3 | kaushik  |  23 | Kota      |  2000.00 |
|  5 | Hardik   |  27 | Bhopal    |  8500.00 |
|  6 | Komal    |  22 | MP        |  4500.00 |
|  7 | Muffy    |  24 | Indore    | 10000.00 |
+----+----------+-----+-----------+----------+</pre>

<h2>The ROLLBACK Command:</h2>
<p>The ROLLBACK command is the transactional command used to undo transactions that have not already been saved to the database.</p>
<p>The ROLLBACK command can only be used to undo transactions since the last COMMIT or ROLLBACK command was issued.</p>
<p>The syntax for ROLLBACK command is as follows:</p>
<pre class="output">ROLLBACK;</pre>
<h2>Example:</h2>
<p>Consider the CUSTOMERS table having the following records:</p>
<pre class="output">+----+----------+-----+-----------+----------+
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
<p>Following is the example, which would delete records from the table having age = 25 and then ROLLBACK the changes in the database.</p>
<pre class="output">SQL&gt; DELETE FROM CUSTOMERS
     WHERE AGE = 25;
SQL&gt; ROLLBACK;</pre>
<p>As a result, delete operation would not impact the table and SELECT statement would produce the following result:</p>
<pre class="output">+----+----------+-----+-----------+----------+
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
<h2>The SAVEPOINT Command:</h2>
<p>A SAVEPOINT is a point in a transaction when you can roll the transaction back to a certain point without rolling back the entire transaction.</p>
<p>The syntax for SAVEPOINT command is as follows:</p>
<pre class="output">SAVEPOINT SAVEPOINT_NAME;</pre>
<p>This command serves only in the creation of a SAVEPOINT among transactional statements. The ROLLBACK command is used to undo a group of transactions.</p>
<p>The syntax for rolling back to a SAVEPOINT is as follows:</p>
<pre class="output">ROLLBACK TO SAVEPOINT_NAME;</pre>
<p>Following is an example where you plan to delete the three different records from the CUSTOMERS table. You want to create a SAVEPOINT before each delete, so that you can ROLLBACK to any SAVEPOINT at any time to return the appropriate data to its original state:</p>
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
<p>Now, here is the series of operations:</p>
<pre class="output">
SQL&gt; SAVEPOINT SP1;
Savepoint created.
SQL&gt; DELETE FROM CUSTOMERS WHERE ID=1;
1 row deleted.
SQL&gt; SAVEPOINT SP2;
Savepoint created.
SQL&gt; DELETE FROM CUSTOMERS WHERE ID=2;
1 row deleted.
SQL&gt; SAVEPOINT SP3;
Savepoint created.
SQL&gt; DELETE FROM CUSTOMERS WHERE ID=3;
1 row deleted.</pre>
<p>Now that the three deletions have taken place, say you have changed your mind and decided to ROLLBACK to the SAVEPOINT that you identified as SP2. Because SP2 was created after the first deletion, the last two deletions are undone:</p>
<pre class="output">
SQL&gt; ROLLBACK TO SP2;
Rollback complete.</pre>
<p>Notice that only the first deletion took place since you rolled back to SP2:</p>
<pre class="output">
SQL&gt; SELECT * FROM CUSTOMERS;
+----+----------+-----+-----------+----------+
| ID | NAME     | AGE | ADDRESS   | SALARY   |
+----+----------+-----+-----------+----------+
|  2 | Khilan   |  25 | Delhi     |  1500.00 |
|  3 | kaushik  |  23 | Kota      |  2000.00 |
|  4 | Chaitali |  25 | Mumbai    |  6500.00 |
|  5 | Hardik   |  27 | Bhopal    |  8500.00 |
|  6 | Komal    |  22 | MP        |  4500.00 |
|  7 | Muffy    |  24 | Indore    | 10000.00 |
+----+----------+-----+-----------+----------+
6 rows selected.</pre>
<h2>The RELEASE SAVEPOINT Command:</h2>
<p>The RELEASE SAVEPOINT command is used to remove a SAVEPOINT that you have created. </p>
<p>The syntax for  RELEASE SAVEPOINT is as follows:</p>
<pre class="output">RELEASE SAVEPOINT SAVEPOINT_NAME;</pre>
<p>Once a SAVEPOINT has been released, you can no longer use the ROLLBACK command to undo transactions performed since the SAVEPOINT.</p>
<h2>The SET TRANSACTION Command:</h2>
<p>The SET TRANSACTION command can be used to initiate a database transaction. This command is used to specify characteristics for the transaction that follows.</p>
<p>For example, you can specify a transaction to be read only, or read write.</p>
<p>The syntax for  SET TRANSACTION is as follows:</p>
<pre class="output">
SET TRANSACTION [ READ WRITE | READ ONLY ];</pre>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="having.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="wildcard.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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