<?php 

require('cnx/db.php') ;
$db = new Cnx() ;
session_start() ;

if(isset($_POST['message'])){
    $text = $_POST['text'] ;
    $db->setMessage($text);
}
$tab = $db->getMessages();
$reply = $db->getReply($mess['id']) ;

$page = 3 ; 

include('header.php') ;
 

?>
<div id="main">
      <!-- START WRAPPER -->
    <div class="wrapper cyan lighten-5">
    <?php include('sidebar.php') ; ?>
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content" class="container  ">
          <!--start container-->
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
                    <img src="images/avatar/avatar-1.png" alt="" class="profile_pic">
                    <div class="comment-details">
                        <span class="comment-name">$name</span>
                        <span class="center comment-date">$date</span>
                        <p>$message</p>
                        <br>
                    </div>
                    <br><br>
                    <div>
              Html ;
              
                                foreach($reply as $rep) {
                                  $repName = $rep['name'] ;
                                  $repDate = $rep['date'] ;
                                  $relyText = $rep['text'] ;
                                
                                  echo <<<Html2
                                
                                  
                                <div class="comment reply clearfix" style="margin-left : 50px ;border-radius: 25px;
                                border: 2px solid #039BE5; padding:10px" >
                                    <img src="images/avatar/avatar-4.png" alt="" class="profile_pic">

                                        <span class="comment-name">$repName</span>
                                        <span class="center comment-date">$repDate</span>
                                        <p>$relyText</p>
                                </div>
                                
                                  
                               
                                Html2 ;
                                }
                                

            echo <<<Html3
                          <br>
                          </div>
                            <form method="post" action="messages.php"  class="input-field small" style="margin-left : 25px ;border-radius: 25px;
                            border: 2px solid #039BE5; padding:10px">
                              <i class="material-icons prefix">question_answer</i>
                              <textarea  name="$a" class="materialize-textarea validate" length="120"></textarea>
                              <label for="message">Message</label>
                              <button class="btn waves-effect waves-light right cyan btn-floating" type="submit" name="$id" >
                                  <i class="material-icons right">send</i>
                              </button>
                            </form>
                            <br>
                        </div>
            
                
                Html3 ;


          }

            
        ?>

          <br>
        </section>
 
        <!-- END CONTENT -->
 
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
</div>
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->



<?php 

include('footer.php') ;

?>



