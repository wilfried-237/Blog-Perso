<?php

if (isset($_SESSION['login'])):
    
    include 'model/logout.model.php';

    header("location: ../index.php?color=success&msg=Vous etes Donnecté avec Success");

else: 
    header("location: ../index.php?color=success&msg=Vous etes Donnecté avec Success");
endif;


?>