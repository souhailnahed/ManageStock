<?php

    require_once ("../Dao/ConnectionUtil.php");
    require_once("../Dao/ClientDao.php");
    require_once("../Metier/ClientMetier.php");
    require_once("../Entities/Client.php");

$username = $_GET["username"];
$password = $_GET["password"];
$first_name = $_GET["first_name"];
$last_name = $_GET["last_name"];
$e_mail = $_GET["e_mail"];
$type = $_GET["type"];



    //Créer un user
    $user = new Login($username,$password,$first_name,$last_name,$e_mail,$type);
    $loginmetier = new LoginMetier();
    try
    {
        $metier->ajouter_user($user);
        echo '{"response" : "Done."}';
    }catch (Exception $ex)
    {
        echo '{"response" : "'.$ex->getMessage().'}"}';
    }
