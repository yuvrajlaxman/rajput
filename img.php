

<?php



$conn=mysql_connect("localhost","root","")or die("not connect to mysql");
$db=mysql_select_db("asd",$conn);


if(isset($_POST['register-btn']))
	{
    $imagename = addslashes($_FILES['image']['name']);
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));   
		$sql="INSERT INTO st(image) VALUES ('$image')";
		$result=mysqli_query($sql);

	}
?> 
<!DOCTYPE html>
<html>
<head>
<title>image insert</title>
</head>
<body>
<form  method="post"  enctype="multipart/form-data">
<table>
<tr><td>Profile</td><td><input type="file" name="image"/></td></tr>
<tr><td><input type="submit" name="register-btn" value="Register" /></td>
<td></td></tr>
</table>
</form>
</body>
</html>