<?php include "header.php"?>
<div class="col-12 text-center bg-dark text-light py-5">
    <h2>View Complaints</h2>
</div>
<div style="overflow-x:auto;">
<table class="table table-hover table-striped mt-5">
    <tr>
        <th>S.no</th>
        <th>Coplaint Type</th>
        <th>occurance Date</th>
        <th>Details</th>
        <th>Suspect Name</th>
        <th>Suspect Details</th>
        <th>Police Station Name</th>
        <th>Victum Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Address</th>
        <th>Contact</th>
        <th>email</th>
        <th>criminal_status</th>
        <th>Date of Submission</th>
        <th>Location</th>
    </tr>
<?php
$i=1;
include "config.php";
$q="select * from `fir_lodge`";
$result=mysqli_query($con,$q);
while($arr=mysqli_fetch_array($result)){
?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $arr['comp_type'];?></td>
        <td><?php echo $arr['odate'];?></td>
        <td><?php echo $arr['details'];?></td>
        <td><?php echo $arr['suscname'];?></td>
        <td><?php echo $arr['suspect_details'];?></td>
        <td><?php echo $arr['ps_name'];?></td>
        <td><?php echo $arr['vicname'];?></td>
        <td><?php echo $arr['gender'];?></td>
        <td><?php echo $arr['age'];?></td>
        <td><?php echo $arr['address'];?></td>
        <td><?php echo $arr['contact'];?></td>
        <td><?php echo $arr['email'];?></td>
        <td><?php echo $arr['criminal_status'];?></td>
        <td><?php echo $arr['date'];?></td>
        <td><?php echo $arr['location'];?></td>
        
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

