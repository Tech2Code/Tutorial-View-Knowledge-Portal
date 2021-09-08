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
<title>Java - Exception</title>
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
<tr><td><a class="tab1" target="_top"   href="interfaces.php" >Java - Interfaces</a><br/></td></tr>
<tr><td ><a class="tab1" target="_top"   href="package.php">Java - Packages</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="file.php">Java - File & I/O</a><br/></td></tr>
<tr><td class="bg"><a class="tab1" target="_top"   href="exception.php">Java - Exception</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="multithreading.php">Java - Multithreading</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="applet.php">Java - Applet</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Exceptions Handling</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="file.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="multithreading.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
<p>An exception is a problem that arises during the execution of a program. An exception can occur for many different reasons, including the following:</p>
<ul>
<li><p>A user has entered invalid data.</p></li>
<li><p>A file that needs to be opened cannot be found.</p></li>
<li><p>A network connection has been lost in the middle of communications or the JVM has run out of memory.</p></li>
</ul>
<p>Some of these exceptions are caused by user error, others by programmer error, and others by physical resources that have failed in some manner.</p>
<p>To understand how exception handling works in Java, you need to understand the three categories of exceptions:</p>
<ul>
<li><p><b>Checked exceptions:</b> A checked exception is an exception that is typically a user error or a problem that cannot be foreseen by the programmer. For example, if a file is to be opened, but the file cannot be found, an exception occurs. These exceptions cannot simply be ignored at the time of compilation.</p></li>
<li><p><b>Runtime exceptions:</b> A runtime exception is an exception that occurs that probably could have been avoided by the programmer. As opposed
to checked exceptions, runtime exceptions are ignored at the time of compilation.</p></li>
<li><p><b>Errors:</b> These are not exceptions at all, but problems that arise beyond the control of the user or the programmer. Errors are typically ignored in your code because you can rarely do anything about an error. For example, if a stack overflow occurs, an error will arise. They are also ignored at the time of compilation.</p></li>
</ul>
<h2>Exception Hierarchy:</h2>
<p>All exception classes are subtypes of the java.lang.Exception class. The exception class is a subclass of the Throwable class. Other than the exception class there is another subclass called Error which is derived from the Throwable class.</p>
<p>Errors are not normally trapped form the Java programs. These conditions normally happen in case of severe failures, which are not handled by the java programs. Errors are generated to indicate errors generated by the runtime environment. Example : JVM is out of Memory. Normally programs cannot recover from errors.</p>
<p>The Exception class has two main subclasses: IOException class and RuntimeException Class.</p>
<center>
<img src="../pic/exceptions.jpg" alt="Java Exceptions">
</center>
<p>Here is a list of most common checked and unchecked <a href="http://www.tutorialspoint.com/java/java_builtin_exceptions.htm">Java's Built-in Exceptions</a>.</p>
<h2>Exceptions Methods:</h2>
<p>Following is the list of important medthods available in the Throwable class.</p>
<table  border='1'class="tab" width=600 height=400>
<tbody><tr>
<th>SN</th><th>Methods with Description</th></tr>
<tr><td>1</td><td><b>public String getMessage()</b><br>Returns a detailed message about the exception that has occurred. This message is initialized in the Throwable
constructor.</td></tr>
<tr><td>2</td><td><b>public Throwable getCause()</b><br>Returns the cause of the exception as represented by a Throwable object.</td></tr>
<tr><td>3</td><td><b>public String toString()</b><br>Returns the name of the class concatenated with the result of getMessage()</td></tr>
<tr><td>4</td><td><b>public void printStackTrace()</b><br>Prints the result of toString() along with the stack trace to System.err, the error output stream.</td></tr>
<tr><td>5</td><td><b>public StackTraceElement [] getStackTrace()</b><br>Returns an array containing each element on the stack trace. The element at index 0 represents
the top of the call stack, and the last element in the array represents the method at the bottom of the call stack.</td></tr>
<tr><td>6</td><td><b>public Throwable fillInStackTrace()</b><br>Fills the stack trace of this Throwable object with the current stack trace, adding to any previous information in the stack trace.</td></tr>
</tbody></table>
<h2>Catching Exceptions:</h2>
<p>A method catches an exception using a combination of the <b>try</b> and <b>catch</b> keywords. A try/catch block is placed around the code that might generate an
exception. Code within a try/catch block is referred to as protected code, and the syntax for using try/catch looks like the following:</p>
<pre class="output">
try
{
   //Protected code
}catch(ExceptionName e1)
{
   //Catch block
}
</pre>
<p>A catch statement involves declaring the type of exception you are trying to catch. If an exception occurs in protected code, the catch block (or blocks) that follows the try is checked. If the type of exception that occurred is listed in a catch block, the exception is passed to the catch block much as an argument is passed into a method parameter.</p>
<h2>Example:</h2>
<p>The following is an array is declared with 2 elements. Then the code tries to access the 3rd element of the array which throws an exception.</p>
<pre class="output">
// File Name : ExcepTest.java
import java.io.*;
public class ExcepTest
{

