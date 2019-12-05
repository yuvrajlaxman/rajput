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
	<link rel='stylesheet' type='text/css' href='bunn.css' media='all' />
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



	
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";

	$conn=mysqli_connect("localhost","root","") or die ("not connect to mysql");
	$con=mysqli_select_db($conn,"stu") or die ("no00t connect to mysql");

	//$db=mysqli_connect("localhost","root","","stu");
	//$conn = new mysqli($servername, $username, $password, $dbname);
	
	$sel="select * from faculty ";
	$result = $conn->query($sel);
	
	
	if ($result->num_rows > 0)
	{
   		
		echo"<center><label><font size='+2' color='red' ><strong>FACULTY</strong></font></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		
		echo "<table border=1 width='100%' cellspacing='10'>
		<tr bgcolor='#999999'><th style='text-align:center;' width='7%' >NAME</th><th style='text-align:center;' width='7%'>EMAIL</th><th style='text-align:center;' width='7%'>USER NAME</th><th style='text-align:center;'  width='7%'>PASSWORD</th><th style='text-align:center;' width='7%'>DATE OF BIRTH</th><th style='text-align:center;' width='7%'>DEPARTMENT</th><th style='text-align:center;' width='7%'>GENDER</th><th style='text-align:center;' width='7%'>MOBILE</th></tr>";
		
   		 while($row = $result->fetch_assoc()) 
		 	{
			
			$name = $row['name']; 
		$email = $row['email'];
		$unamef = $row['unameff'];
		$pass = $row['pass']; 
		$date = $row['date']; 
		$dept = $row['dept'];
		$gender = $row['gender'];
		$mobile = $row['mobile'];			
			
		
		

		
		
echo"<tr><th style='text-align:center;' >".$name."</th><th style='text-align:center;'>".$email."</th><th style='text-align:center;'>".$unamef."</th><th style='text-align:center;'>".$pass."</th><th style='text-align:center;'>".$date."</th><th style='text-align:center;'>".$dept."</th><th style='text-align:center;'>".$gender."</th><th style='text-align:center;'>".$mobile."</th></tr><br>";	
		
	
			}
			echo"</table>";
	}
	else 	
	{
      echo "0 results";
	}
echo"<center><br><br><input type='submit' formaction='admin.php' value='BACK' style='width:150px; height:40px; text-align:top'; class='button2'></center></form></body></html>";

?>

