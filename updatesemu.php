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

		$unam = $_REQUEST['unam'];

		
		$enrz = $_REQUEST['enr']; 
		$depz = $_REQUEST['dep']; 
		$branchz = $_REQUEST['branch']; 
		
		
		$firstz = $_REQUEST['1st'];
		$atd1z = $_REQUEST['atd1'];
		$result1z = $_REQUEST['result1'];
		$due1z = $_REQUEST['due1'];
		$max1z = $_REQUEST['max1'];
		$obt1z = $_REQUEST['obt1'];
		$perc1z = $_REQUEST['perc1'];
		
		
		$secondz = $_REQUEST['2nd'];
		$atd2z = $_REQUEST['atd2'];
		$result2z = $_REQUEST['result2'];
		$due2z = $_REQUEST['due2'];
		$max2z = $_REQUEST['max2'];
		$obt2z = $_REQUEST['obt2'];
		$perc2z = $_REQUEST['perc2'];
		
				
		$thirdz = $_REQUEST['3rd'];
		$atd3z = $_REQUEST['atd3'];
		$result3z = $_REQUEST['result3'];
		$due3z = $_REQUEST['due3'];
		$max3z = $_REQUEST['max3'];
		$obt3z = $_REQUEST['obt3'];
		$perc3z = $_REQUEST['perc3'];
		
		$fourz = $_REQUEST['4th'];
		$atd4z = $_REQUEST['atd4'];
		$result4z = $_REQUEST['result4'];
		$due4z = $_REQUEST['due4'];
		$max4z = $_REQUEST['max4'];
		$obt4z = $_REQUEST['obt4'];
		$perc4z = $_REQUEST['perc4'];
		
		$fivez = $_REQUEST['5th'];
		$atd5z = $_REQUEST['atd5'];
		$result5z = $_REQUEST['result5'];
		$due5z = $_REQUEST['due5'];
		$max5z = $_REQUEST['max5'];
		$obt5z = $_REQUEST['obt5'];
		$perc5z = $_REQUEST['perc5'];
		
		$sixz = $_REQUEST['6th'];
		$atd6z = $_REQUEST['atd6'];
		$result6z = $_REQUEST['result6'];
		$due6z = $_REQUEST['due6'];
		$max6z = $_REQUEST['max6'];
		$obt6z = $_REQUEST['obt6'];
		$perc6z = $_REQUEST['perc6'];
		 
		 $qq = "UPDATE sem SET enr='$enrz',dep='$depz',branch='$branchz',1st='$firstz',atd1='$atd1z',result1='$result1z',due1='$due1z',max1='$max1z',obt1='$obt1z',perc1='$perc1z',2nd='$secondz',atd2='$atd2z',result2='$result2z',due2='$due2z',max2='$max2z',obt2='$obt2z',perc2='$perc2z',3rd='$thirdz',atd3='$atd3z',result3='$result3z',due3='$due3z',max3='$max3z',obt3='$obt3z',perc3='$perc3z',4th='$fourz',atd4='$atd4z',result4='$result4z',due4='$due4z',max4='$max4z',obt4='$obt4z',perc4='$perc4z',5th='$fivez',atd5='$atd5z',result5='$result5z',due5='$due5z',max5='$max5z',obt5='$obt5z',perc5='$perc5z',6th='$sixz',atd6='$atd6z',result6='$result6z',due6='$due6z',max6='$max6z',obt6='$obt6z',perc6='$perc6z'  WHERE enr='$unam'";



		
		$dataa = mysqli_query ($conn,$qq);
		
		if ($dataa) 
	

			{
			echo "<script>alert('UPDATE SUCCESSFULLY')</script>";
			header( "refresh:0.001; url=update.php" ); 	 
			}
			else
			{
			echo "<script>alert('error')</script>";
			header( "refresh:0.001; url=update.php" ); 
			}
}

		?>