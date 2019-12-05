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
if($_SERVER["REQUEST_METHOD"] == "POST")
	{ 

		$nameZ = $_REQUEST['name']; 
		$fnameZ = $_REQUEST['fname']; 
		$mnameZ = $_REQUEST['mname']; 
		$emailZ = $_REQUEST['email'];
		$enrollnoZ = $_REQUEST['enrollno'];
		$dateZ = $_REQUEST['date'];
		$genderZ = $_REQUEST['gender'];
		$mobileZ = $_REQUEST['mobile'];
				
		$addressZ = $_REQUEST['address'];
		$addreZ = $_REQUEST['addre'];
		$cityZ = $_REQUEST['city'];
		$pincodeZ = $_REQUEST['pincode'];
		
		$stateZ = $_REQUEST['state'];
		$countryZ = $_REQUEST['country'];
		$departmentZ = $_REQUEST['department'];
		$unam = $_REQUEST['unam'];
		 
		 
//$qq = "UPDATE student SET name='$namez',email='$emailz',unamef='$unamefz',pass='$passz',date='$datez',dept='$deptz',gender='$genderz',mobile='$mobilez' WHERE enrollno='$unam'";
		
$qq = "UPDATE student SET name='$nameZ',fname='$fnameZ',mname='$mnameZ',email='$emailZ',enrollno='$enrollnoZ',date='$dateZ',gender='$genderZ',mobile='$mobileZ',address='$addressZ',addre='$addreZ',city='$cityZ',pincode='$pincodeZ',state='$stateZ',country='$countryZ',department='$departmentZ' WHERE  enrollno='$unam'";
		
		$dataa = mysqli_query ($conn,$qq);
		
		if ($dataa) 
	

			{
			echo "<script>alert('UPDATE SUCCESSFULLY')</script>";
			header( "refresh:0.001; url=update.php" ); 	 
			}
			else
			{
			echo "<script>alert('ERROR')</script>";
			header( "refresh:0.001; url=update.php" ); 
			}
}

		?>