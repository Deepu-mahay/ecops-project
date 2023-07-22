<?php
 session_start();
 $e=$_REQUEST['email'];
 $pass=$_REQUEST['password'];

// connect to database
include "config.php";
//select query
$q="select * from `cops-register` where email='$e'and password='$pass'";
//combine
$result=mysqli_query($con,$q);
if($arr=mysqli_fetch_array($result)){
    $_SESSION['email']=$e;
    $_SESSION['name']=$arr['name'];
    header("location:home.php");
}
else {
    header("location:index.php");
}
?>