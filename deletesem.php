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

	$conn=mysqli_connect("localhost","root","") or die ("nottt connect to mysql");
	$con=mysqli_select_db($conn,"stu") or die ("not connect to mysql");
	
	
$sell="select * from sem  WHERE enr='$unm'";
	$resultt = $conn->query($sell);
	
	
	if ($resultt->num_rows > 0)
	{
	
	$sel="DELETE FROM sem WHERE enr='$unm';";
	
	$result = $conn->query($sel);


	if ($result === TRUE)
	
		    {
				echo "<script>alert('REMOVED SUCCESSFULLY')</script>";	
				header( "refresh:0.001; url=delete.php" ); 
		
			}
		else
			
		{
			echo "<script>alert('DETAIL DOES NOT EXIST')</script>";
			header( "refresh:0.001; url=delete.php" ); 
		}

}
else 	   {
			echo "<script>alert('DETAIL DOES NOT EXIST')</script>";
			header( "refresh:0.001; url=delete.php" ); 
			}
}
?>