<?php
session_start();

if($_SESSION["uname"]==true)
{

}
else
{
header('location:stu.php');

}



$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
mysqli_select_db($conn,"stu");
if(isset($_REQUEST["submit"]))
	{ 

		$namez = $_REQUEST['name']; 
		$emailz = $_REQUEST['email'];
		$unamefz = $_REQUEST['unameff'];
		$passz = $_REQUEST['pass']; 
		$datez = $_REQUEST['date']; 
		$deptz = $_REQUEST['dept'];
		$genderz = $_REQUEST['gender'];
		$mobilez = $_REQUEST['mobile'];
		$unam = $_REQUEST['unam'];
		 
//$q="INSERT INTO faculty (name,email,uname,pass,date,dept,gender,mobile)VALUES('$name', '$email', '$uname', '$pass', '$date','$dept', '$gender', '$mobile')";

//$q = "UPDATE faculty SET name='$name',email='$email',unamef='$unamef',pass='$pass',date='$date',dept='$dept',gender='$gender',mobile='$mobile', WHERE unamef='ramsa'";
$qq = "UPDATE faculty SET name='$namez',email='$emailz',unameff='$unamefz',pass='$passz',date='$datez',dept='$deptz',gender='$genderz',mobile='$mobilez' WHERE unameff='$unam'";
		$dataa = mysqli_query ($conn,$qq);
		
		if ($dataa) 
	

			{
			echo "<script>alert('UPDATE SUCCESSFULLY')</script>";
			header( "refresh:0.001; url=facultuss.php" ); 	 
			}
			else
			{
			echo "<script>alert('error')</script>";
			header( "refresh:0.001; url=facultuss.php" ); 
			}
}

		?>