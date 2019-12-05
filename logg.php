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
$con=mysqli_select_db($conn,"stu");


if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=$_POST['uname'];
$passwd=$_POST['pass'];	
	$sel=mysqli_query($conn,"select * from admin where uname='$name'");
	$arr=mysqli_fetch_array($sel);
	
	   if($name!=NULL && $passwd!=NULL)
		{
	   			if($name==$arr['uname']&& $passwd==$arr['pass'])
				{
					session_start();
					$_SESSION['uname']=$name;
					header("location:admin.php");
					echo "<center>You have successfully Login</center>";
				}
	
				else
				{
					echo "<script>alert('USER NAME OR PASSWORD ARE INVALID')</script>";	 
					header( "refresh:0.005; url=stu.php" );
			 
				}

		}
		

}





?>
