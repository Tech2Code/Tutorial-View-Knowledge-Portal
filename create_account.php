
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create USER ACCOUNT</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/mystyle.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/tutorial.gif" type="image/x-icon" />

<!-- Skitter Styles -->
	<link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />

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

		function valid()
		{
			a=document.frm1.fname.value;
			b=a.length;
			e=0;
			if(b==0)
			{
				
				document.getElementById('t1').innerHTML='<br/><font color=red>"Not empty "</font>';
				e=1;
			}
			else
			{
				for(i=0;i<b;i++)
				{
					c=a.charAt(i);
					if(c>='a' && c<='z' || c>='A' && c<='Z');
					
					else
					{
						document.getElementById('t1').innerHTML='<br/><font color=red>"Invalid name" </font>';
						e=1;
						break;
					}
				
				}
			}
			if(e==0)
			{
			document.getElementById('t1').innerHTML='';f++;
			}
		}
		function nam2()
		{
			a=document.frm1.lname.value;
			b=a.length;
			e=0;
			if(b==0)
			{
				
				document.getElementById('t2').innerHTML='<br/><font color=red>"Not empty "</font>';
				e=1;
			}
			else
			{
				for(i=0;i<b;i++)
				{
					c=a.charAt(i);
					if(c>='a' && c<='z' || c>='A' && c<='Z')
					{
					}
					else
					{
						document.getElementById('t2').innerHTML='<br/><font color=red>"Invalid name" </font>';
						e=1;
						break;
					}
				
				}
			}
			if(e==0)
			{
			document.getElementById('t2').innerHTML='';f++;
			}
		}
		function nam3()
		{
			a=document.frm1.elements.uid.value;
			b=a.length;
			e=0;
			if(b==0)
			{
				
				document.getElementById('t3').innerHTML='<br/><font color=red>"Not empty "</font>';
				e=1;
			}
			else
			{
				for(i=0;i<b;i++)
				{
					c=a.charAt(i);
					if(c>='a' && c<='z' || c>='A' && c<='Z'||c=='_'||c=='.'||c>='0'&&c<='9')
					{
					}
					else
					{
						document.getElementById('t3').innerHTML='<br/><font color=red>"Only A-Z,a-z,0-9 or (_,.)" </font>';
						e=1;
						break;
					}
				
				}
			}
			if(e==0)
			{
			document.getElementById('t3').innerHTML='';f++;
			}
		}
		function nam6()
		{
			a=document.frm1.elements.mob.value;
			b=a.length;
			e=0;
			if(b==0)
			{
				
				document.getElementById('t8').innerHTML='<br/><font color=red>"Not empty "</font>';
				e=1;
			}
			else if(b!=10)
			{document.getElementById('t8').innerHTML='<br/><font color=red>"Must be 10 Digits"</font>';
				e=1;}
			else
			{
				for(i=0;i<b;i++)
				{
					c=a.charAt(i);
					if(c>='0'&&c<='9')
					{
					}
					else
					{
						document.getElementById('t8').innerHTML='<br/><font color=red>"Only 0-9 Digits" </font>';
						e=1;
						break;
					}
				
				}
			}
			if(e==0)
			{
			document.getElementById('t8').innerHTML='';f++;
			}
		}
		function nam7()
		{
			a=document.frm1.elements.email.value;
			b=a.length;
			e=0;
			if(b==0)
			{
				
				document.getElementById('t9').innerHTML='<br/><font color=red>"Not empty "</font>';
				e=1;
			}
			if(e==0)
			{
			document.getElementById('t9').innerHTML='';f++;
			}
		}
		function nam8()
		{
			a=document.frm1.elements.add.value;
			b=a.length;
			e=0;
			if(b==0)
			{
				
				document.getElementById('t9').innerHTML='<br/><font color=red>"Not empty "</font>';
				e=1;
			}
			if(e==0)
			{
			document.getElementById('t9').innerHTML='';f++;
			}
		}
		function valid()
{
if(document.frm1.fname.value==""||document.frm1.lname.value==""||document.frm1.pwd1.value==""||document.pwd2.email.value==""||document.frm1.uid.value==""||document.frm1.mob.value==""||document.frm1.gender.value=='-1')
{ 
alert("Empty field is not allowed Please Filled all Field ")
return false
}

		  document.frm1.submit();
       }
	   
</script>
<style></style>
</head>

<body>
<div class="main">
  <div class="top-main">
