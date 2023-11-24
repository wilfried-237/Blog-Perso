<?php
include '../config/main.inc.php';

function is_user($login, $pass)
{
    global $cnx;
    $a = [
        'login' => $login,
        'pass' => $pass
    ];
    $sql = "SELECT * FROM users WHERE login = :login AND pass = :pass";
    $req = $cnx->prepare($sql);
    $req->execute($a);

    $exist = $req->rowCount();

    return $exist;
}