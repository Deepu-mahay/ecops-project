<?php 
$n=$_REQUEST['n'];
$e=$_REQUEST['e'];
$p=$_REQUEST['p'];
$phn=$_REQUEST['phn'];
$dob=$_REQUEST['dob'];
$add=$_REQUEST['address'];
//connect
$con=mysqli_connect("localhost","root","","ecops");
//query
$q="insert into `userregister`(`name`,`email`,`password`,`phone`,`dob`,`address`)value('$n','$e','$p','$phn','$dob','$add')";
//combine
$result=mysqli_query($con,$q);
if($result>0)
{
    header("location:index.php");
}
?>
