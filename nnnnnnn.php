<?php
session_start();

if($_SESSION["uname"]==true)
{

}
else
{
header('location:stu.php');
}

 
$conn=mysql_connect("localhost","root","")or die("not connect to mysql");
mysql_select_db("stu",$conn);


if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=$_POST['uname'];
$passwd=$_POST['pass'];	
	$sel=mysql_query("select * from admin where uname='$name'");
	$arr=mysql_fetch_array($sel);
	
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
				
				
					echo "<script>alert('USER NAME OR PASSWORD ARE NOT EXIEST')</script>";	 
					header( "refresh:0.005; url=stu.php" );
		}

}





?>