<?php
include 'model/write.model.php';
// creation (verification et execution)

if(isset($_POST['publier']) ){
       
    if(!empty($_POST['title']) && !empty($_POST['desc']) && !empty($_FILES['image']) && !empty($_POST['public'])){

        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $public = $_POST['public'];

        // -----------file upload---------

        $image_name = $_FILES['image']['name'];
        $image_type = $_FILES['image']['type'];
        $image_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $image_error = $_FILES['image']['error'];

        $image_ext = explode(".", $image_name);
        $image_actual_extention = strtolower(end($image_ext));

        $allowed = ["jpg", "jpeg", "png","avif","webp"];

        if(in_array($image_actual_extention, $allowed)){
            if($image_error === 0){
                if($image_size < 100000000){
                    $image = uniqid("", true).".".$image_actual_extention;

                    $image_destination = "img/".$image;

                    move_uploaded_file($tmp_name, $image_destination);

                    createPost($title,$desc,$image,$public);
                    
                }else{
                    header('location: index.php?page=write&msg=Your file is too Big');
                }
            }else{
                header('location: index.php?page=write&msg=An error occured while uploading your file');
            }
        }else{
            header('location: index.php?page=write&msg=File type not supported');
        }

        

        
        $msg = "Post creer avec Success";
        header('location: index.php?page=write&color=success&msg='.$msg);
    }else{
        header('location: index.php?page=write&color=danger&msg=Remplissez tous les champs');
    }


}