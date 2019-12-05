<?php
session_start();

if($_SESSION["uname"]==true)
{

}
else
{
header('location:stu.php');
}




echo"	<html>
<head>
<title>ON PROCESS</title>
    <link rel='stylesheet' type='text/css' href='style.css' media='all' />
    <link rel='stylesheet' type='text/css' href='demo.css' media='all' />
	<link rel='stylesheet' type='text/css' href='bun.css' media='all' />
</head>
<body>
<div class='container'>
			
            <div class='freshdesignweb-top'>
                <a href='admin.php'><font size='+2' ><strong>Home</strong></font></a>
                <span class='right'>
                    <a href='logout.php'>
                        <font size='+2' ><strong>Log-Out</strong></font>
                    </a>
            </span>
            </div>			
	<BR><BR><h1 class='h' align='CENTER'><font color='BLACK' ALIGN='CENTER' size='+4'>SEARCH INFORMATION</font> </h1><BR><BR>
			<form id='contactform' method='POST' >"; 



	
	/**
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";
	
	$db=mysql_connect("localhost","root","","stu");
	$conn = new mysqli($servername, $username, $password, $dbname);
	*/
	$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
	mysqli_select_db($conn,"stu");
	
	$sel="select * from student ";
	$result = $conn->query($sel);
	
	
	if ($result->num_rows > 0)
	{
   		
		echo"<center><label><font size='+2' color='red' ><strong>STUDENTS</strong></font></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		
		echo "<table border=1 width='100%' cellspacing='10'>
		<tr bgcolor='#999999'><th style='text-align:center;' width='7%' >NAME</th><th style='text-align:center;' width='7%'>FATHER NAME</th><th style='text-align:center;' width='7%'>MOTHER NAME</th><th style='text-align:center;'  width='7%'>EMAIL ID</th><th style='text-align:center;' width='7%'>ENROLL NO</th><th style='text-align:center;' width='7%'>DATE OF BIRTH</th><th style='text-align:center;' width='7%'>MOBILE NO</th><th style='text-align:center;' width='7%'>CITY</th><th style='text-align:center;' width='7%'>DEPARTMENT</th></tr>";
		
   		 while($row = $result->fetch_assoc()) 
		 	{
			
			$name = $row['name'];
			$fname = $row['fname'];
			$mname = $row['mname']; 
			$email = $row['email'];
			$enrollno = $row['enrollno'];
			$date = $row['date']; 
			$mobile = $row['mobile']; 
			$city = $row['city'];
			$department = $row['department'];			
			
		
		

		
		
echo"<tr><th style='text-align:center;' >".$name."</th><th style='text-align:center;'>".$fname."</th><th style='text-align:center;'>".$mname."</th><th style='text-align:center;'>".$email."</th><th style='text-align:center;'>".$enrollno."</th><th style='text-align:center;'>".$date."</th><th style='text-align:center;'>".$mobile."</th><th style='text-align:center;'>".$city."</th><th style='text-align:center;'>".$department."</th></tr><br>";	
		
	
			}
			echo"</table>";
	}
	else 	
	{
      echo "0 results";
	}
echo"<center><br><br><input type='submit' formaction='admin.php' value='BACK' style='width:150px; height:40px; text-align:top'; class='button2'></center></form></body></html>";

?>

