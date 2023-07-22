<?php include "header.php"?>
<div class="col-12 text-center text-light bg-dark py-5">
    <h2>Records</h2>
</div>
<table class="table table-border table-hover mt-5">
    <tr class="bg-dark text-light">
        <th>S.no</th>
        <th>Name</th>
        <th>Crime</th>
        <th>Crime image</th>
        <th>Details</th>
    </tr>
<?php
$i=1;
include "config.php";
$q="select * from `criminal`";
$result=mysqli_query($con,$q);
while($arr=mysqli_fetch_array($result)){
?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $arr['name'];?></td>
        <td><?php echo $arr['crime'];?></td>
        <td><img src="upload/<?php echo $arr['criminal_image'];?>"width="300"height="300"> </td>
        <td><?php echo $arr['details'];?></td>
    </tr>
<?php
$i++;
}
?>
</table>
<?php
include "footer.php";
?>

