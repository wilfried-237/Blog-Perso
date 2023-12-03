<?php
include("controller/home.controller.php");
?>

<div class="slider">
  <ul class="slides">
    <li>
      <img src="pages/img/Technology_Trends.avif" alt="">
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


<div class="p-5">
<div class="row">
  <h1 class="center pt-5 pb-5 ">SERVICES</h1>
  <article class="col-sm-6 col-md-6 col-lg-3 d-block center-align">
    <i class="material-icons  large text-primary">computer</i>
    <h4 class="">Conception et développement d'un site web personnalisé</h4>
    <p>Création d'un site web unique adapté aux besoins de votre entreprise, y compris la conception, la fonctionnalité et le contenu.</p>
  </article>
  <article class="col-sm-6 col-md-6 col-lg-3 d-block center-align">
    <i class="material-icons  darken-4 large text-primary">search</i>
    <h4 class="">Optimisation du référencement (SEO)</h4>
    <p>Amélioration de la visibilité de votre site web sur les moteurs de recherche tels que Google, en optimisant le contenu, la structure et les éléments techniques pour augmenter le trafic organique et les classements.</p>
  </article>
  <article class="col-sm-6 col-md-6 col-lg-3 d-block center-align">
    <i class="material-icons  darken-4 large text-primary">devices</i>
    <h4 class="">Design mobile responsive</h4>
    <p>Assurance que votre site web ait un excellent aspect visuel et fonctionne sans problème sur tous les appareils, y compris les ordinateurs de bureau, les ordinateurs portables, les tablettes et les smartphones.</p>
  </article>
  <article class="col-sm-6 col-md-6 col-lg-3 d-block center-align">
    <i class="material-icons  darken-4 large text-primary">settings_applications</i>
    <h4 class="">Maintenance de Site Web</h4>
    <p>Assurance que votre site web fonctionne correctement, est sécurisé et est à jour, y compris les corrections de bugs, les mises à jour de logiciels, la sauvegarde de données et la résolution de problèmes techniques.</p>
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
</div>