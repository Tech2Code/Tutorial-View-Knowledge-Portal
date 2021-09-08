<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['userid'])) 
{
header('Location:home.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log-in Page</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/mystyle.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/tutorial.gif" type="image/x-icon" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Skitter Styles -->
	<link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
	<link href="css/thickbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/thickbox.js"></script>
	<!-- Skitter JS -->


	<script type="text/javascript" language="javascript" src="js/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>
	
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


<script type="text/javascript">
	var innert = '';
	var thnkx = document.URL;
	var thnkx1 = thnkx.split("#"); 
	if(thnkx1.length == 2)
	{
		if(thnkx1[1]=='thanks')
		{
			innert = 'Thanks for submitting your query. We will get back to you soon!';
		}
	}
	
	function trim(str)
	{
		return str.replace(/^\s+|\s+$/g, "");
	}
	function check_value()
	{
		if(trim(document.contacts.author.value)=='')
		{
			alert("Please Enter Your Name");
			document.contacts.author.focus();
			return false;
		}
		if(trim(document.contacts.mobile.value) == '')
		{
			alert("Kindly Enter Your Mobile Number");
			document.contacts.mobile.focus();
			return (false);
		}
		if(document.contacts.email.value == '')
		{
			alert("Kindly Enter Your Email ID");
			document.contacts.email.focus();
			return (false);
		}
		if (document.contacts.email.value && !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(document.contacts.email.value)))
		{
			alert("Invalid Email ID. Kindly enter the correct ID.");
			document.contacts.email.focus();
			return (false);
		}
        if(trim(document.contacts.message.value) == '')
		{
			alert("Kindly Enter Your Message");
			document.contacts.message.focus();
			return (false);
		}
		document.contacts.submit();
	}
</script>
<script>
   function fun1()
      {
       var p1=document.getElementById("userid").value;
       var p2=document.getElementById("pwd").value;
       if(p1.length==0 || p2.length==0)
          {
           alert("User name or Password is empty");
           return false;
          }
		  document.login.submit();
       }
	   
</script>
<style>

</style>
</head>

<body>
<div class="main">
  <div class="top-main">
<div class="wrapper">
    <div class="top-inner-main" >
      <div class="top-green-left">All Service to Programming Language</div>
      <div class="top-green-right">Any Problem to Contact <span class="white"> Keshav kumar </span></div>
    </div>
    <div class="logo-main">
      <div class="logo"><a href="home.php"><img src="images/logo.png" alt="logo" class="border" /></a></div>
      <div class="master-card">We Accept All Major Credit Cards &nbsp;&nbsp;<img src="images/visa.png" alt="visa" width="32" height="20" align="absmiddle" />&nbsp;&nbsp; <img src="images/master.png" alt="visa" width="32" height="20" align="absmiddle" /></div>
      <div class="logo-side"><img src="images/cour1.jpg" alt="image" width=200 height=65/></div>
    </div>
    
</div>
  </div>
<div class="wrapper">
<div class="main-banner">

	<script>
		$a=$_GET[x];
		if($a==2)
		{
			echo"alert('User ID and Password Invalid');";
		}
		if($a==1)
		{
			echo"alert('User Created Succesfully');";
		}
		</script>
		
<div class="text-main">

  <div class="content-left">
  <div class="contct-box"><span class="blue-hd">TUTORIAL VIEW</span><br /><br/>
	Tutorial View (knowledge Portal) provides a single point of access to the tacit and explicit knowledge that support members of this tutorial in all aspects of their learning, teaching, working, research and other activities.
      <br/>
	 Users can decide about Computer languages they want to learning, teaching, working and researching for this type knowledge.

</div>
  
    <div class="contct-box-b"><div class="quote-main">
        <div class="quote-hd">Welcome to LOG-IN </div>
        <div class="form-blue"><span class="form-small-hd">Please enter your details below and we will be in touch.</span><br />
<div class="form-query">
 <form action="login.php" method="post"  name="login" id="contacts" onSubmit="return fun1()">
    <div class="form-inner">
          <label for="author"></label>
          <input type=" text"placeholder="Userid" name="userid" id="author" /> <br /><br />
    </div>
<div class="form-inner">
          <label for="mobile"></label>
          <input type="password" placeholder="Password" name="pwd" id="mobile" /><br /><br /><br />
    </div>

<div class="login-btn">
  <input type="submit" name="button" id="button" value="Login" /><br/><br />
  
</div>

   
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="create_account.php" ><img src=pic/create.png /></a><br /><br />

  </form>
</div>
        </div>
      </div>



    </div>
	    
 

</div>
</div>

<div class="wrapper">
<div class="text-main">

  <div class="content-left">
    <div class="inner-left-main"><span class="blue-hd">Our Courses:</span><br />
      <div class="menber-directory-div">
        <div class="dir"><img src="images/c.png" alt="images" width=200 height=144/></div>
        <div class="dir-a"><img src="images/cpp.png" alt="images" width=200 height=144/></div>
		<div class="dir-a"><img src="images/java.png" alt="images" width=200 height=144/></div>
      </div>
      
      <div class="menber-directory-div">
        <div class="dir"><img src="images/sql.png" alt="images" width=200 height=144 /></div>
      </div>
<br />
<br />
<br />
      <br />
  

    
</div>
</div>


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
</div>
</body>
</html>
