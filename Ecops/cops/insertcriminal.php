<?php include "header.php"?>
<div class="container">
    <div class="col-12 text-center my-5">
        <h3>Insert Criminal Record </h3>
    </div>
 <form method="post" action="addcriminal.php" enctype="multipart/form-data">
    <div class="row my-3">
    <div class="col-12">
        <b>Name</b>
        <input required type="text" name="name" placeholder="Enter Name" class="form-control">
    </div>           
    </div>
    <div class="row my-3">
        <div class="col-12">
            <b>Crime</b>
            <input required type="text" name="crime" placeholder="Enter crime" class="form-control">
        </div>           
    </div>
    <div class="row my-3">
         <div class="col-12">
         <b>criminal image</b>
             <input required type="file" name="criminal_image">
         </div>           
 </div>
    <div class="row my-3">
        <div class="col-12 my-3">
        <h3>Details of Criminal</h3>
        <textarea required name="details" placeholder="Enter crime details of criminal"class="form-control"></textarea>
    </div>           
    </div>
    <div class="row my-3">
    <div class="col-12 my-3">
    <input type="submit" value="submit"class="form-control btn-primary">
</div>           
</div>
</form>
</div>

<?php include "footer.php"?>