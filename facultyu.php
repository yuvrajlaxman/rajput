<?php
session_start();

if($_SESSION["uname"]==true)
{

}
else
{
header('location:stu.php');
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{

$unm=$_POST['unm'];




	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";
	
	$conn=mysqli_connect("localhost","root","") or die ("not connect to mysql");
	$con=mysqli_select_db($conn,"stu") or die ("no00t connect to mysql");

	//$db=mysql_connect("localhost","root","","stu");
	//$conn = new mysqli($servername, $username, $password, $dbname);
	
	$sel="select * from faculty  WHERE unameff='$unm'";
	$result = $conn->query($sel);
	
	
	if ($result->num_rows > 0)
	{
   		
		
	   
		
		
		
   		 while($row = $result->fetch_assoc()) 
		 	{
			
			$name = $row['name']; 
		$email = $row['email'];
		$unamef = $row['unameff'];
		$pass = $row['pass']; 
		$date = $row['date']; 
		$dept = $row['dept'];
		$gender = $row['gender'];
		$mobile = $row['mobile'];	
		
		$img = $row['image'];			
			
		
		
echo"	<!DOCTYPE html>
<html>
<head>
<title>FACULTY UPDATE</title>
    <link rel='stylesheet' type='text/css' href='style.css' media='all' />
    <link rel='stylesheet' type='text/css' href='demo.css' media='all' />
	
	<script language='javascript' >
function myFunction() 
{
    var pass1 = document.getElementById('pass').value;
    var pass2 = document.getElementById('repassword').value;
    var ok = true;
    if (pass1 === pass2)
	 {
			document.getElementById('pass').style.borderColor = '#dadada';
			document.getElementById('repassword').style.borderColor = '#dadada';
    }
    else {
	 		  //alert('Passwords Do not match');
			 document.getElementById('pass').style.borderColor ='#E34211';
        document.getElementById('repassword').style.borderColor = '#E34234';
        
		document.getElementById('repassword').focus();
		alert ('enter');
	
       
   		 }
    return ok;
}


</script>
</head>
<body>
<div class='container'>
			
             <div class='freshdesignweb-top'>
                <a href='admin.php'><font size='+2' ><strong>Home</strong></font></a>
                <span class='right'>
                    <a href='logout.php'>
                        <strong><font size='+2' >logout</font></strong>
                    </a>
                </span>
                
            </div>
			<header>
				<h1>FACULTY UPDATE </h1><br>
            </header>       
<button' name='BACK' id='BACK' style='width:auto; margin-left:200px;' ><a href='facultuss.php'><font size='+2' color='red' ><center><strong>BACK</strong></center></font></a></button> 
      <div  class='form'>
    		<form id='contactform' method='POST' action='facultus.php'> 
    			<p class='contact'><label for='name'>Name</label></p> 
    			<input id='name' name='name' placeholder='First and last name' required='' tabindex='1' type='text' value=".$name." pattern='[A-Za-z ]+'> 
    			 
    			<p class='contact'><label for='email'>Email</label></p> 
    			<input id='email' name='email' placeholder='example@domain.com' required='' type='email' tabindex='1' value=".$email."> 
                
                <p class='contact'><label for='username'>Create a username</label></p> 
    			<input id='unamef' name='unameff' placeholder='username' required='' type='text' tabindex='1' value=".$unamef."
				pattern='[a-zA-Z_.0-9]+'  maxlength='10' minlength='4'> 
    			 
                <p class='contact'><label for='password'>Create a password</label></p> 
    			<input type='password' id='pass' name='pass' required='' onFocus='this.value=''' tabindex='1' value=".$pass."> 
                <p class='contact'><label for='repassword'>Confirm your password</label></p> 
    			<input type='password' id='repassword' name='repassword' required=''  onfocus='this.value=''' tabindex='1'/  value=".$pass."> <br>
				
				<p class='contact'><label for='phone'>Mobile phone</label></p> 
            	<input id='mobile' name='mobile' placeholder='phone number' required='' type='text' onKeyDown='myFunction()' tabindex='1' value=".$mobile."
				pattern='[0-9]+'  maxlength='10' minlength='10'><br>
				
        <label>Date of Birth</label>
		<input type='date' id='date' name='date' required='' value=".$date."><br>
		 <label>Department</label>
		 <select class='select-style gender' name='dept' id='dept'>
            <option >".$dept."</option>
            <option value='mca'>Mca</option>
            <option value='mba'>mba</option>
            <option value='msc'>msc</option>
			<option value='m.tech'>M.tech</option>
            <option value='b.tech'>b.tech</option>
            <option value='b.com'>b.com</option>
            </select><br><br>
  		 <label>Gender</label><br>
            <select class='select-style gender' name='gender' id='gender'>
            <option >".$gender."</option>
            <option value='male'>Male</option>
            <option value='female'>Female</option>
            <option value='others'>Other</option>
            </select><br><br>
			
		
		
			<input type='hidden' alt='unam' name='unam' value='$unm' id='unam' >
            
             <br>
			 
            <input class='buttom' name='submit' id='submit' value='UPDATE' type='submit' onMouseOver='myFunction()' style='margin-left:160px;'> 	
			
				
			</span> 
   </form> 
</div>      
</div>
</body>
</html>";


		

			}
			
	}
	else 	
	{
	echo "<script>alert('0 results')</script>";	
	header( "refresh:0.001; url=facultuss.php" ); 
      
	}
	
}

?>

