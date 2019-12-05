<?php
session_start();

if($_SESSION["uname"]==true)
{

}
else
{
header('location:admin.php');
}
?>


<html>
<head><title>ADMIN</title>
<link href="main.css" rel="stylesheet" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />


</head>
<style>

input[type=text]{
    width: 76%;
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
    width: 1120px;
}


.f1{ background-image:url(13.jpg); background-size:100% 100%; background-repeat:no-repeat; border:solid;	}

.f2{ background-image:url(5.jpg); background-size:8.5% 100%;background-position:top right; background-repeat:no-repeat; padding-right:20px; border:solid;}

.f22{ background-image:url(5.jpg); background-size:100% 100%; background-repeat:no-repeat; border:#00FF33;}

 .h{   position: relative; text-align:left top; start;}
 .g{ background-position:bottom-left;}


.button2 {padding: 15px 25px; font-size: 24px;text-align: center; color:#330099; background-color:#CCCC99; border: none; border-radius: 15px;box-shadow: 0 5px #225; }
.button2:active{ background-color:#669933; box-shadow: 0 5px #666;transform: translateY(4px);}

</style>
<body>

<table border="5"  height="100%" width="100%">

<td class="f2" width="100%" height="20%" bgcolor="#000000">

<div class="f22 circle" style=" border:none; width:8%; height:100%; overflow: hidden; display: block; clear: both; float:left;" bgcolor="#3"></div>
	 <h4 align="left"><font style="color:red ; margin-left:30px; float:left;" >  <?php  echo("ADMIN"); ?> </font></h4>
	  <h3 align="left"><font style="color:white ; padding: 24%;">  <?php  echo("SIR PADAMPAT SINGHANIA UNIVERSITY"); ?> 	 </font></h3>		

<h3 class="h" align="CENTER"><font color="white" ALIGN="CENTER">STUDENT MANAGEMENT SYSTEM</font></h3>

<ul class="menu">
                <li> <a href="admin.php" class="g">Home</a></li>
                <li><a href="#s1">Faculty</a>
                    <ul class="submenu">
                        <li><a href="regf.php">Add New</a></li>
                        <li><a href="facultuss.php">Update</a></li>
                        <li><a href="deletef.php">Delete</a></li>
                        <li><a href="facultys.php">View All</a></li>
                    </ul>
                </li>
				
				 <li><a href="#s1">Student</a>
                    <ul class="submenu">
                        <li><a href="form.php">Add New</a></li>
						<li><a href="sem.php">Semester</a></li>
                        <li><a href="update.php">Update</a></li>
                        <li><a href="delete.php">Delete</a></li>
						 <li><a href="serch.php">Search</a></li>
                        <li><a href="view.php">View All</a></li>
                    </ul>
                </li>
				<li><a href="#" class="g">Course </a>
				<ul class="submenu">
                        <li><a href="mtech.php">m.tech</a></li>
                        <li><a href="btech.php">b.tech</a></li>
                        <li><a href="mba.php">mba</a></li>
                        <li><a href="mca.php">mca</a></li>
						<li><a href="msc.php">msc</a></li>
                        <li><a href="bcom.php">b.com</a></li>
                    </ul>
					</li>
				<li><a href="mail.php" class="g">Send Mail </a></li>
				<li><a href="query1.php" class="g">QUERY</a></li>
				<li><a href="logout.php" class="g">LOGOUT </a></li>
				                
</ul>

</td>

<tr>
<td class="f1" width="100%" height="418" background-size:100% 100%>

<form >

  <div class="container">
  
   <div class="form-group">
   
    <div class="input-group" style="height:25%; width: 90%; border:none;">
     <center>
     <input type="text" name="search_text" id="search_text" placeholder="Search .........................." class="form-control" />
   </center>
    </div>
	 
   </div>
  
   <div id="result" style="height:80%;"></div>
   <p style="padding-bottom:300px;">&nbsp;
  </p>
  </div>


</form>
</td>
</tr>
</table>
</body>
</html>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
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
