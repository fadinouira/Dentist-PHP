<?php 
    $page ;
    $color = "gradient-45deg-light-blue-cyan" ;

?>



<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
    <li class="user-details cyan darken-2">
        <div class="row">
        <div class="col col s4 m4 l4">
            <img src="images/avatar/avatar-7.png" alt="" class="circle responsive-img valign profile-image cyan">
        </div>
        <div class="col col s8 m8 l8">
            <a class="white-text" href="#"><?php echo  $_SESSION['name']." ".$_SESSION['prename'] ; ?><i class="right"></i></a>
            <p class="user-roal"><?php if($_SESSION['job'] == 2)
                                            echo "Assistant" ;
                                        else echo "Doctor" ?></p>
        </div>
        </div>
    </li>
<?php 
if($_SESSION['job'] == 2) {
echo <<<html
    <li class="no-padding">
        <ul class="collapsible" data-collapsible="accordion">
        
        <li class="bold">
            <a href="index.php" class="waves-effect waves-cyan 
html;
    if($page == 1) echo $color ;
    echo <<<sss
                ">
                    <i class="material-icons">supervisor_account</i>
                    <span class="nav-text">Accounts</span>
                </a>
            </li>
            <li class="bold">
                <a href="appointements.php" class="waves-effect waves-cyan  
        sss;
     if($page == 2) echo $color ; 
echo <<<html2
     ">
                <i class="material-icons">bookmark</i>
                <span class="nav-text">Appointments</span>
            </a>
        </li>
        <li class="bold">
            <a href="messages.php" class="waves-effect waves-cyan  
    html2;
    if($page == 3) echo $color ;
    echo <<<back
        ">
                <i class="material-icons">message</i>
                <span class="nav-text">Messagess</span>
            </a>
        </li>
        <li class="bold">
            <a href="clients.php" class="waves-effect waves-cyan
    back ;
            if($page == 4) echo $color ;
            
echo <<<zzz
">
                <i class="material-icons">account_box</i>
                <span class="nav-text">Clients</span>
            </a>
        </li>
   

zzz;
}
else {
    echo <<<html
    <li class="no-padding">
        <ul class="collapsible" data-collapsible="accordion">
        
        <li class="bold">
            <a href="index.php" class="waves-effect waves-cyan 
    html;
     echo $color ;
    echo <<<sss
                ">
                    <i class="material-icons">bookmark</i>
                    <span class="nav-text">Appointements</span>
                </a>
            </li>
sss ;
}
?>
        <li class="bold">
            <a href="cnx/logout.php" class="waves-effect  ">
                <i class="material-icons red-text">exit_to_app</i>
                <span  class="nav-text red-text">Disconnect</span>
            </a>
        </li>
   
        
        </ul>
    </li>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
    <i class="material-icons">menu</i>
    </a>
</aside>