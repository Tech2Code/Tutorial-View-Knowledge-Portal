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
<title>Java - Multithreading</title>
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
<tr><td><a class="tab1" target="_top"   href="exception.php">Java - Exception</a><br/></td></tr>
<tr><td class="bg"><a class="tab1" target="_top"   href="multithreading.php">Java - Multithreading</a><br/></td></tr>
<tr><td><a class="tab1" target="_top"   href="applet.php">Java - Applet</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Multithreading</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="exception.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="applet.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
</tr>
<tr><td colspan="2">
<hr>
 <p>Java is a<i>multithreaded programming language</i> which means we can develop multithreaded program using Java. A multithreaded program contains two or more parts that can run concurrently and each part  can handle different task at the same time making optimal use of the available resources specially when your computer has multiple CPUs.</p>
<p>By definition multitasking is when multiple processes share common processing resources such as a CPU. Multithreading extends the idea of multitasking into applications where you can subdivide specific operations within a single application into individual threads. Each of the threads can run in parallel. The OS divides processing time not only among different applications, but also among each thread within an application.</p>
<p>Multithreading enables you to write in a way where multiple activities can proceed concurrently in the same program.</p>
<h2>Life Cycle of a Thread:</h2>
<p>A thread goes through various stages in its life cycle. For example, a thread is born, started, runs, and then dies. Following diagram shows complete life cycle of a thread.</p>
<center>
<img src="../pic/java_thread.jpg" alt="Java Thread">
</center>
<p>Above-mentioned stages are explained here:</p>
<ul>
<li><p><b>New:</b> A new thread begins its life cycle in the new state. It remains in this state until the program starts the thread. It is also referred to as a born thread.</p></li>
<li><p><b>Runnable:</b> After a newly born thread is started, the thread becomes runnable. A thread in this state is considered to be executing its task.</p></li>
<li><p><b>Waiting:</b> Sometimes, a thread transitions to the waiting state while the thread waits for another thread to perform a task.A thread transitions back to the runnable state only when another thread signals the waiting thread to continue executing.</p></li>
<li><p><b>Timed waiting:</b> A runnable thread can enter the timed waiting state for a specified interval of time. A thread in this state transitions back to the runnable state when that time interval expires or when the event it is waiting for occurs.</p></li>
<li><p><b>Terminated: </b> A runnable thread enters the terminated state when it completes its task or otherwise terminates.</p></li>
</ul>
<h2>Thread Priorities:</h2>
<p>Every Java thread has a priority that helps the operating system determine the order in which threads are scheduled.</p>
<p>Java thread priorities are in the range between MIN_PRIORITY (a constant of 1) and MAX_PRIORITY (a constant of 10). By default, every thread is given priority NORM_PRIORITY (a constant of 5).</p>
<p>Threads with higher priority are more important to a program and should be allocated processor time before lower-priority threads. However, thread priorities cannot guarantee the order in which threads execute and very much platform dependentant.</p>
<h2>Create Thread by Implementing Runnable Interface:</h2>
<p>If your class is intended to be executed as a thread then you can achieve this by implementing <b>Runnable</b> interface. You will need to follow three basic steps:</p>

<h3>Step 1:</h3>
<p>As a first step you need to implement a  run() method provided by  <b>Runnable</b> interface. This method provides entry point for the thread and you will put you complete business logic inside this method. Following is simple syntax of run() method:</p>
<pre class="output">
public void run( )
</pre>
<h3>Step 2:</h3>
<p>At second step you will instantiate a <b>Thread</b> object using the following constructor:</p>
<pre class="output">
Thread(Runnable threadObj, String threadName);
</pre>
<p>Where, <i>threadObj</i> is an instance of a class that implements the <b>Runnable</b> interface and <b>threadName</b> is the name given to the new thread.</p>
<h3>Step 3</h3>
<p>Once Thread object is created, you can start it by calling <b>start( )</b> method, which executes a call to run( ) method.  Following is simple syntax of start() method:</p>
<pre class="output">
void start( );
</pre>
<h2>Example:</h2>
<p>Here is an example that creates a new thread and starts it running:</p>
<pre class="output">
class RunnableDemo implements Runnable 
{
   private Thread t;
   private String threadName;
   
   RunnableDemo( String name)
   {
       threadName = name;
       System.out.println("Creating " +  threadName );
   }
   public void run() 
   {
      System.out.println("Running " +  threadName );
      try {
         for(int i = 4; i > 0; i--) 
		 {
            System.out.println("Thread: " + threadName + ", " + i);
            // Let the thread sleep for a while.
            Thread.sleep(50);
         }
     } catch (InterruptedException e) 
	 {
         System.out.println("Thread " +  threadName + " interrupted.");
     }
     System.out.println("Thread " +  threadName + " exiting.");
   }
   
