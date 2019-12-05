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

		$enr = $_REQUEST['enr']; 
		$dep = $_REQUEST['dep']; 
		$branch = $_REQUEST['branch']; 
		
		
		$first = $_REQUEST['1st'];
		$atd1 = $_REQUEST['atd1'];
		$result1 = $_REQUEST['result1'];
		$due1 = $_REQUEST['due1'];
		$max1 = $_REQUEST['max1'];
		$obt1 = $_REQUEST['obt1'];
		$perc1 = $_REQUEST['perc1'];
		
		
		$second = $_REQUEST['2nd'];
		$atd2 = $_REQUEST['atd2'];
		$result2 = $_REQUEST['result2'];
		$due2 = $_REQUEST['due2'];
		$max2 = $_REQUEST['max2'];
		$obt2 = $_REQUEST['obt2'];
		$perc2 = $_REQUEST['perc2'];
		
				
		$third = $_REQUEST['3rd'];
		$atd3 = $_REQUEST['atd3'];
		$result3 = $_REQUEST['result3'];
		$due3 = $_REQUEST['due3'];
		$max3 = $_REQUEST['max3'];
		$obt3 = $_REQUEST['obt3'];
		$perc3 = $_REQUEST['perc3'];
		
		$four = $_REQUEST['4th'];
		$atd4 = $_REQUEST['atd4'];
		$result4 = $_REQUEST['result4'];
		$due4 = $_REQUEST['due4'];
		$max4 = $_REQUEST['max4'];
		$obt4 = $_REQUEST['obt4'];
		$perc4 = $_REQUEST['perc4'];
		
		$five = $_REQUEST['5th'];
		$atd5 = $_REQUEST['atd5'];
		$result5 = $_REQUEST['result5'];
		$due5 = $_REQUEST['due5'];
		$max5 = $_REQUEST['max5'];
		$obt5 = $_REQUEST['obt5'];
		$perc5 = $_REQUEST['perc5'];
		
		$six = $_REQUEST['6th'];
		$atd6 = $_REQUEST['atd6'];
		$result6 = $_REQUEST['result6'];
		$due6 = $_REQUEST['due6'];
		$max6 = $_REQUEST['max6'];
		$obt6 = $_REQUEST['obt6'];
		$perc6 = $_REQUEST['perc6'];
		 

		 
$q="INSERT INTO sem (enr,dep,branch,1st,atd1,result1,due1,max1,obt1,perc1,2nd,atd2,result2,due2,max2,obt2,perc2,3rd,atd3,result3,due3,max3,obt3,perc3,4th,atd4,result4,due4,max4,obt4,perc4,5th,atd5,result5,due5,max5,obt5,perc5,6th,atd6,result6,due6,max6,obt6,perc6)VALUES('$enr','$dep','$branch','$first','$atd1','$result1','$due1','$max1','$obt1','$perc1','$second','$atd2','$result2','$due2','$max2','$obt2','$perc2','$third','$atd3','$result3','$due3','$max3','$obt3','$perc3','$four','$atd4','$result4','$due4','$max4','$obt4','$perc4','$five','$atd5','$result5','$due5','$max5','$obt5','$perc5','$six','$atd6','$result6','$due6','$max6','$obt6','$perc6')";
		$data = mysqli_query ($conn,$q);
		
		if ($data) 
	

			{
			header( "refresh:0.001; url=sem.php" );	
			echo "<script>alert('ADD SUCCESSFULLY')</script>";	
			//header('location:sem.php');
			
			}
			else
			{
			header( "refresh:0.001; url=sem.php" );
			echo "<script>alert('Enrollno is alrady exist Or Not Registered')</script>";
			//header('location:sem.php');
			
			
			}
}


?>