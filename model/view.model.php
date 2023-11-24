<?php 

include("config/main.inc.php");

function sendComment($name,$email,$comment,$public,$id){
    global $cnx;
    $user = [
        'name' =>  $name,
        'email' =>  $email,
        'comment' =>  $comment,
        'public' =>  $public,
        'id'  =>  $id
    ];
    $sql = "INSERT INTO comment(name,email,comment,public,post_id) VALUES(:name,:email,:comment,:public,:id)";
    $req = $cnx->prepare($sql);
    $req->execute($user);
}

function getPageComment($id){
    global $cnx;
    
    $sql = "SELECT * FROM comment WHERE post_id=$id";

    $req = $cnx->query($sql) or die(print_r($cnx->errorInfo( )));

    $posts = [];

    while($rows = $req->fetch()){
    $posts[] = $rows;
    }   

    $req->closeCursor();
    return $posts;
}