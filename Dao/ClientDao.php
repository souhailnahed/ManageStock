<?php

include_once ("ConnectionUtil.php");
foreach (glob("Entities/*.php") as $filename)
{
    include_once $filename;
}

class ClientDao
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

    public function ajouter_client($client)
    {
        $req = "insert into Client values('".$client->getCIN()."','".$client->getNom()."','".$client->getTel()."')";

        $st = $this->con->prepare($req);
        if (!$st->execute()) {
            throw new Exception("Impossible d'ajouter cet Client");}
    }

    public function update_client($client)
    {
        $data =
            [
                'nom' => $client->getNom(),
                'tel' => $client->getTel(),
                'cin' => $client->getCin(),
            ] ;
        $req = "update client set nom = :nom, tel = :tel where cin=:cin";
        try
        {
            $st = $this->con->prepare($req);
            $st->execute($data);

        }catch (Exception $ex)
        {
            throw new Exception("Impossible de mettre a jour cet Client");
        }

    }

    public function delete_client($cin)
    {
        $req = "delete from Client where cin = '".$cin."'";
        try
        {
            $st = $this->con->prepare($req);
            $st->execute();

        }catch (Exception $ex)
        {
            throw new Exception("Impossible de supprimer cet Client");
        }
    }

    public function getByID($cin)
    {
        try
        {
            $st = $this->con->query("select * from client where cin = '".$cin."'");
            return $st->fetchObject(Client::class);

        }catch (Exception $ex)
        {
            return new Exception("Impossible de récuperer les information de cette étudiant");
        }
    }

    public function getAll()
    {
        try
        {
            $st = $this->con->query("select * from client");
            return $st->fetchAll("PDO::FETCH_CLASS" ,Client::class);

        }catch (Exception $ex)
        {
            return new Exception("Impossible de récuperer les information de cette étudiant");
        }
    }
}


