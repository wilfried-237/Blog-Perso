<?php

include("config/main.inc.php");

function listHomePosts(){
        global $cnx;
        
        $sql = "SELECT * FROM post ORDER BY id DESC limit 3";
    
        $req = $cnx->query($sql) or die(print_r($cnx->errorInfo( )));
    
        $posts = [];
    
        while($rows = $req->fetch()){
        $posts[] = $rows;
        }   
    
        $req->closeCursor();
        return $posts;
}

function strlHome($post){
        $post = substr($post, 10, 80) .'...';

        echo $post;
}