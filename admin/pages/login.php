<?php
include 'controller/login.controller.php';

if(isset($_SESSION['login'])){
    header('location: index.php?page=dashboard');
}
?>

<div class="container">
<div class="row">
    <div class="col">
        <div class="card-panel col-sm-6 col-md-6 col-lg-4 mx-auto d-block">
            <div class="row">
                
                    <img src="img/admin.png" alt="Administrateur" class="image-fluid mx-auto d-block w-75"/>
                
            </div>
            <h1 class="center-align">Se connecter</h4>
            <form method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="login" name="login">
                        <label for="login"> login</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" id="pass" name="pass">
                        <label for="pass">Mot de passe</label>
                    </div>
                </div>

                <center>
                    <button type="submit" name="submit" class="waves-effect waves-light btn white-text bg-primary">
                        <i class="material-icons left">perm_identity</i>
                        Se connecter
                    </button>
                    <br /><br />
                    <a href="index.php?page=new" class="text-primary">Nouveau modérateur</a>
                </center>
            </form>
        </div>
    </div>
</div>
</div>