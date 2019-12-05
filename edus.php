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
	
	$sel="select * from edu where enroll='$enrol'";
	$result = $conn->query($sel);
	
	
	if ($result->num_rows > 0)
	{
   		
   		 while($row = $result->fetch_assoc()) 
		 	{
			
			
		$enroll = $row['enroll'];
		$depart = $row['depart'];
		
		$tenth = $row['tenth']; 
		$bord = $row['bord']; 
		$rollno = $row['rollno']; 
		$passyear = $row['passyear'];
		$maxmark = $row['maxmark'];
		$obtmark = $row['obtmark'];
		$perc = $row['perc'];
		
		//12 th
				
		$twelth = $row['twelth']; 
		$bord12 = $row['bord12']; 
		$rollno12 = $row['rollno12']; 
		$passyear12 = $row['passyear12'];
		$maxmark12 = $row['maxmark12'];
		$obtmark12 = $row['obtmark12'];
		$perc12 = $row['perc12'];
				
		//ug
		$gradution = $row['gradution']; 
		$univ = $row['univ']; 
		$rollno13 = $row['rollno13']; 
		$passyear13 = $row['passyear13'];
		$maxmark13 = $row['maxmark13'];
		$obtmark13 = $row['obtmark13'];
		$perc13 = $row['perc13'];

		//pg
		$pg = $row['pg']; 
		$univpg = $row['univpg']; 
		$rollnopg = $row['rollnopg']; 
		$passyearpg = $row['passyearpg'];
		$maxmarkpg = $row['maxmarkpg'];
		$obtmarkpg = $row['obtmarkpg'];
		$percpg = $row['percpg'];
		
		
		//diploma
		$dp = $row['dp']; 
		$univdp = $row['univdp']; 
		$rollnodp = $row['rollnodp']; 
		$passyeardp = $row['passyeardp'];
		$maxmarkdp = $row['maxmarkdp'];
		$obtmarkdp = $row['obtmarkdp'];
		$percdp = $row['percdp'];
		
	
		
		
		
			
		echo"<center><label><font size='+2' color='red' ><strong>ENROLL-NO</strong></font></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo"<label><font size='+2' >$enroll</font></label> <BR><BR> ";
		
		echo"<TH><label><font size='+2' color='red'><strong>HIGH EDUCATION</strong></font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo"<label><font size='+2' >$depart</font></label></center><BR><BR> <BR><BR> <BR> "; 
		
			
		echo "<table border=1 width='100%' cellspacing='10'>
		<tr bgcolor='#999999'><th style='text-align:center;' width='7%' >Qualification</th><th style='text-align:center;' width='7%'>Bord/Univ</th><th style='text-align:center;' width='7%'>Rollno</th><th style='text-align:center;'  width='7%'>Passyear</th><th style='text-align:center;' width='7%'>Max Mark</th><th style='text-align:center;' width='7%'>Obt Mark</th><th style='text-align:center;' width='7%'>Percentage</th></tr>";
		
		
		echo"<tr><th style='text-align:center;' >$tenth</th><th style='text-align:center;'>$bord</th><th style='text-align:center;'>$rollno</th><th style='text-align:center;'>$passyear</th><th style='text-align:center;'>$maxmark</th><th style='text-align:center;'>$obtmark</th><th style='text-align:center;'>$perc</th></tr><br>";	
		
		
		echo"<tr><th style='text-align:center;' >$twelth</th><th style='text-align:center;'>$bord12</th><th style='text-align:center;'>$rollno12</th><th style='text-align:center;'>$passyear12</th><th style='text-align:center;'>$maxmark12</th><th style='text-align:center;'>$obtmark12</th><th style='text-align:center;'>$perc12</th></tr><br>";	
		
echo"<tr><th style='text-align:center;' >$gradution</th><th style='text-align:center;'>$univ</th><th style='text-align:center;'>$rollno13</th><th style='text-align:center;'>$passyear13</th><th style='text-align:center;'>$maxmark13</th><th style='text-align:center;'>$obtmark13</th><th style='text-align:center;'>$perc13</th></tr><br>";	


			echo"<tr><th style='text-align:center;' >$pg</th><th style='text-align:center;'>$univpg</th><th style='text-align:center;'>$rollnopg</th><th style='text-align:center;'>$passyearpg</th><th style='text-align:center;'>$maxmarkpg</th><th style='text-align:center;'>$obtmarkpg</th><th style='text-align:center;'>$percpg</th></tr><br>";
			
			echo"<tr><th style='text-align:center;' >$dp</th><th style='text-align:center;'>$univdp</th><th style='text-align:center;'>$rollnodp</th><th style='text-align:center;'>$passyeardp</th><th style='text-align:center;'>$maxmarkdp</th><th style='text-align:center;'>$obtmarkdp</th><th style='text-align:center;'>$percdp</th></tr></table><br>";	
		
			}
	}
	else 	
	{
      echo "0 results";
	}
echo"<center><br><br><input type='submit' formaction='serch.php' value='BACK' style='width:150px; height:40px; text-align:top'; class='button2'></center></form></body></html>";
}
?>

