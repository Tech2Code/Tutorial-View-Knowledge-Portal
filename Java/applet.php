<?php
session_start();// Inialize session
$a=$_SESSION['auth'];
if (!isset($_SESSION['userid'])) // Check, if username session is NOT set then this page will jump to login page
{
header('Location: index.php');
}
include("../database/mydb.php");;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Java - Applet</title>
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
<tr><td><a class="tab1" target="_top"   href="multithreading.php">Java - Multithreading</a><br/></td></tr>
<tr><td class="bg"><a class="tab1" target="_top"   href="applet.php">Java - Applet</a><br/></td></tr>
</table>
</div>
</td>
<td align="left" valign="top" width="800" bgcolor=white style="background:#ffffff url('../pic/emty.gif')">
<table class="chapter" border="0" width="100%" cellspacing="0" cellpadding="0" >
<tr><td colspan="2"><marquee direction="left" scrolldellay="500" style="color:#FF9933 ;font-size:19;">Java - Applet Basics</marquee>
<tr><td colspan="2" align=center>
<img src="..\pic\student.jpg" alt=" My LOGO" align="middle" width="147" height="147"/></tr></td>

<tr>
<td style="text-align:left;"><a  href="multithreading.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="home.php">Home &raquo;</a></td>
</tr>
<tr><td colspan="2">
<hr>

<p>An applet is a Java program that runs in a Web browser. An applet can be a fully functional Java application because it has the entire Java API at its disposal.</p>
<p>There are some important differences between an applet and a standalone Java application, including the following:</p>
<ul>
<li><p>An applet is a Java class that extends the java.applet.Applet class.</p></li>
<li><p>A main() method is not invoked on an applet, and an applet class will not define main().</p></li>
<li><p>Applets are designed to be embedded within an.php page.</p></li>
<li><p>When a user views an.php page that contains an applet, the code for the applet is downloaded to the user's machine.</p></li>
<li><p>A JVM is required to view an applet. The JVM can be either a plug-in of the Web browser or a separate runtime environment.</p></li>
<li><p>The JVM on the user's machine creates an instance of the applet class and invokes various methods during the applet's lifetime.</p></li>
<li><p>Applets have strict security rules that are enforced by the Web browser. The security of an applet is often referred to as sandbox security, comparing
the applet to a child playing in a sandbox with various rules that must be followed.</p></li>
<li><p>Other classes that the applet needs can be downloaded in a single Java Archive (JAR) file.</p></li>
</ul>
<h2>Life Cycle of an Applet:</h2>
<p>Four methods in the Applet class give you the framework on which you build any serious applet:</p>
<ul>
<li><p><b>init:</b> This method is intended for whatever initialization is needed for your applet. It is called after the param tags inside the applet tag have been processed.</p></li>
<li><p><b>start:</b> This method is automatically called after the browser calls the init method. It is also called whenever the user returns to the page containing the applet after having gone off to other pages.</p></li>
<li><p><b>stop:</b> This method is automatically called when the user moves off the page on which the applet sits. It can, therefore, be called repeatedly in the same applet. </p></li>
<li><p><b>destroy:</b> This method is only called when the browser shuts down normally. Because applets are meant to live on an.php page, you should not normally leave resources behind after a user leaves the page that contains the applet.</p></li>
<li><p><b>paint:</b> Invoked immediately after the start() method, and also any time the applet needs to repaint itself in the browser. The paint() method is actually inherited from the java.awt.</p></li>
</ul>
<h2>A "Hello, World" Applet:</h2>
<p>The following is a simple applet named HelloWorldApplet.java:</p>
<pre class="output">
import java.applet.*;
import java.awt.*;

