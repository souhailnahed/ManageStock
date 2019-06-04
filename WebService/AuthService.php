<?php

    require_once ("../Dao/ConnectionUtil.php");
    require_once ("../Dao/LoginDao.php");
    require_once ("../Metier/LoginMetier.php");
    require_once ("../Entities/Login.php");

    $username = $_GET["username"];
    $password = $_GET["password"];

    try {
        $metier = new LoginMetier();
        $users = $metier->getUser($username);
        $login = $users->getUsername();
        $pass = $users->getPassword();
        if ($password == $pass)

            echo ("     welcome");
        /*
            include($_SERVER['DOCUMENT_ROOT'].'/web/home/home.html');
        */
        }

      catch (Error $e){
        echo('the password or the username is incorrect');
    }

   // echo json_encode($login);


