<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    $style1 = "style='display:none;'";
    $style2 = NULL;
} else {
    // Redirect them to the login page
     $style1 = NULL;
     $style2 = "style='display:none;'";
     header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="About us page">
  
  <title>Products</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    </style>
  
  
</head>
<body>
   <section class="menu cid-ruNsw1yRec" once="menu" id="menu1-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"> <a href="index.php"> <img class="center" src="assets/images/logo.png" style="width:150px;height:50px;" alt="" title=""> </a> </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.php">
                        
                        Home</a>
                
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="about.php">
                        
                        About Us
                    </a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="contact.php">Contact</a></li>
                </li><li class="nav-item"><a class="nav-link link text-black display-4"  href="login.php" <?php echo $style1;?>>Login</a></li>
                </li><li class="nav-item"><a class="nav-link link text-black display-4"  href="signup.html" <?php echo $style1;?>>Sign Up</a></li>
                 <li class="nav-item"><a class="nav-link link text-black display-4" href="logout.php" <?php echo $style2;?> >Log Out</a></li>
            </ul>
            
        </div>
    </nav>
</section>

<section class="mbr-section content5 cid-ruXCVKDreY mbr-parallax-background" id="content5-1f">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(85, 180, 212);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    Products</h2>
            </div>
        </div>
    </div>
</section>
    
<!-- !PAGE CONTENT! -->
<div class="w3-main" >

    <!-- Header -->
    <header id="portfolio">
      <div class="w3-container">
      <div class="w3-section w3-bottombar w3-padding-16">
        <span class="w3-margin-right">Filter:</span> 
        <button class="w3-button w3-black">ALL</button>
        <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Themed</button>
        <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Basic</button>
      </div>
      </div>
    </header>
    
    <!-- First Photo Grid-->
    <div class="w3-row-padding">
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="assets/images/basic_party.jpg"  height="400" alt="basic_party" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Standard Party Package</b></p>
          <p>This package comes with a wonderful selection of party supplies to get any type of party off the ground, no matter what occasion.</p>
          <p>Starting at <b>$20</b> per box</p>
          <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>

        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="assets/images/birthday_party.jpg"  height="400" alt="birthday_party" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Birthday Party Package</b></p>
          <p>Whether you are planning a princess party for your 5 year old daughter or throwing a 21st birthday party rager, this package has you covered.</p>
          <p>Starting at <b>$30</b> per box</p>
          <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>
        </div>
      </div>
      <div class="w3-third w3-container">
        <img src="assets/images/garden_party.jpg"  height="400" alt="garden_party" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Garden Party Package</b></p>
          <p>With a vast selection of outdoor supplies, this package pairs great with planning outdoor garden parties during warm Summer days.</p>
          <p>Starting at <b>$50</b> per box</p>
          <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>
        </div>
      </div>
    </div>
    
    <!-- Second Photo Grid-->
    <div class="w3-row-padding">
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="assets/images/themed_party.jpeg"  height="400" alt="themed_party" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Themed Party Package</b></p>
          <p>This package is ideal for event planners that want to spice up their events with cool and interesting themed decoration for most upcoming holidays.</p>
          <p>Starting at <b>$25</b> per box</p>
          <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>
        </div>
      </div>
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="assets/images/college_party.jpg"  height="400" alt="college_party" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>College Party Package</b></p>
          <p>From college football tailgates to dance filled pregames, this package ensures that your event will be the hottest event on the block.</p>
          <p>Starting at <b>$25</b> per box</p>
          <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>
        </div>
      </div>
      <div class="w3-third w3-container">
        <img src="assets/images/celebration_party.jpeg"  height="400" alt="celebration_party" style="width:100%" class="w3-hover-opacity">
        <div class="w3-container w3-white">
          <p><b>Celebration Party Package</b></p>
          <p>This package caters to event planners that wish to celebrate big milestones in either a friends or family type setting.</p>
          <p>Starting at <b>$40</b> per box</p>
          <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="purchase.php">Purchase</a></div>
        </div>
      </div>
    </div>
  
    <!-- Pagination -->
    <div class="w3-center w3-padding-32">
      <div class="w3-bar">
        <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
        <a href="#" class="w3-bar-item w3-black w3-button">1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
      </div>
    </div>
  
   
      
      
      
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-black pb-3 mbr-fonts-style display-2">
                    Subscription Pricing Info</h2>
            </div>
        </div>
    </div>
      <!-- Pricing Tables -->
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-black w3-xlarge w3-padding-32">Standard</li>
            <li class="w3-padding-16">Standard Box Packages</li>
            <li class="w3-padding-16">Party Sizes up to 25 people</li>
            <li class="w3-padding-16">Free Shipping (5-7 Business Days)</li>
            <li class="w3-padding-16">Up to 5 box purchases</li>
            <li class="w3-padding-16">
              <h2>$ 5</h2>
              <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="signup.html">Sign Up</a></div>
            </li>
          </ul>
        </div>
        
        <div class="w3-third w3-margin-bottom">
          <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-teal w3-xlarge w3-padding-32">Pro</li>
            <li class="w3-padding-16">All Box Packages</li>
            <li class="w3-padding-16">Party Sizes up to 30 people</li>
            <li class="w3-padding-16">Free Shipping (5-7 Business Days)</li>
            <li class="w3-padding-16">Up to 7 box purchases</li>
            <li class="w3-padding-16">
              <h2>$ 10</h2>
              <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="signup.html">Sign Up</a></div>
            </li>
          </ul>
        </div>
        
        <div class="w3-third">
          <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
            <li class="w3-padding-16">All Box Packages</li>
            <li class="w3-padding-16">Party Sizes up to 100 people</li>
            <li class="w3-padding-16">Free Shipping (2 Business Days)</li>
            <li class="w3-padding-16">Unlimited box purchases</li>
            <li class="w3-padding-16">
              <h2>$ 20</h2>
              <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="signup.html">Sign Up</a></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>      
                

<section class="cid-ruOT0L6rL9" id="footer5-14">

    

    

    <div class="container">
       
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6 copyright">
                     <img class="center" src="assets/images/logo.png" style="width:150px;height:50px;" alt="" title="">  
                    <p class="mbr-text mbr-fonts-style display-7">

                        © Copyright 2019 <a href="https://webdesignvista.com">Web Design Vista</a> - All Rights Reserved
                    </p>
                </div>
                <!-- <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://webdesignvista.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://webdesignvista.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://webdesignvista.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon"></span>
                            </a>
                        </div>
                        
                        
                        
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  </body>
</html>