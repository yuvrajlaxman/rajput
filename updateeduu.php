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
		$enrollZ = $_REQUEST['enroll'];
		$departZ = $_REQUEST['depart'];
		$departmentz = $_REQUEST['department'];
		$tenthZ = $_REQUEST['tenth']; 
		$bordZ = $_REQUEST['bord']; 
		$rollnoZ = $_REQUEST['rollno']; 
		$passyearZ = $_REQUEST['passyear'];
		$maxmarkZ = $_REQUEST['maxmark'];
		$obtmarkZ = $_REQUEST['obtmark'];
		$percZ = $_REQUEST['perc'];
		
		//12 th
				
		$twelthZ = $_REQUEST['twelth']; 
		$bord12Z = $_REQUEST['bord12']; 
		$rollno12Z = $_REQUEST['rollno12']; 
		$passyear12Z = $_REQUEST['passyear12'];
		$maxmark12Z = $_REQUEST['maxmark12'];
		$obtmark12Z = $_REQUEST['obtmark12'];
		$perc12Z = $_REQUEST['perc12'];
		
		//ug
		$gradutionZ = $_REQUEST['gradution']; 
		$univZ = $_REQUEST['univ']; 
		$rollno13Z = $_REQUEST['rollno13']; 
		$passyear13Z = $_REQUEST['passyear13'];
		$maxmark13Z = $_REQUEST['maxmark13'];
		$obtmark13Z = $_REQUEST['obtmark13'];
		$perc13Z = $_REQUEST['perc13'];
		
		//pg
		$pgZ = $_REQUEST['pg']; 
		$univpgZ = $_REQUEST['univpg']; 
		$rollnopgZ = $_REQUEST['rollnopg']; 
		$passyearpgZ = $_REQUEST['passyearpg'];
		$maxmarkpgZ = $_REQUEST['maxmarkpg'];
		$obtmarkpgZ = $_REQUEST['obtmarkpg'];
		$percpgZ = $_REQUEST['percpg'];
		
		//diploma
		$dpZ = $_REQUEST['dp']; 
		$univdpZ = $_REQUEST['univdp']; 
		$rollnodpZ = $_REQUEST['rollnodp']; 
		$passyeardpZ = $_REQUEST['passyeardp'];
		$maxmarkdpZ = $_REQUEST['maxmarkdp'];
		$obtmarkdpZ = $_REQUEST['obtmarkdp'];
		$percdpZ = $_REQUEST['percdp'];
		 
		 
		 $qq = "UPDATE edu SET enroll='$enrollZ',department='$departmentz',depart='$departZ',tenth='$tenthZ',bord='$bordZ',rollno='$rollnoZ',passyear='$passyearZ',maxmark='$maxmarkZ',obtmark='$obtmarkZ',perc='$percZ',twelth='$twelthZ',bord12='$bord12Z',rollno12='$rollno12Z',passyear12='$passyear12Z',maxmark12='$maxmark12Z',obtmark12='$obtmark12Z',perc12='$perc12Z',gradution='$gradutionZ',univ='$univZ',rollno13='$rollno13Z',passyear13='$passyear13Z',maxmark13='$maxmark13Z',obtmark13='$obtmark13Z',perc13='$perc13Z',pg='$pgZ',univpg='$univpgZ',rollnopg='$rollnopgZ',passyearpg='$passyearpgZ',maxmarkpg='$maxmarkpgZ',obtmarkpg='$obtmarkpgZ',percpg='$percpgZ',dp='$dpZ',univdp='$univdpZ',rollnodp='$rollnodpZ',passyeardp='$passyeardpZ',maxmarkdp='$maxmarkdpZ',obtmarkdp='$obtmarkdpZ',percdp='$percdpZ' WHERE enroll='$unam'";




		
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