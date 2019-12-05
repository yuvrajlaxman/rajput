
<?php
session_start();

if($_SESSION["uname"]==true)
{
header('location:bike.php');

}
else
{
header('location:stu.php');
}
?>


