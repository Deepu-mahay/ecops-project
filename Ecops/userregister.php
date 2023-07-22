<?php include "header.php"?>

<div class="offset-5 col-6 pb-4">
    <h1 class="text-primary"><strong>User Register</strong></h1>
</div>
<div class="container" class="mt-2">
<form method="post" action="addsignup.php">
<div class="row my-4">        
     <div class="offset-2 col-2">
        <label>Name</label>
    </div>
    <div class="offset-2 col-4">
        <input required type="text" class="form-control" name="n">
    </div>
 </div>
<div class="row my-4">
    <div class="offset-2 col-2">
        <label>Enter Email:</label>
    </div>     
     <div class="offset-2 col-4">
        <input required type="text" name="e" class="form-control">
    </div>
</div>
<div class="row my-2">
  <div class="offset-2 col-2">
    <label> Enter Password:</label>    
 </div>
    <div class="offset-2 col-4">
        <input required type="password" name="p" class="form-control">
    </div>
</div>
<div class="row my-4">  
    <div class="offset-2 col-2">
        <label>Phone:</label>
    </div>
    <div class="offset-2 col-4">
        <input required type="text" name="phn" class="form-control">
    </div>
</div>
<div class="row my-4">  
    <div class="offset-2 col-2">
        <label>DOB:</label>
    </div>
    <div class="offset-2 col-4">
        <input required type="text" name="dob" class="form-control">
    </div>
</div>
<div class="row my-4">  
    <div class="offset-2 col-2">
        <label>Address:</label>
    </div>
    <div class="offset-2 col-4">
        <textarea  required name="address" class="form-control"></textarea>
    </div>
</div>
<div class="row my-4">  
    <div class="offset-2 col-2">
    <input type="submit" value="submit" class="btn btn-primary">  
    </div>
</div>
</div>
