<?php 
	include '../config/main.inc.php';

	function listUsers(){
        global $cnx;
        
        $sql = "SELECT * FROM users";
    
        $req = $cnx->query($sql) or die(print_r($cnx->errorInfo( )));
    
        $aff = [];
    
        while($rows = $req->fetch()){
        $aff[] = $rows;
        }   
    
        $req->closeCursor();
        return $aff;
    }
    
    

	function createUser($nom,$login,$email,$pass,$role){
        global $cnx;
        $user = [
            'nom' =>  $nom,
            'login' =>  $login,
            'email' =>  $email,
            'pass'  =>  $pass,
            'role'  =>  $role
        ];
        $sql = "INSERT INTO users(name,login,email,pass,role) VALUES(:nom,:login,:email,:pass,:role)";
        $req = $cnx->prepare($sql);
        $req->execute($user);
    }


    

    function deleteUser($id){
        global $cnx;

        $sql = 'DELETE FROM users WHERE id='.$id;
        
        $cnx->exec($sql) or die(print_r($cnx->errorInfo( )));
        
    }
    




    function editUser($id,$nom,$login,$email,$pass,$role){
        global $cnx;

        $sql = 'UPDATE users SET name=:nom,login=:login,email=:email,pass=:pass,role=:role where id='.$id;
        
        $req = $cnx->prepare($sql)  or die(print_r($cnx->errorInfo( )));

        $req -> execute(array(
            ":nom" => $nom,
            ":login" => $login,
            ":email" => $email,
            ":pass" => $pass,
            ":role" => $role
        ));

    }

 ?>