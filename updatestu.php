<?php
session_start();

if($_SESSION["uname"]==true)
{

}
else
{
header('location:stu.php');
}
//if(isset($_POST['username']))


if($_SERVER["REQUEST_METHOD"] == "POST")
{

$unm=$_POST['unm'];




	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";

	$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
	mysqli_select_db($conn,"stu");
	
	//$db=mysql_connect("localhost","root","","stu");
	//$conn = new mysqli($servername, $username, $password, $dbname);
	
	$sel="select * from student  WHERE enrollno='$unm'";
	$result = $conn->query($sel);
	
	
	if ($result->num_rows > 0)
	{
   		
   		 while($row = $result->fetch_assoc()) 
		 	{
			
			$name = $row['name']; 
		
		$fname = $row['fname']; 
		$mname = $row['mname']; 
		$email = $row['email'];
		$enrollno = $row['enrollno'];
		$date = $row['date'];
		$gender = $row['gender'];
		$mobile = $row['mobile'];		
		$address = $row['address'];
		$addre = $row['addre'];
		$city = $row['city'];
		$pincode = $row['pincode'];
		$state = $row['state'];
		$country = $row['country'];
		$department = $row['department'];		
			
			

echo "<html>
<head>



<title>UPDATE STUDENT DATA</title>
    <link rel='stylesheet' type='text/css' href='style.css' media='all' />
    <link rel='stylesheet' type='text/css' href='demo.css' media='all' />

<style>
.H{
    border: 1px solid black;
    background-color: lightblue;
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
}
</style>



</head>
<body width='100%'>
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
				<h1>UPDATE STUDENT DATA </h1>
            </header> 
			<button' name='BACK' id='BACK' style='width:auto; margin-left:200px;' ><a href='facultuss.php'><font size='+2' color='red' ><center><strong>BACK</strong></center></font></a></button> 
       
      <div  class='form'>
    		<form id='contactform' method='POST' onSubmit='return validate();' action='updatestuu.php' > 
    			<p class='contact'><label for='name'>Name</label></p> 
    			<input id='name' name='name' placeholder='First and last name' required='' tabindex='1' type='text' pattern='[A-Za-z ]+' value=".$name."> 
				
				<p class='contact'><label for='fname'>Father Name</label></p> 
    			<input id='fname' name='fname' placeholder='Father Name' required='' tabindex='1' type='text' pattern='[A-Za-z ]+' value=".$fname."> 
				
				<p class='contact'><label for='mname'>Mother Name</label></p> 
    			<input id='mname' name='mname' placeholder='Mother Name' required='' tabindex='1' type='text' pattern='[A-Za-z ]+' value=".$mname."> 
    			 
    			<p class='contact'><label for='email'>Email</label></p> 
    			<input id='email' name='email' placeholder='example@domain.com' required='' type='email' tabindex='1' value=".$email."> 
                
                <p class='contact'><label for='enrollno'>Enrollment Number</label></p> 
    			<input id='enrollno' name='enrollno' placeholder='Enroll No' required='' type='text' tabindex='1' pattern='[A-Za-z0-9._]+' value=".$enrollno."> <br>
				
				
				
			<label>Date Of Birth</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type='date' id='date' name='date' required='' tabindex='1' value=".$date."><br>
  
  			<label>Gender</label><br>
            <select class='select-style gender' name='gender' id='gender' tabindex='1'>
            <option >".$date."</option>
			<option >i am..</option>
            <option value='male'>Male</option>
            <option value='female'>Female</option>
            <option value='others'>Other</option>
            </select><br><br>
			
			

		
            
            <p class='contact'><label for='mobile'>Mobile Number</label></p> 
           		 <input id='mobile' name='mobile' placeholder='phone number' required='' type='text' pattern='[0-9]+' maxlength='10' minlength='10' tabindex='1' value=".$mobile."> <br>
    			
				<p class='contact'><label for='Address'>Address</label></p> 
				<input type='text' name='address' id='address' tabindex='1' required placeholder='Address line ....1' value=".$address."> 
                
				<input type='text' name='addre' id='addre' tabindex='1' required placeholder='Address line ....2' value='".$addre."'/> 
				<p class='contact'><label for='city'>City</label></p> 
    			<input type='text' id='city' name='city' required='' placeholder='City' pattern='[A-Za-z]+' tabindex='1' value=".$city."> 
                
				<p class='contact'><label for='pincode'>Pin Code</label></p> 
				<input type='text' id='pincode' name='pincode' required=''  placeholder='Pin Code' pattern='[0-9]+' tabindex='1' value=".$pincode."> <br>
				
				<p class='contact'><label for='state'>State</label></p> 
				<input type='text' id='state' name='state' required=''  placeholder='State' pattern='[A-Za-z ]+' tabindex='1' value=".$state."> <br>
				
				<p class='contact'><label for='country'>Country</label></p> 
				<input type='text' id='country' name='country'  placeholder='India' tabindex='1' required='' value=".$country."  pattern='[A-Za-z ]+'> <br>
        
				<label>Department</label><br>
           		 <select class='select-style gender' name='department' id='department' tabindex='1' required=''>
            	<option >".$department."</option>
				<option >Department..</option>
            	<option value='MCA'>MCA</option>
           		<option value='MSC'>MSC</option>
           		<option value='MBA'>MBA</option>
            	<option value='MCA'>B.TECH</option>
           		<option value='MSC'>M.TECH</option>
           		<option value='MBA'>B.COM</option>
            	</select><br><br><BR><BR>
			<input type='hidden' alt='unam' name='unam' value='$unm' id='unam' >
		
			
            <input class='buttom' name='UPDATE' id='UPDATE' tabindex='1' value='UPDATE' type='submit' style='margin-left:170px;'> 	
			
			
			
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
	header( "refresh:0.001; url=update.php" ); 
      
	}
	
}

?>
