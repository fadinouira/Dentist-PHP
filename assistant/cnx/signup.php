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
        if(!empty($_POST['id']) and !empty($_POST['name']) 
        and !empty($_POST['prename']) and !empty($_POST['pass']) 
        and !empty($_POST['job']) and !empty($_POST['ph']))  {
            if($_POST['pass'] === $_POST['pass2']) {
                require 'db.php';
                $db = new Cnx();
                $user['cin'] = $_POST['id'] ;
                $user['name'] = $_POST['name'] ;
                $user['prename'] = $_POST['prename'] ;
                $user['pass'] = $_POST['pass'] ;
                $user['job'] = $_POST['job'] ;
                $user['ph'] = $_POST['ph'] ;
                

                $db->signUpE($user) ;
                session_start();
                $_SESSION = $user ;
                if($_SESSION['job']==1) {
                    header("Location: ../interface/doctor.php");
                    exit();
                }
                else if($_SESSION['job']==2){
                    header("Location: ../interface/assistant.php");
                    exit();
                }
            }
            
        }
        else $e1 = "all champs are required" ;
       
    }

?>


<div class="container">
    <form method="post" action="signup.php" >
        <img class="avatar" src="../img/avatar.png" >
        <h5 class="error"><?php echo $e1; ?></h5>


        <div class="input-group">
            <label>C.I.N </label>
            
        <input type="number" name="id" value="<?php echo $id; ?>" required>
        </div>

        <div class="input-group">
            <label>Name</label>
        <input type="text" name="name" value="<?php echo $id; ?>" required>
        </div>

        <div class="input-group">
            <label>Prename </label>
        <input type="text" name="prename" value="<?php echo $id; ?>" required>
        </div>

        <select name="job" class="browser-default">
            <option value="" disabled selected>Choose your job</option>
            <option value="1">Doctor</option>
            <option value="2">Assistent</option>
        </select>

        <div class="input-group">
            <label>Password</label>
        <input type="password" name="pass" value="" required>
        </div>

        <div class="input-group">
            <label>Repeat Password</label>
            <label style="color : red ;"><?php echo $e2; ?></label>
        <input type="password" name="pass2" value="<?php echo $e2; ?>" required>
        </div>

        <div class="input-group">
            <label>Phone Number</label>
        <input type="number" name="ph" value="" required>
        </div>

        
        
        <div class="input-group">
        <button type="submit" class="btn" name="signin">Sign Up</button>
        </div>
    </form>
</div>
<br>

</div>
</div>
</body>
</html>