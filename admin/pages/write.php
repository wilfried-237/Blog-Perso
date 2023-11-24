<?php
include 'controller/write.controller.php';


?>

<div class="pt-3 col-sm-12 col-md-10 col-lg-8">
<h1 class="">Poster un article</h1>
<hr />
<form method="post" enctype="multipart/form-data" class="was-validated">
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="title" id="title" />
            <label for="title" class="">Titre de l'article</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea name="desc" id="desc" class="materialize-textarea"></textarea>
            <label for="content" class="">Contenu de l'article</label>
        </div>
    </div>

    <div class="file-field input-field">
      <div class="btn btn-primary pb-5">
        <span>IMAGE</span>
        <input type="file" name="image">
      </div>
      <div class="file-path-wrapper row w-75">
        <input class="file-path validate" type="text">
      </div>
    </div>

    <div class="input-field">
        <div class="switch">
            <label>
                Privé
                <input type="checkbox" name="public">
                <span class="lever"></span>
                Public
            </label>
        </div>
    </div>

    <div class="row w-25">
        <div class="col s6 right-align  d-grid">
            <br /><br />
            <button class="btn left bg-primary white-text" type="submit" name="publier">Publier</button>
        </div>
    </div>

    </div>
</form>

</div>