   public void start ()
   {
      System.out.println("Starting " +  threadName );
      if (t == null)
      {
         t = new Thread (this, threadName);
         t.start ();
      }
   }

}

public class TestThread 
{
   public static void main(String args[]) 
   {
   
      RunnableDemo R1 = new RunnableDemo( "Thread-1");
      R1.start();
      
      RunnableDemo R2 = new RunnableDemo( "Thread-2");
      R2.start();
   }   
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">
Creating Thread-1
Starting Thread-1
Creating Thread-2
Starting Thread-2
Running Thread-1
Thread: Thread-1, 4
Running Thread-2
Thread: Thread-2, 4
Thread: Thread-1, 3
Thread: Thread-2, 3
Thread: Thread-1, 2
Thread: Thread-2, 2
Thread: Thread-1, 1
Thread: Thread-2, 1
Thread Thread-1 exiting.
Thread Thread-2 exiting.
</pre>
<h2>Create Thread by Extending Thread Class:</h2>
<p>The second way to create a thread is to create a new class that extends <b>Thread</b> class using the following two simple steps. This approach provides more flexibility in handling multiple threads created using available methods in Thread class.</p>
<h3>Step 1</h3>
<p>You will need to override <b>run( )</b> method available in Thread class. This method provides entry point for the thread and you will put you complete business logic inside this method. Following is simple syntax of run() method:</p>
<pre class="output">
public void run( )
</pre>
<h3>Step 2</h3>
<p>Once Thread object is created, you can start it by calling <b>start( )</b> method, which executes a call to run( ) method.  Following is simple syntax of start() method:</p>
<pre class="output">
void start( );
</pre>
<h2>Example:</h2>
<p>Here is the preceding program rewritten to extend Thread:</p>
<pre class="output">
class ThreadDemo extends Thread 
{
   private Thread t;
   private String threadName;
   
   ThreadDemo( String name)
   {
       threadName = name;
       System.out.println("Creating " +  threadName );
   }
   public void run() 
   {
      System.out.println("Running " +  threadName );
      try {
         for(int i = 4; i > 0; i--) 
		 {
            System.out.println("Thread: " + threadName + ", " + i);
            // Let the thread sleep for a while.
            Thread.sleep(50);
         }
     } catch (InterruptedException e) 
	 {
         System.out.println("Thread " +  threadName + " interrupted.");
     }
     System.out.println("Thread " +  threadName + " exiting.");
   }
   
