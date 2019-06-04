<?php

include_once ("ConnectionUtil.php");
foreach (glob("Entities/*.php") as $filename)
{
    include $filename;
}

class LoginDao
{
    private $con ;
    /**
     * ClientDao constructor.
     * @param $con
     */
    public function __construct()
    {
        $this->con = ConnectionUtil::getInstance();
    }

    public function ajouter_user($login)
    {
        $req = "insert into user values('".$login->getUsername()."','".$login->getPassword()."','".$login->getFirstName()."','".$login->getLastName()."','".$login->getEMail()."','".$login->getType()."')";

        $st = $this->con->prepare($req);

       if (!$st->execute())
           throw new Exception("Impossible d'ajouter ce user");
    }

    public function update_user($login)
    {
        $data =
            [
                'username' => $login->getUsername(),
                'password' => $login->getPassword(),
                'first_name' => $login->getFirstName(),
                'last_name' => $login->getLastName(),
                'e_mail' => $login->getEMail(),
                'type' => $login->getType(),

//username	password	first_name	last_name	e_mail	type
            ] ;
        $req = "update user set username = :username, password = :password,first_name = :first_name, last_name = :last_name, 
                e_mail = :e_mail, type = :type where username=:username";
        try
        {
            $st = $this->con->prepare($req);
            $st->execute($data);

        }catch (Exception $ex)
        {
            throw new Exception("Impossible de mettre a jour cet Client");
        }

    }

    public function delete_user($username)
    {
        $req = "delete from user where username = '".$username."'";
        try
        {
            $st = $this->con->prepare($req);
            $st->execute();

        }catch (Exception $ex)
        {
            throw new Exception("Impossible de supprimer ce user");
        }
    }

    public function getByUsername($username)
    {
        try
        {
            $st = $this->con->query("select * from user where username = '".$username."'");
            return $st->fetchObject(Login::class);

        }catch (Exception $ex)
        {
            return new Exception("Impossible de récuperer les information de ce user");
        }
    }

    public function getAll()
    {
        try
        {
            $st = $this->con->query("select * from user");
            return $st->fetchAll("PDO::FETCH_CLASS" ,Login::class);

        }catch (Exception $ex)
        {
            return new Exception("Impossible de récuperer les informations");
        }
    }
}


