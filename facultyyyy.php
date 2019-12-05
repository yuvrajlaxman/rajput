<?php
session_start();

if($_SESSION["unamef"]==true)

{

}
else
{
header('location:stu.php');
}
$name= $_SESSION["unamef"];

?>

<html>
<head><title>STUDENT MANAGEMENT SYSTEM</title>
<link href="main.css" rel="stylesheet" type="text/css" />
</head> 
<style>

input[type=text]{
    width: 500px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 600px;
}



<!--

/* Full-width input fields */

/* Set a style for all buttons......................................... */
.bu{
    background-color:#666666;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* ------------------------------------------------------------------------------------------------------------------------------------------------ */
.f1{  background-image:url(13.jpg);  background-size:100% 100%; background-repeat:no-repeat; border:solid; 	}

.f2{ background-image:url(5.jpg); background-size:10% 100%;background-position:top right; background-repeat:no-repeat; padding-right:20px; border:solid;}

.f3{ background-image:url(5.jpg); background-size:10% 100%;background-position:top left; background-repeat:no-repeat; padding-right:20px; border:solid;}

 .h{   position: relative; text-align:left top; start;}
 .di{background-color:#CCCCCC}
.button {padding: 15px 25px; font-size: 24px;text-align: center; color:#000000; background-color:#555555; border: none; border-radius: 15px;box-shadow: 0 9px #999; height:50px;}

.button:active { background-color: #3e8e4; box-shadow: 0 5px #666;transform: translateY(4px);}
.button1 {padding: 15px 25px; font-size: 24px;text-align: center; color:#990000; background-color:#000000; border: none; border-radius: 15px;box-shadow: 0 5px #055; }
.button1:active{ background-color:#669933; box-shadow: 0 5px #666;transform: translateY(4px);}

.button2 {padding: 15px 25px; font-size: 24px;text-align: center; color:#330099; background-color:#CCCC99; border: none; border-radius: 15px;box-shadow: 0 5px #225; }
.button2:active{ background-color:#669933; box-shadow: 0 5px #666;transform: translateY(4px);}
-->

</style>
<body>


<table border="5"  height="100%" width="100%">

<td class="f2" width="100%" height="20%" bgcolor="#3"><h1 align="left"><font style="color:red" ><?php  echo("$name"); ?> </font></h1><h1 class="h" align="CENTER"><font color="white" ALIGN="CENTER">STUDENT MANAGEMENT SYSTEM
</font>
</h1>

<br>



			<a href="faculty.php"><button class="button1 button4" style="width:auto; margin-left:100px;">Home</button></a>
				
			<a href="about.php"><button class="button1 button4" style="width:auto; margin-left:80px;">About</button></a>
			
			<a href="contact.php"><button class="button1 button4" style="width:auto; margin-left:80px;">Contact</button></a>
		
		<a href="Notification.php">	<button class="button1 button4" style="width:auto; margin-left:80px;">Notification</button></a>
	
		<a href="logout.php">	<button class="button1 button4" style="width:auto; margin-left:80px;">Log-out</button></a>

</td>

<tr>
<td class="f1" width="100%" height="418" background-size:100% 100%>



<div>


<form >
<center>
  <input type="text" name="search" placeholder="Search.." style="ser" align="middle">
 <br><br>

  <input type="submit" name="serch" value="Serch" onClick="location.href = 'ONPROCESS.PHP';" style="width:150px; height:40px; text-align:top"; class="button2">
</center>
</form>
<br>
<button class="button" onClick="location.href = 'ONPROCESS.PHP';" style="width:auto; margin-left:250px;">MCA</button>

<button class="button" onClick="location.href = 'ONPROCESS.PHP';" style="width:auto; margin-left:620px;">B.COM</button><BR><BR><BR>


<button class="button" onClick="location.href = 'ONPROCESS.PHP';" style="width:auto; margin-left:250px;">MBA</button>

<button class="button" onClick="location.href = 'ONPROCESS.PHP';" style="width:auto; margin-left:620px;">B.TECH</button><br><BR><BR>


<button class="button" onClick="location.href = 'ONPROCESS.PHP';"  style="width:auto; margin-left:250px;">MSC</button>

<button class="button" onClick="location.href = 'ONPROCESS.PHP';" style="width:auto; margin-left:620px;">M.TECH</button>

</div>


</td>
</tr>
</table>

</body>
</html>
