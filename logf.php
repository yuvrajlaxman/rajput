<?php
session_start();

if($_SESSION["unamef"]==true)
{

}
else
{
header('location:stu.php');
}

 
$conn=mysqli_connect("localhost","root","") or die ("not connect to mysql");
$con=mysqli_select_db($conn,"stu");



if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=$_POST['uname'];
$passwd=$_POST['pass'];	
	$sel=mysqli_query($conn,"select * from faculty where unameff='$name'");
	$arr=mysqli_fetch_array($sel);
	
	   if($name!=NULL && $passwd!=NULL)
		{
	   			if($name==$arr['unameff']&& $passwd==$arr['pass'])
				{
					session_start();
					$_SESSION['unamef']=$name;
					
					header("location:faculty.php");
				
				}
	
				else
				{	
					//header("location:stu.php");
					echo " <script> alert('USER NAME OR PASSWORD ARE INVALID')</script>";	
					header( "refresh:0.001; url=stu.php" );
 
			 		
				}
		
		
		}

}




?>