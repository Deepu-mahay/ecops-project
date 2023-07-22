<?php include "header.php"?>
<div class="offset-5 col-6 p-4">
    <h1 class="text-primary"><strong>Cops Register</strong></h1>
</div>
<div class="container" class="mt-2">
<form method="post" action="addcopsregister.php">
<div class="row my-4">        
        
    <div class="offset-2 col-8">
    <b>Name</b>
        <input type="text" class="form-control" name="n">
    </div>
 </div>
 <div class="row my-4">  
        
    <div class="offset-2 col-8">
    <b>DOB:</b>   
    <input type="date" name="dob" class="form-control">
    </div>
</div>
<div class="row my-4">     
     <div class="offset-2 col-8">
     <b>Email</b>
        <input type="text" name="e" class="form-control">
    </div>
</div>
<div class="row my-2">
    <div class="offset-2 col-8">
    <b> Enter Password:</b>
        <input type="password" name="p" class="form-control">
    </div>
</div>
<div class="row my-4">  
    <div class="offset-2 col-8">
    <b>Designation:</b>
        <input type="text" name="designation" class="form-control">
    </div>
</div>
<div class="row my-4">  
    <div class="offset-2 col-8">
    <b>Police Station Name:</b>
        <input type="text" name="ps_name" class="form-control">
    </div>
</div>
<div class="row my-4">  
        
    <div class="offset-2 col-8">
    <b>Contact:</b>   
    <input type="text" name="contact" class="form-control">
    </div>
</div>
<div class="row my-4">  
        
    <div class="offset-2 col-8">
    <b>Address:</b>   
    <input type="text" name="address" class="form-control">
    </div>
</div>
<div class="row my-4">  
    <div class="offset-2 col-8">
    <input type="submit" value="submit" class="btn btn-primary form-control">  
    </div>
</div>
</div>

<?php include "footer.php"?>