<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ecops</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
<!-- .site-mobile-menu -->
    
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0"><img src="logo.jpg"><strong>ECOPS</strong></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">
                <?php
                if(isset($_SESSION['email'])){ ?>
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="home.php">Home</a></li>
                <li>
                  <a href="citizenservices.php">citizen services</a>
                  </li>

                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><b><?php echo $_SESSION['name']; ?></b></li>
                <li><a  href="logout.php">logout</a></li>
              </ul>
              <?php } 
              else{ ?>
                  <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="active"><a href="home.php">Home</a></li>
                        <li>
                          <a href="citizenservices.php">citizen services</a>
                          </li>
                        <li class="has-children">
                        <p>Register</p>
                          <ul class="dropdown">
                          <li><a href="userregister.php">user register</a></li>
                          <li><a href="cops/copsregister.php">cops register</a></li>
                         </ul>
                          </li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                  </ul>
              
              <?php 
               }
              ?>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
  
</header>