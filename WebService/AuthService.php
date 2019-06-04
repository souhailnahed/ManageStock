<?php

    require_once ("../Dao/ConnectionUtil.php");
    require_once ("../Dao/LoginDao.php");
    require_once ("../Metier/LoginMetier.php");
    require_once ("../Entities/Login.php");
    //require_once ("../view/login/login.html");

    $username = $_GET["username"];
    $password = $_GET["password"];

    echo $_GET["username"];
    echo $_GET["password"];
    try {
        $metier = new LoginMetier();
        $users = $metier->getUser($username);
        $login = $users->getUsername();
        $pass = $users->getPassword();
        if ($username == $login && $password == $pass) {
            echo ('welcome');
        }
    }
    catch (Exception $exc){
        echo ('the login or the password is incorrect');
    }
   // echo json_encode($login);

