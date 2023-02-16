<!doctype html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Welcome to Tailorte, the mobile-based app that connects fashion lovers with talented tailors. Discover the latest fashion trends, browse and purchase unique garments, and connect with experienced tailors to create custom-made styles that reflect your unique personalit">
  <meta name="keywords" content="Tailor app, Fashion App, Tailorte Fashion App">
   
    <title>Contact Us :: Tailorte</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  </head>
  <body>
<!-- header -->
<!-- header -->
<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke">

      <a class="navbar-brand" href="#index.html">
          <img src="assets/images/Tailorte-logo.svg" alt="Tailorte-logo" title="Tailorte-logo"  />
      </a> 
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="index.html">Home </a>
                  </li>
                  <li class="nav-item @@about__active">
                      <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="fashion_lover.html">Fashion Lover </a>
                  </li>
					<li class="nav-item">
                      
                      <a class="nav-link" href="tailor.html">Tailor </a>
                  </li>
					<li class="nav-item @@pages__active">
                      <a class="nav-link" href="pricing.html">Pricing</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="contact">Contact <span class="sr-only">(current)</span></a>
                  </li>
                
              </ul>
          </div>
         
      </nav>
  </div>
</header>
<!-- //header -->
<br/>
<br/>
<br/>
<!-- contacts-5-grid -->
<div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-4">
        <div class="container">
            <div class="heading text-center mx-auto">
                <h5 class="title-small text-center mb-2">Contact our team</h5>
                <h3 class="title-big mb-2 customFontClass">Get in Touch with Us </h3>
                <p class="mb-5">If you have a question regarding our services, feel free
                    to contact us using the form below.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 form-inner-cont">
                    <form action="" method="post" class="signin-form">
					<?php
                     if(isset($_POST['submit'])){
						$to = 'hello@tailorte.com'; 
						$from = $_POST['email']; 
						$fromName = $_POST['name']; 
						$phoneNumber = $_POST['phone_number']; 
						 
						$subject = 'Tailorte Contact: '.$_POST['subject']; 
						 
						$htmlContent = ' 
							<html> 
							<head> 
								<title>'.$subject.'</title> 
							</head> 
							<body> 
								<h1>'.$subject.'</h1> 
								<table cellspacing="0" style="padding: 15px; border: 2px dashed #ffffff; width: 100%;"> 
									<tr> 
										<th>Name:</th><td>'.$fromName.'</td> 
									</tr> 
									<tr> 
										<th>Email:</th><td>'.$from.'</td> 
									</tr> 
<tr> 
										<th>Phone Number:</th><td>'.$phoneNumber.'</td> 
									</tr> 
									<tr> 
										<th>Message:</th><td>'.$_POST['message'].'</td> 
									</tr> 
								</table> 
							</body> 
							</html>'; 
						 
						// Set content-type header for sending HTML email 
						$headers = "MIME-Version: 1.0" . "\r\n"; 
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
						 
						// Additional headers 
						$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";
						$headers .= 'Reply-To:'.$fromName. "\r\n";
												 
						// Send email 
						if(mail($to, $subject, $htmlContent, $headers)){ 
							echo '<div class="alert alert-success">Your message is received, We will get back to you soon. Thank you!</div>';
						}else{ 
						    echo '<div class="alert alert-danger">Something went wrong, kindly try again please!</div>';
						}   
                     }
                    ?>
                        <div class="form-grids">
                            <div class="form-input">
                                <input type="text" name="name" id="w3lName" placeholder="Enter your name *"
                                    required="" />
                            </div>
                            <div class="form-input">
                                <input type="text" name="subject" id="subject" placeholder="Enter subject "
                                    required />
                            </div>
                            <div class="form-input">
                                <input type="email" name="email" id="email" placeholder="Enter your email *"
                                    required />
                            </div>
                            <div class="form-input">
                                <input type="text" name="phone_number" id="phone_number" placeholder="Enter your Phone Number *"
                                    required />
                            </div>
                        </div>
                        <div class="form-input">
                            <textarea name="message" id="message" placeholder="Type your message here"
                                required=""></textarea>
                        </div>
                        <div class="text-right">
                          
