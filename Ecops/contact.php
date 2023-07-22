<?php include "header.php"?>
    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Contact</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Contact</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form method="post" action="addcontact.php" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Email Address">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Subject</label>
                  <input required type="text" name="subject" class="form-control" placeholder="Enter Subject">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea  name="message" cols="30" rows="5" class="form-control" placeholder="Write a message"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" class="btn btn-primary  py-2 px-4">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
             <div class="p-4 mb-3 bg-white">
             <h3 class="h5 text-black mb-3">Contact Info</h3>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">100</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="gmail.com">ecops@officer.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Helpline Number</h3>
              <p>Emergency Services</p>
              <p>Police - 100</p>
              <p>Fire - 101</p>
              <p>Ambulance - 102</p>
              <p>Anti Teasing cell - 1096</p>

              <p><a href="#" class="btn btn-primary  py-2 px-4 rounded-0">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

   











    <?php include "footer.php"?>