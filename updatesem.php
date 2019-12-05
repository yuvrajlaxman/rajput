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



/**
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";
	
	$db=mysql_connect("localhost","root","","stu");
	$conn = new mysqli($servername, $username, $password, $dbname); */

	$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
	mysqli_select_db($conn,"stu");
	
	$sel="select * from sem  WHERE enr='$unm'";
	$result = $conn->query($sel);
	
	
	if ($result->num_rows > 0)
	{
   		
   		 while($row = $result->fetch_assoc()) 
		 	{
			
		
		$enr = $row['enr']; 
		$dep = $row['dep']; 
		$branch = $row['branch']; 
		
		
		$first = $row['1st'];
		$atd1 = $row['atd1'];
		$result1 = $row['result1'];
		$due1 = $row['due1'];
		$max1 = $row['max1'];
		$obt1 = $row['obt1'];
		$perc1 = $row['perc1'];
		
		
		$second = $row['2nd'];
		$atd2 = $row['atd2'];
		$result2 = $row['result2'];
		$due2 = $row['due2'];
		$max2 = $row['max2'];
		$obt2 = $row['obt2'];
		$perc2 = $row['perc2'];
		
				
		$third = $row['3rd'];
		$atd3 = $row['atd3'];
		$result3 = $row['result3'];
		$due3 = $row['due3'];
		$max3 = $row['max3'];
		$obt3 = $row['obt3'];
		$perc3 = $row['perc3'];
		
		$four = $row['4th'];
		$atd4 = $row['atd4'];
		$result4 = $row['result4'];
		$due4 = $row['due4'];
		$max4 = $row['max4'];
		$obt4 = $row['obt4'];
		$perc4 = $row['perc4'];
		
		$five = $row['5th'];
		$atd5 = $row['atd5'];
		$result5 = $row['result5'];
		$due5 = $row['due5'];
		$max5 = $row['max5'];
		$obt5 = $row['obt5'];
		$perc5 = $row['perc5'];
		
		$six = $row['6th'];
		$atd6 = $row['atd6'];
		$result6 = $row['result6'];
		$due6 = $row['due6'];
		$max6 = $row['max6'];
		$obt6 = $row['obt6'];
		$perc6 = $row['perc6'];
	



echo"<html>
<head>



<title>Update Semester Details</title>
    <link rel='stylesheet' type='text/css' href='style1.css' media='all' />
    <link rel='stylesheet' type='text/css' href='demo1.css' media='all' />
<script  type='text/javascript' src='sem.js'></script>
<script  type='text/javascript' src='sum.js'></script>
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
				<h1 align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Update Semester Details </h1>
            </header>      
			
			<button' name='BACK' id='BACK' style='width:auto; margin-left:200px;' ><a href='update.php'><font size='+2' color='red' ><center><strong>BACK</strong></center></font></a></button> 
			  
      <div  class='di form' >
	  
    		<form id='contactform' method='POST' onSubmit='return validate();' action='updatesemu.php'> 
    			
				  
    				<input id='enr' name='enr' placeholder='Enroll No' required=''  style='width:150px; background-color:#669900' type='text' tabindex='1' pattern='[A-Za-z0-9]+' readonly='' value='$enr'> <br>
				
				<center><font color='#996633' size='+2'>Select Your Department</font> <br><br>
           		 <select class='select-style gender' name='dep' id='dep' >
            	<option >$dep</option>
            	<option value='MCA'>MCA</option>
           		<option value='MSC'>MSC</option>
           		<option value='MBA'>MBA</option>
            	<option value='M.TECH'>M.TECH</option>
				<option value='B.TECH'>B.TECH</option>
				<option value='B.COM'>M.TECH</option>
            	</select><br><br><BR>
				
				<center><font color='#996633' size='+2'>Select Your Branch</font> <br><br>
				<select class='select-style gender' name='branch' id='branch' >
            	<option >$branch</option>
            	<option value='Computer Science'>Computer Science</option>
           		<option value='Chemical Engineering'>Chemical Engineering</option>
           		<option value='Computer Science & Engg'>Computer Science & Engg</option>
            	<option value='Electronic'>Electronic</option>
				<option value='Bio Technology'>Bio Technology</option>
				<option value='Civil Engineering'>Civil Engineering</option>
				<option value='Energy Technology'>Energy Technology</option>
           		<option value='Geo-Science Engineering'>Geo-Science EngineeringC</option>
           		<option value='Fire & Safety Engineering'>Fire & Safety Engineering</option>
            	<option value='Bio Medical Engineering'>Bio Medical Engineering</option>
				<option value='Automobile Engg'>Automobile Engg</option>
				<option value='Aeronautical Engg'>Aeronautical Engg</option>
            	</select><br><br><BR>
				
				<font color='#996633' size='+2'>PASS OUT</font> <br><br>
				 <select class='select-style gender' name='sem' id='sem' onChange='semm()'>
            	<option value='select' >select</option>
            	<option value='1st'>1st</option>
           		<option value='2nd'>2nd</option>
           		<option value='3rd'>3rd</option>
            	<option value='4th'>4th</option>
				<option value='5th'>5th</option>
				<option value='6th'>6th</option>
            	</select>
			<br><br>
          
		   <table width='100%' height='10%'>
		   		<tr>
		   			<td width='5%'>	<p class='contact'><label for='user'>Qualification</label></p> </td>
					<td width='5%'>	<p class='contact'><label for='user'>Total Attendanse %</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Result</label></p></td>
					<td  width='5%'>	<p class='contact'><label for='user'>Due Sub Name</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Max Marks</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Obtained Marks</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Percentage</label></p></td>
		   		</tr>
				
				
				<tr>
		   			<td width='5%'><input id='1st' name='1st' placeholder='1st sem' required='' type='text'  readonly=''  value='1st'/></td>
					<td width='5%'><input id='atd1' name='atd1' placeholder='00%' required='' type='text' readonly=''  value='$atd1'  value=''
					maxlength='6' minlength='2' pattern='[0-9.%]+'/></td>
		<td width='5%'><select class='select-style gender' name='result1' id='result1' style='width:110PX; margin-bottom:20PX;' onChange='onSelectChange1()' readonly=''>
            		<option >$result1</option>
					<option value='PASS'>PASS</option>
           			<option value='DUE'>DUE</option></select></td>
					<td width='5%'><input id='due1' name='due1' placeholder='sub1,sub2,...!' required='' type='text' readonly=''  value='$due1'/></td>
					<td width='5%'><input id='max1' name='max1' placeholder='Max Marks' required='' type='text' readonly=''  value='$max1'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='obt1' name='obt1' placeholder='Obtained Marks' required='' type='text' readonly=''  value='$obt1'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='perc1' name='perc1' placeholder='Percentage' required='' type='text' readonly=''  value='$perc1'
					maxlength='6' minlength='2' pattern='[0-9.%]+' onFocus='sem1()'/></td>
				</tr>
		   		
				
				<tr>
				  	<td width='5%'><input id='2nd' name='2nd' placeholder='2nd Sem' required='' type='text'  readonly='' value='2nd'/></td>
					<td width='5%'><input id='atd2' name='atd2' placeholder='00%' required='' type='text' readonly=''  value='$atd2'
					maxlength='6' minlength='2' pattern='[0-9.%]+'/></td>
		<td width='5%'><select class='select-style genderR' name='result2' id='result2' style='width:110PX; margin-bottom:20PX;' onChange='onSelectChange2()'>
            		<option >$result2</option>
					<option value='PASS'>PASS</option>
           			<option value='DUE'>DUE</option></select></td>
					<td width='5%'><input id='due2' name='due2' placeholder='sub1,sub2,...!' required='' type='text' readonly=''  value='$due2'/></td>
					<td width='5%'><input id='max2' name='max2' placeholder='Max Marks' required='' type='text' readonly=''  value='$max2'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='obt2' name='obt2' placeholder='Obtained Marks' required='' type='text' readonly=''  value='$obt2'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='perc2' name='perc2' placeholder='Percentage' required='' type='text' readonly=''  value='$perc2'
					maxlength='6' minlength='2' pattern='[0-9.%]+' onFocus='sem2()'/></td>
				
				</tr>
		
		   		
				<tr>
				  	<td width='5%'><input id='3rd' name='3rd' placeholder='3rd Sem' required='' type='text'  readonly='' value='3rd'/></td>
					<td width='5%'><input id='atd3' name='atd3' placeholder='00%' required='' type='text' readonly=''  value='$atd3'
					maxlength='6' minlength='2' pattern='[0-9.%]+'/></td>
		<td width='5%'><select class='select-style genderR' name='result3' id='result3' style='width:110PX; margin-bottom:20PX;' onChange='onSelectChange3()'>
            		<option >$result3</option>
					<option value='PASS'>PASS</option>
           			<option value='DUE'>DUE</option></select></td>
					<td width='5%'><input id='due3' name='due3' placeholder='sub1,sub2,...!' required='' type='text' readonly=''  value='$due3'/></td>
					<td width='5%'><input id='max3' name='max3' placeholder='Max Marks' required='' type='text' readonly=''  value='$max3'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='obt3' name='obt3' placeholder='Obtained Marks' required='' type='text' readonly=''  value='$obt3'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='perc3' name='perc3' placeholder='Percentage' required='' type='text' readonly=''  value='$perc3'
					maxlength='6' minlength='2' pattern='[0-9.%]+' onFocus='sem3()'/></td>
				
				</tr>
				
				
				<tr>
		   			<td width='5%'><input id='4th' name='4th' placeholder='4th Sem ' required='' type='text' readonly=''  value='4th'/></td>
					<td width='5%'><input id='atd4' name='atd4' placeholder='00%' required='' type='text' readonly=''  value='$atd4'
					maxlength='6' minlength='2' pattern='[0-9.%]+'/></td>
		<td width='5%'><select class='select-style genderR' name='result4' id='result4' style='width:110PX; margin-bottom:20PX;' onChange='onSelectChange4()'>
            		<option >$result4</option>
					<option value='PASS'>PASS</option>
           			<option value='DUE'>DUE</option></select></td>
					<td width='5%'><input id='due4' name='due4' placeholder='sub1,sub2,...!' required='' type='text' readonly=''  value='$due4'/></td>
					<td width='5%'><input id='max4' name='max4' placeholder='Max Marks' required='' type='text' readonly=''  value='$max4'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='obt4' name='obt4' placeholder='Obtained Marks' required='' type='text' readonly=''  value='$obt4'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='perc4' name='perc4' placeholder='Percentage' required='' type='text' readonly=''  value='$perc4'
					maxlength='6' minlength='2' pattern='[0-9.%]+' onFocus='sem4()'/></td>
				</tr>
		
				
				<tr>
		   			<td width='5%'><input id='5th' name='5th' placeholder='5th Sem ' required='' type='text'  readonly='' value='5th'/></td>
					<td width='5%'><input id='atd5' name='atd5' placeholder='00%' required='' type='text' readonly=''  value='$atd5'
					maxlength='6' minlength='2' pattern='[0-9.%]+'/></td>
		<td width='5%'><select class='select-style genderR' name='result5' id='result5' style='width:110PX; margin-bottom:20PX;' onChange='onSelectChange5()'>
            		<option >$result5</option>
					<option value='PASS'>PASS</option>
           			<option value='DUE'>DUE</option></select></td>
					<td width='5%'><input id='due5' name='due5' placeholder='sub1,sub2,...!' required='' type='text' readonly=''  value='$due5'/></td>
					<td width='5%'><input id='max5' name='max5' placeholder='Max Marks' required='' type='text' readonly=''  value='$max5'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='obt5' name='obt5' placeholder='Obtained Marks' required='' type='text' readonly=''  value='$obt5'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='perc5' name='perc5' placeholder='Percentage' required='' type='text' readonly=''  value='$perc5'
					maxlength='6' minlength='2' pattern='[0-9.%]+' onFocus='sem5()'/></td>
				</tr>
				
	
				
				<tr>
		   			<td width='5%'><input id='6th' name='6th' placeholder='6th Sem ' required='' type='text'  readonly=''  value='6th'/></td>
					<td width='5%'><input id='atd6' name='atd6' placeholder='00%' required='' type='text' readonly=''  value='$atd6'
					maxlength='6' minlength='2' pattern='[0-9.%]+'/></td>
		<td width='5%'><select class='select-style genderR' name='result6' id='result6' style='width:110PX; margin-bottom:20PX;' onChange='onSelectChange6()' readonly=''  value=''>
            		<option >$result6</option>
					<option value='PASS'>PASS</option>
           			<option value='DUE'>DUE</option></select></td>
					<td width='5%'><input id='due6' name='due6' placeholder='sub1,sub2,...!' required='' type='text' readonly=''  value='$due6' readonly=''/></td>
					<td width='5%'><input id='max6' name='max6' placeholder='Max Marks' required='' type='text' readonly=''  value='$max6'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='obt6' name='obt6' placeholder='Obtained Marks' required='' type='text' readonly=''  value='$obt6'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='perc6' name='perc6' placeholder='Percentage' required='' type='text' readonly=''  value='$perc6'
					maxlength='6' minlength='2' pattern='[0-9.%]+' onFocus='sem6()'/></td>
				</tr>
		   		</table>
		   
		   <br><br>
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