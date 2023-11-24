<?php
include("controller/view.controller.php");
?>


<div>
  <br>
  <div class="container center">
    <img src="admin/img/<?= $_GET['image'] ?>" class="img-fluid" alt="" />
  </div>
  <h2>
    <?= $_GET['title'] ?>
  </h2>
  <p>
    <?= $_GET['desc'] ?>
  </p>
</div>

<?php if(count($comments) != 0){ ?>

<table class="col-sm-10 row col-md-8 row col-lg-6 ">
<h2 class="mt-5">Commentaire</h2>
<tbody>
<?php foreach($comments as $comment):?>
  <tr>
    <td class="text-center"><i class="material-icons medium center text-primary">account_circle</i><br><?= $comment['name'] ?></td>
    <td><?= $comment['comment'] ?></td>
  </tr>
 
  <?php endforeach;?>
</tbody>
</table>

<?php
}

?>



<div class="row col-sm-12 row col-md-10 row col-lg-8">

  <h2>Laissez un commentaire</h2>
  <form method="POST" class="col s12">
    <div class="row">
      <div class="row">
        <div class="input-field col s6">
          <input id="nom" type="text" name="nom" class="validate">
          <label for="nom">Entrez votre Noms</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Entrez votre Email</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">message</i>
          <textarea id="comment" name="comment" class="materialize-textarea"></textarea>
          <label for="comment">Entrez votre Commentaire</label>
        </div>
      </div>

      <input id="id" type="hidden" name="id" value="<?= $_GET['id'] ?>">

      <div class="row">
        <div class="Col d-grid w-25">
          <button class="btn waves-effect waves-light bg-primary white-text" type="submit" name="sendComment">Envoyer
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
  </form>
</div>
</div>