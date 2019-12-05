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

$conn=mysql_connect("localhost","root","")or die("not connect to mysql");
mysql_select_db("stu",$conn);
if(isset($_REQUEST["submit"]))
	{ 

		$namez = $_REQUEST['name']; 
		$emailz = $_REQUEST['email'];
		$unamefz = $_REQUEST['unamef'];
		$passz = $_REQUEST['pass']; 
		$datez = $_REQUEST['date']; 
		$deptz = $_REQUEST['dept'];
		$genderz = $_REQUEST['gender'];
		$mobilez = $_REQUEST['mobile'];
	
		 
//$q="INSERT INTO faculty (name,email,uname,pass,date,dept,gender,mobile)VALUES('$name', '$email', '$uname', '$pass', '$date','$dept', '$gender', '$mobile')";

//$q = "UPDATE faculty SET name='$name',email='$email',unamef='$unamef',pass='$pass',date='$date',dept='$dept',gender='$gender',mobile='$mobile', WHERE unamef='ramsa'";
$qq = "UPDATE faculty SET name='$namez',email='$emailz',unamef='$unamefz',pass='$passz',date='$datez',dept='$deptz',gender='$genderz',mobile='$mobilez' WHERE unamef='$name'";
		$dataa = mysql_query ($qq);
		
		if ($dataa) 
	

			{
			echo "<script>alert('UPDATE SUCCESSFULLY')</script>";
			header( "refresh:0.001; url=faculty.php" ); 	 
			}
			else
			{
			echo "<script>alert('ERROR')</script>";
			header( "refresh:0.001; url=faculty.php" ); 
			}
}

		?>