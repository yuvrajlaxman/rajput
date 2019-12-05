<?php

session_start();

if($_SESSION["enrollno"]==true)
{

}
else
{
header('location:form.php');
}


$enrollno= $_SESSION["enrollno"];
$department= $_SESSION["department"];

?>


<!DOCTYPE html>
<html>
<head>

<script  type="text/javascript" src="form.js"></script>

<script  type="text/javascript" src="sum.js"></script>


<title>EDUCATION DETAILS</title>
    <link rel="stylesheet" type="text/css" href="style1.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo1.css" media="all" />


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
				<h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NEW STUDENT EDUCATION DETAILS </h1>
				<h1 align="left"><font style="color:red" ></font></h1>
            </header>        
      <div  class="di form" >
	  
    		<form id="contactform" method="POST" onSubmit="return validate(); " action="edudb.php"> 
    			
				  
<input id="enroll" name="enroll" value="<?php echo htmlentities($enrollno); ?>" style="color:#FF0000; width:130px;" placeholder="Enroll No"   type="text" tabindex="1" >
<input id="departmentt" name="departmentt" value="<?php echo htmlentities($department); ?>" style="color:#FF0000; width:130px; margin-left:950px;" placeholder="department" required=""  type="text" tabindex="1"  > <br>
				
				<center><font color="#996633" size="+2">Higher Education</font> <br><br>
           		 <select class="select-style gender" name="depart" id="depart" onChange="onSelectChange()">
            	<option >Qualification..</option>
            	<option value="10 th">10 th</option>
           		<option value="12 th">12 th</option>
           		<option value="Gradution">Gradution</option>
            	<option value="Post Gradution">Post Gradution</option>
            	</select><br><br><BR>
			
          
		   <table width="100%" height="10%">
		   		<tr>
		   			<td width="5%">	<p class="contact"><label for="user">Qualification</label></p> </td>
					<td width="5%">	<p class="contact"><label for="user">Name Of Bord</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Roll_No</label></p></td>
					<td  width="5%">	<p class="contact"><label for="user">Passing Year</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Max Marks</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Obtained Marks</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Percentage</label></p></td>
		   		</tr>
				
				
				<tr>
		<td width="5%"><input id="tenth" name="tenth" placeholder="10 th" required="" type="text" readonly="" value="10 th" pattern="[A-Za-z 0-9]+" /></td>
		<td width="5%"><input id="bord" name="bord" placeholder="BORD" required="" type="text" readonly="" pattern="[A-Za-z , . 0-9]+"/></td>
		<td width="5%"><input id="rollno" name="rollno" placeholder="0000000" required="" type="text" readonly="" maxlength="15" minlength="3" pattern="[A-Za-z ,-_ . 0-9]+"/></td>
		<td width="5%"><input id="passyear" name="passyear" placeholder="0000" required="" type="text" readonly="" maxlength="5" minlength="4" pattern="[0-9]+"/></td>
		<td width="5%"><input id="maxmark" name="maxmark" placeholder="Max Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
		<td width="5%"><input id="obtmark" name="obtmark" placeholder="Obtained Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
		<td width="5%"><input id="perc" name="perc" placeholder="Percentage" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+" onFocus="sum()"/></td>
				</tr>
		   		
				
				<tr>
				  	<td width="5%"><input id="twelth" name="twelth" placeholder="12 th" required="" type="text"  readonly="" value="12th" pattern="[A-Za-z 0-9]+"/></td>
					<td width="5%"><input id="bord12" name="bord12" placeholder="BORD" required="" type="text" readonly="" pattern="[A-Za-z , . 0-9]+"/></td>
	<td width="5%"><input id="rollno12" name="rollno12" placeholder="0000000" required="" type="text" readonly="" maxlength="15" minlength="3" pattern="[A-Za-z ,-_ . 0-9]+"/></td>
		<td width="5%"><input id="passyear12" name="passyear12" placeholder="0000" required="" type="text" readonly="" maxlength="5" minlength="4" pattern="[0-9]+"/></td>
		<td width="5%"><input id="maxmark12" name="maxmark12" placeholder="Max Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
		<td width="5%"><input id="obtmark12" name="obtmark12" placeholder="Obtained Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
		<td width="5%"><input id="perc12" name="perc12" placeholder="Percentage" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+" onFocus="sum2()"/></td>
				
				</tr>
		     
              
		   
		   </table>
		   
		   <font color="#996633" size="+2">Gradution Details</font> <br><br>
		      <table width="100%" height="10%">
		   		<tr>
		   			<td width="5%">	<p class="contact"><label for="user">Qualification</label></p> </td>
					<td width="5%">	<p class="contact"><label for="user">Name Of University</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Roll_No</label></p></td>
					<td  width="5%">	<p class="contact"><label for="user">Passing Year</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Max Marks</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Obtained Marks</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Percentage</label></p></td>
		   		</tr>
				
				
				<tr>
		  <td width="5%"><input id="gradution" name="gradution" placeholder="Course Name " required="" type="text" readonly="" pattern="[A-Za-z 0-9._]+"/></td>
		<td width="5%"><input id="univ" name="univ" placeholder="University" required="" type="text" readonly="" pattern="[A-Za-z , . 0-9]+"/></td>
	<td width="5%"><input id="rollno13" name="rollno13" placeholder="0000000" required="" type="text" readonly="" maxlength="15" minlength="3" pattern="[A-Za-z ,-_ . 0-9]+"/></td>
	<td width="5%"><input id="passyear13" name="passyear13" placeholder="0000" required="" type="text" readonly="" maxlength="5" minlength="4" pattern="[0-9]+"/></td>
	<td width="5%"><input id="maxmark13" name="maxmark13" placeholder="Max Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="obtmark13" name="obtmark13" placeholder="Obtained Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="perc13" name="perc13" placeholder="Percentage" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+" onFocus="sum3()"/></td>
				</tr>
		   		</table>
				
				 <font color="#996633" size="+2">Post Gradution Details</font> <br><br>
		      <table width="100%" height="10%">
		   		<tr>
		   			<td width="5%">	<p class="contact"><label for="user">Qualification</label></p> </td>
					<td width="5%">	<p class="contact"><label for="user">Name Of University</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Roll_No</label></p></td>
					<td  width="5%">	<p class="contact"><label for="user">Passing Year</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Max Marks</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Obtained Marks</label></p></td>
					<td width="5%">	<p class="contact"><label for="user">Percentage</label></p></td>
		   		</tr>
				
				
				<tr>
		   			<td width="5%"><input id="pg" name="pg" placeholder="Course Name " required="" type="text" readonly="" pattern="[A-Za-z 0-9._]+"/></td>
					<td width="5%"><input id="univpg" name="univpg" placeholder="University" required="" type="text" readonly="" pattern="[A-Za-z , . 0-9]+"/></td>
	<td width="5%"><input id="rollnopg" name="rollnopg" placeholder="0000000" required="" type="text" readonly="" maxlength="15" minlength="3" pattern="[A-Za-z ,-_ . 0-9]+"/></td>
	<td width="5%"><input id="passyearpg" name="passyearpg" placeholder="0000" required="" type="text" readonly="" maxlength="5" minlength="4" pattern="[0-9]+"/></td>
	<td width="5%"><input id="maxmarkpg" name="maxmarkpg" placeholder="Max Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="obtmarkpg" name="obtmarkpg" placeholder="Obtained Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="percpg" name="percpg" placeholder="Percentage" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+" onFocus="sum4()"/></td>
				</tr>
		   		</table>
				 <font color="#996633" size="+2">If You Done Any Diploma</font> <br><br>
				<input value="aa" type="radio" name="diploma" id="yes" onChange="onRadio()" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 				<input value="bb" type="radio" name="diploma" id="no" onChange="onRadio1()"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO
				<table width="100%" height="10%">
				<tr>
		   			<td width="5%"><input id="dp" name="dp" placeholder="Course Name " required="" type="text" readonly="" pattern="[A-Za-z 0-9._]+" /></td>
					<td width="5%"><input id="univdp" name="univdp" placeholder="University" required="" type="text" readonly="" pattern="[A-Za-z , . 0-9]+"/></td>
	<td width="5%"><input id="rollnodp" name="rollnodp" placeholder="0000000" required="" type="text" readonly="" maxlength="15" minlength="3" pattern="[A-Za-z ,-_ . 0-9]+"/></td>
	<td width="5%"><input id="passyeardp" name="passyeardp" placeholder="0000" required="" type="text" readonly="" maxlength="5" minlength="4" pattern="[0-9]+"/></td>
	<td width="5%"><input id="maxmarkdp" name="maxmarkdp" placeholder="Max Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="obtmarkdp" name="obtmarkdp" placeholder="Obtained Marks" required="" type="text" readonly="" maxlength="5" minlength="2" pattern="[0-9]+"/></td>
	<td width="5%"><input id="percdp" name="percdp" placeholder="Percentage" required="" type="text" readonly="" maxlength="6" minlength="2" pattern="[0-9.%]+" onFocus="sum5()"/></td>
				</tr>
		   		</table>
		   
		   <br><br>
		    <input class="buttom" name="SUBMIT" id="SUBMIT" tabindex="5" value="SUBMIT" type="submit" style="margin-left:10px;"> 
			<input class="buttom" name="RESET" id="reset" tabindex="5" value=" RE-SET " type="RESET"  style="margin-left:700px;"> 
			    </form> 

</div>      
</div>
</body>
</html>