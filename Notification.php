<?php
session_start();

if($_SESSION["unamef"]==true)
{

}
else
{
header('location:stu.php');
}
?>

<html>
<head><title>STUDENT MANAGEMENT SYSTEM</title>
<link href="main.css" rel="stylesheet" type="text/css" />
</head>
<style>
<!--


.f1{ background-image:url(13.jpg); background-size:100% 100%; background-repeat:no-repeat; border:solid;	}

.f2{ background-image:url(5.jpg); background-size:10% 100%;background-position:top right; background-repeat:no-repeat; padding-right:20px; border:solid;}
.f22{ background-image:url(5.jpg); background-size:100% 100%; background-repeat:no-repeat; border:#00FF33;}
.f3{ background-image:url(5.jpg); background-size:10% 100%;background-position:top left; background-repeat:no-repeat; padding-right:20px; border:solid;}

 .h{   position: relative; text-align:left top; start;}
 .di{background-color:#CCCCCC}

.button1 {padding: 15px 25px; font-size: 24px;text-align: center; color:#990000; background-color:#000000; border: none; border-radius: 15px;box-shadow: 0 5px #055; }
.button1:active{ background-color:#669933; box-shadow: 0 5px #666;transform: translateY(4px);}
-->

</style>
<body>

<table border="5"  height="100%" width="100%" >

<td class="f2" width="100%" height="20%" bgcolor="#000000">

<div class="f22 circle" style=" border:none; width:10%; height:100%; overflow: hidden; display: block; clear: both; float:left;" bgcolor="#3"></div>
	
	  <h1 align="left"><font style="color:white ; margin-left:285px;">  <?php  echo("SIR PADAMPAT SINGHANIA UNIVERSITY"); ?> 	 </font></h1>	

<h1 class="h" align="CENTER"><font color="white" ALIGN="CENTER">STUDENT MANAGEMENT SYSTEM
</font>
</h1>

<br>

			<a href="faculty.php"><button class="button1 button4" style="width:auto; margin-left:250px;">Home</button></a>
				
			<a href="about.php"><button class="button1 button4" style="width:auto; margin-left:80px;">About</button></a>
			
			<a href="contact.php"><button class="button1 button4" style="width:auto; margin-left:80px;">Contact</button></a>
			
		<a href="Notification.php">	<button class="button1 button4" style="width:auto; margin-left:80px;">Notification</button></a>


</td>

<tr>
<td width="100%" height="418" background-size:100% 100% bgcolor="#333333">
<h1 align="center">

<font color="blue" align="center"><br><br>
<a href="">https://www.google.co</a><br><br>
<a href="">www.spsu.ac.in</a><br><br>
<a href="">www.jnvu.edu.in</a><br><br>
<a href="">www.mlsu.edu.in</a><br><br>
<a href="">mail.google.com</a><br><br>
</h1>
</font>
</td>
</tr>
</table>

</body>
</html>
