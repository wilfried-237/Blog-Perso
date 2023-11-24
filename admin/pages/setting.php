<?php
include 'controller/setting.controller.php';
?>

<div class="mt-3 center">
<h1 class="">Paramètres</h1>
<hr />
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-6 ">
        <h2 class="">Les utilisateurs</h2>
        <table class="table table-bordered table stripped">
            <thead>
                <tr>
                    <th class="">Nom</th>
                    <th class="">Email</th>
                    <th class="">Rôle</th>
                    <th>Edith</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($listUsers as $user): ?>
                    <tr>
                        <td class="">
                            <?= $user['name'] ?>
                        </td>
                        <td class="">
                            <?= $user['email'] ?>
                        </td>
                        <td class="">
                            <?= $user['role'] ?>
                        </td>
                        <td><a href="index.php?page=setting&action=edit&id=<?= $user['id'] ?>&nom=<?= $user['name'] ?>&username=<?= $user['login'] ?>&email=<?= $user['email'] ?>&role=<?= $user['role'] ?>"
                                class="btn-primary btn"><i class="material-icons">mode_edit</i></a></td>
                        <td><a href="index.php?page=setting&action=delete&id=<?= $user['id'] ?>" id="del"
                                class="btn-danger btn"><i class="material-icons">delete</i></a></td>


                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br><br>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6">

        <?php if (isset($_GET['action']) == 'edit') { ?>
            <h2 class="">Modifier l'utilisateur</h2>
        <?php } else { ?>
            <h2 class="">Ajouter un utilisateur</h2>
        <?php } ?>

        <form method="post" class="was-validated">
            <div class="row">
                <div class="input-field col s12">
                    <?php if (isset($_GET['action']) == 'edit' && isset($_GET['nom'])) { ?>
                        <input type="text" name="nom" id="nom" value="<?= $_GET['nom']; ?>" />
                        <label for="nom" class="">Nouveau Nom</label>
                    <?php } else { ?>
                        <input type="text" name="nom" id="nom" value="" class="validate" />
                        <label for="nom" class="">Nom</label>
                    <?php } ?>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <?php if (isset($_GET['action']) == 'edit' && isset($_GET['username'])) { ?>
                        <input type="text" name="username" id="username" value="<?= $_GET['username']; ?>"
                            class="validate" />
                        <label for="username" class="">Nouveau Nom D'utilisateur</label>
                    <?php } else { ?>
                        <input type="text" name="username" id="username" value="" />
                        <label for="username" class="">Nom D'utilisateur</label>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <?php if (isset($_GET['action']) == 'edit' && isset($_GET['email'])) { ?>
                        <input type="text" name="email" id="email" value="<?= $_GET['email']; ?>" class="validate" />
                        <label for="email" class="">Nouvelle Adresse email</label>
                    <?php } else { ?>
                        <input type="text" name="email" id="email" value="" />
                        <label for="email" class="">Adresse email</label>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <?php if (isset($_GET['action']) == 'edit' && isset($_GET['email'])) { ?>
                        <input type="text" name="email_again" id="email_again" value="<?= $_GET['email']; ?>"
                            class="validate" />
                        <label for="email_again" class="">Répéter Nouvelle l'adresse email</label>
                    <?php } else { ?>
                        <input type="text" name="email_again" id="email_again" value="" class="validate" />
                        <label for="email_again" class="">Répéter l'adresse email</label>
                    <?php } ?>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input type="password" id="password" name="password" class="validate">
                    <label for="password" class="">
                        <?php if (isset($_GET['action']) == 'edit') { ?>
                            Nouveau Mot de passe
                        <?php } else { ?>Mot de passe
                        <?php } ?>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="password" id="password_again" name="password_again" class="validate">
                    <label for="password_again" class="">
                        <?php if (isset($_GET['action']) == 'edit') { ?>
                            Repété le Nouveau Mot de passe
                        <?php } else { ?>Repété le mot de passe
                        <?php } ?>
                    </label>
                </div>
            </div>
            <div class="row">
                <select name="role" id="role" value="" class="select">
                    <div class="input-field col s12">

                        <?php if (isset($_GET['action']) == 'edit' && isset($_GET['role']) && $_GET['role'] == "admin") { ?>
                            <option value="admin">Admin</option>
                        <?php } else { ?>
                            <option value="moderateur">Moderateur</option>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <?php if (isset($_GET['action']) == 'edit' && isset($_GET['role']) && $_GET['role'] == "admin") { ?>
                                <option value="moderateur">Moderateur</option>
                            <?php } else { ?>
                                <option value="admin">Admin</option>
                            <?php } ?>
                        </div>
                </select>
                <label for="role" class="">Rôle</label>

            </div>
            <div class="row">
                <div class="input-field col s12">
                    <?php if (isset($_GET['action']) == 'edit' && isset($_GET['id'])) { ?>
                        <input type="hidden" name="id" id="id" value="<?= $_GET['id']; ?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col s12 gap-2">
                    <?php if (isset($_GET['action']) && isset($_GET['action']) == 'edit') { ?>
                        <button type="submit" name="edit" class="btn bg-primary white-text">Modifier</button>
                    <?php } else { ?>
                        <button type="submit" name="create" class="btn bg-primary white-text">Ajouter</button>
                    <?php } ?>

                    <?php if (isset($_GET['action']) && isset($_GET['action']) == 'edit') { ?>

                    <?php } else { ?>
                        <button type="reset" name="effacer" class="btn btn-danger white-text">Vider</button>
                    <?php } ?>
                </div>

            </div>
        </form>
    </div>

</div>

</div> 