<div class="wrapper">
    <div class="top-inner-main" >
      <div class="top-green-left">All Service to Programming Language</div>
      <div class="top-green-right">Any Problem to Contact <span class="white">Keshav Kumar</span></div>
    </div>
    <div class="logo-main">
      <div class="logo"><a href="home.php"><img src="images/logo.png" alt="logo" class="border" /></a></div>
      <div class="master-card">We Accept All Major Credit Cards &nbsp;&nbsp;<img src="images/visa.png" alt="visa" width="32" height="20" align="absmiddle" />&nbsp;&nbsp; <img src="images/master.png" alt="visa" width="32" height="20" align="absmiddle" /></div>
      <div class="logo-side"><img src="images/cour1.jpg" alt="image" width=200 height=65/></div>
    </div>
    
</div>
  </div>
<div class="wrapper">

<script>
		$a=$_GET[x];
		
		
		if($a==3)
		{
			echo"alert('User Already Exists');";
		}
		</script>
<div class="text-main">

  <div class="content-left">
  <div class="inner-left-main"><a href=index.php><img src=images/login.jpg width=100 height=70/></a>
  <form name=frm1 action=create.php method=POST onsubmit="return valid()">
  <center><span class="blue-hd">Create An Account</span><br />
			<table cellpadding='6' cellspacing='0'frame=box>
			<tr><td><b>First Name</b></td><td><b>Last Name</b></td></tr>
			<tr><td><input type=text name=fname size="15" onblur='nam1()'></td><td><input type=text name=lname size="15" onblur='nam2()'></td></tr>
			<tr><td><span id=t1></span></td><td><span id=t2></span></td></tr>
			<tr><td colspan="2"><b>Choose your username</b></td></tr>
			<tr><td colspan="2"><input type=text name=uid size="30" maxlength="30" onblur='nam3()'></td></tr>
			<tr><td colspan="2"><span id=t3></span></td></tr>
			<tr><td colspan="2"><b>Create a password</b></td></tr>
			<tr><td colspan="2"><input type=password name=pwd1 size="20" maxlength="15" onblur='nam4()'></td></tr>
			<tr><td colspan="2"><span id=t4></span></td></tr>
			<tr><td colspan="2"><b>Confirm our password</b></td></tr>
			<tr><td colspan="2"><input type=password name=pwd2 size="20" maxlength="15" onblur='nam5()'></td></tr>
			<tr><td colspan="2"><span id=t5></span></td></tr>
			<tr><td colspan="2"><b>Birthday</b></td></tr>
			<tr><td colspan="2"><input type="date" name="dob" /></td></tr>
			<tr><td colspan="2"><span id=t6></span></td></tr>
			<tr><td colspan="2"><b>Gender</b></td></tr>
			<tr><td colspan="2"><select name=gender>
								<option value='0'>I am .....</option>
								<option value='male'>Male</option>
								<option value='female'>Female</option>
								<option value='other'>Others</option>
								</select></td></tr>
			<tr><td colspan="2"><span id=t7></span></td></tr>
			<tr><td colspan="2"><b>Mobile phone</b></td></tr>
			<tr><td colspan="2"><input type=text name=mob value="" size="20" maxlength="10" onblur='nam6()' ></td></tr>
			<tr><td colspan="2"><span id=t8></span></td></tr>
			<tr><td colspan="2"><b>Your current email address</b></td></tr> 
			<tr><td colspan="2"><input type=text name=email size="30" maxlength="30" onblur='nam7()'></td></tr>
			<tr><td colspan="2"><span id=t9></span></td></tr>
			<tr><td colspan="2"><b>Address</b></td></tr>
			<tr><td colspan="2"><textarea rows="5" cols="20" name=add onblur='nam8()'></textarea></td></tr>
			<tr><td colspan="2"><span id=t10></span></td></tr>
			</table>
			<table width=400>	
				<tr>
					<td align="center">
						<input type="submit" value="Click here for register"/>
					</td>
				</tr>
			</table></center>
		</form>
		</div>
  <div class="contct-box-b"><span class="blue-hd"><br /><br/><br />One account is all you need</span><br /><br/>
	Tutorial View (knowledge Portal) provides a single point of access to the tacit and explicit knowledge that support members of this tutorial in all aspects of their learning, teaching, working, research and other activities.</br></br>
      <br/><span class="blue-hd">A single username and password gets you into everything .</span><br /><br />
	 Users can decide about Computer languages they want to learning, teaching, working and researching for this type knowledge.

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
  </div>
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
    <div class="w3"><strong>Designed by: Keshav Kumar</div>
  </div>
</div>
</div>
</div>
</body>
</html>
