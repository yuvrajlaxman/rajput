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


	/** $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";
	
	$db=mysql_connect("localhost","root","","stu");
	$conn = new mysqli($servername, $username, $password, $dbname); */


	$conn=mysqli_connect("localhost","root","") or die ("nottt connect to mysql");
	$con=mysqli_select_db($conn,"stu") or die ("not connect to mysql");



	
$sell="select * from edu WHERE enroll='$unm'";
	$resultt = $conn->query($sell);
	
	
	if ($resultt->num_rows > 0)
	{
	
	$sel="DELETE FROM edu WHERE enroll='$unm';";
	
	$result = $conn->query($sel);


	if ($result === TRUE)


		    {
				echo "<script>alert('REMOVED SUCCESSFULLY')</script>";	
				header( "refresh:0.001; url=delete.php" ); 
			}
			else
			{
			echo "<script>alert('Details Does Not Exist')</script>";
			header( "refresh:0.001; url=delete.php" ); 
			}	
}

else 	   {
			echo "<script>alert('DETAIL DOES NOT EXIST')</script>";
			header( "refresh:0.001; url=delete.php" ); 
			}

}
?>