<?php
session_start();

if($_SESSION["uname"]==true)
{

}
else
{
header('location:stu.php');
}
?>
<html>
<head>
<title>UPDATE INFORMATION</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
	<link rel="stylesheet" type="text/css" href="bun.css" media="all" />
</head>
<body>
<div class="container">
			
            <div class="freshdesignweb-top">
                <a href="admin.php"><font size="+2" ><strong>Home</strong></font></a>
                <span class="right">
                    <a href="logout.php">
                        <strong><font size="+2" ><strong>Log-Out</strong></font></strong>
                    </a>
            </span>
            </div>			
	<BR><BR><BR><BR><BR><BR><BR><BR><h1 class="h" align="CENTER"><font color="BLACK" ALIGN="CENTER" size="+4">UPDATE INFORMATION </font> </h1><BR><BR><BR><BR><BR><BR><BR><BR>
			<form id="contactform" method="POST" > 
<center>
  <input type="text" name="unm" id="unm" placeholder="Update..By Enroll No"  align="middle" style="background-color:#CCCCCC" required=""><br><br><br><BR><BR><BR>

  <input type="submit" alt="Student" name="Student" value="Student"  style="width:150px; height:40px; text-align:top"; class="button2" formaction="updatestu.php"> &nbsp;&nbsp;&nbsp;
  
   <input type="submit" name="serch" value="Education"  style="width:150px; height:40px; text-align:top"; class="button2" formaction="updateedu.php">&nbsp;&nbsp;&nbsp;
   
    <input type="submit" name="serch" value="Semester" onMouseOver="on()" style="width:150px; height:40px; text-align:top"; class="button2" formaction="updatesem.php">
</center>
<br><br>

		 </form>
 
</body>
</html>