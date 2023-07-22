<?php include "header.php"?>
<div class="col-12 text-center py-5">
    <h2> Vehicle Missing Complaints</h2>
</div>
<div class="container">
    <div class="row my-3">
        <div class="col-3 text-center">
            <h2>Personal Details</h2>
            <hr>
        </div>           
    </div>
    <form method="post" action="addvehicle.php" enctype="multipart/form-data">
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
        <div class="col-7 my-3">
        <h2>Details of Vehicle / Information to Police</h2>
    </div>           
    </div>
    <div class="row my-3">
        <div class="col-12">
        <b>Loction</b>
            <input required type="text" name="location" placeholder="Enter location" class="form-control">
        </div>           
    </div>
    <div class="row my-3">
            <div class="col-12">
            <b>Occurance Date</b>
                <input required type="text" name="odate" placeholder="Enter Date of occurence"class="form-control">
            </div>           
    </div>
            <div class="row my-3">
            <div class="col-12">
            <b>chassi number</b>
                <input required type="text" name="number" placeholder="Enter chassi number" class="form-control">
            </div>           
        </div>
    <div class="row my-3">
        <div class="col-12">
            <b>wheeler</b>
            <select required name="wheeler" class="form-control">
                <option selected disabled>select Catagory</option>
                <option>1 wheeler</option>
                <option>2 wheeler</option>
                <option>3 wheeler</option>
                <option>4 wheeler</option>
                <option>6 wheeler</option>
                <option>8 wheeler</option>
                <option>10 wheeler</option>
                <option>12 wheeler</option>
            </select>
        </div>           
    </div>
        <div class="row my-3">
     <div class="col-12 my-4">
     <b>Picture browse</b>
         <input required type="file" name="pic">
     </div>           
 </div>
 <div class="row my-3">
    <div class="col-12">
    <b>Address</b>
        <input required type="text" placeholder="Enter Address" class="form-control" name="area">
    </div>           
</div>
 <div class="row my-3">
    <div class="col-12 ">
    <b>Date of submission</b>
        <input required type="text" name="dateo" placeholder="dd / mm / yyyy" class="form-control">
    </div>           
</div>
 <div class="row my-3">
     <div class="col-12 my-4">
         <input type="submit" class="form-control bg-primary text-light">
     </div>           
 </div>
 
</div>
<?php include "footer.php"?>