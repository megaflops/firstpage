<?php



if(isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['message']))
{
if(!empty($_POST['fname']) &&  !empty($_POST['email']) && !empty($_POST['message']))
  { 
      
   
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
      
      
  $fname=$_POST['fname']; 
 
  $email=$_POST['email'];
  
  $message=$_POST['message'];
  if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
static $msg1= '<html><body><center><p style="color:red;font-size:18px;font-weight:bold;">Kindly Provide Valid Email</p></center></body></html>';
}
 else
{
 $body="Name=".$fname."<br/>"."Email=".$email."<br/><br/>"."Message=".$message;
if(mail('itsrakesh@gmail.com ','CSECODER ',$body,$header))
{
static $msg2= '<html><body><center><p style="color:red;font-size:18px;font-weight:bold;">Your Message Has Been Sent</p></center></body></html>';
}






else
{  static $msg3= '<html><body><center><p style="color:brown;font-size:18px;font-weight:bold;">There Is A Problem In Sending mail.</p></center></body></html>';
}}}
else 
{
  static $msg4= '<html><body><center><p style="color:red;font-size:18px;font-weight:bold;">All Fields Are Required</p></center></body></html>';
}}




else
{  
static $msg5= '<html><body><center><p style="color:black;font-size:25px;font-weight:bold;">Contact Form</p></center></body></html>';
}


?>

<html>
<head>
<title>Amtriclabs</title>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- All css files are included here. -->

    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/vendor/iconfont.min.css">

    <link rel="stylesheet" href="assets/css/vendor/helper.css">

    <link rel="stylesheet" href="assets/css/vendor/plugins.css">

    <link rel="stylesheet" href="assets/css/vendor/style.css">

    <link rel="stylesheet" href="assets/css/vendor/stylecontact.css">


    <link rel="stylesheet" href="assets/css/vendor/custom.css">

    <!-- Modernizr JS -->

    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

	<style>

	

	.has-search .form-control {

    padding-left: 2.375rem;

}



.has-search .form-control-feedback {

    position: absolute;

    z-index: 2;

    display: block;

    width: 2.375rem;

    height: 2.375rem;

    line-height: 2.375rem;

    text-align: center;

    pointer-events: none;

    color: #aaa;

}

.text-divider{margin: 2em 0; line-height: 0; text-align: center;}

