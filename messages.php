<?php



    require('assistant/cnx/db.php') ;
    $db = new Cnx() ;

    if(isset($_POST['message'])){
        $text = $_POST['text'] ;
        $db->setMessage($text);
    }
    $tab = $db->getMessages();
    $reply = $db->getReply($mess['id']) ;

    $page = 3 ; 

    



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
<title>Cron</title>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

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
                                <a class="nav-link" href="index.php#about">ABOUT</a></li>
                               <li class="nav-item">
                                <a class="nav-link" href="index.php#service">SERVICES</a></li>
                                <li class="nav-item">
      	                        <a class="nav-link" href="index.php#contact">CONTACT</a></li>
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
    <section id="content" class="container  ">
          <!--start container-->
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          

            
          <?php 
            foreach($tab as $mess) {
                $id = $mess['id'];
                $a = $id."a" ;
                $message = $mess['text'] ;
                $name = $mess['name'] ;
                $date = $mess['date'] ;
                if((isset($_POST["$id"]))&&(isset($_POST["$a"]))) { 
                  $n = $_SESSION['name'].$_SESSION['prename'] ;
                  $txt = $_POST["$a"] ;
                  $db->setReply($n , $txt, $id );
                  
                }
                $reply = $db->getReply($mess['id']) ;
                

                
                echo <<<Html
                
                <div class="comment clearfix container"  style="margin-left : 25px ;border-radius: 25px;
                border: 2px solid #039BE5; padding:10px">
                    <img src="assistant/images/avatar/avatar-1.png" alt="" class="profile_pic">
                    <div class="comment-details">
                        <span class="comment-name">$name</span>
                        <span class="comment-date">$date</span>
                        <p>$message</p>
                        <br>
                    </div>
                    <br>
                    <br>
                    <br><br>
                    
                   
              Html ;
              
                                foreach($reply as $rep) {
                                  $repName = $rep['name'] ;
                                  $repDate = $rep['date'] ;
                                  $relyText = $rep['text'] ;
                                
                                  echo <<<Html2
                                
                                <div > 
                                    <div class="comment reply clearfix" style=" border-radius: 25px;
                                    border: 2px solid #039BE5; padding:10px" >
                                        <img src="assistant/images/avatar/avatar-4.png" alt="" class="profile_pic">

                                            <span class="comment-name">$repName</span>
                                            <span class="comment-date">$repDate</span>
                                            <p>$relyText</p>
                                    </div>
                                   
                                </div>
                                
                                
                                Html2 ;
                                }
                                

            echo <<<Html3
                          
                            
                            
                        </div>
                        <br>
            
                
                Html3 ;


          }

            
        ?>

          <br>
        </section>
 
</div>
</div>