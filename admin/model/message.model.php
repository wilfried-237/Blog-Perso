<?php 
include '../config/main.inc.php';

function listMessages(){
    global $cnx;
    
    $sql = "SELECT * FROM messages ORDER BY id DESC";

    $req = $cnx->query($sql) or die(print_r($cnx->errorInfo( )));

    $posts = [];

    while($rows = $req->fetch()){
    $posts[] = $rows;
    }   

    $req->closeCursor();
    return $posts;
}

function deleteMessage($id){
    global $cnx;

    $sql = 'DELETE FROM messages WHERE id='.$id;
    
    $cnx->exec($sql) or die(print_r($cnx->errorInfo( )));
    
}




?>