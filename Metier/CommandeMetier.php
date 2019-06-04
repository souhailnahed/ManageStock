<?php
foreach (glob("Dao/*.php") as $filename)
{
    include_once $filename;
}
include_once 'C:\wamp64\www\manage_stock\Dao\LoginDao.php';
include_once 'C:\wamp64\www\manage_stock\Entities\Login.php';

class CommandeMetier
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
        $this->dao = new LoginDao();
    }

    public function ajout_user(Login $login)
    {
        if($login->getUsername() == "")
        {
            throw new Exception("Veillez donner votre nom");
        }

      try {
            $this->dao->ajouter_user($login);
        }catch (Exception $ex)
        {
            throw $ex;
        }
    }

    public function modifier_user(Login $login)
    {
        if($login->getUsername() == "")
        {
            throw new Exception("Veuillez donner votre nom");
        }

        $this->dao->update_user($login);
    }

    public function supprimer_user($username)
    {
        $this->dao->delete_user($username);
    }

    public function getUser($username)
    {
        return $this->dao->getByUsername($username);
    }

    public function getUsers()
    {
        return $this->dao->getAll();
    }


}
/*
$etu1 = new Login('BJ1ssdds22aze3','souhail', '0238756238','dfqsd','qsd','qsd');
$etud1 = new Login('seifeddine', 'allal');

$loginmet = new LoginMetier();
//$etumet->supprimer_user('dkaki');
$loginmet->ajout_user($etud1);
*/