<center><input type="submit" name="submit" value="Send Message" class="btn btn-style btn-primary mt-sm-3" style="
    background: #7800B6;
    color: #fff;text-align:center;
"></center>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4 contacts-5-grid-main section-gap mt-lg-0 mt-4">
                    <div class="contacts-5-grid">
                        <div class="map-content-5">
                            <section class="tab-content">
                                <div class="contact-type">
                                    <div class="address-grid mb-3">
                                        <h6>Address</h6>
                                        <p>Abuja, Nigeria.</p><span
                                            class="pos-icon">
                                            <span class="fa fa-map"></span>
                                        </span>
                                    </div>
                                    <div class="address-grid mb-3">
                                        <h6>Email</h6>
                                        <a href="mailto:hello@tailorte.com" class="link1">hello@tailorte.com</a>
                                        <span class="pos-icon">
                                            <span class="fa fa-envelope">

                                            </span>
                                        </span>
                                    </div>
                                    <div class="address-grid">
                                        <h6>Phone</h6>
                                        <a href="tel:07041559303" class="link1">07041559303</a><span
                                            class="pos-icon">
                                            <span class="fa fa-headphones"></span>
                                        </span>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //contacts-5-grid -->
    </div>
</div>

  <!-- footer-28 block -->
  <section class="app-footer">
    <footer class="footer-28">
      <div class="footer-bg-layer">
        <div class="container py-lg-3">
          <div class="row footer-top-28">
            <div class="col-lg-6 footer-list-28 mt-5">
              <h6 class="footer-title-28 customFontClass">Contact information</h6>
              <p>Email: <strong>hello@tailorte.com</strong></p>
              <p>Phone: <strong>07041559303</strong></p>
              <p>Address: <strong>Abuja, Nigeria</strong></p>

              <div class="main-social-footer-28 mt-3">
                <ul class="social-icons">
                  <li class="dribbble">
                    <a href="https://www.facebook.com/TailorteApp" title="Facebook">
                      <span class="fa fa-facebook" aria-hidden="true"></span>
                    </a>
                  </li>
                  <li class="dribbble">
                    <a href="https://twitter.com/tailorteApp" title="Twitter">
                      <span class="fa fa-twitter" aria-hidden="true"></span>
                    </a>
                  </li>
                  <li class="dribbble">
                    <a href="https://www.linkedin.com/company/tailorte" title="Linkedin">
                      <span class="fa fa-linkedin" aria-hidden="true"></span>
                    </a>
                  </li>
                  <li class="dribbble">
                    <a href="https://instagram.com/tailorteApp" title="Instagram">
                      <span class="fa fa-instagram" aria-hidden="true"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-6 col-6 footer-list-28 mt-5">
                  <h6 class="footer-title-28 customFontClass">Quick links</h6>
                  <ul>
                     <li><a href="fashion_lover.html">Fashion Lovers</a></li>
					<li><a href="tailor.html">Tailor</a></li>
					<li><a href="about.html">About</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="contact">Contact</a></li>
                  </ul>
                </div>
                
                <div class="col-md-6 footer-list-28 mt-5">
                  <h6 class="footer-title-28 customFontClass">Download App</h6>
                  <a href="#playstore"><img src="assets/images/googleplay.png" class="img-fluid" alt="playstore" width="160"></a>
                  <a href="#appstore"><img src="assets/images/appstore.png" class="img-fluid mt-md-2" alt="playstore" width="160"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="midd-footer-28 align-center py-4 mt-5">
            <p class="copy-footer-28 text-center"> &copy; <script>document.write(/\d{4}/.exec(Date())[0])</script>
 Tailorte. All rights reserved. <a href="privacy_policy.html">Privacy Policy</a>
          </div>
        </div>


      </div>
    </footer>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //footer-28 block -->

  <!-- all js scripts and files here -->

  <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

  <script src="assets/js/jquery-3.3.1.min.js"></script><!-- default jQuery -->

<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>
<!-- magnific popup -->


<script src="assets/js/owl.carousel.js"></script>
<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 2,
          nav: false
        },
        736: {
          items: 3,
          nav: false
        },
        1000: {
          items: 4,
          nav: false,
          loop: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.min.js"></script>

  </body>

  </html>