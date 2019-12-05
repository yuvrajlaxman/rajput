<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile fetch</title> 
</head>
<body>
<?php
$result = mysqli_query($db,"SELECT * FROM register");
?>
<table>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<tr><td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';  ?></td></tr>
<?php
}
?>
</table>
</body>
</html>
