<!doctype html>
<html lang=en>
<head>
<title>The SignUp page</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="../index.css">
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
<a href="../index.php"><div class="top"><img src="../img/ico.png" width="100" height="100" class="logo">
            <h3 class="logotext">Dental Clinic</h3></div></a>
<div id="container">

<div id="content">

<?php
    
    if(isset($_POST['signup'])){
        if(!empty($_POST['name']) 
        and !empty($_POST['prename']) and !empty($_POST['bd']) 
        and !empty($_POST['bc']) and !empty($_POST['ph']))  {
                require 'db.php';
                $db = new Cnx();
                $user['ph'] = $_POST['ph'] ;
                $user['name'] = $_POST['name'] ;
                $user['prename'] = $_POST['prename'] ;
                $user['bd'] = $_POST['bd'] ;
                $user['bp'] = $_POST['bc'] ;
                

                $db->signUpUser($user) ;
                session_start();
                $_SESSION = $user ;
                header("Location: ../interface/makeAppointments.php");
            }
            
        else $e1 = "all champs are required" ;
       
    }

?>


<div class="container">
    <form method="post" action="signupUser.php" >
        <img class="avatar" src="../img/avatar.png" >


        <div class="input-group">
            <label>Name</label>
        <input type="text" name="name" value="" required>
        </div>

        <div class="input-group">
            <label>Prename </label>
        <input type="text" name="prename" value="" required>
        </div>

        <div class="input-group">
            <label>Birth date</label>
        <input type="date" name="bd" value="" required>
        </div>

        <div class="input-phgroup">
            <label>Birth city</label>
        <input type="text" name="bc" value="" required>
        </div>


        <div class="input-group">
            <label>Phone Number</label>
        <input type="number" name="ph" value="" required>
        </div>

        
        <div class="input-group">
        <button type="submit" class="btn" name="signup">Sign Up</button>
        </div>
    </form>
</div>
<br>

</div>
</div>
</body>
</html>