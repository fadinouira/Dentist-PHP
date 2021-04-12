<?php 
    session_start() ;
    if($_SESSION['job'] == 1) {
        $page = 1 ;
        $idd = $_GET['idd'];

        require('cnx/db.php') ;
        $db = new Cnx() ;
        $db->deleteApp($idd) ;

        $tab = $db->getAppsDoc($_SESSION['cin']) ;
        function sort_by_date($a, $b) {
            $a = strtotime($a['time']);
            $b = strtotime($b['time']);
            if ($a == $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        }
        
        usort($tab, 'sort_by_date');
        

        include('header.php') ;
 
       

    }
    else {
        header('Location:../index.php') ;
        exit() ;
    }

    

    
?>

<div id="main">
      <!-- START WRAPPER -->
    <div class="wrapper">
    <?php $page = 2 ;include('sidebar.php') ; ?>
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
            <div class="container">
                <div id="work-collections" style="margin:25px;">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/gallary/users.jpg" alt="sample" style="max-height:150px;">
                            <span class="card-title">Appointements</span>
                        </div>
                        <div class="card-content">
                            <table class="responsive-table striped" >
                                <thead>
                                    <tr>
                                        
                                        <th>Patient</th>
                                        <th>Birth Date</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($tab as $employee) {
                                            $id = $employee[0];
                                            $client = $db->getClient($employee[2]) ;
                                            $clt = $client['name']." ".$client['prename'] ;
                                            $bd = $client['bd'] ;
                                            $date = $employee[3] ;
                                            $time = $employee[4] ;
                                            
                                            echo <<<Html

                                            <tr>
                                                
                                                <th>$clt</th>
                                                <th>$bd</th>
                                                <th>$date</th>
                                                <th>$time</th>
                                               
                                                
                                            </tr>

                                            Html ;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
 
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