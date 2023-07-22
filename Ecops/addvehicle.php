<?php 
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$location=$_REQUEST['location'];
$odate=$_REQUEST['odate'];
$number=$_REQUEST['number'];
$wheeler=$_REQUEST['wheeler'];
$vehicle_status='Pending';
$criminal_status='Pending';
$pic=$_FILES['pic']['name'];
$fnpic=$_FILES['pic']['tmp_name'];
$area=$_REQUEST['area'];
$dateo=$_REQUEST['dateo'];
include "config.php";
$q="insert into `vehicle_missing`(`name`,`email`,`location`,`odate`,`number`,`wheeler`,`vehicle_status`,`criminal_status`,`pic`,`area`,`dateo`)value('$name','$email','$location','$odate','$number','$wheeler','$vehicle_status','$criminal_status','$pic','$area','$dateo')";
$result=mysqli_query($con,$q);
if($result>0){
    move_uploaded_file($fnpic,"cops/upload/".$pic);
    header("location:viewvehicle.php");
}
?>