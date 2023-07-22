<?php 
$name=$_REQUEST['name'];
$crime=$_REQUEST['crime'];
$criminal_image=$_FILES['criminal_image']['name'];
$crimep=$_FILES['criminal_image']['tmp_name'];
$details=$_REQUEST['details'];
include "config.php";
$q="insert into `criminal`(`name`,`crime`,`criminal_image`,`details`)values('$name','$crime','$criminal_image','$details')";
$result=mysqli_query($con,$q);
if($result>0){
    move_uploaded_file($crimep,"upload/".$criminal_image);
    header("location:insertcriminal.php");
}

?>