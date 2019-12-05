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
	/**
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";
	
	$db=mysql_connect("localhost","root","","stu");
	$conn = new mysqli($servername, $username, $password, $dbname); */

	$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
	mysqli_select_db($conn,"stu");
	
	$sel="select * from sem where enr='$enrol'";
	$result = $conn->query($sel);
	
	
	if ($result->num_rows > 0)
	{
   		
   		 while($row = $result->fetch_assoc()) 
		 	{
			
		$enr = $row['enr']; 
		$dep = $row['dep']; 
		$branch = $row['branch']; 
		
		
		$first = $row['1st'];
		$atd1 = $row['atd1'];
		$result1 = $row['result1'];
		$due1 = $row['due1'];
		$max1 = $row['max1'];
		$obt1 = $row['obt1'];
		$perc1 = $row['perc1'];
		
		
		$second = $row['2nd'];
		$atd2 = $row['atd2'];
		$result2 = $row['result2'];
		$due2 = $row['due2'];
		$max2 = $row['max2'];
		$obt2 = $row['obt2'];
		$perc2 = $row['perc2'];
		
				
		$third = $row['3rd'];
		$atd3 = $row['atd3'];
		$result3 = $row['result3'];
		$due3 = $row['due3'];
		$max3 = $row['max3'];
		$obt3 = $row['obt3'];
		$perc3 = $row['perc3'];
		
		$four = $row['4th'];
		$atd4 = $row['atd4'];
		$result4 = $row['result4'];
		$due4 = $row['due4'];
		$max4 = $row['max4'];
		$obt4 = $row['obt4'];
		$perc4 = $row['perc4'];
		
		$five = $row['5th'];
		$atd5 = $row['atd5'];
		$result5 = $row['result5'];
		$due5 = $row['due5'];
		$max5 = $row['max5'];
		$obt5 = $row['obt5'];
		$perc5 = $row['perc5'];
		
		$six = $row['6th'];
		$atd6 = $row['atd6'];
		$result6 = $row['result6'];
		$due6 = $row['due6'];
		$max6 = $row['max6'];
		$obt6 = $row['obt6'];
		$perc6 = $row['perc6'];
			
			
						
					
			
		echo"<center><label><font size='+2' color='red' ><strong>ENROLL-NO</strong></font></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo"<label><font size='+2' >$enr</font></label> <BR><BR> ";
		
		echo"<TH><label><font size='+2' color='red'><strong>DEPARTMENT</strong></font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo"<label><font size='+2' >$dep</font></label><BR><BR>"; 
		
		echo"<TH><label><font size='+2' color='red'><strong>BRANCH</strong></font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo"<label><font size='+2' >$branch</font></label></center><BR><BR> "; 
		
			
		echo "<table border=1 width='100%' cellspacing='10'>
		<tr bgcolor='#999999'><th style='text-align:center;' width='7%' >QUALIFICATION</th><th style='text-align:center;' width='7%'>TOTAL ATTENDANSE%</th><th style='text-align:center;' width='7%'>RESULT</th><th style='text-align:center;'  width='7%'>DUE SUBJECT</th><th style='text-align:center;' width='7%'>MAX MARKS</th><th style='text-align:center;' width='7%'>OBT MARK</th><th style='text-align:center;' width='7%'>PERCENTAGE</th></tr>";
		
		
		echo"<tr><th style='text-align:center;' >$first</th><th style='text-align:center;'>$atd1</th><th style='text-align:center;'>$result1</th><th style='text-align:center;'>$due1</th><th style='text-align:center;'>$max1</th><th style='text-align:center;'>$obt1</th><th style='text-align:center;'>$perc1</th></tr><br>";	
		
		
		echo"<tr><th style='text-align:center;' >$second</th><th style='text-align:center;'>$atd2</th><th style='text-align:center;'>$result2</th><th style='text-align:center;'>$due2</th><th style='text-align:center;'>$max2</th><th style='text-align:center;'>$obt2</th><th style='text-align:center;'>$perc2</th></tr><br>";	
		
echo"<tr><th style='text-align:center;' >$third</th><th style='text-align:center;'>$atd3</th><th style='text-align:center;'>$result3</th><th style='text-align:center;'>$due3</th><th style='text-align:center;'>$max3</th><th style='text-align:center;'>$obt3</th><th style='text-align:center;'>$perc3</th></tr><br>";		


			echo"<tr><th style='text-align:center;' >$four</th><th style='text-align:center;'>$atd4</th><th style='text-align:center;'>$result4</th><th style='text-align:center;'>$due4</th><th style='text-align:center;'>$max4</th><th style='text-align:center;'>$obt4</th><th style='text-align:center;'>$perc4</th></tr><br>";	
			
			echo"<tr><th style='text-align:center;' >$five</th><th style='text-align:center;'>$atd5</th><th style='text-align:center;'>$result5</th><th style='text-align:center;'>$due5</th><th style='text-align:center;'>$max5</th><th style='text-align:center;'>$obt5</th><th style='text-align:center;'>$perc5</th></tr><br>";	
			
			echo"<tr><th style='text-align:center;' >$six</th><th style='text-align:center;'>$atd6</th><th style='text-align:center;'>$result6</th><th style='text-align:center;'>$due6</th><th style='text-align:center;'>$max6</th><th style='text-align:center;'>$obt6</th><th style='text-align:center;'>$perc6</th></tr></table><br>";	
			
			
		
	
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