   public void start ()
   {
      System.out.println("Starting " +  threadName );
      if (t == null)
      {
         t = new Thread (this, threadName);
         t.start ();
      }
   }

}

public class TestThread 
{
   public static void main(String args[])
   {
   
      ThreadDemo T1 = new ThreadDemo( "Thread-1");
      T1.start();
      
      ThreadDemo T2 = new ThreadDemo( "Thread-2");
      T2.start();
   }   
}
</pre>
<p>This would produce the following result:</p>
<pre class="output">
Creating Thread-1
Starting Thread-1
Creating Thread-2
Starting Thread-2
Running Thread-1
Thread: Thread-1, 4
Running Thread-2
Thread: Thread-2, 4
Thread: Thread-1, 3
Thread: Thread-2, 3
Thread: Thread-1, 2
Thread: Thread-2, 2
Thread: Thread-1, 1
Thread: Thread-2, 1
Thread Thread-1 exiting.
Thread Thread-2 exiting.
</pre>
<h2>Thread Methods:</h2>
<p>Following is the list of important methods available in the Thread class.</p>
<table  border='1'class="tab" width=600 height=400>
<tbody><tr>
<th>SN</th><th>Methods with Description</th></tr>
<tr><td>1</td><td><b>public void start()</b><br>Starts the thread in a separate path of execution, then invokes the run() method on this Thread object.</td></tr>
<tr><td>2</td><td><b>public void run()</b><br>If this Thread object was instantiated using a separate Runnable target, the run() method is invoked on that Runnable object.</td></tr>
<tr><td>3</td><td><b>public final void setName(String name)</b><br>Changes the name of the Thread object. There is also a getName() method for retrieving the name.</td></tr>
<tr><td>4</td><td><b>public final void setPriority(int priority)</b><br>Sets the priority of this Thread object. The possible values are between 1 and 10.</td></tr>
<tr><td>5</td><td><b>public final void setDaemon(boolean on)</b><br>A parameter of true denotes this Thread as a daemon thread.</td></tr>
<tr><td>6</td><td><b>public final void join(long millisec)</b><br>The current thread invokes this method on a second thread, causing the current thread to block until the
second thread terminates or the specified number of milliseconds passes.</td></tr>
<tr><td>7</td><td><b>public void interrupt()</b><br>Interrupts this thread, causing it to continue execution if it was blocked for any reason.</td></tr>
<tr><td>8</td><td><b>public final boolean isAlive()</b><br>Returns true if the thread is alive, which is any time after the thread has been started but before it runs to completion.</td></tr>
</tbody></table>
<p>The previous methods are invoked on a particular Thread object. The following methods in the Thread class are static. Invoking one of the static methods performs the operation on the currently running thread.</p>
<table  border='1'class="tab" width=600 height=400>
<tbody><tr>
<th>SN</th><th>Methods with Description</th></tr>
<tr><td>1</td><td><b>public static void yield()</b><br>Causes the currently running thread to yield to any other threads of the same priority that are waiting to be scheduled.</td></tr>
<tr><td>2</td><td><b>public static void sleep(long millisec)</b><br>Causes the currently running thread to block for at least the specified number of milliseconds.</td></tr>
<tr><td>3</td><td><b>public static boolean holdsLock(Object x)</b><br>Returns true if the current thread holds the lock on the given Object.</td></tr>
<tr><td>4</td><td><b>public static Thread currentThread()</b><br>Returns a reference to the currently running thread, which is the thread that invokes this method.</td></tr>
<tr><td>5</td><td><b>public static void dumpStack()</b><br>Prints the stack trace for the currently running thread, which is useful when debugging a multithreaded
application.</td></tr>
</tbody></table>
<h2>Example:</h2>
<p>The following ThreadClassDemo program demonstrates some of these methods of the Thread class. Consider a class <b>DisplayMessage</b> which implements <b>Runnable</b>:</p>
<pre class="output">
// File Name : DisplayMessage.java
// Create a thread to implement Runnable
public class DisplayMessage implements Runnable
{
   private String message;
   public DisplayMessage(String message)
   {
      this.message = message;
   }
   public void run()
   {
      while(true)
      {
         System.out.println(message);
      }
   }
}
</pre>
<p>Following is another class which extends Thread class:</p>
<pre class="output">
// File Name : GuessANumber.java
// Create a thread to extentd Thread
public class GuessANumber extends Thread
{
   private int number;
   public GuessANumber(int number)
   {
      this.number = number;
   }
   public void run()
   {
      int counter = 0;
      int guess = 0;
      do
      {
          guess = (int) (Math.random() * 100 + 1);
          System.out.println(this.getName()
                       + " guesses " + guess);
          counter++;
      }while(guess != number);
      System.out.println("** Correct! " + this.getName()
                       + " in " + counter + " guesses.**");
   }
}
</pre>
<p>Following is the main program which makes use of above defined classes:</p>
<pre class="output">
// File Name : ThreadClassDemo.java
public class ThreadClassDemo
{
   public static void main(String [] args)
   {
      Runnable hello = new DisplayMessage("Hello");
      Thread thread1 = new Thread(hello);
      thread1.setDaemon(true);
      thread1.setName("hello");
      System.out.println("Starting hello thread...");
      thread1.start();
      
      Runnable bye = new DisplayMessage("Goodbye");
      Thread thread2 = new Thread(bye);
      thread2.setPriority(Thread.MIN_PRIORITY);
      thread2.setDaemon(true);
      System.out.println("Starting goodbye thread...");
      thread2.start();

      System.out.println("Starting thread3...");
      Thread thread3 = new GuessANumber(27);
      thread3.start();
      try
      {
         thread3.join();
      }catch(InterruptedException e)
      {
         System.out.println("Thread interrupted.");
      }
      System.out.println("Starting thread4...");
      Thread thread4 = new GuessANumber(75);
      
	  thread4.start();
      System.out.println("main() is ending...");
   }
}
</pre>
<p>This would produce the following result. You can try this example again and again and you would get different result every time.</p>
<pre class="output">
Starting hello thread...
Starting goodbye thread...
Hello
Hello
Hello
Hello
Hello
Hello
Goodbye
Goodbye
Goodbye
Goodbye
Goodbye
.......
</pre>

<br>
<hr>




</td>
</td><tr>
<td style="text-align:left;"><a  href="exception.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="applet.php"><img src="../pic/next1.gif" width=90 height=30/></a></td>
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