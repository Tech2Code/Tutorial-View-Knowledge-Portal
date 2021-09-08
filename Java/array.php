<?php
session_start();// Inialize session
$a=$_SESSION['auth'];
if (!isset($_SESSION['userid'])) // Check, if username session is NOT set then this page will jump to login page
{
header('Location: index.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Java - Arrays</title>
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
<tr><td class="bg"><a class="tab1" target="_top"   href="array.php">Java - Arrays</a><br/></td></tr>
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
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Arrays</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="decision.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="string.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>Java provides a data structure, the <b>array</b>, which stores a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.</p>
<p>Instead of declaring individual variables, such as number0, number1, ..., and number99, you declare one array variable such as numbers and use numbers[0], numbers[1], and ..., numbers[99] to represent individual variables.</p>
<p>This tutorial introduces how to declare array variables, create arrays, and process arrays using indexed variables.</p>
<h2>Declaring Array Variables:</h2>
<p>To use an array in a program, you must declare a variable to reference the array, and you must specify the type of array the variable can reference. Here is the syntax for declaring an array variable:</p>
<pre class="output">
dataType[] arrayRefVar;   // preferred way.

or

dataType arrayRefVar[];  //  works but not preferred way.
</pre>
<p><b>Note:</b> The style <b>dataType[] arrayRefVar</b> is preferred. The style <b>dataType arrayRefVar[]</b> comes from the C/C++ language and was adopted in Java to accommodate C/C++ programmers.</p>
<h2>Example:</h2>
<p>The following code snippets are examples of this syntax:</p>
<pre class="output">
double[] myList;         // preferred way.

or

double myList[];         //  works but not preferred way.
</pre>
<h2>Creating Arrays:</h2>
<p>You can create an array by using the new operator with the following syntax:</p>
<pre class="output">
arrayRefVar = new dataType[arraySize];
</pre>
<p>The above statement does two things: </p>
<ul>
<li><p>It creates an array using new dataType[arraySize]; </p></li>
<li><p>It assigns the reference of the newly created array to the variable arrayRefVar.</p></li>
</ul>
<p>Declaring an array variable, creating an array, and assigning the reference of the array to the variable can be combined in one statement, as shown below:</p>
<pre class="output">
dataType[] arrayRefVar = new dataType[arraySize];
</pre>
<p>Alternatively you can create arrays as follows:</p>
<pre class="output">
dataType[] arrayRefVar = {value0, value1, ..., valuek};
</pre>
<p>The array elements are accessed through the <b>index</b>. Array indices are 0-based; that is, they start from 0 to <b>arrayRefVar.length-1</b>.</p> 
<h2>Example:</h2>
<p>Following statement declares an array variable, myList, creates an array of 10 elements of double type and assigns its reference to myList:</p>
<pre class="output">
double[] myList = new double[10];
</pre>
<p>Following picture represents array myList. Here, myList holds ten double values and the indices are from 0 to 9.</p>
<center>
<img src="..\pic\java_array.jpg" alt="Java Array">
</center>
<h2>Processing Arrays:</h2>
<p>When processing array elements, we often use either for loop or foreach loop because all of the elements in an array are of the same type and the size of the array is known.</p>
<h2>Example:</h2>
<p>Here is a complete example of showing how to create, initialize and process arrays:</p>
<pre class="output">
public class TestArray 
{
   public static void main(String[] args) 
   {
      double[] myList = {1.9, 2.9, 3.4, 3.5};

      // Print all the array elements
      for (int i = 0; i < myList.length; i++) 
	  {
         System.out.println(myList[i] + " ");
      }
      // Summing all elements
      double total = 0;
      for (int i = 0; i < myList.length; i++) 
	  {
         total += myList[i];
      }
      System.out.println("Total is " + total);
      // Finding the largest element
      double max = myList[0];
      for (int i = 1; i < myList.length; i++) 
	  {
         if (myList[i] > max) max = myList[i];
      }
      System.out.println("Max is " + max);
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">1.9
2.9
3.4
3.5
Total is 11.7
Max is 3.5
</pre>
<h2>The foreach Loops:</h2>
<p>JDK 1.5 introduced a new for loop known as foreach loop or enhanced for loop, which enables you to traverse the complete array sequentially without using an index variable. </p>
<h2>Example:</h2>
<p>The following code displays all the elements in the array myList:</p>
<pre class="output">
public class TestArray 
{

   public static void main(String[] args) 
   {
      double[] myList = {1.9, 2.9, 3.4, 3.5};

      // Print all the array elements
      for (double element: myList) 
	  {
         System.out.println(element);
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">1.9
2.9
3.4
3.5
</pre>
<h2>Passing Arrays to Methods:</h2>
<p>Just as you can pass primitive type values to methods, you can also pass arrays to methods. For example, the following method displays the elements in an int array:</p>
<pre class="output">
public static void printArray(int[] array)
{
  for (int i = 0; i < array.length; i++)
  {
    System.out.print(array[i] + " ");
  }
}
</pre>
<p>You can invoke it by passing an array. For example, the following statement invokes the printArray method to display 3, 1, 2, 6, 4, and 2:</p>
<pre class="output">
printArray(new int[]{3, 1, 2, 6, 4, 2});
</pre>
<h2>Returning an Array from a Method:</h2>
<p>A method may also return an array. For example, the method shown below returns an array that is the reversal of another array:</p>
<pre class="output">
public static int[] reverse(int[] list) 
{
  int[] result = new int[list.length];

  for (int i = 0, j = result.length - 1; i < list.length; i++, j--)
  {
    result[j] = list[i];
  }
  return result;
}
</pre>
<h2>The Arrays Class:</h2>
<p>The java.util.Arrays class contains various static methods for sorting and searching arrays, comparing arrays, and filling array elements. These methods are overloaded for all primitive types.</p>
<table border='1'class="tab" width=600 height=400>
<tbody><tr>
<th>SN</th><th>Methods with Description</th></tr>
<tr><td>1</td><td><b>public static int binarySearch(Object[] a, Object key)</b><br>Searches the specified array of Object ( Byte, Int , double, etc.) for the specified value using the binary search algorithm. The array must be sorted prior to making this call. This returns index of the search key, if it is contained in the list; otherwise, (-(insertion point + 1). </td></tr>
<tr><td>2</td><td><b>public static boolean equals(long[] a, long[] a2)</b><br>Returns true if the two specified arrays of longs are equal to one another. Two arrays are considered equal if both arrays contain the same number of elements, and all corresponding pairs of elements in the two arrays are equal. This returns true if the two arrays are equal. Same method could be used by all other primitive data types (Byte, short, Int, etc.) </td></tr>
<tr><td>3</td><td><b>public static void fill(int[] a, int val)</b><br>Assigns the specified int value to each element of the specified array of ints. Same method could be used by all other primitive data types (Byte, short, Int etc.)</td></tr>
<tr><td>4</td><td><b>public static void sort(Object[] a)</b><br>Sorts the specified array of objects into ascending order, according to the natural ordering of its elements. Same method could be used by all other primitive data types ( Byte, short, Int, etc.)</td></tr>
</tbody></table>
<br>
<hr>





</td>
</td><tr>
<td style="text-align:left;"><a  href="decision.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="string.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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