<?php 
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
include "config.php";
$q="insert into `contact`(`name`,`email`,`subject`,`message`)value('$name','$email','$subject','$message')";
$result=mysqli_query($con,$q);
if($result>0){
    header("location:contact.php");
}


?>