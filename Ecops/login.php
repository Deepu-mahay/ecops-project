<?php include "header.php"?>

<div class="offset-5 col-6 pb-5">
    <h1><strong>Login</strong></h1>
</div>
<div class="container" class="mt-2">
<form method="post" action="logincheck.php">
<div class="row my-2">
    <div class="offset-2 col-2">
        <label>Enter Email:</label>
    </div>     
     <div class="offset-2 col-4">
        <input type="text" name="e" class="form-control">
    </div>
</div>
<div class="row my-2">
  <div class="offset-2 col-2">
    <label> Enter Password:</label>    
 </div>
    <div class="offset-2 col-4">
        <input type="password" name="p" class="form-control">
    </div>
    <div class="offset-2  col-4 mt-3 px-2">
        <input type="submit" value="Login">
</div>

</div>