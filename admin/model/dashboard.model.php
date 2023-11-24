<?php

include('../config/main.inc.php');


function countFunc($table){
        global $cnx;
        
        $sql = "SELECT * FROM ".$table;
    
        $req = $cnx->query($sql) or die(print_r($cnx->errorInfo( )));
    
        $aff = [];
    
        while($rows = $req->fetch()){
        $aff[] = $rows;
        }   

        $req->closeCursor();
        return $aff;
    }


    function getComments(){
        global $cnx;
        
        $sql = "SELECT * FROM comment where public='off'";
    
        $req = $cnx->query($sql) or die(print_r($cnx->errorInfo( )));
    
        $aff = [];
    
        while($rows = $req->fetch()){
        $aff[] = $rows;
        }   

        $req->closeCursor();
        return $aff;
    }

    function deleteComment($id){
        global $cnx;

        $sql = 'DELETE FROM comment WHERE id='.$id;
        
        $cnx->exec($sql) or die(print_r($cnx->errorInfo( )));
        
    }

    function publishComment($id){
        global $cnx;

        $sql = 'UPDATE comment(public) SET public="on" where id='.$id;
        
        $req = $cnx->prepare($sql)  or die(print_r($cnx->errorInfo( )));

        $req -> execute();

    }
 