<?php
session_start();

if($_SESSION["uname"]==true)
{

}
else
{
header('location:stu.php');
}


?>
<html>
<head>



<title>Semester Details</title>
    <link rel="stylesheet" type="text/css" href="style1.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo1.css" media="all" />
<script  type="text/javascript" src="sem.js"></script>
<script  type="text/javascript" src="sum.js"></script>

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
				<h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Semester Details </h1>
            </header>        
      <div  class="di form" >
	  
    		<form id="contactform" method="POST" onSubmit="return validate();" action="semdb.php"> 
    			
				  
    				<input id="enr" name="enr" placeholder="Enroll No" required=""  style="width:150px; background-color:#669900" type="text" pattern="[A-Za-z0-9]+"> <br>
				
				<center><font color="#996633" size="+2">Select Your Department</font> <br><br>
           		 <select class="select-style gender" name="dep" id="dep"  >
            	<option >Department..</option>
            	<option value="MCA">MCA</option>
           		<option value="MSC">MSC</option>
           		<option value="MBA">MBA</option>
            	<option value="M.TECH">M.TECH</option>
				<option value="B.TECH">B.TECH</option>
				<option value="B.COM">B.COM</option>
            	</select><br><br><BR>
				
				<center><font color="#996633" size="+2">Select Your Branch</font> <br><br>
				<select class="select-style gender" name="branch" id="branch" >
            	<option >Branch..</option>
            	<option value="Computer Science">Computer Science</option>
           		<option value="Chemical Engineering">Chemical Engineering</option>
           		<option value="Computer Science & Engg">Computer Science & Engg</option>
            	<option value="Electronic">Electronic</option>
				<option value="Bio Technology">Bio Technology</option>
				<option value="Civil Engineering">Civil Engineering</option>
				<option value="Energy Technology">Energy Technology</option>
           		<option value="Geo-Science Engineering">Geo-Science EngineeringC</option>
           		<option value="Fire & Safety Engineering">Fire & Safety Engineering</option>
            	<option value="Bio Medical Engineering">Bio Medical Engineering</option>
				<option value="Automobile Engg">Automobile Engg</option>
				<option value="Aeronautical Engg">Aeronautical Engg</option>
            	</select><br><br><BR>
				
				<font color="#996633" size="+2">PASS OUT</font> <br><br>
				 <select class="select-style gender" name="sem" id="sem" onChange="semm()">
            	<option value="select" >select</option>
            	<option value="1st">1st</option>
           		<option value="2nd">2nd</option>
           		<option value="3rd">3rd</option>
            	<option value="4th">4th</option>
				<option value="5th">5th</option>
				<option value="6th">6th</option>
            	</select>
			<br><br>
          
		   <table width="100%" height="10%">
		   		<tr>
		   			<td width="5%">	<p class="contact"><label for="user">Qualification</label></p> </td>
					<td width="5%">	<p class="contact"><label for="user">Total Attendanse %</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Result</label></p></td>
					<td  width="5%">	<p class="contact"><label for="user">Due Sub Name</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Max Marks</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Obtained Marks</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Percentage</label></p></td>
		   		</tr>
				
				
				<tr>
	<td width="5%"><input id="1st" name="1st" placeholder="1st sem" required="" type="text"  readonly="" value="1st"/></td>
	<td width="5%"><input id="atd1" name="atd1" placeholder="00%" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+"/></td>
	<td width="5%"><select class="select-style gender" name="result1" id="result1" style="width:110PX; margin-bottom:20PX;" onChange="onSelectChange1()" readonly="">
            		<option ></option>
					<option value="PASS">PASS</option>
           			<option value="DUE">DUE</option></select></td>
	<td width="5%"><input id="due1" name="due1" placeholder="sub1,sub2,...!" required="" type="text" readonly="" maxlength="100" minlength="2" /></td>
	<td width="5%"><input id="max1" name="max1" placeholder="Max Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="obt1" name="obt1" placeholder="Obtained Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="perc1" name="perc1" placeholder="Percentage" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+" onFocus="sem1()"/></td>
				</tr>
		   		
				
				<tr>
	<td width="5%"><input id="2nd" name="2nd" placeholder="2nd Sem" required="" type="text"  readonly="" value="2nd"/></td>
	<td width="5%"><input id="atd2" name="atd2" placeholder="00%" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+"/></td>
	<td width="5%"><select class="select-style genderR" name="result2" id="result2" style="width:110PX; margin-bottom:20PX;" onChange="onSelectChange2()">
            		<option ></option>
					<option value="PASS">PASS</option>
           			<option value="DUE">DUE</option></select></td>
	<td width="5%"><input id="due2" name="due2" placeholder="sub1,sub2,...!" required="" type="text" readonly=""/></td>
	<td width="5%"><input id="max2" name="max2" placeholder="Max Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="obt2" name="obt2" placeholder="Obtained Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="perc2" name="perc2" placeholder="Percentage" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+" onFocus="sem2()"/></td>
				
				</tr>
		     
      
		   		
				<tr>
				  	<td width="5%"><input id="3rd" name="3rd" placeholder="3rd Sem" required="" type="text"  readonly="" value="3rd"/></td>
					<td width="5%"><input id="atd3" name="atd3" placeholder="00%" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+"/></td>
	<td width="5%"><select class="select-style genderR" name="result3" id="result3" style="width:110PX; margin-bottom:20PX;" onChange="onSelectChange3()" readonly="">
            		<option ></option>
					<option value="PASS">PASS</option>
           			<option value="DUE">DUE</option></select></td>
	<td width="5%"><input id="due3" name="due3" placeholder="sub1,sub2,...!" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+"/></td>
	<td width="5%"><input id="max3" name="max3" placeholder="Max Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="obt3" name="obt3" placeholder="Obtained Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="perc3" name="perc3" placeholder="Percentage" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+" onFocus="sem3()"/></td>
				
				</tr>
				
				
				<tr>
	<td width="5%"><input id="4th" name="4th" placeholder="4th Sem " required="" type="text" readonly="" value="4th" maxlength="6" minlength="2" pattern="[0-9.%]+"/></td>
	<td width="5%"><input id="atd4" name="atd4" placeholder="00%" required="" type="text" readonly=""/></td>
	<td width="5%"><select class="select-style genderR" name="result4" id="result4" style="width:110PX; margin-bottom:20PX;" onChange="onSelectChange4()" readonly="">
            		<option ></option>
					<option value="PASS">PASS</option>
           			<option value="DUE">DUE</option></select></td>
	<td width="5%"><input id="due4" name="due4" placeholder="sub1,sub2,...!" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+"/></td>
	<td width="5%"><input id="max4" name="max4" placeholder="Max Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="obt4" name="obt4" placeholder="Obtained Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="perc4" name="perc4" placeholder="Percentage" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+" onFocus="sem4()"/></td>
				</tr>
		
				
				<tr>
	<td width="5%"><input id="5th" name="5th" placeholder="5th Sem " required="" type="text"  readonly="" value="5th"/></td>
	<td width="5%"><input id="atd5" name="atd5" placeholder="00%" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+"/></td>
	<td width="5%"><select class="select-style genderR" name="result5" id="result5" style="width:110PX; margin-bottom:20PX;" onChange="onSelectChange5()" readonly="">
            		<option ></option>
					<option value="PASS">PASS</option>
           			<option value="DUE">DUE</option></select></td>
	<td width="5%"><input id="due5" name="due5" placeholder="sub1,sub2,...!" required="" type="text" readonly=""/></td>
	<td width="5%"><input id="max5" name="max5" placeholder="Max Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="obt5" name="obt5" placeholder="Obtained Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="perc5" name="perc5" placeholder="Percentage" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+" onFocus="sem5()"/></td>
				</tr>
				
				
				<tr>
	<td width="5%"><input id="6th" name="6th" placeholder="6th Sem " required="" type="text"  readonly="" value="6th"/></td>
	<td width="5%"><input id="atd6" name="atd6" placeholder="00%" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+"/></td>
	<td width="5%"><select class="select-style genderR" name="result6" id="result6" style="width:110PX; margin-bottom:20PX;" onChange="onSelectChange6()" readonly="">
            		<option ></option>
					<option value="PASS">PASS</option>
           			<option value="DUE">DUE</option></select></td>
	<td width="5%"><input id="due6" name="due6" placeholder="sub1,sub2,...!" required="" type="text" readonly="" readonly=""/></td>
	<td width="5%"><input id="max6" name="max6" placeholder="Max Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="obt6" name="obt6" placeholder="Obtained Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="perc6" name="perc6" placeholder="Percentage" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+" onFocus="sem6()"/></td>
				</tr>
		   		</table>
		   
		   <br><br>
		    <input class="buttom" name="submit" id="submit" tabindex="5" value="SUBMIT" type="submit" style="margin-left:10px;"> 
			<input class="buttom" name="reset" id="reset" tabindex="5" value=" RE-SET " type="RESET"  style="margin-left:700px;"> 
			    </form> 

</div>      
</div>
</body>
</html>