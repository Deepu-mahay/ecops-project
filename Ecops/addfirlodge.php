<?php 
$c=$_REQUEST['c'];
$odate=$_REQUEST['odate'];
$details=$_REQUEST['details'];
$suscname=$_REQUEST['suscname'];
$sus_details=$_REQUEST['sus_details'];
$ps_name=$_REQUEST['ps']; 
$victum_name=$_REQUEST['victum_name']; 
$gender=$_REQUEST['gender']; 
$age=$_REQUEST['age']; 
$address=$_REQUEST['address']; 
$contact=$_REQUEST['contact']; 
$email=$_REQUEST['email']; 
$criminal_status='Pending'; 
$date=$_REQUEST['date']; 
$location=$_REQUEST['location']; 
//connect to database
$con=mysqli_connect("localhost","root","","ecops");
//insert query
$q="insert into `fir_lodge`(`comp_type`,`odate`,`details`,`suscname`,`suspect_details`,`ps_name`,`vicname`,`gender`,`age`,`address`,`contact`,`email`,`criminal_status`,`date`,`location`)value('$c','$odate','$details','$suscname','$sus_details','$ps_name','$victum_name','$gender','$age','$address','$contact','$email','$criminal_status','$date','$location')";
//combine
$result=mysqli_query($con,$q);
if($result>0)
{
    header("location:viewfir.php");
}
?>
