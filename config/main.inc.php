<?php
$dns="mysql:host=localhost;dbname=wilsweb_blogperso";
$login="root";
$pass="";

try{
	$cnx = new PDO($dns,$login,$pass);
}
catch(PDOException $e){
	die('Erreur :'. $e->getMessage() );
}