.text-divider span{background-color: #fff;    padding: .3em;}

.text-divider:before{ content: " "; display: block; border-top: 1px solid #e3e3e3; border-bottom: 1px solid #f7f7f7;}

.firstnew{font-size: 3em; font-weight: bold;}

</style>

</head>
<body>

    <div id="main-wrapper">

      
	  <!--Header section start-->

        <header class="header header-transparent header-sticky  d-lg-block d-none">

            <div class="header-deafult-area">

                <div class="container">

                    <div class="row align-items-center pt-45 pt-lg-35 pb-45 pb-lg-35 ">

                        <div class="col-xl-3 col-lg-2 col-md-4 col-12">

                            <!--Logo Area Start-->
                            
                            <div class="logo-area" id="logo" style="max-width:100px; max-height:100px;">

                                <a href="index.html"><img src="images/logo.png" alt="" style="max-width:100px; max-height:100px;"></a>

                            </div>

                            <!--Logo Area End-->

                        </div>
						
				            		<div class="col-xl-1 col-lg-1 col-md-4 d-none d-lg-block col-12">
                              
				                </div>

                        <div class="col-xl-3 col-lg-4 col-md-4 d-none d-lg-block col-12">

                            <!--Header Menu Area Start-->

                            <!--div class="header-menu-area text-center">

                             <div class="input-group">

                                <input type="text" class="form-control" placeholder="Search product....">

                                   <div class="input-group-append">

                                       <button class="btn btn-secondary" type="button" style="padding: 9px 24px!important;border-radius: 0px!important;
                                       border-left: none;border-color: #cbd2d8;color: #131231 !important;background-color: #fff!important;">

                                        <i class="fa fa-search"></i>

                                      </button>

                                   </div>

                              </div>

                            </div-->

                            <!--Header Menu Area End-->

                        </div>

                        <div class="col-xl-5 col-lg-6 col-md-5 col-12">

                            <!--Header Search And Mini Cart Area Start-->

                            <div class="header-search-cart-area">

                                <ul>
                                    <!--li class="Sign_In" style="width:70px;height:5px;"><a     style="width: 80px;
                                      font-size: 16px	!important;" href="#"></a> </li>							

                                     <li class="currency-menu"  style="width:34px;height:10px;"><a href="#"><img src="images/kart.png" height="22px" width="22px"></a></li>

								                  	 <li class="mini-cart" style="width:34px;height34px;margin-left:10px;"><a  href="#"><img src="icons/wishlist.png"></a></li -->
                                    
                                    <li class="mini-cart"  style="margin-left:10px!important; font-size:16px; font-weight:bold">
                                        shop@
                                    </li>
                                    <li class="mini-cart"  style="margin-left:10px!important">
                                      <a href="https://www.flipkart.com/amtric-labs-sterlo-st-300-uv-sterilization-box/p/itm01a0806729699?pid=ULPFUC5N8M6VYGDZ">
                                          <img src="icons/flipkart.webp "height="80px" width="120px"></i> 
                                      </a>
                                      
                                    </li>
                                    <li class="mini-cart"  style="margin-left:0px!important">
                                        <a href="https://www.amazon.in/dp/B08HHN32YB?ref=myi_title_dp">
                                            <img src="icons/amazon.png "height="50px" width="100px"></i> 
                                        </a>
                                        
                                      </li>

                                </ul> 

                            </div>

                            <!--Header Search And Mini Cart Area End-->

                        </div>
                        <!--div class="col-xl-2 col-lg-4 col-md-5 col-12">
                       
                         </div-->

                    </div>
                     
					

					    <div class="row align-items-center bg-gray " >

                          <div class="col-xl-12 col-lg-12 col-md-4 d-none d-lg-block col-12" style="height:51px;background-color: rgb(22, 153, 218) ">

                            <!--Header Menu Area Start-->
                              
                            <div class="header-menu-area  text-center" style="text-align:center;height:51px;  ">

                                <nav class="main-menu text-center navbar navbar-expand-lg" style="line-height: 8px!important; text-align:center; height:51px;">

                                    <ul class="text-center navbar-nav ml-auto mr-auto nav-bar-list-spr" style="text-align:center; margin-left:auto; margin-right:auto;">

                                        <li style="padding:0 35px;"><a href="index.html"> <p style="display:inline ;font-size:16px;">H</p><p style="display:inline; color:white ;font-size:12px">OME</p> </a></li>

                                        <li style="padding:0 35px;"><a href="product.html"><p style="display:inline; font-size:16px;">P</p><p style="display:inline; color:white;font-size:12px;">RODUCTS</p></a>                                           

                                        </li>

                                        <li style="padding:0 35px;"><a href="aboutus.html"><p style="display:inline; font-size:16px;">A</p><p style="display:inline; color:white;font-size:12px;">BOUT US</p></a></li>

                                        <li style="padding:0 35px;"><a href="contactus.php"><p style="display:inline; font-size:16px;">C</p><p style="display:inline;color:white;font-size:12px;">ONTACT US</p></a> </li>

                                        <!--li style="padding:0 35px;"><a href="index.php"><p style="font-size:16px; color:white">FAQ</p></a></li-->
                                        <li style="padding:0 35px;"><a href="faq.html"><p style="display:inline; font-size:16px;">F</p><p style="display:inline;color:white;font-size:12px;">AQ</p></a> </li>


                                    </ul>

                                </nav>

                            </div>

                            <!--Header Menu Area End-->

                        </div>

		
											
                        <!--div class="col-xl-2 col-lg-4 col-md-5 col-12">
                            
                            </div-->

                    </div>

                        

                </div>

            </div>

        </header>

                <!--Header Mobile section start-->

                <header class="header-mobile d-block d-lg-none">

                  <div class="header-bottom menu-right">
      
                      <div class="container">
      
                          <div class="row">
      
                              <div class="col-12">
      
                                  <div class="header-mobile-navigation d-block d-lg-none">
      
                                      <div class="row align-items-center">
      
                                          <div class="col-6 col-md-6">
      
                                              <div class="header-logo">
      
                                                  <a href="index.html">
      
                                                      <img src="images/logo.png" class="img-fluid" alt="">
      
                                                  </a>
      
                                              </div>
      
                                          </div>
      
                                          <div class="col-6 col-md-6">
      
                                              <div class="mobile-navigation text-right">
      
                                                  <div class="header-icon-wrapper">
      
                                                      <ul class="icon-list justify-content-end">
      
                                                          <li>
                                                            <li class="mini-cart"  style="margin-left:10px!important">
                                                                <a href="https://www.flipkart.com/amtric-labs-sterlo-st-300-uv-sterilization-box/p/itm01a0806729699?pid=ULPFUC5N8M6VYGDZ">
                                                                    <img src="icons/flipkart.webp "height="80px" width="120px"></i> 
                                                                </a>
                                                              </li>
                                                              <li class="mini-cart"  style="margin-left:10px!important">
                                                                <a href="https://www.amazon.in/dp/B08HHN32YB?ref=myi_title_dp">
                                                                    <img src="icons/amazon.png "height="80px" width="120px"></i> 
                                                                </a>
                                                              </li>
      
                                                              <!--div class="header-cart-icon">
      
                                                                  <a href="index.php"><i class="flaticon-shopping-cart"></i></a>
      
                                                              </div-->
      
                                                          </li>
      
                                                          <li>
      
                                                              <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
      
                                                          </li>
      
                                                      </ul>
      
                                                  </div>
      
                                              </div>
      
                                          </div>

                                                                                 
                                        </div>
      
                                      </div>
      
                                  </div>
      
                              </div>
      
                          </div>
                          
                         
      
      
                          <!--Mobile Menu start-->
      
                          <div class="row">
      
                              <div class="col-12 d-flex d-lg-none">
      
                                  <div class="mobile-menu"></div>
      
                              </div>
      
                          </div>
      
                          <!--Mobile Menu end-->
      
      
      
                      </div>
      
                  </div>
      
              </header>
      
              <!--Header Mobile section end-->
      
              <!-- Offcanvas Menu Start -->
      
              <div class="offcanvas-mobile-menu d-block d-lg-none" id="offcanvas-mobile-menu">
      
                  <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
      
                      <i class="fa fa-times"></i>
                  </a>
                         <div class="offcanvas-wrapper">
                         <div class="offcanvas-inner-content">                 
                         <nav class="offcanvas-navigation">
                                 <ul>
      
                                              <li><a href="index.html">Home</a> </li>
      
                                              <li><a href="product.html">Products</a>  </li>
      
                                              <li><a href="aboutus.html">About us</a></li> 
                                              
                                              <li><a href="contactus.php">Contact us</a> </li>

                                              <li><a href="faq.html">FAQ</a> </li>
      
                                          </ul>
      
                              </nav>
      
                          </div>
      
      
      
                        
      
                      </div>
      
                  </div>
      
      
      
              </div>
      
              <!-- Offcanvas Menu End -->

   

          <style>

            /* img { width: 100%; height: auto; } */
            img {  margin: auto; }
            @media screen and (max-width: 1920px) {
              #carousel slide {
                display: none;
                }	
            }
            @media screen and (min-width: 1920px) {
              #carousel slide{
                display: none;
                }	
              div.navBulletsWrapper  {
              top:570px; left:1200px;
            }
            }
            @media screen and(max-width:1920px){
              .carousel-inner {
                position: relative;
                width: 136%;
                overflow: hidden;
            }
            }
            @media only screen and (max-width: 479px){
            .container {
                max-width: 356!important;
            }
            }
            @media screen 
              and (device-width: 360px) 
              and (device-height: 640px) 
              and (-webkit-device-pixel-ratio: 4) 
              and (orientation: portrait) {
                .carousel, .carousel-item img{
                  max-height:100px!important;
            
            
                }
            
            
            }
            @media (min-width: 576px){
            .container {
                max-width: 664 !important;
            }
            }
            @media only screen and (max-width: 479px){
            .container {
                max-width: 379px !important;
            }
            }
            @media (min-width: 1200px){
            .container {
                max-width: 1532px !important;
            }
            }
            .rectangleShadow{
                position: relative;
                left:200px;
                top:-150px;
                width: 200px;
                height: 150px;
                padding: 15px;
                font-size: small;
                background-color: white;
                box-shadow: 10px 10px 5px grey;
                }
                .rectangleShadowAbs{
                position: absolute;
                left:280px;
                top:300px;
                width: 150px;
                height: 150px;
                padding: 15px;
                font-size: small;
                background-color:white;
                box-shadow: 10px 10px 5px grey;
                }
            </style>
            
            <iv class="container" id="bannerpart">
            <div class="row" style="background-color:white";>
            <div class="col-lg-12"></div><br/>
                <img class="d-block w-100" src="images/maps.png"  style="max-width: 80% !important;" alt="First slide">
                
            </div>
            
            
            <!--div class="rectangleShadowAbs"> <span style=" font-weight: bold;">  Registered Address  </span> 
                 <span style=" font-weight: bolder;"> <h5> Amtric Labs </h5>  </span> 
                <h6>Narendra Niwas, Mohali Village, Pipeline Sakinaka, Munbai 400072 India </h6>
              </div>
              
              <div class="rectangleShadow"> <span style=" font-weight: bold;">  Banglore Address </span>
                <h6>  <br> #1705 Ist floor, 19th Main Road, HSR Layout Sector-2 Bangalore 560102 <br> India</h6>

              </div-->
    
        <!--Product section start-->
        <!--div class="product-section section pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-5">
          <div class="container">
              <div class="row">
                <div class="col">
                      <div class="section-title text-center mb-15 font-size:20px">
                          <h2> Contact Us </h2>
               
                      </div>
                </div>
              </div>
           </div>
        </div--> 

        
         <!--About section start-->
         <div class="container-contactujju">
            <div class="wrap-contactujju">
                <form class="contactujju-form validate-form" action="" method="POST">
                    <span class="contactujju-form-title">
                         
                    <?php	echo $msg1; ?>
                    <?php	echo $msg2; ?>
                    <?php	echo $msg3; ?>
                    <?php	echo $msg4; ?>
                    <?php	echo $msg5; ?>
                    </span>
    
                    <div class="wrap-inputujju validate-input" >
              <i class="fa fa-user icon"></i>
              <span class="label-inputujju">Name</span>
              
              <input class="inputujju" type="text" name="fname" placeholder="Enter your name" required>
              <span class="focus-inputujju"></span>
                    </div>
    
                    <div class="wrap-inputujju validate-input" >
              <i class="fa fa-envelope icon"></i>
              <span class="label-inputujju">Email</span>
              <input class="inputujju" type="text" name="email" placeholder="Enter your email addess" required>
                        <span class="focus-inputujju"></span>
                    </div>
                    
                    <div class="wrap-inputujju validate-input" >
              <span class="label-inputujju">Message</span>
              <textarea class="inputujju" name="message" placeholder="Type message..." ></textarea>
                        <span class="focus-inputujju"></span>
                    </div>
    
                    <div class="container-contactujju-form-btn">
                        <div class="wrap-contactujju-form-btn">
                            <div class="contactujju-form-bgbtn"></div>
                            <button class="contactujju-form-btn" >
                                <span  >
                                 Submit
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
        <!--About section end-->


 



         
     <style>
        @media only screen and (max-width: 768px){
            .col-lg-2 img{
                height:80px !important;
                width:80px !important;
                

            }
        }
        </style>



	   <!-- Howwework Section Start -->
        <div class="newsletter-section section bg-gray-two pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-95 pb-lg-75 pb-md-65 pb-sm-60 pb-xs-50">
          <div class="container">
				  	<div class="well">
		        <h2 class="text-divider"><span><b>AmtricLabs Assurance</b></span></h2>
       
           	</div>
           <div class="row align-items-center">
                <div class="col-lg-3">
                  <img src="icons/15.png"  style="width: 100px;" class="rounded mx-auto d-block" />
                  <p class="text-center" >
                  Shop from Flipkart & Amazon
                </p>
              </div>
            <!--iv class="col-lg-2">
                  <img src="icons/9.png" style="width: 100px;" class="rounded mx-auto d-block"/>
                    <p class="text-center">
                    Secure Payment
                    </p> </div-->
				      <div class="col-lg-3">
                         <img src="icons/10.png" style="width: 100px;"  class="rounded mx-auto d-block"/>
                          <p class="text-center" >
                          Friendly customer care </p> 
              </div>
					    <div class="col-lg-3">
                         <img src="icons/11.png" style="width: 100px;" class="rounded mx-auto d-block"/>
				          		<p class="text-center"> Made in India </p> 
              </div>
					    <div class="col-lg-3">
                         <img src="icons/14.png" style="width: 100px;" class="rounded mx-auto d-block"/>
					  	          <p class="text-center"> Quality Assurance</p> 
              </div> 

            </div>
				  </div>
      </div>
      <!-- Howwework Section End -->		

      <style>
        @media (min-width: 992px){
    .col-lg-4 {
        -ms-flex: 0 0 33.333333% !important;
        flex: 1 0 24.333333% !important;
        max-width: 33.333333% !important;
    }
    }
    @media (min-width: 768px){
    .col-md-6 {
        -ms-flex: 0 0 50% !important;
        flex: 1 0 22% !important;
        max-width: 50% !important;
    }
    }
    /* @media (min-width: 992px){
    .container{
    margin-right:-12px!important;
    }
    } */
    </style>
    <!--Footer section start-->
            <footer class="footer-section section "> 
           
                <!--Footer Top start-->
                <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-10" style=" background-color: rgb(22, 153, 218) ; padding-top: 26px !important; padding-bottom: 0px !important;">
                    <div class="container">
                        <div class="row">
    
                            <!--Footer Widget start-->
                 <div class="footer-widget col-xl-1 col-lg-1  mb-40   ">
                 </div>
                            <div class="footer-widget col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-40  ml-40 mb-xs-35" style="margin-bottom: 0px !important;" id="demo"> 
                                <h4 class="title"><span class="text">Quick links</span></h4>
                               <ul class="ft-menu">
                                    <li style="line-height: 46px!important;"><a href="aboutus.html">About us</a></li>
                                    <li style="line-height: 46px!important;"><a href="contactus.php">Contact us</a></li>
                                    <li style="line-height: 46px!important;"><a href="faq.html">FAQ</a></li>
                                    <!--li style="line-height: 46px!important;"><a href="#">Dealer login</a></li>   
                                    <li style="line-height: 46px!important;"><a href="careers.php">Careers</a></li-->                           
                                </ul>
                            </div>
                            <!--Footer Widget end-->
    
    
                            <!--Footer Widget start-->
                            <div class="footer-widget col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35" style="   margin-bottom: 0px !important;">
                                <h4 class="title"><span class="text">Policies</span></h4>
                                <ul class="ft-menu">
                                    <li  style="line-height: 46px!important;"><a href="#">Terms of Use</a></li>
                                    <!--li  style="line-height: 46px!important;"><a href="#">Payment & Security</a></li>
                                    <li  style="line-height: 46px!important;"><a href="#">Returns & Refunds</a></li>
                                    <li  style="line-height: 46px!important;"><a href="#">Installation & Cancellation</a></li-->                            
                                </ul>
                            </div>
                            <!--Footer Widget end-->
    
                            <!--Footer Widget start-->
                   <div class="footer-widget col-xl-3 col-lg-5 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35" style="   margin-bottom: 0px !important;">
                                <h4 class="title"><span class="text">Get in Touch</span></h4>
                                <ul class="ft-menu">
                                    <li><a  style="line-height:0px;">Office Timing : </a>
                                      <a  style="line-height:35px;">Monday-Saturday 10AM - 06 PM  </a>
                                    <!-- <li><a href="#">Office Timing:<br/> -->
                                    </li><li><a  style="line-height:8px;">Whatsapp Us : +91-9321523547<br>
                                    </a></li><li><a style="text-transform: none;">Email Us : care@amtriclabs.com</a></li>
                                    <!--div class="title" style="margin-bottom: 0px!important;margin-top: 35px;"><span class="text">Join Our Newsletter Now</span></div>
                                    <li><a href="#">Get E-mail updates about our latest <br><a href="#" style="line-height:0px;">shop and special offers</a>
                                    </a></li-->   
                                </ul>
                            <!--div class="form-group">
                                <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-10 col-md-10 col-sm-12">
                                <input type="text" placeholder="Email address" class="form-control" style="margin-top: 20px;" id="usr">  
                                </div>
                                </div>
                                <br>
                                <div class="row justify-content-between align-items-center">
                                
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                <button type="button" style="background:#fcb800;border-radius: 3px;width:100px;">SUBSCRIBE</button>
                                </div>
                                </div>
                            </div-->
                    </div>
                            <!--Footer Widget end-->
    
                        
                        </div>
                    </div>
                </div>
                <!--Footer Top end-->
    
                <!--Footer bottom start-->
                <div class="footer-bottom section">
                    <div class="container" style="background-color:#fff!important">
                        <div class="row no-gutters">
                            <div class="col-12 ft-border pt-25 pb-25">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="copyright text-left">
                                            <p>Copyright &copy;2020, <a href="#"> <br> Amtric Labs Pvt Ltd.</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">  
                                        <div class="text-center" >
                                           <a href='https://www.instagram.com/tv/CEzynSKDXdD/?utm_source=ig_web_button_share_sheet'>
                                             <img src="images/instagram.jpg" class="rounded" style="width:32px;height:32px;" alt="">	
                                           </a>				
                                           <a href='https://www.facebook.com/amtriclabs'>		
                                             <img src="images/facebook.jpg"class="rounded" style="width:32px;height:31px;" alt="">	
                                           </a>									
                                           <a href='https://twitter.com/AmtricL/status/1302247233274904581?s=20'>		
                                             <img src="images/twitter.png"class="rounded" style="width:32px;height:32px;"  alt="">
                                           </a>  
                                         </div>
                                     
                                 </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Footer bottom end-->
        
            </footer>
            <!--Footer section end-->
          
        </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>