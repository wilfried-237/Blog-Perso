  <?php
  session_start();
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
    $page="login";
  }

  if($page!= "login" && !isset($_SESSION["login"])){
    header("location:index.php?page=login");
  }else{
    
  }
  

  ?>
  


  <!DOCTYPE html>
  <html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
  
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
  </style>
</head>

<body>
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
  <div class="container">
    <?php
    include 'pages/'.$page.'.php';
    ?>
  </div> 

  <!--**************-Pied de page du site**************-->
  <?php
  include 'body/footer.php'
  ?>

  <!--JavaScript at end of body for optimized loading-->
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script>
    $(function(){

      $('.select').formSelect();
      $('.modal').modal();
      $('.sidenav').sidenav();

    });
  </script>
</body>
</html>