public class HelloWorldApplet extends Applet
{
   public void paint (Graphics g)
   {
      g.drawString ("Hello World", 25, 50);
   }
}
</pre>
<p>These import statements bring the classes into the scope of our applet class:</p>
<ul>
<li><p>java.applet.Applet.</p></li>
<li><p>java.awt.Graphics.</p></li>
</ul>
<p>Without those import statements, the Java compiler would not recognize the classes Applet and Graphics, which the applet class refers to.</p>
<h2>The Applet CLASS:</h2>
<p>Every applet is an extension of the <i>java.applet.Applet class</i>. The base Applet class provides methods that a derived Applet class may call to obtain information and services from the browser context.</p>
<p>These include methods that do the following:</p>
<ul>
<li><p>Get applet parameters</p></li>
<li><p>Get the network location of the.php file that contains the applet</p></li>
<li><p>Get the network location of the applet class directory</p></li>
<li><p>Print a status message in the browser</p></li>
<li><p>Fetch an image</p></li>
<li><p>Fetch an audio clip</p></li>
<li><p>Play an audio clip</p></li>
<li><p>Resize the applet</p></li>
</ul>
<p>Additionally, the Applet class provides an interface by which the viewer or browser obtains information about the applet and controls the applet's execution.
The viewer may:</p>
<ul>
<li><p>request information about the author, version and copyright of the applet</p></li>
<li><p>request a description of the parameters the applet recognizes</p></li>
<li><p>initialize the applet</p></li>
<li><p>destroy the applet</p></li>
<li><p>start the applet's execution</p></li>
<li><p>stop the applet's execution</p></li>
</ul>
<p>The Applet class provides default implementations of each of these methods. Those implementations may be overridden as necessary.</p>
<p>The "Hello, World" applet is complete as it stands. The only method overridden is the paint method.</p>
<h2>Invoking an Applet:</h2>
<p>An applet may be invoked by embedding directives in an.php file and viewing the file through an applet viewer or Java-enabled browser.</p>
<p>The &lt;applet&gt; tag is the basis for embedding an applet in an.php file. Below is an example that invokes the "Hello, World" applet:</p>
<pre class="output">
&lt.php&gt;
&lt;title&gt;The Hello, World Applet&lt;/title&gt;
&lt;hr&gt;
&lt;applet code="HelloWorldApplet.class" width="320" height="120"&gt;
If your browser was Java-enabled, a "Hello, World"
message would appear here.
&lt;/applet&gt;
&lt;hr&gt;
&lt;.php&gt;
</pre>
<p>The code attribute of the &lt;applet&gt; tag is required. It specifies the Applet class to run. Width and height are also required to specify the initial size of the panel in which an applet runs. The applet directive must be closed with a &lt;/applet&gt; tag.</p>
<p>If an applet takes parameters, values may be passed for the parameters by adding &lt;param&gt; tags between &lt;applet&gt; and &lt;/applet&gt;. The browser ignores text and other tags between the applet tags.</p>
<p>Non-Java-enabled browsers do not process &lt;applet&gt; and &lt;/applet&gt;. Therefore, anything that appears between the tags, not related to the applet, is visible in non-Java-enabled browsers.</p>
<p>The viewer or browser looks for the compiled Java code at the location of the document. To specify otherwise, use the codebase attribute of the &lt;applet&gt; tag as shown:</p>
<pre class="output">&lt;applet codebase="http://amrood.com/applets"
code="HelloWorldApplet.class" width="320" height="120"&gt;
</pre>
<p>If an applet resides in a package other than the default, the holding package must be specified in the code attribute using the period character (.) to separate
package/class components. For example:</p>
<pre class="output">&lt;applet code="mypackage.subpackage.TestApplet.class" 
           width="320" height="120"&gt;
