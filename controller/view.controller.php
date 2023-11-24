<?php

include("model/view.model.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $comments = getPageComment($id);
}

if(isset($_POST['sendComment'])){
    
    $public = "off";
    $id = htmlspecialchars(trim($_POST['id']));
    $name = htmlspecialchars(trim($_POST['nom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $comment = htmlspecialchars(trim($_POST['comment']));

    $errors = [];

    if(empty($name) || empty($email) || empty($comment) || empty($public) || empty($id)){
        $errors['empty'] = "Tous les champs n'ont pas été remplis !";
    }
    else if(!empty($name) && !empty($email) && !empty($comment) && !empty($public) && !empty($id)){
        
        sendComment($name,$email,$comment,$public,$id);
        
        $msg = 'Commentaire envoyer avec Success';
        header("location:index.php?page=blog&color=success&msg=".$msg);

    }

    if(!empty($errors)){
        ?>
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?php
                    foreach($errors as $error){
                        echo $error."<br />";
                    }
                    ?>
        </div>
        <?php
    }
}