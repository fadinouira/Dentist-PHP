<?php 
    session_start() ;
    if($_SESSION['job'] == 2) {
        $idd = $_GET['idd'];

        require('cnx/db.php') ;
        $db = new Cnx() ;
        $db->deleteClient($idd) ;

        $tab = $db->getClients() ;

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
    <?php $page = 4 ;include('sidebar.php') ; ?>
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
                            <span class="card-title">All Accounts</span>
                        </div>
                        <div class="card-content">
                            <table class="responsive-table striped" >
                                <thead>
                                    <tr>
                                        <th>Phone</th>
                                        <th>Name</th>
                                        <th>Prename</th>
                                        <th>Email</th>
                                        <th>Birth Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach($tab as $employee) {
                                            $id = $employee[0] ;
                                            $name = $employee[1] ;
                                            $prename = $employee[2] ;
                                            $email = $employee[3] ;
                                            $bd = $employee[4] ;
                                            echo <<<Html

                                            <tr>
                                                <th>$id</th>
                                                <th>$name</th>
                                                <th>$prename</th>
                                                <th>$email</th>
                                                <th>$bd</th>
                                                <th >

                                                <a class="btn-floating waves-effect waves-light cyan" href='edit.php?idd=$id'><i class="material-icons">mode_edit</i></a>
                                                <a class="btn-floating waves-effect waves-light red" href='clients.php?idd=$id'><i class="material-icons">clear</i></a>

                                                <th/>
                                            </tr>

                                            Html ;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-action">
                        <a href="../signIn/client.php"><button class="btn-floating btn-large round cyan" >Add</button></a>
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