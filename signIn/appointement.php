<?php
	require('../assistant/cnx/db.php') ;
	$db = new Cnx();
	$docs = $db->getDoctors();
    if(isset($_POST['add'])){
        if(!empty($_POST['num']) and !empty($_POST['doc']) 
        and !empty($_POST['date']) and !empty($_POST['time'])  )  {
            
                
                $app['client']  = $_POST['num'] ;
                $app['doc'] = $_POST['doc'] ;
                $app['date']  = $_POST['date'] ;
				$app['time'] = $_POST['time'] ;
               
                

                $db->addApp($app) ;
                
                header("Location: ../assistant/appointements.php");
                exit();
        
          
            
        }
        else $e1 = "all champs are required" ;
       
    }

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add User</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-image:url('../images/banner.jpg')">
	
	<div class="limiter">
		<div class="container-login100" style="padding-bottom:50px">
			<div class="wrap-login100" style="padding-bottom:100px">
				<div class="login100-pic js-tilt" data-tilt>
					<img  href="../index.php" src="../images/logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="appointement.php">
					<span class="login100-form-title">
						Add Appointement
					</span>

					<div class="wrap-input100 validate-input" data-validate = "must be a number">
						<input class="input100" type="number" name="num" placeholder="Client Phone Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
                    </div>

                    
					<div class="wrap-input100 validate-input" data-validate = "must choose a doctor">
						 <select name="doc" class="input100 form-control-lg">
                         <span class="focus-input100 input100"></span>
                            <option class="focus-input100 input100 " value="1" disabled selected>Choose your Doctor</option>
							<?php

								foreach($docs as $doc) {
									$name = $doc['name']." ".$doc['prename'] ;
									$id = $doc['cin'];
									echo "
									<option value=".$id.">$name</option>							
									" ;
								}


							?>
                            
                        </select>
                        
						
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid date is required">
						<input class="input100" type="date" name="date" placeholder="Date">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
                    </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid time is required">
						<input class="input100" type="time" name="time" placeholder="Time">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
						</span>
                    </div>
                    
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="add">
							Add
						</button>
					</div>

					

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>



