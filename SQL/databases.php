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
<title>SQL- Databases</title>
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
<tr><td class="bg"><a  class="tab1" target="_top"   href="databases.php" >SQL - Databases</a><br/></td></tr>
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
<tr><td><a  class="tab1" target="_top"   href="transaction.php">SQL - Transactions</a><br/></td></tr>
<tr><td><a  class="tab1" target="_top"   href="wildcard.php">SQL - Wildcards</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#996600;font-size:19;">SQL - RDBMS Databases ( MySQL, Access, Oracle )</marquee>
</td></tr>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="rdbms.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="syntax.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>There are many popular RDBMS available to work with. This tutorial gives a brief overview of few most popular RDBMS. This would help you to compare their basic features.</p>
<h2>MySQL</h2>
<p>MySQL is an open source SQL database, which is developed by Swedish company MySQL AB. MySQL is pronounced "my ess-que-ell," in contrast with SQL, pronounced "sequel."</p>
<p>MySQL is supporting many different platforms including Microsoft Windows, the major Linux distributions, UNIX, and Mac OS X.</p>
<p>MySQL has free and paid versions, depending on its usage (non-commercial/commercial) and features. MySQL comes with a very fast, multi-threaded, multi-user, and robust SQL database server.</p>
<h2>History:</h2>
<ul>
<li><p>Development of MySQL by Michael Widenius &amp; David Axmark beginning in 1994.</p></li>
<li><p>First internal release on 23 May 1995.</p></li>
<li><p>Windows version was released on 8 January 1998 for Windows 95 and NT.</p></li>
<li><p>Version 3.23: beta from June 2000, production release January 2001.</p></li>
<li><p>Version 4.0: beta from August 2002, production release March 2003 (unions).</p></li>
<li><p>Version 4.01: beta from August 2003, Jyoti adopts MySQL for database tracking.</p></li>
<li><p>Version 4.1: beta from June 2004, production release October 2004.</p></li>
<li><p>Version 5.0: beta from March 2005, production release October 2005.</p></li>
<li><p>Sun Microsystems acquired MySQL AB on 26 February 2008.</p></li>
<li><p>Version 5.1: production release 27 November 2008.</p></li>
</ul>
<h2>Features:</h2>
<ul>
<li><p>High Performance.</p></li>
<li><p>High Availability.</p></li>
<li><p>Scalability and Flexibility Run anything.</p></li>
<li><p>Robust Transactional Support.</p></li>
<li><p>Web and Data Warehouse Strengths.</p></li>
<li><p>Strong Data Protection.</p></li>
<li><p>Comprehensive Application Development.</p></li>
<li><p>Management Ease.</p></li>
<li><p>Open Source Freedom and 24 x 7 Support.</p></li>
<li><p>Lowest Total Cost of Ownership.</p></li>
</ul>
<h2>MS SQL Server</h2>
<p>MS SQL Server is a Relational Database Management System developed by Microsoft Inc. Its primary query languages are:</p>
<ul>
<li><p>T-SQL.</p></li>
<li><p>ANSI SQL.</p></li>
</ul>
<h2>History:</h2>
<ul>
<li><p>1987 -  Sybase releases SQL Server for UNIX.</p></li>
<li><p>1988 - Microsoft, Sybase, and Aston-Tate port SQL Server to OS/2.</p></li>
<li><p>1989 - Microsoft, Sybase, and Aston-Tate release SQL Server 1.0 for OS/2.</p></li>
<li><p>1990 - SQL Server 1.1 is released with support for Windows 3.0 clients.</p></li>
<li><p>Aston-Tate drops out of SQL Server development.</p></li>
<li><p>2000 - Microsoft releases SQL Server 2000.</p></li>
<li><p>2001 - Microsoft releases XML for SQL Server Web Release 1 (download).</p></li>
<li><p>2002 - Microsoft releases SQLXML 2.0 (renamed from XML for SQL Server).</p></li>
<li><p>2002  - Microsoft releases SQLXML 3.0.</p></li>
<li><p>2005 - Microsoft releases SQL Server 2005 on November 7th, 2005.</p></li>
</ul>
<h2>Features:</h2>
<ul>
<li><p>High Performance.</p></li>
<li><p>High Availability.</p></li>
<li><p>Database mirroring.</p></li>
<li><p>Database snapshots.</p></li>
<li><p>CLR integration.</p></li>
<li><p>Service Broker.</p></li>
<li><p>DDL triggers.</p></li>
<li><p>Ranking functions.</p></li>
<li><p>Row version-based isolation levels.</p></li>
<li><p>XML integration.</p></li>
<li><p>TRY...CATCH.</p></li>
<li><p>Database Mail.</p></li>
</ul>
<h2>ORACLE</h2>
<p>It is a very large and multi-user database management system. Oracle is a relational database management system developed by 'Oracle Corporation'.</p>
<p>Oracle works to efficiently manage its resource, a database of information, among the multiple clients requesting and sending data in the network.</p>
<p>It is an excellent database server choice for client/server computing. Oracle supports all major operating systems for both clients and servers, including MSDOS, NetWare, UnixWare, OS/2 and most UNIX flavors.</p>
<h2>History:</h2>
<p>Oracle began in 1977 and celebrating its 32 wonderful years in the industry (from 1977 to 2009).</p>
<ul>
<li><p>1977  - Larry Ellison, Bob Miner and Ed Oates founded Software Development Laboratories to undertake development work.</p></li>
<li><p>1979  - Version 2.0 of Oracle was released and it became first commercial relational database and first SQL database. The company changed its name to Relational Software Inc. (RSI). </p></li>
<li><p>1981 - RSI started developing tools for Oracle.</p></li>
<li><p>1982 - RSI was renamed to Oracle Corporation.</p></li>
<li><p>1983 - Oracle released version 3.0, rewritten in C language and ran on multiple platforms.</p></li>
<li><p>1984 - Oracle version 4.0 was released. It contained features like concurrency control - multi-version read consistency, etc.</p></li>
<li><p>1985 - Oracle version 4.0 was released. It contained features like concurrency control - multi-version read consistency, etc.</p></li>
<li><p>2007 - Oracle has released Oracle11g. The new version focused on better partitioning, easy migration etc.</p></li>
</ul>
<h2>Features:</h2>
<ul>
<li><p>Concurrency</p></li>
<li><p>Read Consistency</p></li>
<li><p>Locking Mechanisms</p></li>
<li><p>Quiesce Database</p></li>
<li><p>Portability</p></li>
<li><p>Self-managing database</p></li>
<li><p>SQL*Plus</p></li>
<li><p>ASM</p></li>
<li><p>Scheduler</p></li>
<li><p>Resource Manager</p></li>
<li><p>Data Warehousing</p></li>
<li><p>Materialized views</p></li>
<li><p>Bitmap indexes</p></li>
<li><p>Table compression</p></li>
<li><p>Parallel Execution</p></li>
<li><p>Analytic SQL</p></li>
<li><p>Data mining</p></li>
<li><p>Partitioning</p></li>
</ul>
<h2>MS ACCESS</h2>
<p>This is one of the most popular Microsoft products. Microsoft Access is an entry-level database management software. MS Access database is not only an inexpensive but also powerful database for small-scale projects.</p>
<p>MS Access uses the Jet database engine, which utilizes a specific SQL language dialect (sometimes referred to as Jet SQL).</p>
<p>MS Access comes with the professional edition of MS Office package. MS Access has easy-to-use intuitive graphical interface.</p>
<ul>
<li><p>1992  - Access version 1.0 was released.</p></li>
<li><p>1993  - Access 1.1 released to improve compatibility with inclusion the Access Basic programming language.</p></li>
<li><p>The most significant transition was from Access 97 to Access 2000 </p></li>
<li><p>2007 - Access 2007, a new database format was introduced ACCDB which supports complex data types such as multi valued and attachment fields.  </p></li>
</ul>
<h2>Features:</h2>
<ul>
<li><p>Users can create tables, queries, forms and reports and connect them together with macros.</p></li>
<li><p>The import and export of data to many formats including Excel, Outlook, ASCII, dBase, Paradox, FoxPro, SQL Server, Oracle, ODBC, etc.</p></li>
<li><p>There is also the Jet Database format (MDB or ACCDB in Access 2007), which can contain the application and data in one file. This makes it very convenient to distribute the entire application to another user, who can run it in disconnected environments.</p></li>
<li><p>Microsoft Access offers parameterized queries. These queries and Access tables can be referenced from other programs like VB6 and .NET through DAO or ADO.</p></li>
<li><p>The desktop editions of Microsoft SQL Server can be used with Access as an alternative to the Jet Database Engine. </p></li>
<li><p>Microsoft Access is a file server-based database. Unlike client-server relational database management systems (RDBMS), Microsoft Access does not implement database triggers, stored procedures, or transaction logging.</p></li>
</ul>


<hr>
</td>
</td>
</tr>
<tr>
<td style="text-align:left;"><a  href="rdbms.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="syntax.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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