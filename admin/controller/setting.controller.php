<?php
include 'model/setting.model.php';

// ---------------lecture-------------------------------------------
$listUsers = listUsers();

// ---------------creation-------------------------------------------
if (isset($_POST['create'])) {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $login = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $email_again = htmlspecialchars(trim($_POST['email_again']));
    $pass = htmlspecialchars(trim($_POST['password']));
    $pass_again = htmlspecialchars(trim($_POST['password_again']));
    $role = htmlspecialchars(trim($_POST['role']));

    $errors = [];

    if ($email != $email_again) {
        $errors['email'] = "Les emails de passe doivent etre identique";
    }

    if ($pass != $pass_again) {
        $errors['pass'] = "Les mots de passe doivent etre identique";
    }

    if (empty($nom) || empty($email) || empty($email_again) || empty($pass) || empty($pass_again)) {
        $errors['empty'] = "Tous les champs n'ont pas été remplis !";
    } else if (!empty($nom) && !empty($email) && !empty($email_again) && !empty($pass) && !empty($pass_again)) {

        createUser($nom, $login, $email, $pass, $role);

        $msg = "$role creer avec Success";
        header("location:index.php?page=setting&color=success&msg=".$msg);
    }


    if (!empty($errors)) {
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
    } else {
        $msg = "$role creer avec Success</h1>";
        header('location:index.php?page=setting&color=success&msg='.$msg);
    }
}


//    -------------supression------------------------------------------------------

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        deleteUser($id);

        $msg = "Utilisateur suprimer avec Success";
        header('location:index.php?page=setting&color=success&msg=' . $msg);
    } else {
        $msg = "Une Erreur s'est produit";
        header("location:index.php?page=settingcolor=danger&&msg=" . $msg);
    }
}

// ---------------modification-------------------------------------------
if (isset($_POST['edit'])) {
    $id = htmlspecialchars(trim($_POST['id']));
    $nom = htmlspecialchars(trim($_POST['nom']));
    $login = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $email_again = htmlspecialchars(trim($_POST['email_again']));
    $pass = htmlspecialchars(trim($_POST['password']));
    $pass_again = htmlspecialchars(trim($_POST['password_again']));
    $role = htmlspecialchars(trim($_POST['role']));

    $errors = [];

    if ($email != $email_again) {
        $errors['email'] = "Les emails de passe doivent etre identique";
    }

    if ($pass != $pass_again) {
        $errors['pass'] = "Les mots de passe doivent etre identique";
    }

    if (empty($nom) || empty($email) || empty($email_again) || empty($pass) || empty($pass_again)) {
        $errors['empty'] = "Tous les champs n'ont pas été remplis !";
    } else if (!empty($nom) && !empty($email) && !empty($email_again) && !empty($pass) && !empty($pass_again)) {

        editUser($id, $nom, $login, $email, $pass, $role);

        $msg = "Utilisateur modifier avec Success";
        header("location:index.php?page=settingcolor=success&&msg=".$msg);
    }

    if (!empty($errors)) {
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




?>