</pre>
<h2>Getting Applet Parameters:</h2>
<p>The following example demonstrates how to make an applet respond to setup parameters specified in the document. This applet displays a checkerboard
pattern of black and a second color.</p>
<p>The second color and the size of each square may be specified as parameters to the applet within the document.</p>
<p>CheckerApplet gets its parameters in the init() method. It may also get its parameters in the paint() method. However, getting the values and saving the settings once at the start of the applet, instead of at every refresh, is convenient and efficient.</p>
<p>The applet viewer or browser calls the init() method of each applet it runs. The viewer calls init() once, immediately after loading the applet. (Applet.init() is implemented to do nothing.) Override the default implementation to insert custom initialization code.</p>
<p>The Applet.getParameter() method fetches a parameter given the parameter's name (the value of a parameter is always a string). If the value is numeric or other non-character data, the string must be parsed.</p>
<p>The following is a skeleton of CheckerApplet.java:</p>
<pre class="output">
import java.applet.*;
import java.awt.*;
public class CheckerApplet extends Applet
{
   int squareSize = 50;// initialized to default size
   public void init () {}
   private void parseSquareSize (String param) {}
   private Color parseColor (String param) {}
   public void paint (Graphics g) {}
}
</pre>
<p>Here are CheckerApplet's init() and private parseSquareSize() methods:</p>
<pre class="output">
public void init ()
{
   String squareSizeParam = getParameter ("squareSize");
   parseSquareSize (squareSizeParam);
   String colorParam = getParameter ("color");
   Color fg = parseColor (colorParam);
   setBackground (Color.black);
   setForeground (fg);
}
private void parseSquareSize (String param)
{
   if (param == null) return;
   try {
      squareSize = Integer.parseInt (param);
   }
   catch (Exception e) {
     // Let default value remain
   }
}
</pre>
<p>The applet calls parseSquareSize() to parse the squareSize parameter. parseSquareSize() calls the library method Integer.parseInt(), which parses a string and returns an integer. Integer.parseInt() throws an exception whenever its argument is invalid.</p>
<p>Therefore, parseSquareSize() catches exceptions, rather than allowing the applet to fail on bad input.</p>
<p>The applet calls parseColor() to parse the color parameter into a Color value. parseColor() does a series of string comparisons to match the parameter value to the name of a predefined color. You need to implement these methods to make this applet works.</p>
<h2>Specifying Applet Parameters:</h2>
<p>The following is an example of an.php file with a CheckerApplet embedded in it. The.php file specifies both parameters to the applet by means of the &lt;param&gt; tag.</p>
<pre class="output">
&lt.php&gt;
&lt;title&gt;Checkerboard Applet&lt;/title&gt;
&lt;hr&gt;
&lt;applet code="CheckerApplet.class" width="480" height="320"&gt;
&lt;param name="color" value="blue"&gt;
&lt;param name="squaresize" value="30"&gt;
&lt;/applet&gt;
&lt;hr&gt;
&lt;.php&gt;
</pre>
<p><b>Note:</b> Parameter names are not case sensitive.</p>
<h2>Application Conversion to Applets:</h2>
<p>It is easy to convert a graphical Java application (that is, an application that uses the AWT and that you can start with the java program launcher) into an applet that you can embed in a web page.</p>
<p>Here are the specific steps for converting an application to an applet.</p>
<ul>
<li><p>Make an.php page with the appropriate tag to load the applet code.</p></li>
<li><p>Supply a subclass of the JApplet class. Make this class public. Otherwise, the applet cannot be loaded.</p></li>
<li><p>Eliminate the main method in the application. Do not construct a frame window for the application. Your application will be displayed inside the browser.</p></li>
<li><p>Move any initialization code from the frame window constructor to the init method of the applet. You don't need to explicitly construct the applet object.the browser instantiates it for you and calls the init method.</p></li>
<li><p>Remove the call to setSize; for applets, sizing is done with the width and height parameters in the.php file.</p></li>
<li><p>Remove the call to setDefaultCloseOperation. An applet cannot be closed; it terminates when the browser exits.</p></li>
<li><p>If the application calls setTitle, eliminate the call to the method. Applets cannot have title bars. (You can, of course, title the web page itself, using the.php title tag.)</p></li>
<li><p>Don't call setVisible(true). The applet is displayed automatically.</p></li>
</ul>
<h2>Event Handling:</h2>
<p>Applets inherit a group of event-handling methods from the Container class.  The Container class defines several methods, such as processKeyEvent and processMouseEvent, for handling particular types of events, and then one catch-all method called processEvent.</p>
<p>In order to react an event, an applet must override the appropriate event-specific method.</p>
<pre class="output">
import java.awt.event.MouseListener;
import java.awt.event.MouseEvent;
import java.applet.Applet;
import java.awt.Graphics;

