
<?php

session_start();

   use PHPMailer\PHPMailer\PHPMailer;


/* Exception class. */

require(__DIR__ . '/Exception.php');
/* The main PHPMailer class. */
require(__DIR__ . '/PHPMailer.php');
/* SMTP class, needed if you want to use SMTP. */
require(__DIR__ . '/SMTP.php');


if ( isset( $_SESSION['user_id'] ) ) {
    $style1 = "style='display:none;'";
    $style2 = NULL;
} else {
    // Redirect them to the login page
     $style1 = NULL;
     $style2 = "style='display:none;'";
}   

     $message = "initial text ";
    if(isset($_POST["submit"]))
    {
   $message = " ";
   $name = $_POST["name"];
   $name= stripslashes($name);
   $three = $_POST["email"];
   $three= stripslashes($three);
   $five = $_POST["body"];
   $five = stripslashes($five);
   $mesage = "Nothing is working";
     
        $message = "this atleast works";
        $mail = new PHPMailer(true);
        $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "startbox.2020@gmail.com";
        $mail->Password = "bums1234";
        $mail->SetFrom("startbox.2020@gmail.com");
        $mail->Subject = "New Customer Inquiry";
        $mail->Body = "This message is from $name. The message is: $five. The email address to reply is $three";
        $mail->AddAddress("startbox.2020@gmail.com");
        if(!$mail->Send()) 
          {
            $message = "Failed to Send";
          }
          else
          {
            $message = "Thank you for contacting us $name, we will be getting back to you shortly!";
          }
     }
   
   
?>



<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Contact us page">
  
  <title>Contact us</title>

  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
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


<section class="mbr-section content5 cid-ruXJBlWiZf mbr-parallax-background" id="content5-1o">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(85, 180, 212);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    Contact Us</h2>
                    
                  <h1 class= "align-center mbr-fonts-style m-0 display-5"> <?php echo $message ?> </h1>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section contacts2 cid-ruOSFMRcwn" id="contacts2-12">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title col-12">
                
                
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-4">
                        <div class="b b-adress">
                            <h5 class="align-left mbr-fonts-style m-0 display-5">
                                Address:
                            </h5>
                            <p class="mbr-text align-left mbr-fonts-style display-7">
                                151 Engineer's Way, Charlottesville, VA 22903

                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                      
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="b b-mail">
                            <h5 class="align-left mbr-fonts-style m-0 display-5">
                                E-mail:
                            </h5>
                            <p class="mbr-text align-left mbr-fonts-style display-7">
                                StartBox@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form4 cid-ruOSWCqLJZ" id="form4-13">

    

    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3142.6435765656606!2d-78.51288368467493!3d38.0320879797134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b3865b43b6ada7%3A0x1861384e69939c07!2sOlsson%20Hall!5e0!3m2!1sen!2sus!4v1569685021740!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2">
                    Contact Us
                </h2>
                <div>
                    <div class="icon-block pb-3 align-left">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            Don't hesitate to reach out
                        </h4>
                    </div>
                    <div class="icon-contacts pb-3">
                        <h5 class="align-left mbr-fonts-style display-7">
                            Ready for questions and concerns
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            
                            Email: StartBox.2020@gmail.com
                        </p>
                    </div>
                </div>
                <div data-form-type="formoid">
                    <!---Formbuilder Form--->
                    <form action="" method="POST" class="mbr-form form-with-styler" data-form-title=" Form"><input type="hidden" name="email" data-form-email="true" value="jnnKn/ep5LrfG1+XiB2QI/meobVgqJWazxXWnGZGEmThchQqffk0+LXWDVoQH21LvOL853j5U1bHD2sg0TrHmqMJisSgC/zQMCuzrO3PUt/UB4uQNbW9RKLIofYPDXav">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md-6  form-group" data-for="name">
                                <input type="text" name="name" placeholder="Your Name" data-form-field="Name" required="required" class="form-control input display-7" id="name-form4-13">
                            </div>
                            <div class="col-md-6  form-group" data-for="phone">
                                <input type="text" name="phone" placeholder="Phone" data-form-field="Phone" required="required" class="form-control input display-7" id="phone-form4-13">
                            </div>
                            <div data-for="email" class="col-md-12  form-group" data-validate = "Valid email is required: ex@abc.xyz">
                                <input type="email" name="email" placeholder="Email" data-form-field="Email" class="form-control input display-7" required="required" id="email-form4-13">
                            </div>
                            <div data-for="message" class="col-md-12  form-group">
                                <textarea name="body" placeholder="Message" data-form-field="Message" class="form-control input display-7" id="message-form4-13"></textarea>
                            </div>
                            <div class="col-md-12 input-group-btn  mt-2 align-center"><button type="submit" name = "submit" class="btn btn-primary btn-form display-4">SEND MESSAGE</button></div>
                        </div>
                    </form><!---Formbuilder Form--->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cid-ruOT0L6rL9" id="footer5-14">

    

    

    <div class="container">
        <div class="media-container-row">
            
           <!--  <div class="col-md-9">
                <p class="mbr-text align-right links mbr-fonts-style display-7">
                    <a href="#" class="text-black">ABOUT</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-black">TERMS</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-black">CAREERS</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" class="text-black">CONTACT</a>
                </p>
            </div> -->
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6 copyright">
                     <span class="navbar-caption-wrap"> <img class="center" src="assets/images/logo.png" style="width:150px;height:50px;" alt="" title="">  </span>
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2019 <a href="https://webdesignvista.com">StartBox</a> - All Rights Reserved
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
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
  </body>
</html>