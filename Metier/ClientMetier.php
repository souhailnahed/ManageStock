<?php
foreach (glob("Dao/*.php") as $filename)
{
    include_once $filename;
}
include_once 'C:\wamp64\www\manage_stock\Dao\ClientDao.php';
include_once 'C:\wamp64\www\manage_stock\Entities\Client.php';

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
/*
$cli1 = new Client('anaaaassqqsdqsd','elaghmiri', '0612344331');
$cli2 = new Client('anaaaassqqsdqsd','isssis','093093');

$climet = new ClientMetier();
//$climet->modifier_Client($cli2);
//$climet->ajouter_client($cli1);
$climet->suppimer_Client('AZE');

*/
