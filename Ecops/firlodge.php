<?php include "header.php"?>
<div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h2 class="text-secondary"><strong>FIR logde</strong> </h2>
            </div>
        </div>
    <div class="row">
      <div class="col-6 text-center">
            <h3>Detail of complaint/ Information to Police<h3>
             <hr>    
      </div>
    </div>
   <form method="post" action="addfirlodge.php">
   <div class="row ">
        <div class="col-12">
        <label><b>Complant type:</b></label>
        </div>
        </div>
    <div class="row">
        <div class="col-12">
            <select required class="form-control" name="c">
                <option selected disabled>Select your catagory</option>
                <option>kidnaping</option>
                <option>chain_snaching</option>
                <option>local_fighting</option>
            </select>
        </div>
    </div>
    <div class="row">
         <div class="col-12" >
         <b>Occurence Date</b>
         </div>
    </div> 
    <div class="row">
     <div class="col-12">
         <input required type="date" class="form-control" name="odate" placeholder="mm / dd / yyyy">
     </div>
 </div>
 <div class="row">
      <div class="col-2">
      <b>detail</b>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <textarea required class="form-control" name="details" placeholder="Details"></textarea>
      </div>
  </div>
  <div class="row mt-5">
      <div class="col-2">
      <b>Suspect name:</b>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <input required type="text" name="suscname" class="form-control" placeholder="Full Name">
      </div>
  </div>
  <div class="row">
      <div class="col-2">
      <b>Suspect detail:</b>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <textarea required class="form-control"name="sus_details" placeholder="Details"></textarea>
      </div>
  </div>
  <div class="row">
      <div class="col-2">
      <b>Police Station</b>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <select required class="form-control" name="ps">
            <option selected disabled>Select Police Station</option>
            <option>Hoshiarpur</option>
            <option>Jalandhar</option>
            <option>Amritsar</option>
          </select>
      </div>
  </div>
  <div class="row">
      <div class="col-3 text-center mt-5">
      <h3>Personal Details</h3>
      <hr>
      </div>
  </div>
  <div class="row">
      <div class="col-2">
      <b>Victum Name:</b>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <input required type="text" name="victum_name" class="form-control" placeholder="Full Name">
      </div>
  </div>
  <div class="row">
      <div class="col-2">
      <b>Gender:</b>
      </div>
    </div>
    <div class="row">

      <div class="col-12">
          <select required name="gender" class="form-control">
            <option selected disabled>Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
      </div>
  </div>
  <div class="row">
      <div class="col-2">
      <b>Age:</b>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <input required type="text"name="age" class="form-control" placeholder="Enter Age">
      </div>
  </div>
  <div class="row">
      <div class="col-2">
      <b> Permanant Address:</b>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <input required type="text" name="address" class="form-control" placeholder="Enter Address">
      </div>
  </div>
  <div class="row">
      <div class="col-12">
      <b>Contact No.</b>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <input required type="text"name="contact" class="form-control" placeholder="Enter Contact No.">
      </div>
    </div>
    <div class="row">
        <div class="col-12">
          <b>Email:</b>
          <input required type="text"name="email" class="form-control" placeholder="Enter Email">
      </div>
    </div>

  <div class="row">
      <div class="col-12">
      <b>Date:</b>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <input required type="date" name="date" class="form-control">
      </div>
  </div>
  <div class="row">
      <div class="col-3">
      <b>Location:</b>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <input required type="location" name="location" class="form-control" placeholder="location">
      </div>
  </div>
    <div class="row">
         <div class="col-12  p-2">
            <input type="submit" class=" form-control bg-primary text-white">
        </div>
    </div>
</form>
</div>

<?php include "footer.php"?>