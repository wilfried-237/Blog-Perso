<?php
include 'model/dashboard.model.php';

$countPosts = count(countFunc("post"));

$countUsers = count(countFunc("users"));

$countComments = count(countFunc("comment"));

$comments = countFunc("comment");

$getComments = getComments();

if(isset($_GET["action"])=="deleteComment" && isset($_GET["id"])){

    $id = $_GET["id"];
    deleteComment($id);
    $msg = "Commentaire Suprimé avec Success";
        header("location:index.php?page=dashboard&color=success&msg=$msg");
}

if(isset($_GET["action"])=="publishComment" && isset($_GET["id"])){

    $id = $_GET["id"];
    publishComment($id);
    $msg = 'Commentaire Publier avec Success';
            header("location:index.php?page=dashboard&color=success&msg=".$msg);
}





