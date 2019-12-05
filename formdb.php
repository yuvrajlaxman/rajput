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

		$name = $_REQUEST['name']; 
		$fname = $_REQUEST['fname']; 
		$mname = $_REQUEST['mname']; 
		$email = $_REQUEST['email'];
		$enrollno = $_REQUEST['enrollno'];
		$date = $_REQUEST['date'];
		$gender = $_REQUEST['gender'];
		$mobile = $_REQUEST['mobile'];
				
		$address = $_REQUEST['address'];
		$addre = $_REQUEST['addre'];
		$city = $_REQUEST['city'];
		$pincode = $_REQUEST['pincode'];
		
		$state = $_REQUEST['state'];
		$country = $_REQUEST['country'];
		$department = $_REQUEST['department'];
		
		
		
		
		$_SESSION['enrollno'] = $enrollno;
		 $_SESSION['department'] = $department;

		 
$q="INSERT INTO student (name,fname,mname,email,enrollno,date,gender,mobile,address,addre,city,pincode,state,country,department)VALUES('$name','$fname','$mname','$email','$enrollno','$date','$gender','$mobile','$address','$addre','$city','$pincode','$state','$country','$department')";
		$data = mysqli_query ($conn,$q);
		
		if ($data) 
	

			{
			echo "<script>alert('ADD SUCCESSFULLY')</script>";	
				header( "refresh:0.001; url=edu.php" ); 
			}
			else
			{
			echo "<script>alert('error information is alrady exist')</script>";
			//header( "refresh:0.001; url=form.php" );
			}
}


?>