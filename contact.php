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
if(mail('care@amtriclabs.com','Query ',$body,$header))
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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
  <link rel="stylesheet" href="css/style.css">

<style>
.d-flex {
    display: -ms-flexbox!important;
    display: grid!important;
 
}
.rectangleShadow{
  position: relative;
  left:40px;
  top:50px;
  width: 200px;
  height: 200px;
  padding: 15px;
  font-size: small;
  background-color: white;
  box-shadow: 10px 10px 5px grey;
}
.rectangleShadowAbs{
  position: absolute;
  left:40px;
  top:150px;
  width: 150px;
  height: 200px;
  padding: 15px;
  font-size: small;
  background-color: rgb(216, 228, 238);
  box-shadow: 10px 10px 5px grey;
}
.icon {
  padding: 10px;
  background: rgb(90, 169, 243);
  color: white;
  min-width: 50px;
  text-align: center;
}
.centerImage {
  position: relative;
  display: block;
  margin-left: auto;
  margin-right: auto;
  padding-top: 100px;
  width: 100%;
}
</style>

</head>

<body style="background-color:rgb(216, 228, 238);">
 <!--Main Navigation-->
 	<header> 
    <!--Navbar-->
    <img src="images/mapsbw.jpg" alt="Banner" class="centerImage">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

            <div class="container">
              <a href="index.html" >
                <img src="images/Amtric Labs_logo_artwork_vol15-12_blue.png" style="width:90px;height:60px;margin-right: 50px;">
              </a>
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                      <ul class="navbar-nav mr-auto smooth-scroll">
                                         
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="productSpec.html">Products</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- Collapsible content -->

            </div>
                     
        </nav>
        <!--/.Navbar-->
        <div class="rectangleShadowAbs"> <span style="color: rgb(57, 151, 240)"> <h5> Registered Address </h5> </span> 
          <span style="color: rgb(57, 151, 240)"> <h6> Amtric Labs </h6> </span> 
          Narendra Niwas, Mohali Village, Pipeline Sakinaka, Munbai 400072 India
        </div>
        
        <div class="rectangleShadow"> <span style="color: rgb(57, 151, 240)"> Banglore Address </span>
          <p>  <br> #1705 Ist floor, 19th Main Road, HSR Layout Sector-2 Bangalore 560102 <br> India</p>
          <!--span style="color: rgb(57, 151, 240)"> Hyderadbad Address </span>
          <p>  1705 Ist floor, 19th Main Road, HSR Sector-2 Bangalore 560102 </p-->
        </div>
        <center> <h2> <br> <br>  Reach US for any query & support </h2> </center>
        <center>
         <div> 
          <i class="fa fa-whatsapp icon"> 
               &nbsp +919096668663 &nbsp <br>
          </i> 
          <h3> </h3>
          <i class="fa fa-envelope icon"> 
            care@amtriclabs.com
          </i>
          
         </div> 
        </center>        
        
<center>

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
							<span>
                             Submit
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</center>
 </header>
<!--Main Navigation-->
          <center>
            <div class='navLeftFooter nav-sprite-v1' id='navFooter'>
              <div class="navFooterVerticalRow navAccessibility" style="display: table-row;">
                  <div class="navFooterLinkCol navAccessibility">
                     <ul>
                        <li class='nav_first'><a href='aboutus.html' class='nav_a'>About Us</a></li>
                        <li class='nav_first'><a href='contact.php' class='nav_a'>Help & Support</a></li>
                      </ul>
                  </div>
                  <div class="navFooterLinkCol navAccessibility">
                    <ul>
                        <li class='nav_first'>  <a target=_blank href='https://twitter.com'><i class='fa fa-twitter'></i></a> </li>
                        <li class='nav_first'>  <a target=_blank href='https://www.facebook.com'><i class='fa fa-facebook'></i></a> 
                    </ul>
                </div>
                  <div class="navFooterLinkCol navAccessibility">
                    <ul>
                        <li class='nav_first'> <i class='fa fa-envelope'></i> care@amtriclabs.com</li>
                    </ul>
                   </div>
              </div>
            </div>
         </center>
</body>
</html>