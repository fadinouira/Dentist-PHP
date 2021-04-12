<?php
Class Cnx {
    private static $dbh ;
    public function connection(){

        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=tp4', "fedi", "rootroot");
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function exitDb(){
        $this->dbh = null ;
    }

    public function getUsers(){
        $this->connection();
        foreach($this->dbh->query('SELECT * from employee') as $row) {
            $tab[] = $row ;
        }
        $this->exitDb();
        return $tab ;
    }

    public function getDoctors(){
        $this->connection();
        foreach($this->dbh->query('SELECT * from employee where post = 1') as $row) {
            $tab[] = $row ;
        }
        $this->exitDb();
        return $tab ;
    }

    public function getE($id) {
        $this->connection() ;
        $user = $this->dbh->query("SELECT * from employee WHERE cin = '$id'")->fetch() ;
        $this->exitDb();
        return $user ;
    }

    public function deleteUser($id) {
        $this->connection();
        $user = $this->dbh->query("DELETE FROM `employee` WHERE cin = '$id'");
        $this->exitDb() ;  
    }

    public function logIn($cin,$pass){
        $this->connection();
        session_start() ;
        foreach($this->dbh->query('SELECT * from employee') as $row) {
            if(($cin == $row['cin']) && ($pass== $row['password'])) {
                $user['cin'] = $row['cin'] ;
                $user['name'] = $row['name'] ;
                $user['prename'] = $row['prename'] ;
                $user['pass'] = $row['password'] ;
                $user['job'] = $row['post'] ;
                $user['ph'] = $row['num'] ;
                $this->exitDb();
                return $user ;
            } 
        }
        $this->exitDb();
        unset($_SESSION) ;
        return null ;
    }

    public function signInUser($ph) {
        $this->connection();
        $user = $this->dbh->query("SELECT * FROM `user` WHERE ph = '$ph'")->fetch();
        $this->exitDb() ;  
        return $user ;
    }

    public function signUpE($user){
        $cin = $user['cin']  ;
        $name = $user['name']  ;
        $prename = $user['prename']  ;
        $pass = $user['pass'] ;
        $job = $user['job'] ;
        $ph = $user['ph'] ;

        $this->connection() ;
       
        try{
            $this->dbh->query("INSERT INTO employee (cin, name, prename, password, post, num)
            VALUES ('$cin', '$name', '$prename', '$pass', '$job', '$ph');") ;
			
        }catch (PDOException $e) {
			echo "Erreur !: " . $e->getMessage() . "<br/>";
			die();
		}
        $this->exitDb() ; 

    }

    public function signUpUser($user) {
        $ph = $user['ph']  ;
        $name = $user['name']  ;
        $prename = $user['prename']  ;
        $bd = $user['bd'] ;
        $bp = $user['bp'] ;

        $this->connection() ;
       
        try{
            $this->dbh->query("INSERT INTO user (ph, name, prename, bd, bp)
            VALUES ('$ph', '$name', '$prename', '$bd', '$bp');") ;
			
        }catch (PDOException $e) {
			echo "Erreur !: " . $e->getMessage() . "<br/>";
			die();
		}
        $this->exitDb() ; 

    }

   
    public function updateE($user,$id) {
        $this->connection() ;
            if (!empty($user['name'])) {
                $name = $user['name'];
                $this->dbh->query("UPDATE employee SET name = '$name' where cin = $id") ;
                echo "name changed" ;

            }
            if (!empty($user['prename'])) {
                $prename = $user['prename'];
                $this->dbh->query("UPDATE employee SET prename = '$prename' where cin = '$id'") ;   
        
            }
            if (!empty($user['pass'])) {
                $pass = $user['pass'];
                $this->dbh->query("UPDATE employee SET password = '$prename' where cin = '$id'") ;       
        
            }
            if (!empty($user['job'])) {
                $job = $user['job'];
                $this->dbh->query("UPDATE employee SET post = '$job' where cin = '$id'") ;       
        
            }
            
            if (!empty($user['ph'])) {
                $ph = $user['ph'];
                $this->dbh->query("UPDATE employee SET num = '$ph' where cin = '$id'") ;       
            }
        $this->exitDb() ;
            
    }

    public function setMessage($text) {

        $this->connection() ;
        $this->dbh->query("INSERT INTO message (text)
            VALUES ('$text');") ;
        $this->exitDb() ;

    }

    public function getMessages() {
        $this->connection() ;
        foreach($this->dbh->query("SELECT * from message ") as $row) {
            $tab[] = $row ;
        }
        $this->exitDb() ;
        return $tab ;

    } 
 }
    

?>