<?php
    if(isset($_POST['add'])){
		
        if(!empty($_POST['num']) and !empty($_POST['name']) 
        and !empty($_POST['prename']) and !empty($_POST['email']) 
        and !empty($_POST['bd']) )  {
            if($_POST['pass'] === $_POST['pass2']) {
                require('../assistant/cnx/db.php') ;
                $db = new Cnx();
                $user['ph'] = $_POST['num'] ;
                $user['name'] = $_POST['name'] ;
                $user['prename'] = $_POST['prename'] ;
                $user['bd'] = $_POST['bd'] ;
                $user['email'] = $_POST['email'] ;
                

                $db->addClient($user) ;
                
                header("Location: ../assistant/clients.php");
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
		<div class="container-login100" style="padding-bottom:50px">
			<div class="wrap-login100" style="padding-bottom:100px">
				<div class="login100-pic js-tilt" data-tilt>
					<img  href="../index.php" src="../images/logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="client.php">
					<span class="login100-form-title">
						Add Client
					</span>

					<div class="wrap-input100 validate-input" data-validate = "must be a number">
						<input class="input100" type="number" name="num" placeholder="Phone Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "must set a name">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "must set a prename">
						<input class="input100" type="text" name="prename" placeholder="Preame">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid date is required">
						<input class="input100" type="date" name="bd" placeholder="Birth Date">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
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