   public static void main(String args[])
   {
      try{
         int a[] = new int[2];
         System.out.println("Access element three :" + a[3]);
         }catch(ArrayIndexOutOfBoundsException e){
         System.out.println("Exception thrown  :" + e);
        }
      System.out.println("Out of the block");
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">
Exception thrown  :java.lang.ArrayIndexOutOfBoundsException: 3
Out of the block
</pre>
<h2>Multiple catch Blocks:</h2>
<p>A try block can be followed by multiple catch blocks. The syntax for multiple catch blocks looks like the following:</p>
<pre class="output">
try
{
   //Protected code
}catch(ExceptionType1 e1)
{
   //Catch block
}catch(ExceptionType2 e2)
{
   //Catch block
}catch(ExceptionType3 e3)
{
   //Catch block
}
</pre>
<p>The previous statements demonstrate three catch blocks, but you can have any number of them after a single try. If an exception occurs in the protected code, the exception is thrown to the first catch block in the list. If the data type of the exception thrown matches ExceptionType1, it gets caught there. If not, the exception passes down to the second catch statement. This continues until the exception either is caught or falls through all catches, in which case the current method stops execution and the exception is thrown down to the previous method on the call stack.</p>
<h2>Example:</h2>
<p>Here is code segment showing how to use multiple try/catch statements.</p>
<pre class="output">
try
{
   file = new FileInputStream(fileName);
   x = (byte) file.read();
}catch(IOException i)
{
   i.printStackTrace();
   return -1;
}catch(FileNotFoundException f) //Not valid!
{
   f.printStackTrace();
   return -1;
}
</pre>
<h2>The throws/throw Keywords:</h2>
<p>If a method does not handle a checked exception, the method must declare it using the <b>throws </b> keyword. The throws keyword appears at the end of a
method's signature.</p>
<p>You can throw an exception, either a newly instantiated one or an exception that you just caught, by using the <b>throw</b> keyword. Try to understand the different in throws and throw keywords.</p>
<p>The following method declares that it throws a RemoteException:</p>
<pre class="output">
import java.io.*;
public class className
{
   public void deposit(double amount) throws RemoteException
   {
      // Method implementation
      throw new RemoteException();
   }
   //Remainder of class definition
}
</pre>
<p>A method can declare that it throws more than one exception, in which case the exceptions are declared in a list separated by commas. For example, the following method declares that it throws a RemoteException and an InsufficientFundsException:</p>
<pre class="output">
import java.io.*;
public class className
{
   public void withdraw(double amount) throws RemoteException,
                              InsufficientFundsException
   {
       // Method implementation
   }
   //Remainder of class definition
}
</pre>
<h2>The finally Keyword</h2>
<p>The finally keyword is used to create a block of code that follows a try block. A finally block of code always executes, whether or not an exception has occurred.</p>
<p>Using a finally block allows you to run any cleanup-type statements that you want to execute, no matter what happens in the protected code.</p>
<p>A finally block appears at the end of the catch blocks and has the following syntax:</p>
<pre class="output">
try
{
   //Protected code
}catch(ExceptionType1 e1)
{
   //Catch block
}catch(ExceptionType2 e2)
{
   //Catch block
}catch(ExceptionType3 e3)
{
   //Catch block
}finally
{
   //The finally block always executes.
}
</pre>
<h2>Example:</h2>
<pre class="output">
public class ExcepTest
{

   public static void main(String args[])
   {
      int a[] = new int[2];
      try{
         System.out.println("Access element three :" + a[3]);
      }catch(ArrayIndexOutOfBoundsException e){
         System.out.println("Exception thrown  :" + e);
      }
      finally{
         a[0] = 6;
         System.out.println("First element value: " +a[0]);
         System.out.println("The finally statement is executed");
      }
   }
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">
Exception thrown  :java.lang.ArrayIndexOutOfBoundsException: 3
First element value: 6
The finally statement is executed
</pre>
<p>Note the following:</p>
<ul>
<li><p>A catch clause cannot exist without a try statement. </p></li>
<li><p>It is not compulsory to have finally clauses when ever a try/catch block is present. </p></li>
<li><p>The try block cannot be present without either catch clause or finally clause.</p></li>
<li><p>Any code cannot be present in between the try, catch, finally blocks. </p></li>
</ul>
<h2>Declaring you own Exception:</h2>
<p>You can create your own exceptions in Java. Keep the following points in mind when writing your own exception classes:</p>
<ul>
<li><p>All exceptions must be a child of Throwable.</p></li>
<li><p>If you want to write a checked exception that is automatically enforced by the Handle or Declare Rule, you need to extend the Exception class.</p></li>
<li><p>If you want to write a runtime exception, you need to extend the RuntimeException class.</p></li>
</ul>
<p>We can define our own Exception class as below:</p>
<pre class="output">
class MyException extends Exception
{
}
</pre>
<p>You just need to extend the Exception class to create your own Exception class. These are considered to be checked exceptions. The following InsufficientFundsException class is a user-defined exception that extends the Exception class, making it a checked exception. An exception class is like any other class, containing useful fields and methods.</p>
<h2>Example:</h2>
<pre class="output" >
// File Name InsufficientFundsException.java
import java.io.*;

public class InsufficientFundsException extends Exception
{
   private double amount;
   public InsufficientFundsException(double amount)
   {
      this.amount = amount;
   } 
   public double getAmount()
   {
      return amount;
   }
}
</pre>
<p>To demonstrate using our user-defined exception, the following CheckingAccount class contains a withdraw() method that throws an InsufficientFundsException.</p>
<pre class="output">
// File Name CheckingAccount.java
import java.io.*;

public class CheckingAccount
{
   private double balance;
   private int number;
   public CheckingAccount(int number)
   {
      this.number = number;
   }
   public void deposit(double amount)
   {
      balance += amount;
   }
   public void withdraw(double amount) throws
                              InsufficientFundsException
   {
      if(amount <= balance)
      {
         balance -= amount;
      }
      else
      {
         double needs = amount - balance;
         throw new InsufficientFundsException(needs);
      }
   }
   public double getBalance()
   {
      return balance;
   }
   public int getNumber()
   {
      return number;
   }
}
</pre>
<p>The following BankDemo program demonstrates invoking the deposit() and withdraw() methods of CheckingAccount.</p>
<pre class="output">
// File Name BankDemo.java
public class BankDemo
{
   public static void main(String [] args)
   {
      CheckingAccount c = new CheckingAccount(101);
      System.out.println("Depositing $500...");
      c.deposit(500.00);
      try
      {
         System.out.println("\nWithdrawing $100...");
         c.withdraw(100.00);
         System.out.println("\nWithdrawing $600...");
         c.withdraw(600.00);
      }catch(InsufficientFundsException e)
      {
         System.out.println("Sorry, but you are short $"
                                  + e.getAmount());
         e.printStackTrace();
      }
    }
}
</pre>
<p>Compile all the above three files and run BankDemo, this would produce the following result:</p>
<pre class="output">
Depositing $500...

Withdrawing $100...

Withdrawing $600...
Sorry, but you are short $200.0
InsufficientFundsException
        at CheckingAccount.withdraw(CheckingAccount.java:25)
        at BankDemo.main(BankDemo.java:13)
</pre>
<h2>Common Exceptions:</h2>
<p>In Java, it is possible to define two catergories of Exceptions and Errors.</p>
<ul>
<li><p><b>JVM Exceptions:</b> - These are exceptions/errors that are exclusively or logically thrown by the JVM.  Examples : NullPointerException, ArrayIndexOutOfBoundsException, ClassCastException,</p></li>
<li><p><b>Programmatic exceptions:</b> - These exceptions are thrown explicitly by the application or the API programmers Examples: IllegalArgumentException, IllegalStateException.</p></li>
</ul>
<br>
<hr>





</td>
</td><tr>
<td style="text-align:left;"><a  href="file.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="multithreading.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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