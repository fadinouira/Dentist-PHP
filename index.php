<?php

    if(isset($_POST['send'])){
        require('assistant/cnx/db.php') ;
        $db = new Cnx() ;
        $name = $_POST['name'] ;
        $email = $_POST['email'] ;
        $text = $_POST['text'] ;
        $db->setMessage($name,$email,$text) ;
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Dental-Clinic</title>
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
<link rel="icon" href="images/logo.png" type="image/png" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 

</head>
<!-- body -->
<body>
	<div class="header_main">
		<div class="container">
			<div class="logo"><a href="index.php"><img width="70" height="70" src="images/logo.png"></a>
    	        <h3><span style="font-weight: bold; color: #10b5fa">Dental Clinic</span></h3></div>
		</div>
	</div>
	</div>
	<div class="header">
		<div class="container">
        <!--  header inner -->
            <div class="col-sm-12">
                 
                 <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                               <li class="nav-item active">
                                <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a> </li>
                               <li class="nav-item">
                                <a class="nav-link" href="#about">ABOUT</a></li>
                               <li class="nav-item">
                                <a class="nav-link" href="#service">SERVICES</a></li>
                                <li class="nav-item">
      	                        <a class="nav-link" href="#contact">CONTACT</a></li>
                               <li class="last"> 
                               <li class="nav-item">
      	                        <a class="nav-link" href="messages.php">MESSAGES</a></li>
                               <li class="last"> 
                <?php
                session_start() ;
                $a = $_SESSION[2];
                if($_SESSION['job'] == null) {
                  echo "<a href='signIn/signIn.php'>Sign In $a</a>" ;
                }
                elseif($_SESSION['job'] == 1) {
                    echo '<a href="assistant/doctor.php">Profile</a>'  ;
                }
                else {
                    echo '<a href="assistant">Profile</a>'  ;
                }
                ?></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>
    <!-- end header end -->        
    <!--banner start -->
    <div class="banner-main">
    	<div class="container">
           <div id="main_slider" class="carousel slide" data-ride="carousel">  
           <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
    		    <div class="titlepage-h1">
    	        <h1 class="bnner_title">Welcome To<br>
    	        <span style="color: #10b5fa">Dental Clinic</span></h1>
    	        <p class="long_text">Every day we bring hope and smile to the patinet we serve</p>
    		    </div>
    		    <div class="btn_main">
    			<button type="button" class="btn btn-dark btn-lg"><a  href="signIn/appointement.php">Make an Appointment</a></button>
            </div>
        </div>
    <div class="carousel-item">
    		<div class="titlepage-h1">
                <h1 class="bnner_title">Welcome To<br>
                    <span style="color: #10b5fa">Dental Clinic</span></h1>
    	       <p class="long_text">Your health is our top priority with comprehensive, affordable medical </p>
    		</div>
    		<div class="btn_main">
    			<a  href="#contact" type="button" class="btn btn-dark btn-lg">Contact</a>
    		</div>
    </div>
    <div class="carousel-item">
    		<div class="titlepage-h1">
                <h1 class="bnner_title">Welcome To<br>
                    <span style="color: #10b5fa">Dental Clinic</span></h1>
    	       <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking </p>
    		</div>
    		<div class="btn_main">
            <button type="button" class="btn btn-dark btn-lg"><a  href="signIn/appointement.php">Make an Appointment</a></button>
    		</div>
    </div>
  </div> 
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-right"></i>
            </a>
    </div>
</div>
</div>
<!--banner end -->
    <!--services start -->
    <div class="services_main" id='about' >
    	<div class="container">
    		<div class="creative_taital">
    			<h1 class="creative_text">Creative Content Writing Services</h1>
    			<p style="color: #050000; text-align: center;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infanc</p>
    			<div class="btn_main">
    			    <button href="signIn/appointement.php" type="button" class="btn btn-dark btn-lg">Make an appointement</button>
    		    </div>
    		</div>
    		    <div class="section_service_2" id="service">
    		    	<h1 class="service_text">Our Service</h1>
    		    </div>
    		    <div class="service_main">
    		    	<div class="container">
    		    		<div class="row">
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    					<div class="like_icon"><img src="images/like-icon.png"></div>
    		    					<h1 class="written_text">Written with Love</h1>
    		    					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, </p>
    		    				</div>
    		    			</div>
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    					<div class="like_icon"><img src="images/fast-forword-icon.png"></div>
    		    					<h1 class="written_text">Fast Turnaround</h1>
    		    					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, </p>
    		    				</div>
    		    			</div>
    		    		</div>
    		    	</div>
    		    </div>
    		    <div class="service_main">
    		    	<div class="container">
    		    		<div class="row">
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    					<div class="like_icon"><img src="images/design-icon.png"></div>
    		    					<h1 class="written_text">Up to Date</h1>
    		    					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, </p>
    		    				</div>
    		    			</div>
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    				  <div class="like_icon"><img src="images/writing-icon.png"></div>
    		    					<h1 class="written_text">Premium Content</h1>
    		    					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, </p>
    		    				</div>
    		    			</div>
    		    		</div>
    		    	</div>
    		    </div>
    	</div>	  
	</div>
    <!--services end -->

    <!--quote_section start -->
    <div class="quote_section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<h1 class="quote_text">Quote for Today</h1>
    				<p class="loan_text">It is a long established fact that a reader will be distracted by the readable content of a page </p>
    			</div>
    		    <div class="col-md-6">
    			    <div class="quote_btn">
    			        <button type="button" class="btn btn-dark btn-lg">Get A Quote</button>
    		        </div>
    		    </div>
    		</div>
    	</div>
    </div>

    <!--quote_section end -->
    <!--touch_section start -->

    <div class="touch_section" id='contact'>
        <div class="container">
            <h1 class="touch_text">Let's Get In Touch!</h1>
        </div>
    </div>

    <div class="lets_touch_main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="input_main">
                       <div class="container">
                          <form method="post" action="index.php">
                            <div class="form-group">
                              <input name="name" type="text" class="email-bt" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                              <input name="email" type="text" class="email-bt" placeholder="Email" name="Email">
                            </div>
                            
                            <div class="form-group">
                                <textarea name="text" class="massage-bt" placeholder="Message" rows="5" id="comment" name="text"></textarea>
                            </div>

                            <div class="send_btn">
                                <button  name="send" type="submit" class="main_bt"><a>Send</a></button>
                            </div> 
                          </form>
                       </div> 
                                         
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--touch_section end -->
    <!--Contact_section start -->
    <div class="contact_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="touch_text">Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="contact_section_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="images/map-icon.png" style="max-width: 100%;padding-left: 30px; ">
                            <p class="email-text"><a href="#">Gb road 123 londo<br>Uk</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="images/call-icon.png" style="max-width: 100%;padding-left: 30px;">
                            <p class="email-text"><a href="#">+7123654897</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="images/email-icon.png" style="max-width: 100%; padding-left: 30px;">
                            <p class="email-text"><a href="#">demo@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--Contact_section end -->
    <div class="copyright" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   <p class="copyright_text">© 2019 All Rights Reserved. <a href="https://html.design">Free Website Templates</a></p>
                </div>
            </div>
        </div>
    </div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>