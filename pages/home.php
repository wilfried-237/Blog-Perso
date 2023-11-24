<?php
include("controller/home.controller.php");
?>

<div class="slider">
  <ul class="slides">
    <li>
      <img src="pages/img/cover.png" alt="">
      <div class="caption div" id="index-banner">
        <div class="container">
          <br><br>
          <h1 class="header center text-white">BIENVENUE CHEZ WILSWEB</h1>
          <div class="row center">
            <h5 class="header col s12 light text-white">Conceptions de tous vos site web reactive</h5>
          </div>
          <div class="row center col-sm-6 col-md-6 col-lg-6 mx-auto">
            <a href="index.php?page=contact" target="_blank" class="btn center text-white waves-effect waves-light bg-primary">Nous Contacter</a>
          </div>
          <br><br>
        </div>
      </div>
    </li>
  </ul>
</div>


<div class="row">
  <h1 class="center pt-5 pb-5 ">SERVICES</h1>
  <article class="col-sm-6 col-md-6 col-lg-3 d-block center-align">
    <i class="material-icons  large text-primary">devices</i>
    <h4 class="">Developement Web</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro nostrum, aliquid nesciunt ipsa vitae fugiat?
      Soluta dicta ab incidunt ducimus sunt voluptates. Vel cum optio ipsa voluptas beatae aperiam placeat!</p>
  </article>
  <article class="col-sm-6 col-md-6 col-lg-3 d-block center-align">
    <i class="material-icons  darken-4 large text-primary">search</i>
    <h4 class="">Optimisation SEO</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro nostrum, aliquid nesciunt ipsa vitae fugiat?
      Soluta dicta ab incidunt ducimus sunt voluptates. Vel cum optio ipsa voluptas beatae aperiam placeat!</p>
  </article>
  <article class="col-sm-6 col-md-6 col-lg-3 d-block center-align">
    <i class="material-icons  darken-4 large text-primary">settings_applications</i>
    <h4 class="">Maintenance de Site Web</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro nostrum, aliquid nesciunt ipsa vitae fugiat?
      Soluta dicta ab incidunt ducimus sunt voluptates. Vel cum optio ipsa voluptas beatae aperiam placeat!</p>
  </article>
  <article class="col-sm-6 col-md-6 col-lg-3 d-block center-align">
    <i class="material-icons  darken-4 large text-primary">sell</i>
    <h4 class="">Maintenance de Site Web</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro nostrum, aliquid nesciunt ipsa vitae fugiat?
      Soluta dicta ab incidunt ducimus sunt voluptates. Vel cum optio ipsa voluptas beatae aperiam placeat!</p>
  </article>
</div>

<div class="row">
  <h1 class="center  pt-5 pb-5">ARTICLES RECENTS</h1>
  <?php foreach ($listHomePosts as $listHomePost) : ?>
    <div class="col-sm-12 col-md-4 col-lg-4 d-block">
      <div class="card small">
        <div class="card-image">
          <img src="admin/img/<?= $listHomePost['image'] ?>" class="img-fluid">
          <span class="card-title">
            <?= $listHomePost['title'] ?>
          </span>
        </div>
        <div class="card-body d-grid">
          <p class="card-text">
            <?php

            strlHome($listHomePost['description']);

            ?>

          </p>
          <a href="index.php?page=view&id=<?= $listHomePost['id'] ?>&image=<?= $listHomePost['image'] ?>&title=<?= $listHomePost['title'] ?>&desc=<?= $listHomePost['description'] ?>" class="btn btn-primary">Lire
            Plus</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>