<?php
	session_start();
	$namee= $_SESSION["unamef"];
	
	//include 'db.php';
	$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
$db=mysqli_select_db($conn,"stu");

	if(isset($_POST['submit']))
	{
	
    $imagename = addslashes($_FILES['image']['name']);
	$ims= addslashes(file_get_contents($_FILES['image']['tmp_name']));   
	
	  $sql="UPDATE faculty SET image ='$ims' WHERE unameff='$namee'";
		//$result=mysqli_query($sql);

		 $data = mysqli_query ($conn,$sql);
		 
		 if ($data)
		{
			echo "<script>alert('UPDATE SUCCESSFULLY')</script>";
			header( "refresh:0.001; url=faculty.php" ); 	 
		}
			else
		{
			echo "<script>alert('ERROR')</script>";
			header( "refresh:0.001; url=faculty.php" ); 
		}
	}
	
	
?> 

<html>
<head>
<title>FACULTY</title>
    <link rel='stylesheet' type='text/css' href='style.css' media='all' />
    <link rel='stylesheet' type='text/css' href='demo.css' media='all' />
</head>
<body>
<div class='container'>
			
             <div class='freshdesignweb-top'>
                <a href='faculty.php'><font size='+2' ><strong>Home</strong></font></a>
                <span class='right'>
                    <a href='logout.php'>
                        <strong><font size='+2' >logout</font></strong>
                    </a>
                </span>
                
            </div>
			<header>
				<h1>FACULTY UPDATE </h1>
            </header>
       
<button' name='BACK' id='BACK' style='width:auto; margin-left:200px;' ><a href='faculty.php'><font size='+2' color='red' ><center><strong>BACK</strong></center></font></a></button> 
      <div  class='form'>
    		
<form  method="post"  enctype="multipart/form-data" id='contactform'>

<input type="file" name="image" accept="image/jpg, image/jpeg, image/png"/><br><br><br><br><br>
<input class='buttom' name='submit' id='submit' value='UPDATE' type='submit' style='margin-left:130px;'>
</form>
</div>
</CENTER>
</body>
</html>
