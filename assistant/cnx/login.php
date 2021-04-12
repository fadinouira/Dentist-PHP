

<?php
    if(isset($_POST['signin'])){
        require('db.php') ;
        $db = new Cnx() ;
        $id = $_POST['id'] ;
        $pass = $_POST['pass'] ;
        session_start();
        $_SESSION = $db->logIn($_POST['id'],$_POST['pass']);
        if($_SESSION) {
            if($_SESSION['job']==1) {
                header("Location: ../assistant/assistant.php");
                exit();
            }
            else if($_SESSION['job']==2){
                header("Location: ../assistant/assistant.php");
                exit();
            }
        }
        else  {
            $id = $_POST['id'] ;
            $e1 = "check your password or Cin" ;
        }
    }

?>


<?php 

require('../cnx/db.php') ;
$db = new Cnx() ;

if(isset($_POST['message'])){
    $text = $_POST['text'] ;
    $db->setMessage($text);
}
$tab = $db->getMessages();

?>

<?php
  include('../assistant/header.php');
?>
     
        <div class="col s12 m12 l6">
            <div class="card-panel">
                <h4 class="header2">Form with validation</h4>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="name4" type="text" class="validate">
                                <label for="first_name">CIN</label>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="password5" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div id="work-collections" style="margin:25px;">
            <div class="card">
                <div class="card-image">
                    <img src="../images/gallary/users.jpg" alt="sample" style="max-height:150px;">
                    <span class="card-title">All Accounts</span>
                </div>
                <div class="card-content">
                <div class="container">
                    <form method="post" action="login.php" >
                        <img class="avatar" src="../img/avatar.png" >

                        <div class="input-group">
                            <label>Cin </label>
                            <label style="color : red ;"><?php echo $e1; ?></label>
                        <input type="number" name="id" value="<?php echo $id; ?>">
                        </div>

                        <div class="input-group">
                            <label>Password</label>
                            <label style="color : red ;"><?php echo $e1; ?></label>

                        <input type="password" name="pass" value="">
                        </div>
                        
                        <div class="input-group">
                        <button type="submit" class="btn" name="signin">Sign In</button>
                        </div>
                    </form>

                </div>
                <div class="card-action">
                <a href="../cnx/signup.php"><button class="btn" > Add Account</button></a>
                </div>
            </div>
        </div>

    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
   <?php 
    include('../assistant/footer.php')
   ?>
