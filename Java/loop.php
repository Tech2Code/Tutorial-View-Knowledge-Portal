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
<title>Java - Loops</title>
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
<tr><td class="bg"><a class="tab1" target="_top"   href="loop.php" >Java - Loop Control</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java Loops - for, while and do...while</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="operator.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="decision.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>There may be a situation when we need to execute a block of code several number of times, and is often referred to as a loop. </p>
<p>Java has very flexible three looping mechanisms. You can use one of the following three loops:</p>
<ul>
<li><p>while Loop</p></li>
<li><p>do...while Loop</p></li>
<li><p>for Loop</p></li>
</ul>
<p>As of Java 5, the <i>enhanced for loop</i> was introduced. This is mainly used for Arrays.</p>
<h2>The while Loop:</h2>
<p>A while loop is a control structure that allows you to repeat a task a certain number of times.</p>
<h2>Syntax:</h2>
<p>The syntax of a while loop is:</p>
<pre class="output">
while(Boolean_expression)
{
   //Statements
}
</pre>
<p>When executing, if the <i>boolean_expression</i> result is true, then the actions inside the loop will be executed. This will continue as long as the expression result is true.</p>
<p>Here, key point of the <i>while</i> loop is that the loop might not ever run. When the expression is tested and the result is false, the loop body will be skipped and the first statement after the while loop will be executed.</p>
<h2>Example:</h2>
<pre class="output">
public class Test 
{

   public static void main(String args[]) 
   {
      int x = 10;

      while( x &lt; 20 ) 
	  {
         System.out.print("value of x : " + x );
         x++;
         System.out.print("\n");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">
value of x : 10
value of x : 11
value of x : 12
value of x : 13
value of x : 14
value of x : 15
value of x : 16
value of x : 17
value of x : 18
value of x : 19
</pre>
<h2>The do...while Loop:</h2>
<p>A do...while loop is similar to a while loop, except that a do...while loop is guaranteed to execute at least one time.</p>
<h2>Syntax:</h2>
<p>The syntax of a do...while loop is:</p>
<pre class="output">
do
{
   //Statements
}while(Boolean_expression);
</pre>
<p>Notice that the Boolean expression appears at the end of the loop, so the statements in the loop execute once before the Boolean is tested.</p>
<p>If the Boolean expression is true, the flow of control jumps back up to do, and the statements in the loop execute again. This process repeats until the Boolean expression is false.</p>
<h2>Example:</h2>
<pre class="output">
public class Test 
{

   public static void main(String args[])
   {
      int x = 10;

      do{
         System.out.print("value of x : " + x );
         x++;
         System.out.print("\n");
      }while( x &lt; 20 );
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">
value of x : 10
value of x : 11
value of x : 12
value of x : 13
value of x : 14
value of x : 15
value of x : 16
value of x : 17
value of x : 18
value of x : 19
</pre>
<h2>The for Loop:</h2>
<p>A for loop is a repetition control structure that allows you to efficiently write a loop that needs to execute a specific number of times.</p>
<p>A for loop is useful when you know how many times a task is to be repeated.</p>
<h2>Syntax:</h2>
<p>The syntax of a for loop is:</p>
<pre class="output">
for(initialization; Boolean_expression; update)
{
   //Statements
}
</pre>
<p>Here is the flow of control in a for loop:</p>
<ul>
<li><p>The initialization step is executed first, and only once. This step allows you to declare and initialize any loop control variables. You are not required to put a statement here, as long as a semicolon appears.</p></li>
<li><p>Next, the Boolean expression is evaluated. If it is true, the body of the loop is executed. If it is false, the body of the loop does not execute and flow of control jumps to the next statement past the for loop.</p></li>
<li><p>After the body of the for loop executes, the flow of control jumps back up to the update statement. This statement allows you to update any loop control variables. This statement can be left blank, as long as a semicolon appears after the Boolean expression.</p></li>
<li><p>The Boolean expression is now evaluated again. If it is true, the loop executes and the process repeats itself (body of loop, then update step, then Boolean expression). After the Boolean expression is false, the for loop terminates.</p></li>
</ul>
<h2>Example:</h2>
<pre class="output">
public class Test 
{

   public static void main(String args[]) 
   {

      for(int x = 10; x &lt; 20; x = x+1)
	  {
         System.out.print("value of x : " + x );
         System.out.print("\n");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">value of x : 10
value of x : 11
value of x : 12
value of x : 13
value of x : 14
value of x : 15
value of x : 16
value of x : 17
value of x : 18
value of x : 19
</pre>
<h2>Enhanced for loop in Java:</h2>
<p>As of Java 5, the enhanced for loop was introduced. This is mainly used for Arrays.</p>
<h2>Syntax:</h2>
<p>The syntax of enhanced for loop is:</p>
<pre class="output">for(declaration : expression)
{
   //Statements
}
</pre>
<ul>
<li><p><b>Declaration:</b> The newly declared block variable, which is of a type compatible with the elements of the array you are accessing. The variable will be available within the for block and its value would be the same as the current array element.</p></li>
<li><p><b>Expression:</b> This evaluates to the array you need to loop through. The expression can be an array variable or method call that returns an array.</p></li>
</ul>
<h2>Example:</h2>
<pre class="output">
public class Test 
{

   public static void main(String args[])
   {
      int [] numbers = {10, 20, 30, 40, 50};

      for(int x : numbers )
	  {
         System.out.print( x );
         System.out.print(",");
      }
      System.out.print("\n");
      String [] names ={"James", "Larry", "Tom", "Lacy"};
      for( String name : names ) {
         System.out.print( name );
         System.out.print(",");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">10,20,30,40,50,
James,Larry,Tom,Lacy,
</pre>
<h2>The break Keyword:</h2>
<p>The <i>break</i> keyword is used to stop the entire loop. The break keyword must be used inside any loop or a switch statement.</p>
<p>The break keyword will stop the execution of the innermost loop and start executing the next line of code after the block.</p>
<h2>Syntax:</h2>
<p>The syntax of a break is a single statement inside any loop:</p>
<pre class="output">break;
</pre>
<h2>Example:</h2>
<pre class="output">
public class Test 
{

   public static void main(String args[]) 
   {
      int [] numbers = {10, 20, 30, 40, 50};

      for(int x : numbers ) 
	  {
         if( x == 30 ) 
		 {
	      break;
         }
         System.out.print( x );
         System.out.print("\n");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">10
20
</pre>
<h2>The continue Keyword:</h2>
<p>The <i>continue</i> keyword can be used in any of the loop control structures. It causes the loop to immediately jump to the next iteration of the loop.</p>
<ul>
<li><p>In a for loop, the continue keyword causes flow of control to immediately jump to the update statement.</p></li>
<li><p>In a while loop or do/while loop, flow of control immediately jumps to the Boolean expression.</p></li>
</ul>
<h2>Syntax:</h2>
<p>The syntax of a continue is a single statement inside any loop:</p>
<pre class="output">continue;
</pre>
<h2>Example:</h2>
<pre class="output">
public class Test 
{

   public static void main(String args[]) 
   {
      int [] numbers = {10, 20, 30, 40, 50};

      for(int x : numbers ) 
	  {
         if( x == 30 ) 
		 {
	      continue;
         }
         System.out.print( x );
         System.out.print("\n");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">10
20
40
50
</pre>
<h2>What is Next?</h2>
<p>In the following chapter, we will be learning about decision making statements in Java programming.</p>
<br>
<hr>




</td>
</td><tr>
<td style="text-align:left;"><a  href="operator.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="decision.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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