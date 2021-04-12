<?php 
    session_start() ;
    if($_SESSION['job'] == 2) {
        $page = 1 ;
        $idd = $_GET['idd'];

        require('cnx/db.php') ;
        $db = new Cnx() ;
        $db->deleteApp($idd) ;

        $tab = $db->getApps() ;

        
        function sort_by_date($a, $b) {
            $a = strtotime($a['date']).strtotime($a['time']);
            $b = strtotime($b['date']).strtotime($b['time']);
            if ($a == $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        }
        
        usort($tab, 'sort_by_date');
        $tab = array_reverse($tab);


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
                            <span class="card-title">Today's Appointements</span>
                        </div>
                        <div class="card-content">
                            <table class="responsive-table striped" >
                                <thead>
                                    <tr>
                                        <th>Doctor</th>
                                        <th>Client</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($tab as $employee) {
                                            $id = $employee[0];
                                            $doctor = $db->getE($employee[1]) ;
                                            $doc = $doctor['name']." ".$doctor['prename'] ;
                                            $client = $db->getClient($employee[2]) ;
                                            $clt = $client['name']." ".$client['prename'] ;
                                            $date = $employee[3] ;
                                            $time = $employee[4] ;
                                            if($date == date("Y-m-d")) {
                                            echo <<<Html

                                            <tr>
                                                <th>$doc</th>
                                                <th>$clt</th>
                                                <th>$date</th>
                                                <th>$time</th>
                                               
                                                <th >

                                                <a class="btn-floating waves-effect waves-light cyan" href='edit.php?idd=$id'><i class="material-icons">mode_edit</i></a>
                                                <a class="btn-floating waves-effect waves-light red" href='appointements.php?idd=$id'><i class="material-icons">clear</i></a>

                                                <th/>
                                            </tr>

                                            Html ;
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-action">
                        <a href="../signIn/appointement.php"><button class="btn-floating btn-large round cyan" >Add</button></a>
                        </div>
                    </div>
                </div>


                
            </div>

            <section id="content">
          <!--start container-->
            <div class="container">
                <div id="work-collections" style="margin:25px;">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/gallary/users.jpg" alt="sample" style="max-height:150px;">
                            <span class="card-title">All Appointements</span>
                        </div>
                        <div class="card-content">
                            <table class="responsive-table striped" >
                                <thead>
                                    <tr>
                                        <th>Doctor</th>
                                        <th>Client</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($tab as $employee) {
                                            $id = $employee[0];
                                            $doctor = $db->getE($employee[1]) ;
                                            $doc = $doctor['name']." ".$doctor['prename'] ;
                                            $client = $db->getClient($employee[2]) ;
                                            $clt = $client['name']." ".$client['prename'] ;
                                            $date = $employee[3] ;
                                            $time = $employee[4] ;
                                            
                                            echo <<<Html

                                            <tr>
                                                <th>$doc</th>
                                                <th>$clt</th>
                                                <th>$date</th>
                                                <th>$time</th>
                                               
                                                <th >

                                                <a class="btn-floating waves-effect waves-light cyan" href='edit.php?idd=$id'><i class="material-icons">mode_edit</i></a>
                                                <a class="btn-floating waves-effect waves-light red" href='appointements.php?idd=$id'><i class="material-icons">clear</i></a>

                                                <th/>
                                            </tr>

                                            Html ;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-action">
                        <a href="../signIn/appointement.php"><button class="btn-floating btn-large round cyan" >Add</button></a>
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