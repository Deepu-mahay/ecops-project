<?php include "header.php"?>
<div class="col-12 text-center text-light bg-dark py-5">
    <h2>View Child Missing Complaints</h2>
</div>
<div style="overflow-x:auto;">
<table class="table table-hover table-striped mt-5">
    <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Location</th>
        <th>Date of occurance</th>
        <th>Child Name</th>
        <th>Child Age</th>
        <th>Child Status</th>
        <th>Picture Details</th>
        <th>Picture</th>
        <th>Criminal Status</th>
        <th>Date of Submission</th>
    </tr>
<?php
$i=1;
include "config.php";
$q="select * from `child_missing`";
$result=mysqli_query($con,$q);
while($arr=mysqli_fetch_array($result)){
?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $arr['name'];?></td>
        <td><?php echo $arr['email'];?></td>
        <td><?php echo $arr['location'];?></td>
        <td><?php echo $arr['dateo'];?></td>
        <td><?php echo $arr['child_name'];?></td>
        <td><?php echo $arr['age'];?></td>
        <td><?php echo $arr['child_status'];?></td>
        <td><?php echo $arr['upload'];?></td>
        <td><img src="cops/upload/<?php echo $arr['picture'];?>" width="300" height="300"></td>
        <td><?php echo $arr['criminal_status'];?></td>
        <td><?php echo $arr['date'];?></td>
    </tr>
<?php
$i++;
}
?>
</table>
</div>
<?php
include "footer.php";
?>

