<?php

include("config/main.inc.php");

function listBlogPosts(){
        global $cnx;
        
        $sql = "SELECT * FROM post ORDER BY id DESC";
    
        $req = $cnx->query($sql) or die(print_r($cnx->errorInfo( )));
    
        $posts = [];
    
        while($rows = $req->fetch()){
        $posts[] = $rows;
        }   
    
        $req->closeCursor();
        return $posts;
}

function strlBlog($post){
        $post = substr($post, 0, 150) .'...';

        echo $post;
}

function blogPagination($debut,$nbre_element){
        global $cnx;
    
        $sql = "SELECT * FROM post ORDER BY id DESC limit $debut,$nbre_element";
    
        $req = $cnx->query($sql) or die(print_r($cnx->errorInfo( )));
    
        $aff = [];
    
        while($rows = $req->fetch()){
        $aff[] = $rows;
        }   
    
        $req->closeCursor();
        return $aff;
    }