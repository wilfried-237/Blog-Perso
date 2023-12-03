  <?php
  
  $pages=scandir('pages/');
    //si $_GET['page']) existe et son contenu n'est pas vide
  if(isset($_GET['page']) && (!empty($_GET['page']))){
        //si la page cherchée  est présent dans le dossier "pages
    if(in_array($_GET['page'].'.php',$pages)){
            //afficher la page
      $page=$_GET['page'];
    }
    else{
            //sinon afficher la page d'erreur
      $page="error";
    }
  }
  else{
        //afficher la page d'accueil (Home)
    $page="home";
  }



  ?>


  <!DOCTYPE html>
  <html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body style="min-height: 100vh;">
    <!--*************-Menu du site******************-->
    <?php
    include 'body/topbar.php'
    ?>
    <?php if(isset($_GET["msg"]) && isset($_GET["color"])){
		?>
    <div class="alert alert-<?=$_GET["color"]?> alert-dismissible center">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?php
                    echo $_GET["msg"];
                    ?>
        </div>
	<?php } ?>
    <!--**********Contenu de la page du site***********-->
    
      <?php
      include 'pages/'.$page.'.php';
      ?>
   

    <!--**************-Pied de page du site**************-->
    <?php
    include 'body/footer.php'
    ?>


    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>
  </html>

  