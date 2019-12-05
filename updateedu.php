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



/**
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu";
	
	$db=mysql_connect("localhost","root","","stu");
	$conn = new mysqli($servername, $username, $password, $dbname); */

	$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
	mysqli_select_db($conn,"stu");
	
	$sel="select * from edu  WHERE enroll='$unm'";
	$result = $conn->query($sel);
	
	
	if ($result->num_rows > 0)
	{
   		
   		 while($row = $result->fetch_assoc()) 
		 	{
			
		
		$enroll = $row['enroll'];
		$depart = $row['depart'];
		$departmentt= $row['department'];
		$tenth = $row['tenth']; 
		$bord = $row['bord']; 
		$rollno = $row['rollno']; 
		$passyear = $row['passyear'];
		$maxmark = $row['maxmark'];
		$obtmark = $row['obtmark'];
		$perc = $row['perc'];
		
		//12 th
				
		$twelth = $row['twelth']; 
		$bord12 = $row['bord12']; 
		$rollno12 = $row['rollno12']; 
		$passyear12 = $row['passyear12'];
		$maxmark12 = $row['maxmark12'];
		$obtmark12 = $row['obtmark12'];
		$perc12 = $row['perc12'];
		
		
		
		
		//ug
		$gradution = $row['gradution']; 
		$univ = $row['univ']; 
		$rollno13 = $row['rollno13']; 
		$passyear13 = $row['passyear13'];
		$maxmark13 = $row['maxmark13'];
		$obtmark13 = $row['obtmark13'];
		$perc13 = $row['perc13'];
		
		//pg
		$pg = $row['pg']; 
		$univpg = $row['univpg']; 
		$rollnopg = $row['rollnopg']; 
		$passyearpg = $row['passyearpg'];
		$maxmarkpg = $row['maxmarkpg'];
		$obtmarkpg = $row['obtmarkpg'];
		$percpg = $row['percpg'];
		
		//diploma
		$dp = $row['dp']; 
		$univdp = $row['univdp']; 
		$rollnodp = $row['rollnodp']; 
		$passyeardp = $row['passyeardp'];
		$maxmarkdp = $row['maxmarkdp'];
		$obtmarkdp = $row['obtmarkdp'];
		$percdp = $row['percdp'];
		
			



echo"<html>
<head>
<script  type='text/javascript' src='sum.js'></script>
<script  type='text/javascript' src='eduu.js'></script>



<title> UPDATE EDUCATION DETAILS</title>
    <link rel='stylesheet' type='text/css' href='style1.css' media='all' />
    <link rel='stylesheet' type='text/css' href='demo1.css' media='all' />


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
				<h1 align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UPDATE STUDENT EDUCATION DETAILS </h1>
				<h1 align='left'><font style='color:red' ></font></h1>
            </header>  
			
			<button' name='BACK' id='BACK' style='width:auto; margin-left:200px;' ><a href='update.php'><font size='+2' color='red' ><center><strong>BACK</strong></center></font></a></button> 

			      
      <div  class='di form' >
	  
    		<form id='contactform' method='POST' onSubmit='return validate(); ' action='updateeduu.php'> 
    			
				  
<input id='enroll' name='enroll' value='$enroll' style='color:#FF0000; width:130px;' placeholder='Enroll No' required=''  type='text' tabindex='1'  readonly=''> 
<input id='department' name='department' value='$departmentt' style='color:#FF0000; width:130px; margin-left:950px;' placeholder='department' required=''  type='text' tabindex='1' readonly='' > <br>
<br>
				
				<center><font color='#996633' size='+2'>Higher Education</font> <br><br>
           		 <select class='select-style gender' name='depart' id='depart' onChange='onSelectChange()'>
            	<option >$depart</option>
            	<option value='10 th'>10 th</option>
           		<option value='12 th'>12 th</option>
           		<option value='Gradution'>Gradution</option>
            	<option value='Post Gradution'>Post Gradution</option>
            	</select><br><br><BR>
			
          
		   <table width='100%' height='10%'>
		   		<tr>
		   			<td width='5%'>	<p class='contact'><label for='user'>Qualification</label></p> </td>
					<td width='5%'>	<p class='contact'><label for='user'>Name Of Bord</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Roll_No</label></p></td>
					<td  width='5%'>	<p class='contact'><label for='user'>Passing Year</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Max Marks</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Obtained Marks</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Percentage</label></p></td>
		   		</tr>
				
				
				<tr>
		   			<td width='5%'><input id='tenth' name='tenth' placeholder='10 th' required='' type='text' readonly='' value='$tenth' 
					pattern='[A-Za-z 0-9]+'/></td>
					<td width='5%'><input id='bord' name='bord' placeholder='BORD' required='' type='text' readonly='' value='$bord'
					pattern='[A-Za-z , . 0-9]+'/></td>
					<td width='5%'><input id='rollno' name='rollno' placeholder='0000000' required='' type='text' readonly='' value='$rollno'
					maxlength='15' minlength='3' pattern='[A-Za-z ,-_ . 0-9]+'/></td>
					<td width='5%'><input id='passyear' name='passyear' placeholder='0000' required='' type='text' readonly='' value='$passyear'
					maxlength='5' minlength='4' pattern='[0-9]+'/></td>
					<td width='5%'><input id='maxmark' name='maxmark' placeholder='Max Marks' required='' type='text' readonly='' value='$maxmark'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='obtmark' name='obtmark' placeholder='Obtained Marks' required='' type='text' readonly='' value='$obtmark'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='perc' name='perc' placeholder='Percentage' required='' type='text' readonly='' value='$perc'
					maxlength='6' minlength='2' pattern='[0-9.%]+' onFocus='sum()'/></td>
				</tr>
		
		   		
				
				<tr>
				  	<td width='5%'><input id='twelth' name='twelth' placeholder='12 th' required='' type='text' value='12 th'  readonly='' value='$twelth'
					pattern='[A-Za-z 0-9]+'/></td>
					<td width='5%'><input id='bord12' name='bord12' placeholder='BORD' required='' type='text' readonly='' value='$bord12'
					pattern='[A-Za-z , . 0-9]+'/></td>
					<td width='5%'><input id='rollno12' name='rollno12' placeholder='0000000' required='' type='text' readonly='' value='$rollno12'
					maxlength='15' minlength='3' pattern='[A-Za-z ,-_ . 0-9]+'/></td>
					<td width='5%'><input id='passyear12' name='passyear12' placeholder='0000' required='' type='text' readonly='' value='$passyear12'
					maxlength='5' minlength='4' pattern='[0-9]+'/></td>
					<td width='5%'><input id='maxmark12' name='maxmark12' placeholder='Max Marks' required='' type='text' readonly='' value='$maxmark12'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='obtmark12' name='obtmark12' placeholder='Obtained Marks' required='' type='text' readonly='' value='$obtmark12'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='perc12' name='perc12' placeholder='Percentage' required='' type='text' readonly='' value='$perc12'
					maxlength='6' minlength='2' pattern='[0-9.%]+' onFocus='sum2()'/></td>
				
				</tr>
		     
              
		   
		   </table>
		   
		   <font color='#996633' size='+2'>Gradution Details</font> <br><br>
		      <table width='100%' height='10%'>
		   		<tr>
		   			<td width='5%'>	<p class='contact'><label for='user'>Qualification</label></p> </td>
					<td width='5%'>	<p class='contact'><label for='user'>Name Of University</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Roll_No</label></p></td>
					<td  width='5%'>	<p class='contact'><label for='user'>Passing Year</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Max Marks</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Obtained Marks</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Percentage</label></p></td>
		   		</tr>
				
				
				<tr>
		   			<td width='5%'><input id='gradution' name='gradution' placeholder='Course Name ' required='' type='text' readonly='' value='$gradution'
					pattern='[A-Za-z 0-9._]+'/></td>
					<td width='5%'><input id='univ' name='univ' placeholder='University' required='' type='text' readonly='' value='$univ'
					pattern='[A-Za-z , . 0-9]+'/></td>
					<td width='5%'><input id='rollno13' name='rollno13' placeholder='0000000' required='' type='text' readonly='' value='$rollno13'
					maxlength='15' minlength='3' pattern='[A-Za-z ,-_ . 0-9]+'/></td>
					<td width='5%'><input id='passyear13' name='passyear13' placeholder='0000' required='' type='text' readonly='' value='$passyear13'
					maxlength='5' minlength='4' pattern='[0-9]+'/></td>
					<td width='5%'><input id='maxmark13' name='maxmark13' placeholder='Max Marks' required='' type='text' readonly='' value='$maxmark13'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='obtmark13' name='obtmark13' placeholder='Obtained Marks' required='' type='text' readonly='' value='$obtmark13'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='perc13' name='perc13' placeholder='Percentage' required='' type='text' readonly='' value='$perc13'
					maxlength='6' minlength='2' pattern='[0-9.%]+' onFocus='sum3()'/></td>
				</tr>
		   		</table>
				
				 <font color='#996633' size='+2'>Post Gradution Details</font> <br><br>
		      <table width='100%' height='10%'>
		   		<tr>
		   			<td width='5%'>	<p class='contact'><label for='user'>Qualification</label></p> </td>
					<td width='5%'>	<p class='contact'><label for='user'>Name Of University</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Roll_No</label></p></td>
					<td  width='5%'>	<p class='contact'><label for='user'>Passing Year</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Max Marks</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Obtained Marks</label></p></td>
					<td width='5%'>	<p class='contact'><label for='user'>Percentage</label></p></td>
		   		</tr>
				
				
				<tr>
		   			<td width='5%'><input id='pg' name='pg' placeholder='Course Name ' required='' type='text' readonly='' value='$pg'
					pattern='[A-Za-z 0-9._]+'/></td>
					<td width='5%'><input id='univpg' name='univpg' placeholder='University' required='' type='text' readonly='' value='$univpg'
					pattern='[A-Za-z , . 0-9]+'/></td>
					<td width='5%'><input id='rollnopg' name='rollnopg' placeholder='0000000' required='' type='text' readonly='' value='$rollnopg'
					maxlength='15' minlength='3' pattern='[A-Za-z ,-_ . 0-9]+'/></td>
					<td width='5%'><input id='passyearpg' name='passyearpg' placeholder='0000' required='' type='text' readonly='' value='$passyearpg'
					maxlength='5' minlength='4' pattern='[0-9]+'/></td>
					<td width='5%'><input id='maxmarkpg' name='maxmarkpg' placeholder='Max Marks' required='' type='text' readonly='' value='$maxmarkpg'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='obtmarkpg' name='obtmarkpg' placeholder='Obtained Marks' required='' type='text' readonly='' value='$obtmarkpg'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='percpg' name='percpg' placeholder='Percentage' required='' type='text' readonly='' value='$percpg'
					maxlength='6' minlength='2' pattern='[0-9.%]+' onFocus='sum4()'/></td>
				</tr>
		   		</table>
				 <font color='#996633' size='+2'>If You Done Any Diploma</font> <br><br>
				<input value='aa' type='radio' name='diploma' id='yes' onChange='onRadio()' />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 				<input value='bb' type='radio' name='diploma' id='no' onChange='onRadio1()'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO
				<table width='100%' height='10%'>
				<tr>
					
		
				
		   			<td width='5%'><input id='dp' name='dp' placeholder='Course Name ' required='' type='text' readonly='' value='$dp'
					pattern='[A-Za-z 0-9._]+'/></td>
					<td width='5%'><input id='univdp' name='univdp' placeholder='University' required='' type='text' readonly='' value='$univdp'
					pattern='[A-Za-z , . 0-9]+'/></td>
					<td width='5%'><input id='rollnodp' name='rollnodp' placeholder='0000000' required='' type='text' readonly='' value='$rollnodp'
					maxlength='15' minlength='3' pattern='[A-Za-z ,-_ . 0-9]+'/></td>
					<td width='5%'><input id='passyeardp' name='passyeardp' placeholder='0000' required='' type='text' readonly='' value='$passyeardp'
					maxlength='5' minlength='4' pattern='[0-9]+'/></td>
					<td width='5%'><input id='maxmarkdp' name='maxmarkdp' placeholder='Max Marks' required='' type='text' readonly='' value='$maxmarkdp'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='obtmarkdp' name='obtmarkdp' placeholder='Obtained Marks' required='' type='text' readonly='' value='$obtmarkdp'
					maxlength='5' minlength='2' pattern='[0-9]+'/></td>
					<td width='5%'><input id='percdp' name='percdp' placeholder='Percentage' required='' type='text' readonly='' value='$percdp'
					maxlength='6' minlength='2' pattern='[0-9.%]+' onFocus='sum5()'/></td>
				</tr>
		   		</table>
		   
		   <br><br>
		    <input type='hidden' alt='unam' name='unam' value='$unm' id='unam' >
		
			
            <input class='buttom' name='UPDATE' id='UPDATE' tabindex='1' value='UPDATE' type='submit' style='margin-left:0px;'> 	
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
