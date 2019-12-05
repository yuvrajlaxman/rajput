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
<title>DELETE FACULTY</title>
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
	<BR><BR><BR><BR><BR><BR><BR><BR><h1 class="h" align="CENTER"><font color="BLACK" ALIGN="CENTER" size="+4">REMOVE FACULTY MEMBERS </font> </h1><BR><BR><BR><BR><BR><BR><BR><BR>
			<form id="contactform" method="POST" action="deleteff.php" > 
<center>
  <input type="text" name="unm" id="unm" placeholder="Delete..By User Name"  align="middle" style="background-color:#CCCCCC" required="" ><br><br><br><BR><BR><BR>

  <input type="submit" alt="DELETE" name="DELETE" value="DELETE" style="width:150px; height:40px; text-align:top"; class="button2" />
  
  
 
</center>
<br><br>

		 </form>
 
</body>
</html>