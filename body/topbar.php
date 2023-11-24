

<div class="navbar-fixed">
  <nav class="bg-primary">
    <div class="nav-wrapper">
      <a href="#" data-target="mobile-menu" class="text-decoration-none sidenav-trigger hide-on-large-only"><i
          class="material-icons">menu</i></a>
          <a href="index.php?page=home" class="brand-logo large-margin hide-on-med-and-down text-decoration-none">WILSWEB</a>
                <a href="index.php?page=home" class="text-decoration-none brand-logo hide-on-large-only">WILSWEB</a>
      <ul class="right hide-on-med-and-down">
        <li class="<?php echo ($page == "home") ? "active" : ""; ?>"><a href="index.php?page=home" class="text-decoration-none">Accueil</a></li>
        <li class="<?php echo ($page == "blog") ? "active" : ""; ?>"><a href="index.php?page=blog" class="text-decoration-none">Blog</a></li>
        <li class="<?php echo ($page == "portfolio") ? "active" : ""; ?>"><a href="index.php?page=portfolio" class="text-decoration-none">Portfolio</a>
        </li>
        <li class="<?php echo ($page == "contact") ? "active" : ""; ?>"><a href="index.php?page=contact" class="text-decoration-none">Contact</a></li>
        <li class="<?php echo ($page == "login") ? "active" : ""; ?>"><a href="./admin/index.php?page=login" class="text-decoration-none">Se connecter</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<ul class="sidenav" id="mobile-menu">
<li class="<?php echo ($page == "home") ? "active bg-primary" : ""; ?>"><a href="index.php?page=home" class="text-decoration-none <?php echo ($page == "home") ? "white-text bg-primary" : ""; ?>">Accueil</a></li>
        <li class="<?php echo ($page == "blog") ? "active bg-primary" : ""; ?>"><a href="index.php?page=blog" class="text-decoration-none <?php echo ($page == "blog") ? "white-text bg-primary" : ""; ?>">Blog</a></li>
        <li class="<?php echo ($page == "portfolio") ? "active bg-primary" : ""; ?>"><a href="index.php?page=portfolio" class="text-decoration-none <?php echo ($page == "portfolio") ? "white-text bg-primary" : ""; ?>">Portfolio</a>
        </li>
        <li class="<?php echo ($page == "contact") ? "active bg-primary" : ""; ?>"><a href="index.php?page=contact" class="text-decoration-none <?php echo ($page == "contact") ? "white-text bg-primary" : ""; ?>">Contact</a></li>
        <li class="<?php echo ($page == "login") ? "active bg-primary" : ""; ?>"><a href="./admin/index.php?page=login" class="text-decoration-none <?php echo ($page == "login") ? "white-text bg-primary" : ""; ?>">Se connecter</a>
        </li>
</ul>
