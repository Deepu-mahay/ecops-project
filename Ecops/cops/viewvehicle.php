<?php include "header.php"?>
<div class="col-12 text-center my-5">
    <h2>View Vehicle Missing Complaints</h2>
</div>
<div style="overflow-x:auto">
<table class="table table-hover table-striped mt-5">
    <tr class="bg-dark text-light">
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
        <th>Response</th>

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
        <td><img src="upload/<?php echo $arr['pic'];?>"width="300"height="300"></td>
        <td><?php echo $arr['dateo'];?></td>
        <td>
            <?php
             if($arr['criminal_status']=='Arrested')
             echo "Completed";
             else{
                ?>
                <a class="btn btn-dark" href="response_vehicle_cops.php?id=<?php echo $arr['id'];?>">Response</a>
            
            <?php } ?>
            </td>
    
            <?php
$i++;
}
?>
        </tr>




</table>
</div>
<?php
include "footer.php";
?>

