<?php
session_start();

if($_SESSION["uname"]==true)
{

}
else
{
header('location:stu.php');
}



if($_SERVER["REQUEST_METHOD"] == "POST")
{

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
	<BR><BR><h1 class='h' align='CENTER'><font color='BLACK' ALIGN='CENTER' size='+4'>UPDATE DATA </font> </h1><BR><BR>
			<form id='contactform' method='POST' >"; 



	$enrol=$_POST['enrol'];	
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";
	
	$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
	mysqli_select_db($conn,"stu");
	/**
	$db=mysqli_connect("localhost","root","","stu");
	$conn = new mysqli($servername, $username, $password, $dbname); */
	
	$sel="select * from student where enrollno='$enrol'";
	$result = $conn->query($sel);
	
	
	if ($result->num_rows > 0)
	{
   		
   		 while($row = $result->fetch_assoc()) 
		 	{
			$name = $row['name'];	
			$fname= $row['fname'];
			$mname= $row['mname'];
			$email= $row['email'];
			$enrollno= $row['enrollno'];
			$date= $row['date'];
			$gender= $row['gender'];
			$mobile= $row['mobile'];
			$address= $row['address'];
			$addre= $row['addre'];
			$city= $row['city'];
			$pincode= $row['pincode'];
			$state= $row['state'];
			$country= $row['country'];
			$department= $row['department'];
			
					
			
			echo "<table border=1 width='100%' cellspacing='10'>
		<tr bgcolor='#999999'><th style='text-align:center;' width='7%' >NAME</th><th style='text-align:center;' width='7%'>FATHER NAME</th><th style='text-align:center;' width='7%'>MOTHER NAME</th><th style='text-align:center;'  width='7%'>EMAIL ID</th><th style='text-align:center;' width='7%'>ENROLL NO</th><th style='text-align:center;' width='7%'>Date OF Birth</th></tr>";
		
		
		echo"<tr><th style='text-align:center;' >$name</th><th style='text-align:center;'>$fname</th><th style='text-align:center;'>$mname</th><th style='text-align:center;'>$email</th><th style='text-align:center;'>$enrollno</th><th style='text-align:center;'>$date</th></tr></table><br><br><br><br>";
		
		
		echo "<table border=1 width='100%' cellspacing='10'><tr bgcolor='#999999'><th style='text-align:center;' width='7%'>GENDER</th><th style='text-align:center;' width='7%'>MOBILE NO</th><th style='text-align:center;' width='7%'>Address</th><th style='text-align:center;' width='7%'>CITY</th><th style='text-align:center;' width='7%'>PIN CODE</th><th  style='text-align:center;' width='7%'>STATE</th><th style='text-align:center;' width='7%'>COUNTRY</th><th style='text-align:center;' width='7%'>DEPARTMENT</th>
		</tr>";
		
		echo"<tr><th style='text-align:center;'>$gender</th><th style='text-align:center;'>$mobile</th><th style='text-align:center;'>$address<br>$addre</th><th style='text-align:center;'>$city</th><th style='text-align:center;'>$pincode</th><th style='text-align:center;'>$state</th><th style='text-align:center;'>$country</th><th style='text-align:center;'>$department</th>
		</tr></table>";
		
	
       			 //echo "name: " . $row["name"]. "Fathername: " . $row["fname"]. "Mother name " . $row["mname"]. "Email Id: " . $row["email"]. "Enroll No: " . $row["enrollno"]. "D.O.B " . $row["date"]. "Gender: " . $row["gender"]. "Mobile No : " . $row["mobile"]. "Address : " . $row["address"]. "  " . $row["addre"]. "City: " . $row["city"]. "PinCode :  " . $row["pincode"]. "State: " . $row["state"]. "Country: " . $row["country"]. "Department " . $row["department"]. "<br>";
	
		
			}
	}
	else 	
	{
      echo "0 results";
	}
echo"<center><br><br><input type='submit' formaction='serch.php' value='BACK' style='width:150px; height:40px; text-align:top'; class='button2'></center></form></body></html>";
}
?>