public class ExampleEventHandling extends Applet 
			 implements MouseListener
			 {

    StringBuffer strBuffer;

    public void init()
	{
	addMouseListener(this);
	strBuffer = new StringBuffer();
        addItem("initializing the apple ");
    }

    public void start() 
	{
        addItem("starting the applet ");
    }

    public void stop() 
	{
        addItem("stopping the applet ");
    }

    public void destroy() 
	{
        addItem("unloading the applet");
    }

    void addItem(String word) 
	{
        System.out.println(word);
        strBuffer.append(word);
        repaint();
    }

    public void paint(Graphics g) 
	{
	//Draw a Rectangle around the applet's display area.
        g.drawRect(0, 0, 
		   getWidth() - 1,
		   getHeight() - 1);

	//display the string inside the rectangle.
        g.drawString(strBuffer.toString(), 10, 20);
    }

   
    public void mouseEntered(MouseEvent event)
	{
    }
    public void mouseExited(MouseEvent event) 
	{
    }
    public void mousePressed(MouseEvent event) 
	{
    }
    public void mouseReleased(MouseEvent event)
	{
    }

    public void mouseClicked(MouseEvent event)
	{
	addItem("mouse clicked! ");
    }
}
</pre>
<p>Now, let us call this applet as follows:</p>
<pre class="output">&lt.php&gt;
&lt;title&gt;Event Handling&lt;/title&gt;
&lt;hr&gt;
&lt;applet code="ExampleEventHandling.class" 
width="300" height="300"&gt;
&lt;/applet&gt;
&lt;hr&gt;
&lt;.php&gt;
</pre>
<p>Initially, the applet will display "initializing the applet. Starting the applet." Then once you click inside the rectangle "mouse clicked" will be displayed as well.</p>
<h2>Displaying Images:</h2>
<p>An applet can display images of the format GIF, JPEG, BMP, and others. To display an image within the applet, you use the drawImage() method found in
the java.awt.Graphics class.</p>
<p>Following is the example showing all the steps to show images:</p>
<pre class="output">import java.applet.*;
import java.awt.*;
import java.net.*;
public class ImageDemo extends Applet
{
  private Image image;
  private AppletContext context;
  public void init()
  {
      context = this.getAppletContext();
      String imageURL = this.getParameter("image");
      if(imageURL == null)
      {
         imageURL = "java.jpg";
      }
      try
      {
         URL url = new URL(this.getDocumentBase(), imageURL);
         image = context.getImage(url);
      }catch(MalformedURLException e)
      {
         e.printStackTrace();
         // Display in browser status bar
         context.showStatus("Could not load image!");
      }
   }
   public void paint(Graphics g)
   {
      context.showStatus("Displaying image");
      g.drawImage(image, 0, 0, 200, 84, null);
      g.drawString("www.javalicense.com", 35, 100);
   }  
}
</pre>
<p>Now, let us call this applet as follows:</p>
<pre class="output">
&lt.php&gt;
&lt;title&gt;The ImageDemo applet&lt;/title&gt;
&lt;hr&gt;
&lt;applet code="ImageDemo.class" width="300" height="200"&gt;
&lt;param name="image" value="java.jpg"&gt;
&lt;/applet&gt;
&lt;hr&gt;
&lt;.php&gt;
</pre>
<h2>Playing Audio:</h2>
<p>An applet can play an audio file represented by the AudioClip interface in the java.applet package. The AudioClip interface has three methods, including:</p>
<ul>
<li><p><b>public void play():</b> Plays the audio clip one time, from the beginning.</p></li>
<li><p><b>public void loop():</b> Causes the audio clip to replay continually.</p></li>
<li><p><b>public void stop():</b> Stops playing the audio clip.</p></li>
</ul>
<p>To obtain an AudioClip object, you must invoke the getAudioClip() method of the Applet class. The getAudioClip() method returns immediately, whether or not the URL
resolves to an actual audio file. The audio file is not downloaded until an attempt is made to play the audio clip.</p>
<p>Following is the example showing all the steps to play an audio:</p>
<pre class="output">
import java.applet.*;
import java.awt.*;
import java.net.*;
public class AudioDemo extends Applet
{
   private AudioClip clip;
   private AppletContext context;
   public void init()
   {
      context = this.getAppletContext();
      String audioURL = this.getParameter("audio");
      if(audioURL == null)
      {
         audioURL = "default.au";
      }
      try
      {
         URL url = new URL(this.getDocumentBase(), audioURL);
         clip = context.getAudioClip(url);
      }catch(MalformedURLException e)
      {
         e.printStackTrace();
         context.showStatus("Could not load audio file!");
      }
   }
   public void start()
   {
      if(clip != null)
      {
         clip.loop();
      }
   }
   public void stop()
   {
      if(clip != null)
      {
         clip.stop();
      }
   }
}
</pre>
<p>Now, let us call this applet as follows:</p>
<pre class="output">&lt.php&gt;
&lt;title&gt;The ImageDemo applet&lt;/title&gt;
&lt;hr&gt;
&lt;applet code="ImageDemo.class" width="0" height="0"&gt;
&lt;param name="audio" value="test.wav"&gt;
&lt;/applet&gt;
&lt;hr&gt;
&lt;.php&gt;
</pre>
<p>You can use your test.wav at your PC to test the above example.</p>
<br>
<hr>




</td>
</td><tr>
<td style="text-align:left;"><a  href="multithreading.php"><img src="../pic/previous1.gif" width=90 height=30/></a></td>
<td style="text-align:right;"><a  href="home.php">Home &raquo;</a></td>
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