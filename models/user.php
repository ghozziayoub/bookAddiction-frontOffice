<?php
require_once "../configdb/db_connector.php";


class User{
   
    public $firstname ;
    public $lastname ;
    public $email ;
    public $role ;
    public $password ;

    function register(){
        $base = connect_to_db();

        $requette = "INSERT INTO users VALUES (null,'$this->firstname','$this->lastname','$this->email','client','$this->password')";
    
        $insertedRow = $base->exec($requette);

        if ($insertedRow == 1) {
            header('location:../views/login.php?register=true');
        }else{
            echo "SQL Error !";
        }
    }

    function login(){
        $base = connect_to_db();

        $requette = "SELECT * from users where email='$this->email' and password='$this->password'";

        $data = $base->query($requette);

        if ($data->rowCount()==1) {
            session_start();
            $user = $data->fetchObject();
            $_SESSION['email'] = $user->email;

            header('location:../views/profile.php');
        } else {
            header('location:../views/login.php?error=true');
        }
        
    }

}
?>