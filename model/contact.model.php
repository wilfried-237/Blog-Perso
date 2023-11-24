<?php 

include("config/main.inc.php");

function sendMessage($name,$email,$message){
    global $cnx;
    $user = [
        'name' =>  $name,
        'email' =>  $email,
        'message'  =>  $message
    ];
    $sql = "INSERT INTO messages(name,email,message) VALUES(:name,:email,:message)";
    $req = $cnx->prepare($sql);
    $req->execute($user);
}