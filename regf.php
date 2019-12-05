<?php
session_start();

if($_SESSION["uname"]==true)
{

}
else
{
header('location:stu.php');

}



$conn=mysqli_connect("localhost","root","") or die ("not connect to mysql");
$con=mysqli_select_db($conn,"stu");

if(isset($_POST["submit"]))
	{ 

		$imagename = addslashes($_FILES['image']['name']);
		$image= addslashes(file_get_contents($_FILES['image']['tmp_name'])); 
		$name = $_POST['name']; 
		$email = $_POST['email'];
		$unamef = $_POST['unamef'];
		$pass = $_POST['pass']; 
		$date = $_POST['date']; 
		$dept = $_POST['dept'];
		$gender = $_POST['gender'];
		$mobile = $_POST['mobile'];
		 
$q="INSERT INTO faculty (name,email,unameff,pass,date,dept,gender,mobile,image)VALUES('$name', '$email', '$unamef', '$pass', '$date','$dept', '$gender', '$mobile','$image')";


		$data = mysqli_query ($conn,$q);
		
		if ($data) 
	

			{
			echo "<script>alert('NEW ADMIN ADD SUCCESSFULLY')</script>";	 
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
<title>NEW FACULTY REGISTER</title>
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
                <a href="admin.php"><font size="+2" ><strong>Home</strong></font></a>
                <span class="right">
                    <a href="logout.php">
                        <strong><font size="+2" >logout</font></strong>
                    </a>
                </span>
                
            </div>
			<header>
				<h1>NEW FACULTY REGISTER </h1>
            </header>        
      <div  class="form">
    		<form id="contactform" method="POST" enctype="multipart/form-data"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text" pattern="[A-Za-z ]+"> 
    			 
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email" tabindex="1"> 
                
                <p class="contact"><label for="username">Create a username</label></p> 
    			<input id="unamef" name="unamef" placeholder="username" required="" type="text" tabindex="1" pattern="[a-zA-Z_.0-9]+"  maxlength="10" minlength="4"> 
    			 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="pass" name="pass" required="" onFocus="this.value=''" tabindex="1"> 
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repassword" required=""  onfocus="this.value=''" tabindex="1" /> <br>
				
				<p class="contact"><label for="phone">Mobile phone</label></p> 
   <input id="mobile" name="mobile" placeholder="phone number" required="" type="text" onKeyDown="myFunction()" tabindex="1" pattern="[0-9]+"  maxlength="10" minlength="10"><br>
				
        <label>Date of Birth</label>
		<input type="date" id="date" name="date" required="" tabindex="1"><br><br>
		
		 <select class="select-style gender" name="dept" id="dept">
            <option >Dept..</option>
            <option value="mca">Mca</option>
            <option value="mba">mba</option>
            <option value="msc">msc</option>
			<option value="m.tech">M.tech</option>
            <option value="b.tech">b.tech</option>
            <option value="b.com">b.com</option>
            </select><br><br>
  
            <select class="select-style gender" name="gender" id="gender">
            <option >i am..</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Other</option>
            </select><br><br>
			<label>Upload photu</label>
			<input type="file" id="image" name="image" required=""  accept="image/jpg, image/jpeg, image/png" ><br>
			<br>
             <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="ADD FACULTY" type="submit" onMouseOver="myFunction()"> 	
			<span class="right">
			<input class="buttom" name="RESET" id="reset" tabindex="5" value="RE-SET" type="RESET" style="width:auto; margin-left:200px;"> 	
			</span> 
   </form> 
</div>      
</div>
</body>
</html>