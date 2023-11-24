<?php
include 'model/login.model.php';

if(isset($_POST['submit'])){
    $login = htmlspecialchars(trim($_POST['login']));
    $pass = htmlspecialchars(trim($_POST['pass']));

    $errors = [];

    if(empty($login) || empty($pass)){
        $errors['empty'] = "Tous les champs n'ont pas été remplis !";
    }
    else if(is_user($login,$pass) == 0){
        $errors['exist'] = "Cet administrateur n'existe pas !";
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
    else{
        $_SESSION['login'] = $login;
        $msg = 'Bienvenue vous etes Connecté';
        header("location:index.php?page=dashboard&color=success&msg=$msg");
    }
}


?>
