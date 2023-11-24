<?php
include 'model/list.model.php';


$listPosts = listPosts();

$all = listPosts();


// supression (verification et execution)

if(isset($_GET['action']) && isset($_GET['id'])){

if($_GET['action'] == 'delete' && !empty($_GET['id'])){

    $id = $_GET['id'];

    deletePost($id);

    $msg = 'Article Suprimé avec Success';
        header("location:index.php?page=list&color=success&msg=$msg");

   }else{
    $msg = 'Une Erreur a été rencontrer';
        header("location:index.php?page=dashboard&color=danger&msg=$msg");
   }

}

/* edit (verification et execution)

if(isset($_GET['edit'])){
   
if($_GET['edit'] == 'edit' && $_GET['id'] != "" && $_GET['title'] != "" && $_GET['desc'] != "" && $_GET['image'] != "" && $_GET['public'] != ""){
    
    $id = $_GET['id'];
$title = $_GET['title'];
$desc = $_GET['desc'];
$image = $_GET['image'];
$public = $_GET['public'];



editPost($id,$title,$desc,$image,$public);
$msg = "<h5 style='color: green;' class='center-align'>Contact modifier avec Success</h5>";
header('location: index.php?msg='.$msg);


}else{
    header('location: index.php?page=list&title='.$_GET['title'].'&id='.$_GET['id'].'&desc='.$_GET['desc'].'&image='.$_GET['image'].'&public='.$_GET['public'].'& msg= Remplissez tous les champs');
}


}

*/