<?php
include '../config/main.inc.php';
function createPost($title,$desc,$image,$public){
        global $cnx;
        $user = [
            'title' =>  $title,
            'desc' =>  $desc,
            'image' =>  $image,
            'public'  =>  $public
        ];
        $sql = "INSERT INTO post(title,description,image,public) VALUES(:title,:desc,:image,:public)";
        $req = $cnx->prepare($sql);
        $req->execute($user);
    }