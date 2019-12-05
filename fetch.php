<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "stu");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "SELECT * FROM student WHERE name LIKE '%".$search."%' OR fname LIKE '%".$search."%' OR mname LIKE '%".$search."%' OR email LIKE '%".$search."%' 
 OR enrollno LIKE '%".$search."%' OR mobile LIKE '%".$search."%' OR city LIKE '%".$search."%' OR department LIKE '%".$search."%' ";
 
 
	
 

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
	 <th>ENROLL NO</th>
     <th>NAME</th>
     <th>FATHER NAME</th>
     <th>MOTHER NAME</th>
     <th>EMAIL ID</th>
     <th>MOBILE NO</th>
	 <th>CITY</th>
	 <th>DEPARTMENT</th>
	
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {

 		$enrollno = $row['enrollno'];
  		$name = $row['name']; 
		$fname = $row['fname']; 
		$mname = $row['mname']; 
		$email = $row['email'];
		$mobile = $row['mobile'];		
		$city = $row['city'];
		$department = $row['department'];	
		
 
  $output .= '<tr><td>'.$enrollno.'</td><td>'.$name.'</td><td>'.$fname.'</td><td>'.$mname.'</td><td>'.$email.'</td><td>'.$mobile.'</td><td>'.$city.'</td>
  <td>'.$department.'</td></tr>';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
}
?>