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

$unm=$_POST['enrol'];


/**
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";
	
	$db=mysql_connect("localhost","root","","stu");
	$conn = new mysqli($servername, $username, $password, $dbname); */


	$conn=mysqli_connect("localhost","root","") or die ("nottt connect to mysql");
	$con=mysqli_select_db($conn,"stu") or die ("not connect to mysql");
	
	$sell="select * from student  WHERE enrollno='$unm'";
	$resullt = $conn->query($sell);
	
	
	if ($resullt->num_rows > 0)
	{
	
	
	$sel="DELETE FROM student WHERE enrollno='$unm';";
	
	$result = $conn->query($sel);


	if ($result === TRUE)
		    {
				echo "<script>alert('STUDENT REMOVED SUCCESSFULLY')</script>";	
				header( "refresh:0.001; url=delete.php" ); 
		
			}
			
			else
			
			{
			echo "<script>alert('Delete Education or Semester Record First')</script>";
			header( "refresh:0.001; url=delete.php" );  
			}
	}
	
	else
			
	{
			echo "<script>alert('Not Exist')</script>";
			header( "refresh:0.001; url=delete.php" ); 
	}
	
			
}

?>