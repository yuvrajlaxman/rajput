<?php


$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
mysqli_select_db($conn,"stu");
if(isset($_REQUEST["SUBMIT"]))
	{ 

		$enroll = $_REQUEST['enroll'];
		$depart = $_REQUEST['depart'];
		$departmentt= $_REQUEST['departmentt'];
		$tenth = $_REQUEST['tenth']; 
		$bord = $_REQUEST['bord']; 
		$rollno = $_REQUEST['rollno']; 
		$passyear = $_REQUEST['passyear'];
		$maxmark = $_REQUEST['maxmark'];
		$obtmark = $_REQUEST['obtmark'];
		$perc = $_REQUEST['perc'];
		
		
				
		$twelth = $_REQUEST['twelth']; 
		$bord12 = $_REQUEST['bord12']; 
		$rollno12 = $_REQUEST['rollno12']; 
		$passyear12 = $_REQUEST['passyear12'];
		$maxmark12 = $_REQUEST['maxmark12'];
		$obtmark12 = $_REQUEST['obtmark12'];
		$perc12 = $_REQUEST['perc12'];
		
		
		
		
		//ug
		$gradution = $_REQUEST['gradution']; 
		$univ = $_REQUEST['univ']; 
		$rollno13 = $_REQUEST['rollno13']; 
		$passyear13 = $_REQUEST['passyear13'];
		$maxmark13 = $_REQUEST['maxmark13'];
		$obtmark13 = $_REQUEST['obtmark13'];
		$perc13 = $_REQUEST['perc13'];
		
		//pg
		$pg = $_REQUEST['pg']; 
		$univpg = $_REQUEST['univpg']; 
		$rollnopg = $_REQUEST['rollnopg']; 
		$passyearpg = $_REQUEST['passyearpg'];
		$maxmarkpg = $_REQUEST['maxmarkpg'];
		$obtmarkpg = $_REQUEST['obtmarkpg'];
		$percpg = $_REQUEST['percpg'];
		
		//diploma
		$dp = $_REQUEST['dp']; 
		$univdp = $_REQUEST['univdp']; 
		$rollnodp = $_REQUEST['rollnodp']; 
		$passyeardp = $_REQUEST['passyeardp'];
		$maxmarkdp = $_REQUEST['maxmarkdp'];
		$obtmarkdp = $_REQUEST['obtmarkdp'];
		$percdp = $_REQUEST['percdp'];
		
		
		
		
		
		
		
		 

$q="INSERT INTO edu (enroll,department,depart,tenth,bord,rollno,passyear,maxmark,obtmark,perc,twelth,bord12,rollno12,passyear12,maxmark12,obtmark12,perc12,gradution,univ,rollno13,passyear13,maxmark13,obtmark13,perc13,pg,univpg,rollnopg,passyearpg,maxmarkpg,obtmarkpg,percpg,dp,univdp,rollnodp,passyeardp,maxmarkdp,obtmarkdp,percdp)VALUES('$enroll','$departmentt','$depart','$tenth','$bord','$rollno','$passyear','$maxmark','$obtmark','$perc','$twelth','$bord12','$rollno12','$passyear12','$maxmark12','$obtmark12','$perc12','$gradution','$univ','$rollno13','$passyear13','$maxmark13','$obtmark13','$perc13','$pg','$univpg','$rollnopg','$passyearpg','$maxmarkpg','$obtmarkpg','$percpg','$dp','$univdp','$rollnodp','$passyeardp','$maxmarkdp','$obtmarkdp','$percdp')";


		 

		$data = mysqli_query ($conn,$q);
		
		if ($data) 
	

			{
			echo "<script>alert('ADD SUCCESSFULLY')</script>";	
				header( "refresh:0.001; url=form.php" ); 
				
			}
			else
			{
			echo "<script>alert('Student Alrady Exist Or Not Registered')</script>";
			header( "refresh:0.001; url=edu.php" ); 
			}
}


?>







