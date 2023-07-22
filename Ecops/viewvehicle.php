<?php include "header.php"?>
<div class="col-12 text-center text-light bg-dark py-5">
    <h2>View Vehicle Missing Complaints</h2>
</div>
<div style="overflow-x:auto;">
<table class="table  table-hover table-striped mt-5">
    <tr >
        <th>S.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Location</th>
        <th>Date of occurance</th>
        <th>chassi number</th>
        <th>Wheeler</th>
        <th>Vehicle Status</th>
        <th>Criminal Status</th>
        <th>Picture</th>
        <th>Date of Submission</th>
    </tr>
<?php
$i=1;
include "config.php";
$q="select * from `vehicle_missing`";
$result=mysqli_query($con,$q);
while($arr=mysqli_fetch_array($result)){
?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $arr['name'];?></td>
        <td><?php echo $arr['email'];?></td>
        <td><?php echo $arr['location'];?></td>
        <td><?php echo $arr['odate'];?></td>
        <td><?php echo $arr['number'];?></td>
        <td><?php echo $arr['wheeler'];?></td>
        <td><?php echo $arr['vehicle_status'];?></td>
        <td><?php echo $arr['criminal_status'];?></td>
        <td><img src="cops/upload/<?php echo $arr['pic'];?>"width="300"height="300"></td>
        <td><?php echo $arr['dateo'];?></td>
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

