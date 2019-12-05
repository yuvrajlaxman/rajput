<?php
session_start();
$name= $_SESSION["unamef"];

if($_SESSION["unamef"]==true)

{

}
else
{
header('location:stu.php');
}

$conn=mysqli_connect("localhost","root","")or die("not connect to mysql");
$db=mysqli_select_db($conn,"stu");

$result = mysqli_query($conn,"SELECT * FROM faculty where unameff='$name'") or die(mysqli_error()); 
while($row = mysqli_fetch_array($result)) 
{
$img = $row['image'];
$_SESSION["imf"]= '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"" alt=" " height="100%" width="100%"/>';
  
  $imf=$_SESSION["imf"];
} 

?>
<html>
<head><title>STUDENT MANAGEMENT SYSTEM</title>
<link href="main.css" rel="stylesheet" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



</head> 
<style>

.circle {
	
      width: 90px;
      height: 90px;
      -webkit-border-radius: 110px;
      -moz-border-radius: 110px;
      border-radius: 110px;
      background: red;
      border: 5px solid #F90;
    }


table {
    border-collapse: collapse;
	
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

div {
    padding: 1px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}


input[type=text]{
    width: 1100px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 1210px;
}



<!--

/* Full-width input fields */

/* Set a style for all buttons......................................... */
.bu{
    background-color:#666666;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* ------------------------------------------------------------------------------------------------------------------------------------------------ */
.f1{  background-image:url(13.jpg);  background-size:100% 100%; background-repeat:no-repeat; border:solid; 	}

.f2{ background-image:url(5.jpg); background-size:10% 100%;background-position:top right; background-repeat:no-repeat; padding-right:20px; border:solid;}
.f22{ background-image:url(5.jpg); background-size:100% 100%; background-repeat:no-repeat; border:none;}

.f3{ background-image:url(5.jpg); background-size:10% 100%;background-position:top left; background-repeat:no-repeat; padding-right:20px; border:solid;}

 .h{   position: relative; text-align:left top; start;}
 .di{background-color:#CCCCCC}
.button {padding: 15px 25px; font-size: 24px;text-align: center; color:#000000; background-color:#555555; border: none; border-radius: 15px;box-shadow: 0 9px #999; height:50px;}

.button:active { background-color: #3e8e4; box-shadow: 0 5px #666;transform: translateY(4px);}
.button1 {padding: 15px 25px; font-size: 24px;text-align: center; color:#990000; background-color:#000000; border: none; border-radius: 15px;box-shadow: 0 5px #055; }
.button1:active{ background-color:#669933; box-shadow: 0 5px #666;transform: translateY(4px);}

.button2 {padding: 15px 25px; font-size: 24px;text-align: center; color:#330099; background-color:#CCCC99; border: none; border-radius: 15px;box-shadow: 0 5px #225; }
.button2:active{ background-color:#669933; box-shadow: 0 5px #666;transform: translateY(4px);}
-->

</style>
<body>


<div border="5"   style=" border-collapse: collapse; solid; width:100%; height:100%;" >

	<div class="f2" style=" border:none; width:98%; height:25%; border-bottom:#333333;" bgcolor="#3"  >
	<div class="f22 circle" style=" border:none; width:3%; height:40%; overflow: hidden; display: block; clear: both; float:left;" bgcolor="#3">
	<?php echo $imf; ?>

	
	</div>
	
	 <h1 align="left"><font style="color:red ; margin-left:30px; float:left;" >  <?php  echo("$name"); ?> </font></h1>
	  <h1 align="left"><font style="color:white ; margin-left:220px;">  <?php  echo("SIR PADAMPAT SINGHANIA UNIVERSITY"); ?> 			
	</font></h1><h1 class="h" align="CENTER"><font color="white" ALIGN="CENTER">STUDENT MANAGEMENT SYSTEM
	</font>
	</h1>

	



			<a href="faculty.php"><button class="button1 button4" style="width:auto; margin-left:10px;">Home</button></a>
			
			<a href="ssss.php"><button class="button1 button4" style="width:auto; margin-left:10px;">Profile</button></a>
			
			<a href="serchf.php"><button class="button1 button4" style="width:auto; margin-left:10px;">View/Search</button></a>
				
			<a href="about.php"><button class="button1 button4" style="width:auto; margin-left:10px;">About</button></a>
			
			<a href="contact.php"><button class="button1 button4" style="width:auto; margin-left:10px;">Contact</button></a>
		
		<a href="Notification.php">	<button class="button1 button4" style="width:auto; margin-left:10px;">Notification</button></a>
		
			<a href="query.php">	<button class="button1 button4" style="width:auto; margin-left:10px;">Query</button></a>
	
		<a href="logout.php">	<button class="button1 button4" style="width:auto; margin-left:10px;">Log-out</button></a>

	</div>


	<div class="f1" style=" border:none; width:100%; height:75%;" background-size:100% 100%>


<form >
 <div class="container" style=" border:none; width:100%; height:10%;">
  
   <div class="form-group" style="border:none;">
   
    <div class="input-group" style="height:20%; border:none;">
     <center>
     <input type="text" name="search_text" id="search_text" placeholder="Search .........................." class="form-control" />
	 </center>
    </div>
	 
   </div><br><br>
  
   <div id="result" style="height:20%; border:none;"></div>
   <p style="padding-bottom:200px;">&nbsp;
  </p>
  
  


</form>


</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a href="mca1.php"><button class="button"   style="width:auto; margin-left:80px;">MCA</button></a>
<a href="mba1.php"><button class="button"  style="width:auto; margin-left:80px;">MBA</button></a>
<a href="msc1.php"><button class="button"   style="width:auto; margin-left:80px;">MSC</button></a>

<a href="mtech1.php"><button class="button"  style="width:auto; margin-left:80px;">M.TECH</button></a>
<a href="btech1.php"><button class="button"  style="width:auto; margin-left:80px;">B.TECH</button></a>
<a href="bcom1.php"> <button class="button" style="width:auto; margin-left:80px;">B.COM</button></a>

</div>


</body>
</html>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch1.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>