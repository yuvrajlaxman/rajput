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

$unmm = $_POST["idd"];

/**
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";
	
	$db=mysql_connect("localhost","root","","stu");
	$conn = new mysqli($servername, $username, $password, $dbname); */

	$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
	mysqli_select_db($conn,"stu");
	
	$sell="select * from query  WHERE id='$unmm'";
	$resullt = $conn->query($sell);
	
	
	if ($resullt->num_rows > 0)
	{
	
	
	$sel="DELETE FROM query WHERE id='$unmm';";
	
	$result = $conn->query($sel);


	if ($result === TRUE)
		    {
				echo "<script>alert('FACULTY REMOVED SUCCESSFULLY')</script>";	
				header( "refresh:0.001; url=query1.php" ); 
		
			}
			
			
	}	
	
	else
			
			{
			echo "<script>alert('User Name Does Not Exist')</script>";
			header( "refresh:0.001; url=query1.php" ); 
			}	
}

?>