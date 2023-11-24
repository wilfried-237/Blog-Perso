<div class="navbar-fixed">
    <nav class="bg-primary">
        <div class="nav-wrapper">
            <?php if ($page != 'login') {
                echo '<a href="#" data-target="mobile-menu" class="text-decoration-none sidenav-trigger hide-on-large-only text-decoration-none"><i
            class="material-icons">menu</i></a>
            <a href="index.php?page=dashboard" class="text-decoration-none brand-logo large-margin hide-on-med-and-down">WILSWEB</a>
                <a href="index.php?page=dashboard" class="brand-logo hide-on-large-only text-decoration-none">WILSWEB</a>';
            } ?>
            <?php if($page == "login"){
                
                echo '<a href="index.php?page=login" class="text-decoration-none brand-logo center text-decoration-none">WILSWEB</a>';

              
        }
                ?>
            <?php if ($page != 'login'): ?>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="<?php echo ($page == "message") ? "active" : ""; ?>"><a title="Message"
                            href="index.php?page=message" class="text-decoration-none"><i class="material-icons">message</i></a></li>
                    <li class="<?php echo ($page == "dashboard") ? "active" : ""; ?>"><a title="Dashboard"
                            href="index.php?page=dashboard" class="text-decoration-none"><i class="material-icons">dashboard</i></a></li>
                    <li class="<?php echo ($page == "list") ? "active" : ""; ?>"><a title="Liste des articles"
                            href="index.php?page=list" class="text-decoration-none"><i class="material-icons">view_list</i></a></li>
                    <li class="<?php echo ($page == "write") ? "active" : ""; ?>"><a title="Créer un article"
                            href="index.php?page=write" class="text-decoration-none"><i class="material-icons">edit</i></a></li>
                    <li class="<?php echo ($page == "setting") ? "active" : ""; ?>"><a title="Créer un utilisateur"
                            href="index.php?page=setting" class="text-decoration-none"><i class="material-icons">work</i></a></li>
                    <li class="<?php echo ($page == "logout") ? "active" : ""; ?>"><a title="Se déconnecter"
                            href="index.php?page=logout" class="text-decoration-none"><i class="material-icons">settings_power</i></a></li>
                </ul>
                <?php endif; ?>
        </div>
    </nav>
</div>
    <ul class="sidenav right hide-on-large-only" id="mobile-menu">
    <li class="<?php echo ($page == "message") ? "active" : ""; ?>"><a title="Message"
                href="index.php?page=message" class='<?php echo ($page == "message") ? "white-text bg-primary" : ""; ?> text-decoration-none'><i class="material-icons <?php echo ($page == "message") ? "white-text" : ""; ?>">message</i>Message</a></li>


        <li class="<?php echo ($page == "dashboard") ? "active" : ""; ?>"><a title="Dashboard"
                href="index.php?page=dashboard" class='<?php echo ($page == "dashboard") ? "white-text bg-primary" : ""; ?> text-decoration-none'><i class="material-icons <?php echo ($page == "dashboard") ? "white-text" : ""; ?>">dashboard</i>Dashboard</a></li>
        
        <li class="<?php echo ($page == "list") ? "active" : ""; ?>"><a title="Liste des articles"
                href="index.php?page=list" class='<?php echo ($page == "list") ? "white-text bg-primary" : ""; ?> text-decoration-none'><i class="material-icons <?php echo ($page == "list") ? "white-text" : ""; ?>">view_list</i>Liste des articles</a></li>
        
        <li class="<?php echo ($page == "write") ? "active" : ""; ?>"><a title="Créer un article"
                href="index.php?page=write" class='<?php echo ($page == "write") ? "white-text bg-primary" : ""; ?> text-decoration-none'><i class="material-icons <?php echo ($page == "write") ? "white-text" : ""; ?>">edit</i>Créer un article</a></li>

        <li class="<?php echo ($page == "setting") ? "active" : ""; ?>"><a title="Créer un utilisateur"
                href="index.php?page=setting" class='<?php echo ($page == "setting") ? "white-text bg-primary" : ""; ?> text-decoration-none'><i class="material-icons <?php echo ($page == "setting") ? "white-text" : ""; ?>">work</i>Créer un utilisateur</a></li>

        <li class="<?php echo ($page == "logout") ? "active" : ""; ?>"><a title="Se déconnecter"
                href="index.php?page=logout" class='<?php echo ($page == "logout") ? "white-text bg-primary" : ""; ?> text-decoration-none'><i class="material-icons <?php echo ($page == "logout") ? "white-text" : ""; ?>">settings_power</i>Se déconnecter</a></li>
    </ul>
