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




echo"	<html>
<head>
<title>M.TECH</title>
    <link rel='stylesheet' type='text/css' href='style.css' media='all' />
    <link rel='stylesheet' type='text/css' href='demo.css' media='all' />
	<link rel='stylesheet' type='text/css' href='bun.css' media='all' />
</head>
<body>
<div class='container'>
			
            <div class='freshdesignweb-top'>
                <a href='faculty.php'><font size='+2' ><strong>Home</strong></font></a>
                <span class='right'>
                    <a href='logout.php'>
                        <font size='+2' ><strong>Log-Out</strong></font>
                    </a>
            </span>
            </div>			
	<BR><BR><h1 class='h' align='CENTER'><font color='BLACK' ALIGN='CENTER' size='+4'>M.TECH STUDENTS INFORMATION</font> </h1><BR><BR>
			<form id='contactform' method='POST' >"; 



	/**
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";
	
	$db=mysql_connect("localhost","root","","stu");
	$conn = new mysqli($servername, $username, $password, $dbname);  */

	$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
	mysqli_select_db($conn,"stu");
	
	$sel="select * from student WHERE department='M.TECH' ";
	$result = $conn->query($sel);
	
	echo"<center><label><font size='+2' color='red' ><strong>STUDENTS</strong></font></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
	
	if ($result->num_rows > 0)
	{
   		
		
		
		echo "<table border=1 width='100%' cellspacing='10'>
		<tr bgcolor='#999999'><th style='text-align:center;' width='7%'>ENROLL NO</th><th style='text-align:center;' width='7%' >NAME</th><th style='text-align:center;' width='7%'>FATHER NAME</th><th style='text-align:center;' width='7%'>MOTHER NAME</th><th style='text-align:center;'  width='7%'>EMAIL ID</th><th style='text-align:center;' width='7%'>DATE OF BIRTH</th><th style='text-align:center;' width='7%'>MOBILE NO</th><th style='text-align:center;' width='7%'>CITY</th><th style='text-align:center;' width='7%'>DEPARTMENT</th></tr>";
		
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
			
		
		

		
		
echo"<tr><th style='text-align:center;'>".$enrollno."</th><th style='text-align:center;' >".$name."</th><th style='text-align:center;'>".$fname."</th><th style='text-align:center;'>".$mname."</th><th style='text-align:center;'>".$email."</th><th style='text-align:center;'>".$date."</th><th style='text-align:center;'>".$mobile."</th><th style='text-align:center;'>".$city."</th><th style='text-align:center;'>".$department."</th></tr>";	
		
	
			}
			echo"</table>";
	}
	else 	
	{
      echo "0 results";
	}
	
	
		//.....................................................................................................................................................
	
	
	
	$sel="select * from edu  WHERE department='M.TECH'";
	$result = $conn->query($sel);
	
	echo"<br><br><br><br><center><label><font size='+2' color='red' ><strong>EDUCATION</strong></font></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
	
	if ($result->num_rows > 0)
	{
   		
		echo "<br><br><table border=1 width='100%' cellspacing='10'>
		<tr bgcolor='#999999'><th style='text-align:center;' width='7%' >ENROLL NO</th><th style='text-align:center;' width='7%'>HIGHER EDUCATION</th><th style='text-align:center;' width='7%'>10 TH PERCENTAGE</th><th style='text-align:center;'  width='7%'>12 TH PERCENTAGE</th><th style='text-align:center;' width='7%'>UG PERCENTAGE</th><th style='text-align:center;' width='7%'>PG PERCENTAGE</th><th style='text-align:center;' width='7%'>DIPLOMA PERCENTAGE</th></tr>";
		
   		 while($row = $result->fetch_assoc()) 
		 	{
			
			
		$enroll = $row['enroll'];
		$depart = $row['depart'];
		$perc = $row['perc'];
		$perc12 = $row['perc12'];
		$perc13 = $row['perc13'];
		$percpg = $row['percpg'];
		$percdp = $row['percdp'];
		
		
		
	echo"<tr><th style='text-align:center;' >".$enroll."</th><th style='text-align:center;'>".$depart."</th><th style='text-align:center;'>".$perc."</th><th style='text-align:center;'>".$perc12."</th><th style='text-align:center;'>".$perc13."</th><th style='text-align:center;'>".$percpg."</th><th style='text-align:center;'>".$percdp."</th></tr>";	
	
	
		}
			echo"</table>";
	}
	else 	
	{
      echo "0 results";
	}
	
	
	
	//.....................................................................................................................................................
	
	
	
	$sel="select * from sem  WHERE dep='M.TECH'";
	$result = $conn->query($sel);
	
	echo"<br><br><br><br><center><label><font size='+2' color='red' ><strong>SEMESTER</strong></font></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
	
	if ($result->num_rows > 0)
	{
   		
		echo "<br><br><table border=1 width='100%' cellspacing='10'>
		<tr bgcolor='#999999'><th style='text-align:center;' width='7%' >ENROLL NO</th><th style='text-align:center;' width='7%'>BRANCH</th><th style='text-align:center;' width='7%'>1SEM-ATD</th><th style='text-align:center;'  width='7%'>1SEM-PERC</th><th style='text-align:center;' width='7%'>2SEM-ATD</th><th style='text-align:center;' width='7%'>2SEM-PERC</th><th style='text-align:center;' width='7%'>3SEM-ATD</th><th style='text-align:center;' width='7%'>3SEM-PERC</th><th style='text-align:center;' width='7%'>4SEM-ATD</th><th style='text-align:center;' width='7%'>4SEM-PERC</th><th style='text-align:center;' width='7%'>5SEM-ATD</th><th style='text-align:center;' width='7%'>5SEM-PERC</th><th style='text-align:center;' width='7%'>6SEM-ATD</th><th style='text-align:center;' width='7%'>6SEM-PERC</th></tr>";
		
   		 while($row = $result->fetch_assoc()) 
		 	{
		$enr = $row['enr']; 
		$branch = $row['branch']; 
		$atd1 = $row['atd1'];
		$perc1 = $row['perc1'];
		$atd2 = $row['atd2'];
		$perc2 = $row['perc2'];	
		$atd3 = $row['atd3'];
		$perc3 = $row['perc3'];
		$atd4 = $row['atd4'];
		$perc4 = $row['perc4'];
		$atd5 = $row['atd5'];
		$perc5 = $row['perc5'];
		$atd6 = $row['atd6'];
		$perc6 = $row['perc6'];
	
	echo"<tr><th style='text-align:center;' >".$enr."</th><th style='text-align:center;'>".$branch."</th><th style='text-align:center;'>".$atd1."</th><th style='text-align:center;'>".$perc1."</th><th style='text-align:center;'>".$atd2."</th><th style='text-align:center;'>".$perc2."</th><th style='text-align:center;'>".$atd3."</th><th style='text-align:center;'>".$perc3."</th><th style='text-align:center;'>".$atd4."</th><th style='text-align:center;'>".$perc4."</th><th style='text-align:center;'>".$atd5."</th><th style='text-align:center;'>".$perc5."</th><th style='text-align:center;'>".$atd6."</th><th style='text-align:center;'>".$perc6."</th></tr>";	
	
	
		}
			echo"</table>";
	}
	else 	
	{
      echo "0 results";
	}
	
//......................................................................................................................................................	
	
echo"<center><br><br><input type='submit' formaction='faculty.php' value='BACK' style='width:150px; height:40px; text-align:top'; class='button2'></center></form></body></html>";

?>

