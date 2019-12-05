<?php

$conn=mysql_connect("localhost","root","")or die("not connect to mysql");
mysql_select_db("stu",$conn);


if($_SERVER["REQUEST_METHOD"] == "POST")
{
$uname=$_POST['uname'];
$email=$_POST['email'];	
	$sel=mysql_query("select * from faculty where unamef='$uname'");
	$arr=mysql_fetch_array($sel);
	
	   if($uname!=NULL && $email!=NULL)
		{
	   			if($uname==$arr['unamef']&& $email==$arr['email'])
				{
					

					$img = $arr['pass'];
					echo " <script> alert('PASSWORD IS :   ".$img."')</script>";	
					
					//header("location:faculty.php");
					
				}
	
				else
				{	
					//header("location:stu.php");
					echo " <script> alert('USER NAME OR EMAIL ARE INVALID')</script>";	
					//header( "refresh:0.001; url=stu.php" );
 
			 		
				}
		
		
		}

}




?>



<html>
<head>
<title>FORGET PASSWORD</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
	<link rel="stylesheet" type="text/css" href="bun.css" media="all" />
</head>
<body>
<div class="container">
			
            <div class="freshdesignweb-top">
                <a href="stu.php"><font size="+2" ><strong>Home</strong></font></a>
                <span class="right">
                    <a href="logout.php">
                        <strong><font size="+2" ><strong>Log-In</strong></font></strong>
                    </a>
            </span>
            </div>			
	<BR><BR><BR><BR><BR><BR><BR><BR><h1 class="h" align="CENTER"><font color="BLACK" ALIGN="CENTER" size="+4"> FORGET PASSWORD </font> </h1><BR><BR><BR><BR>
			<form id="contactform" method="POST" > 
<center>
  <input type="text" name="uname" id="enrol" placeholder="enter user name"  align="middle" style="background-color:#CCCCCC" reuired="" ><br><BR><BR>
	<input type="text" name="email" id="enrol" placeholder="enter email id"  align="middle" style="background-color:#CCCCCC" reuired="" ><br><br><br><BR>
  <input type="submit" alt="SUBMIT" name="submit" value="SUBMIT"  style="width:150px; height:40px; text-align:top"; class="button2"> &nbsp;&nbsp;&nbsp;
  
   
</center>
<br><br>

		 </form>
 
</body>
</html>