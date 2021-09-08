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
<title>Java - Inheritance</title>
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
<tr><td class="bg"><a class="tab1" target="_top"   href="inheritance.php" >Java - Inheritance</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Inheritance</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="class.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="overriding.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>

<p>Inheritance can be defined as the process where one object acquires the properties of another. With the use of inheritance the information is made manageable in a hierarchical order.</p>
<p>When we talk about inheritance, the most commonly used keyword would be <b>extends</b> and <b>implements</b>. These words would determine whether one object IS-A type of another. By using these keywords we can make one object acquire the properties of another object.</p>
<h2>IS-A Relationship:</h2>
<p>IS-A is a way of saying : This object is a type of that object. Let us see how the <b>extends</b> keyword is used to achieve inheritance.</p>
<pre class="output">
public class Animal
{
}

public class Mammal extends Animal
{
}

public class Reptile extends Animal
{
}

public class Dog extends Mammal
{
}
</pre>
<p>Now, based on the above example, In Object Oriented terms, the following are true:</p>
<ul>
<li><p>Animal is the superclass of Mammal class.</p></li>
<li><p>Animal is the superclass of Reptile class.</p></li>
<li><p>Mammal and Reptile are subclasses of Animal class.</p></li>
<li><p>Dog is the subclass of both Mammal and Animal classes.</p></li>
</ul>
<p>Now, if we consider the IS-A relationship, we can say:</p>
<ul>
<li><p>Mammal IS-A Animal</p></li>
<li><p>Reptile IS-A Animal</p></li>
<li><p>Dog IS-A Mammal</p></li>
<li><p>Hence : Dog IS-A Animal as well</p></li>
</ul>
<p>With use of the extends keyword the subclasses will be able to inherit all the properties of the superclass except for the private properties of the superclass.</p>
<p>We can assure that Mammal is actually an Animal with the use of the instance operator.</p>
<h2>Example:</h2>
<pre class="output">
public class Dog extends Mammal
{

   public static void main(String args[])
   {

      Animal a = new Animal();
      Mammal m = new Mammal();
      Dog d = new Dog();

      System.out.println(m instanceof Animal);
      System.out.println(d instanceof Mammal);
      System.out.println(d instanceof Animal);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">
true
true
true
</pre>
<p>Since we have a good understanding of the <b>extends</b> keyword let us look into how the <b>implements </b> keyword is used to get the IS-A relationship.</p>
<p>The <b>implements</b> keyword is used by classes by inherit from interfaces. Interfaces can never be extended by the classes.</p>
<h2>Example:</h2>
<pre class="output">
public interface Animal {}

public class Mammal implements Animal
{
}

public class Dog extends Mammal
{
}
</pre>
<h2>The instanceof Keyword:</h2>
<p>Let us use the <b>instanceof</b> operator to check determine whether Mammal is actually an Animal, and dog is actually an Animal</p>
<pre class="output">
interface Animal{}

class Mammal implements Animal{}

public class Dog extends Mammal
{
   public static void main(String args[])
   {

      Mammal m = new Mammal();
      Dog d = new Dog();

      System.out.println(m instanceof Animal);
      System.out.println(d instanceof Mammal);
      System.out.println(d instanceof Animal);
   }
} 
</pre>
<p>This would produce the following result:</p>
<pre class="output">
true
true
true
</pre>
<h2>HAS-A relationship:</h2>
<p>These relationships are mainly based on the usage. This determines whether a certain class <b>HAS-A </b> certain thing. This relationship helps to reduce duplication of code as well as bugs.</p>
<p>Lets us look into an example:</p>
<pre class="output">
public class Vehicle{}
public class Speed{}
public class Van extends Vehicle
{
	private Speed sp;
} 
</pre>
<p>This shows that class Van HAS-A Speed. By having a separate class for Speed, we do not have to put the entire code that belongs to speed inside the Van class., which makes it possible to reuse the Speed class in multiple applications.</p>
<p>In Object-Oriented feature, the users do not need to bother about which object is doing the real work. To achieve this, the Van class hides the implementation details from the users of the Van class. So basically what happens is the users would ask the Van class to do a certain action and the Van class will either do the work by itself or ask another class to perform the action.</p>
<p>A very important fact to remember is that Java only supports only single inheritance. This means that a class cannot extend more than one class. Therefore following is illegal:</p>
<pre class="output">
public class extends Animal, Mammal{} 
</pre>
<p>However, a class can implement one or more interfaces. This has made Java get rid of the impossibility of multiple inheritance.</p>
<br>
<hr>




</td>
</td><tr>
<td style="text-align:left;"><a  href="class.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="overriding.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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