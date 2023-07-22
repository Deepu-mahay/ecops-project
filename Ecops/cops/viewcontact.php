<?php include "header.php"?>
<div class="col-12 text-center my-5">
    <h2>View contact</h2>
</div>
<div style="overflow-x:auto;">
<table class="table table-hover table-striped mt-5 mb-5">
    <tr class="bg-dark text-light">
        <th>S.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
    </tr>
<?php
$i=1;
include "config.php";
$q="select * from `contact`";
$result=mysqli_query($con,$q);
while($arr=mysqli_fetch_array($result)){
?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $arr['name'];?></td>
        <td><?php echo $arr['email'];?></td>
        <td><?php echo $arr['subject'];?></td>
        <td><?php echo $arr['message'];?></td>
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

