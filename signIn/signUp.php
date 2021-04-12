<?php
    if(isset($_POST['signup'])){
        if(!empty($_POST['id']) and !empty($_POST['name']) 
        and !empty($_POST['prename']) and !empty($_POST['pass']) 
        and !empty($_POST['job']) and !empty($_POST['ph']))  {
            if($_POST['pass'] === $_POST['pass2']) {
                require('../cnx/db.php') ;
                $db = new Cnx();
                $user['cin'] = $_POST['id'] ;
                $user['name'] = $_POST['name'] ;
                $user['prename'] = $_POST['prename'] ;
                $user['pass'] = $_POST['pass'] ;
                $user['job'] = $_POST['job'] ;
                $user['ph'] = $_POST['ph'] ;
                

                $db->signUpE($user) ;
                
                header("Location: ../assistant");
                exit();
        
            }
            
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
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img  href="../index.php" src="../images/logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="signUp.php">
					<span class="login100-form-title">
						Add User
					</span>

					<div class="wrap-input100 validate-input" data-validate = "must be a number">
						<input class="input100" type="number" name="id" placeholder="CIN">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-card" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="prename" placeholder="Preame">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						 <select name="job" class="input100 form-control-lg">
                         <span class="focus-input100"></span>
                            <option class="focus-input100" value="" disabled selected>Choose your job</option>
                            <option value="1">Doctor</option>
                            <option value="2">Assistent</option>
                        </select>
                        
						
                    </div>
                    
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Password don't match">
						<input class="input100" type="password" name="pass2" placeholder="Repeat Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="number" name="ph" placeholder="Phone Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
                    </div>
                    
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="signup">
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



