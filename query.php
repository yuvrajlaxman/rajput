<?php
session_start();
$unamef= $_SESSION["unamef"];

if($_SESSION["unamef"]==true)
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

		$msg = $_REQUEST['msg']; 
		
		 
$q="INSERT INTO query (unamef,msg)VALUES('$unamef', '$msg')";
		$data = mysqli_query ($conn,$q);
		
		if ($data) 
	

			{
			echo "<script>alert('SEND MESSAGE SUCCESSFULLY')</script>";	 
			}
			else
			{
			echo "<script>alert('error')</script>";
			}
}

?>


<!DOCTYPE html>
<html>
<head>
<title>QUERY</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
	
	<script language="javascript" >
function myFunction() 
{
    var pass1 = document.getElementById("pass").value;
    var pass2 = document.getElementById("repassword").value;
    var ok = true;
    if (pass1 === pass2)
	 {
			document.getElementById("pass").style.borderColor = "#dadada";
			document.getElementById("repassword").style.borderColor = "#dadada";
    }
    else {
	 		  //alert("Passwords Do not match");
			 document.getElementById("pass").style.borderColor ="#E34211";
        document.getElementById("repassword").style.borderColor = "#E34234";
        
		document.getElementById("repassword").focus();
		alert ("enter");
	
       
   		 }
    return ok;
}

</script>
</head>
<body>
<div class="container">
			
             <div class="freshdesignweb-top">
                <a href="faculty.php"><font size="+2" ><strong>Home</strong></font></a>
                <span class="right">
                    <a href="logout.php">
                        <strong><font size="+2" >logout</font></strong>
                    </a>
                </span>
                
            </div>
			<header>
				<h1>QUERY </h1>
            </header>        
      <div  class="form">
    		<form id="contactform" method="POST"> 
    			
    			<textarea rows="8" cols="60" id="msg" name="msg" placeholder="enter msg hear" required="" tabindex="1" ></textarea> 
    			 <br><br><br><br>
    	
            <input class="buttom" name="submit" id="submit" tabindex="1" value="SEND" type="submit" onMouseOver="myFunction()" style="width:auto; margin-left:70px;"> 	
			<span class="right">
			<input class="buttom" name="RESET" id="reset" tabindex="1" value="RE-SET" type="RESET" style="width:auto; margin-left:150px;"> 	
			</span> 
   </form> 
</div>      
</div>
</body>
</html>