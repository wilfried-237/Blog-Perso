<?php 

include("model/message.model.php");


$Messages = listMessages();

if(isset($_GET["action"])=="deleteMessage" && isset($_GET["id"])){

    $id = $_GET["id"];
    deleteMessage($id);
    $msg = "Message Suprimé avec Success";

    header("location: index.php?page=message&color=success&msg=$msg");
}

?>