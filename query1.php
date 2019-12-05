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
<title>query</title>
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
	<BR><BR><h1 class='h' align='CENTER'><font color='BLACK' ALIGN='CENTER' size='+4'>QUERY BY FACULTY</font> </h1><BR><BR>
		"; 



	
	/**
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";
	
	$db=mysql_connect("localhost","root","","stu");
	$conn = new mysqli($servername, $username, $password, $dbname); */

	$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
	mysqli_select_db($conn,"stu");
	
	$sel="select * from query ";
	$result = $conn->query($sel);
	
	
	if ($result->num_rows > 0)
	{
   		
		
		
		echo "<table border=1 width='100%' cellspacing='10'>
		<tr bgcolor='#999999'><th style='text-align:center;' width='7%'>ID</th><th style='text-align:center;' width='7%' >FACULTY</th><th style='text-align:center;' width='7%'>QUERY</th></tr>";
		
   		 while($row = $result->fetch_assoc()) 
		 	{
			$id = $row['id']; 
			$name = $row['unamef']; 
			$query = $row['msg'];
				
		
echo"<tr><th style='text-align:center;' >".$id."</th><th style='text-align:center;'>".$name."</th><th style='text-align:center;'>".$query."</th></tr><br>";	
		
	
			}
			echo"</table>
			<br><br><br><br><br><br><br><br> 	
			
			<form id='contactform' method='POST' action='query2.php'> 
<center>
  <input type='text' name='idd' id='idd' placeholder='Enter id'  align='middle' style='background-color:#CCCCCC' required=''><br><br><br><BR><BR><BR>

<input type='submit'  name='delete' value='DELETE'  style='width:150px; height:40px; text-align:top'; class='button2'> &nbsp;&nbsp;&nbsp; </form>";
	}
	else 	
	{
      echo "<br><br><br><br> 	<h1 align='center'>0 results</h1>";
	}
echo"</body></html>";



?>

