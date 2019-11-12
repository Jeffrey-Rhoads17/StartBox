<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

        
if ( isset( $_SESSION['user_id'] ) ) {
    $style1 = "style='display:none;'";
    $style2 = NULL;
} else {
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

    <title>Purchase</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>

<body>
    <section class="menu cid-ruOMQmoi9r" once="menu" id="menu1-t">


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
                            Purchase Details</h2>



                    </div>
                </div>
            </div>
        </section>



        <section class="team1 cid-ruXEWX5uJh" id="team1-1g">



            <div class="container align-center">
                <h2 class="pb-3 mbr-fonts-style mbr-section-title display-2">
                    Pay With Bitcoin Pay!
                </h2>
                <a href="#Foo" class="btn btn-md btn-secondary display-4" data-toggle="collapse">Show Bitcoin Conversions</a>

<div id="Foo" class="collapse">
    <!-- Cryptocurrency Price Widget --><script>!function(){var e=document.getElementsByTagName("script"),t=e[e.length-1],n=document.createElement("script");function r(){var e=crCryptocoinPriceWidget.init({base:"USD,EUR,CNY,GBP",items:"BTC",backgroundColor:"FFFFFF",streaming:"1",rounded:"1",boxShadow:"1",border:"1"});t.parentNode.insertBefore(e,t)}n.src="https://co-in.io/widget/pricelist.js?items=BTC",n.async=!0,n.readyState?n.onreadystatechange=function(){"loaded"!=n.readyState&&"complete"!=n.readyState||(n.onreadystatechange=null,r())}:n.onload=function(){r()},t.parentNode.insertBefore(n,null)}();</script><a href="https://currencyrate.today/">Currency Converter</a><!-- /Cryptocurrency Price Widget -->
</div>

               
                <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5">Standard Party Package.</h3>
                <div class="row media-row">
                    <div class="b b-mail">
                        <h5 class="align-left mbr-fonts-style m-0 display-5">
                            Whats included:
                        </h5>
                        <ul>
                            <li>100 count Red Cups</li>
                            <li>3 Tablecloths</li>
                            <li>50 count Plates</li>
                            <li>Utensils</li>
                            <li>Napkins & Paper Towels</li>


                            <h5 class="align-left mbr-fonts-style m-0 display-5">
                                <br></br>$20
                            </h5>

                        </ul>
                    </div>
                    
                </div>
                <form id = "form"  onsubmit="return show()">
                        <label for="choose">Enter Promo Code</label>
                        <input id="choose" name="i_like" required pattern="WAHOOWA">
                        <button type ="submit">Submit</button>
                         
                </form>

                <!-- Button trigger modal -->
                 
                    <script>
                    function show(){
                        $('#exampleModal').modal('show')
                        return false;
                    }
            </script>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Promo Code Validated!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Congratulations! You have successfully activated the promo code. Click the BitPay link below to get your Standard Party Box for $15!
              <form action="https://test.bitpay.com/checkout" method="post">
                <input type="hidden" name="action" value="checkout" />
                <input type="hidden" name="posData" value="" />
                <input type="hidden" name="data" value="LcMQ+N889ZKtLL7wQHdhcND1c/Doy2qIMGy/S9ax1az++ZnRgrjkPXa9shiO6Wamq9wuarny7NR1HhmbMmibjmcCJ1lK4RURcCcwgyz4NVVoN47Ub3Sqjx3qmX+XoH/HjmTPClB5RvSmambEc3BqMS1cExOnvoqV2YXL5Ank3DtkKsOHXJZLzJmadkkfUWAN+DDsawMmELiYB5jpW01UQe+47QoJu3/KmeLUMviwjro=" />
                <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width: 210px" alt="BitPay, the easy way to pay with bitcoins.">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
                <div>
                    <form action="https://test.bitpay.com/checkout" method="post">
                        <input type="hidden" name="action" value="checkout" />
                        <input type="hidden" name="posData" value="" />
                        <input type="hidden" name="data" value="LcMQ+N889ZKtLL7wQHdhcND1c/Doy2qIMGy/S9ax1az++ZnRgrjkPXa9shiO6WamOIJf3dB19k5qo0UlS/OUtLgrIhsFCMeUzLbDySqOLH6ElFf+QUPHPjAFwKVhTXteDi3kOdpfu6ChZZ4BBWOVHLwAIjeeTZQNjo981EZrgdR4qfpegKjr6ywcWGs68etYUgosQKlQicQW9rlEj+WDN02H8sbblLToLs05qE01MTE=" />
                        <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width: 210px" alt="BitPay, the easy way to pay with bitcoins.">
                      </form> 
                </div>

                <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5">Themed Party Package.</h3>
                <div class="row media-row">
                    <div class="b b-mail">
                        <h5 class="align-left mbr-fonts-style m-0 display-5">
                            Whats included:
                        </h5>
                        <ul>
                            <li>100 count Red Cups</li>
                            <li>3 Tablecloths</li>
                            <li>50 count Plates</li>
                            <li>Utensils</li>
                            <li>Napkins & Paper Towels</li>


                            <h5 class="align-left mbr-fonts-style m-0 display-5">
                                <br></br>$25
                            </h5>

                        </ul>
                    </div>

                </div>
                <div>
                    <form action="https://test.bitpay.com/checkout" method="post">
                        <input type="hidden" name="action" value="checkout" />
                        <input type="hidden" name="posData" value="" />
                        <input type="hidden" name="data" value="LcMQ+N889ZKtLL7wQHdhcND1c/Doy2qIMGy/S9ax1az++ZnRgrjkPXa9shiO6WamqqRK1sKDjTwyvoOFbHZbkOxvTsrFNEHhAfuJOW2ILgTnDZUocSR817eaQcmbNzHU+Xduuw8LKH39geWxzsPIQZmOlCUnSMY2eukYDVfV0vIpYoNmtQE+OkPJw8n2XNLAHZH3fYPr75sejhGlUefuDBJS895ZLF5Bme354O2xtjU=" />
                        <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width: 210px" alt="BitPay, the easy way to pay with bitcoins.">
                      </form>
                </div>
                <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5">Celebration Party Package.
                </h3>
                <div class="row media-row">
                    <div class="b b-mail">
                        <h5 class="align-left mbr-fonts-style m-0 display-5">
                            Whats included:
                        </h5>
                        <ul>
                            <li>100 count Red Cups</li>
                            <li>3 Tablecloths</li>
                            <li>50 count Plates</li>
                            <li>Utensils</li>
                            <li>Napkins & Paper Towels</li>


                            <h5 class="align-left mbr-fonts-style m-0 display-5">
                                <br></br>$40
                            </h5>

                        </ul>
                    </div>

                </div>
                <div>
                    <form action="https://test.bitpay.com/checkout" method="post">
                        <input type="hidden" name="action" value="checkout" />
                        <input type="hidden" name="posData" value="" />
                        <input type="hidden" name="data"
                            value="LcMQ+N889ZKtLL7wQHdhcND1c/Doy2qIMGy/S9ax1az++ZnRgrjkPXa9shiO6WamGqPmOnDlVyf1YAz52NykfP7Se19Lvjrq8K5d9Q1FQDpaEsz3U5BW8ZlJhJvEJKkip8d8mXQYAIPF3stdknLahrGi5fW1U5gBL9y5LvtgIkPLfOeKpKy+782zaKNnW/43X8dmtDBpTGXbfRFganax963u0Thc1C9ZLu7QMzlLlGYK+Jnx239fXMIVeQkwl68KzDpheF/rHAp5wEyL0cEZvg==" />
                        <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg"
                            name="submit" style="width: 210px" alt="BitPay, the easy way to pay with bitcoins.">
                    </form>
                </div>
                <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5">Garden Party Package.</h3>
                <div class="row media-row">
                    <div class="b b-mail">
                        <h5 class="align-left mbr-fonts-style m-0 display-5">
                            Whats included:
                        </h5>
                        <ul>
                            <li>100 count Red Cups</li>
                            <li>3 Tablecloths</li>
                            <li>50 count Plates</li>
                            <li>Utensils</li>
                            <li>Napkins & Paper Towels</li>


                            <h5 class="align-left mbr-fonts-style m-0 display-5">
                                <br></br>$50
                            </h5>

                        </ul>
                    </div>

                </div>
                <div>
                    <form action="https://test.bitpay.com/checkout" method="post">
                        <input type="hidden" name="action" value="checkout" />
                        <input type="hidden" name="posData" value="" />
                        <input type="hidden" name="data"
                            value="LcMQ+N889ZKtLL7wQHdhcND1c/Doy2qIMGy/S9ax1az++ZnRgrjkPXa9shiO6Wamf2f5QSKzd8q4axs1ldmaexA4ZaoZLkdoAstNJTJdjZwL+1z00jklU5bJwSRkTrKhPUIcD0+iHWQptPq2hWxGpW4/NZtKDILn7fq6ORaRjJpmtNL9FW7FzhWczaRf+FBL7wiAGVXzAFHx2T7Oz88AfhdFPYKRPkkvPGzq674kjQzGkla/Eon1x8H3ID0W8zPV" />
                        <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg"
                            name="submit" style="width: 210px" alt="BitPay, the easy way to pay with bitcoins.">
                    </form>
                </div>
                <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5">College Party Package.</h3>
                <div class="row media-row">
                    <div class="b b-mail">
                        <h5 class="align-left mbr-fonts-style m-0 display-5">
                            Whats included:
                        </h5>
                        <ul>
                            <li>100 count Red Cups</li>
                            <li>3 Tablecloths</li>
                            <li>50 count Plates</li>
                            <li>Utensils</li>
                            <li>Napkins & Paper Towels</li>


                            <h5 class="align-left mbr-fonts-style m-0 display-5">
                                <br></br>$25
                            </h5>

                        </ul>
                    </div>

                </div>
                <div>
                    <form action="https://test.bitpay.com/checkout" method="post">
                        <input type="hidden" name="action" value="checkout" />
                        <input type="hidden" name="posData" value="" />
                        <input type="hidden" name="data"
                            value="LcMQ+N889ZKtLL7wQHdhcND1c/Doy2qIMGy/S9ax1az++ZnRgrjkPXa9shiO6WammhsRLFWk11IqWQs5oK8MYuzTdOlRRYZi21N9hcMM5fp8vdISla0o6XE1IbPxOhoiMGm9vjUb8lpU7+j8ZYhLxW8Ab2cSjUa2wj0vNdErlp2moIxCoV21TTm2LTUOHgfdvpuQw4BIYiQt/lCrSc+b8nndrj4kcVFecfmdn5f1ubjs411V1XA5VWpCoJPr0kv+" />
                        <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg"
                            name="submit" style="width: 210px" alt="BitPay, the easy way to pay with bitcoins.">
                    </form>
                </div>
                <h3 class="pb-5 mbr-section-subtitle mbr-fonts-style mbr-light display-5">Birthday Party Package.</h3>
                <div class="row media-row">
                    <div class="b b-mail">
                        <h5 class="align-left mbr-fonts-style m-0 display-5">
                            Whats included:
                        </h5>
                        <ul>
                            <li>100 count Red Cups</li>
                            <li>3 Tablecloths</li>
                            <li>50 count Plates</li>
                            <li>Utensils</li>
                            <li>Napkins & Paper Towels</li>


                            <h5 class="align-left mbr-fonts-style m-0 display-5">
                                <br></br>$30
                            </h5>

                        </ul>
                    </div>

                </div>
                <div>
                    <form action="https://test.bitpay.com/checkout" method="post">
                        <input type="hidden" name="action" value="checkout" />
                        <input type="hidden" name="posData" value="" />
                        <input type="hidden" name="data"
                            value="LcMQ+N889ZKtLL7wQHdhcND1c/Doy2qIMGy/S9ax1az++ZnRgrjkPXa9shiO6Wame1LpKGYl7nNCYJii9UQU0sZr/sYQc0Kc1lJ2osrN7wvEZpQyE/qTap/yKgfNpvHn7akBAPld5V+o7dnorb9gsMwTIJ4fMl1JM8CU+5Wld+Jx2uR3Rm5kh0FnJDmYWqUm7bhkpp1X7spzWWeFzIwHmwuxLABXdTj4C54uNxxDnQTaBUGSYxs7uyqtacYlIRJF" />
                        <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg"
                            name="submit" style="width: 210px" alt="BitPay, the easy way to pay with bitcoins.">
                    </form>
                </div>
        </section>



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
                            <img class="center" src="assets/images/logo.png" style="width:150px;height:50px;" alt=""
                                title="">
                            <p class="mbr-text mbr-fonts-style display-7">

                                © Copyright 2019 <a href="https://webdesignvista.com">Web Design Vista</a> - All Rights
                                Reserved
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


        <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
                    class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
</body>

</html>