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
<title>Java - Interfaces</title>
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
<tr><td><a class="tab1" target="_top"   href="method.php">Java - Methods</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="class.php">Java - Objects & Classes</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="inheritance.php" >Java - Inheritance</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="overriding.php">Java - Overriding</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="polymorphism.php">Java - Polymorphism</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="abstraction.php">Java - Abstraction</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="encapsulation.php">Java - Encapsulation</a><br/></td></tr>
<tr><td class="bg"><a class="tab1" target="_top"   href="interfaces.php" >Java - Interfaces</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Interfaces</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="encapsulation.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="package.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>An interface is a collection of abstract methods. A class implements an interface, thereby inheriting the abstract methods of the interface.</p>
<p>An interface is not a class. Writing an interface is similar to writing a class, but they are two different concepts. A class describes the attributes and
behaviors of an object. An interface contains behaviors that a class implements.</p>
<p>Unless the class that implements the interface is abstract, all the methods of the interface need to be defined in the class.</p>
<p>An interface is similar to a class in the following ways:</p>
<ul>
<li><p>An interface can contain any number of methods.</p></li>
<li><p>An interface is written in a file with a <b>.java</b> extension, with the name of the interface matching the name of the file.</p></li>
<li><p>The bytecode of an interface appears in a <b>.class</b> file.</p></li>
<li><p>Interfaces appear in packages, and their corresponding bytecode file must be in a directory structure that matches the package name.</p></li>
</ul>
<p>However, an interface is different from a class in several ways, including:</p>
<ul>
<li><p>You cannot instantiate an interface.
</p></li><li><p>An interface does not contain any constructors.</p></li>
<li><p>All of the methods in an interface are abstract.</p></li>
<li><p>An interface cannot contain instance fields. The only fields that can appear in an interface must be declared both static and final.</p></li>
<li><p>An interface is not extended by a class; it is implemented by a class.</p></li>
<li><p>An interface can extend multiple interfaces.</p></li>
</ul>
<h2>Declaring Interfaces:</h2>
<p>The <b>interface</b> keyword is used to declare an interface. Here is a simple example to declare an interface:</p>
<h2>Example:</h2>
<p>Let us look at an example that depicts encapsulation:</p>
<pre class="output">
/* File name : NameOfInterface.java */
import java.lang.*;
//Any number of import statements

public interface NameOfInterface
{
   //Any number of final, static fields
   //Any number of abstract method declarations\
}
</pre>
<p>Interfaces have the following properties:</p>
<ul>
<li><p>An interface is implicitly abstract. You do not need to use the <b>abstract</b> keyword when declaring an interface.</p></li>
<li><p>Each method in an interface is also implicitly abstract, so the abstract keyword is not needed.</p></li>
<li><p>Methods in an interface are implicitly public.</p></li>
</ul>
<h2>Example:</h2>
<pre class="output">
/* File name : Animal.java */
interface Animal {

   public void eat();
   public void travel();
}
</pre>
<h2>Implementing Interfaces:</h2>
<p>When a class implements an interface, you can think of the class as signing a contract, agreeing to perform the specific behaviors of the interface. If a class
does not perform all the behaviors of the interface, the class must declare itself as abstract.</p>
<p>A class uses the <b>implements</b> keyword to implement an interface. The implements keyword appears in the class declaration following the extends portion
of the declaration.</p>
<pre class="output">
/* File name : MammalInt.java */
public class MammalInt implements Animal
{

   public void eat()
   {
      System.out.println("Mammal eats");
   }

   public void travel()
   {
      System.out.println("Mammal travels");
   } 

   public int noOfLegs()
   {
      return 0;
   }

   public static void main(String args[])
   {
      MammalInt m = new MammalInt();
      m.eat();
      m.travel();
   }
} 
</pre>
<p>This would produce the following result:</p>
<pre class="output">
Mammal eats
Mammal travels
</pre>
<p>When overriding methods defined in interfaces there are several rules to be followed:</p>
<ul>
<li><p>Checked exceptions should not be declared on implementation methods other than the ones declared by the interface method or subclasses of those declared by the interface method.</p></li>
<li><p>The signature of the interface method and the same return type or subtype should be maintained when overriding the methods.</p></li>
<li><p>An implementation class itself can be abstract and if so interface methods need not be implemented.</p></li>
</ul>
<p>When implementation interfaces there are several rules:</p>
<ul>
<li><p>A class can implement more than one interface at a time.</p></li>
<li><p>A class can extend only one class, but implement many interfaces. </p></li>
<li><p>An interface can extend another interface, similarly to the way that a class can extend another class.</p></li>
</ul>
<h2>Extending Interfaces:</h2>
<p>An interface can extend another interface, similarly to the way that a class can extend another class. The <b>extends</b> keyword is used to extend an interface, and
the child interface inherits the methods of the parent interface.</p>
<p>The following Sports interface is extended by Hockey and Football interfaces.</p>
<pre class="output">
//Filename: Sports.java
public interface Sports
{
   public void setHomeTeam(String name);
   public void setVisitingTeam(String name);
}

//Filename: Football.java
public interface Football extends Sports
{
   public void homeTeamScored(int points);
   public void visitingTeamScored(int points);
   public void endOfQuarter(int quarter);
}

//Filename: Hockey.java
public interface Hockey extends Sports
{
   public void homeGoalScored();
   public void visitingGoalScored();
   public void endOfPeriod(int period);
   public void overtimePeriod(int ot);
}
</pre>
<p>The Hockey interface has four methods, but it inherits two from Sports; thus, a class that implements Hockey needs to implement all six methods. Similarly, a class that implements Football needs to define the three methods from Football and the two methods from Sports.</p>
<h2>Extending Multiple Interfaces:</h2>
<p>A Java class can only extend one parent class. Multiple inheritance is not allowed. Interfaces are not classes, however, and an interface can extend more
than one parent interface.</p>
<p>The extends keyword is used once, and the parent interfaces are declared in a comma-separated list.</p>
<p>For example, if the Hockey interface extended both Sports and Event, it would be declared as:</p>
<pre class="output">
public interface Hockey extends Sports, Event
</pre>
<h2>Tagging Interfaces:</h2>
<p>The most common use of extending interfaces occurs when the parent interface does not contain any methods. For example, the MouseListener interface in the java.awt.event package extended java.util.EventListener, which is defined as:</p>
<pre class="output">
package java.util;
public interface EventListener
{}
</pre>
<p>An interface with no methods in it is referred to as a <b>tagging</b> interface. There are two basic design purposes of tagging interfaces:</p>
<p><b>Creates a common parent:</b> As with the EventListener interface, which is extended by dozens of other interfaces in the Java API, you can use a tagging interface to
create a common parent among a group of interfaces. For example, when an interface extends EventListener, the JVM knows that this particular interface is going to be used in an event delegation scenario.</p>
<p><b>Adds a data type to a class:</b> This situation is where the term tagging comes from. A class that implements a tagging interface does not need to define any methods
(since the interface does not have any), but the class becomes an interface type through polymorphism.</p>
<br>
<hr>




</td>
</td><tr>
<td style="text-align:left;"><a  href="encapsulation.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="package.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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