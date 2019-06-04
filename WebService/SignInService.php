<?php

require_once ("../Dao/ConnectionUtil.php");
require_once ("../Dao/LoginDao.php");
require_once ("../Metier/LoginMetier.php");
require_once ("../Entities/Login.php");

$username = $_GET["username"];
$password = $_GET["password"];
$first_name = $_GET["first_name"];
$last_name = $_GET["last_name"];
$e_mail = $_GET["e_mail"];
//$type = $_GET["type"];

/*
echo $first_name,$last_name,$e_mail,$password;
    //Créer un user
*/

 $user = new Login($username,$password,$first_name,$last_name,$e_mail);
  $loginmetier = new LoginMetier();
    try
    {
        $loginmetier->ajout_user($user);
        echo '{"response" : "registred successfully';
    }catch (Exception $ex)
    {
        echo '{"response" : "'.$ex->getMessage().'}"}';
    }


