<?php
 session_start();
 
 $e=$_REQUEST['email'];
 $p=$_REQUEST['password'];

// connect to database
$con=mysqli_connect("localhost","root","","ecops");
//select query
$q="select * from `userregister` where email='$e'and password='$p'";
//combine
$result=mysqli_query($con,$q);
if($arr=mysqli_fetch_array($result)){
    $_SESSION['email']=$e;
    $_SESSION['name']=$arr['name'];
    header("location:home.php");
}
else{
    header("location:index.php");
}
?>
