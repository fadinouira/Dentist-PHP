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
    
    if(isset($_POST['signin'])){
        if(!empty($_POST['ph']) )
          {
                require 'db.php';
                $db = new Cnx();
                $ph = $_POST['ph'] ;
                $user = $db->signInUser($ph) ;
                if($user) {
                    header("Location: ../interface/makeAppointments.php");
                }
            }
            
        else $e1 = "all champs are required" ;
       
    }

?>


<div class="container">
    <form method="post" action="signInUser.php" >
        <img class="avatar" src="../img/avatar.png" >


        <div class="input-group">
            <label>Phone Number</label>
        <input type="number" name="ph" value="" required>
        </div>

        
        <div class="input-group">
        <button type="submit" class="btn" name="signin">Sign In</button>
        </div>
    </form>
</div>
<br>

</div>
</div>
</body>
</html>