<?php include "header.php"?>
<div class="col-12 text-center py-5">
    <h2>Child Missing Complaints</h2>
</div>
<div class="container">
    <div class="row my-3">
        <div class="col-3 text-center">
            <h2>Personal Details</h2>
            <hr>
        </div>           
    </div>
    <form method="post" action="addchildmissing.php" enctype="multipart/form-data">
    <div class="row my-3">
    <div class="col-12">
        <b>Name</b>
        <input required type="text" name="name" placeholder="Enter Name" class="form-control">
    </div>           
    </div>
    <div class="row my-3">
        <div class="col-12">
            <b>Email</b>
            <input required type="email" name="email" placeholder="Enter Email" class="form-control">
        </div>           
    </div>
    <div class="row my-3">
         <div class="col-12">
         <b>Occurance Date</b>
             <input required type="date" name="odate" placeholder="dd/mm/yyyy"class="form-control">
         </div>           
 </div>
    <div class="row my-3">
        <div class="col-7 my-3">
        <h2>Details of child / Information to Police</h2>
    </div>           
    </div>
       <div class="row my-3">
        <div class="col-12">
        <b>Child Name</b>
            <input required type="text" name="child_name" placeholder="Enter Name"class="form-control">
        </div>           
</div>
 
 <div class="row my-3">
         <div class="col-12">
         <b>Age</b>
             <input required type="text" name="age" placeholder="Enter Age"class="form-control">
         </div>           
 </div>
<div class="row my-3">
        <div class="col-12">
        <b>Upload</b>
            <input required type="text" name="upload" class="form-control" placeholder="Enter picture details">
        </div>           
</div>
 <div class="row my-3">
         <div class="col-12">
         <b>Browse Picture</b>
             <input required type="file" name="picture" placeholder="Enter Date of occurence">
         </div>           
 </div>
 <div class="row my-3">
         <div class="col-12">
         <b>Location</b>
             <input required type="text" name="location" placeholder="Enter location"class="form-control">
         </div>           
 </div>
<div class="row my-3">
         <div class="col-12">
         <b>Date Of Submission</b>
             <input required type="date" name="date" placeholder="dd/mm/yyyy"class="form-control">
         </div>           
 </div>

<div class="row my-3">
        <div class="col-12">
            <input type="submit" value="Submit"class="form-control bg-primary text-light">
        </div>           
</div>
</form>
</div>

<?php include "footer.php"?>
