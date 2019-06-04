<?php
foreach (glob("Dao/*.php") as $filename)
{
    include $filename;
}
require 'C:\wamp64\www\manage_stock\Dao\ClientDao.php';
require 'C:\wamp64\www\manage_stock\Entities\Client.php';

class ClientMetier
{

    /**
     * @var ClientDao
     */
    private $dao ;

    /**
     * ClientMetier constructor.
     */
    public function __construct()
    {
        $this->dao = new ClientDao();
    }

    public function ajouter_client(Client $client)
    {
        if($client->getNom() == "")
        {
            throw new Exception("Veillez donner votre nom");
        }

        try {
            $this->dao->ajouter_client($client);
        }catch (Exception $ex)
        {
            throw $ex;
        }
    }

    public function modifier_client(Client $client)
    {
        if($client->getNom() == "")
        {
            throw new Exception("Veuillez donner votre nom");
        }

        $this->dao->update_client($client);
    }

    public function suppimer_client($id)
    {
        $this->dao->delete_client($id);
    }

    public function getClient($id)
    {
        return $this->dao->getByID($id);
    }

    public function getClients()
    {
        return $this->dao->getAll();
    }


}
$etu1 = new Client('said','elaghmiri', '0612344331');
$etud1 = new Client('&é"&é"&é"','isssis','093093');

$etumet = new ClientMetier();
//$etumet->modifier_Client($etu1);
//$etumet->ajouter_client($etu1);
$etumet->suppimer_Client('BJ1ss223');

