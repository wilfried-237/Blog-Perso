<?php

include("model/contact.model.php");

if(isset($_POST['sendMessage'])){
    
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));


    $name = $first_name." ".$last_name;
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $errors = [];

    if(empty($name) || empty($email) || empty($message)){
        $errors['empty'] = "Tous les champs n'ont pas été remplis !";
    }
    else if(!empty($name) && !empty($email) && !empty($message)){
        
        sendMessage($name,$email,$message);

        $msg = 'Message Envoyer avec Success';
            header("location:index.php?page=contact&color=success&msg=".$msg);

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