<?php
foreach (glob("Dao/*.php") as $filename)
{
    include_once $filename;
}
include_once 'C:\wamp64\www\manage_stock\Dao\ProduitDao.php';
include_once 'C:\wamp64\www\manage_stock\Entities\Produit.php';

class ProduitMetier
{

    /**
     * @var ProduitDao
     */
    private $dao ;

    /**
     * ProduitMetier constructor.
     */
    public function __construct()
    {
        $this->dao = new ProduitDao();
    }

    public function add_product(Produit $produit)
    {
        if($produit->getId() == 0)
        {
            throw new Exception("Veillez donner votre nom");
        }

        try {
            $this->dao->ajouter_produit($produit);
        }catch (Exception $ex)
        {
            throw $ex;
        }
    }

    public function modifier_produit(Produit $produit)
    {
        if($produit->getNom() == "")
        {
            throw new Exception("Veuillez donner votre nom");
        }

        $this->dao->update_produit($produit);
    }

    public function suppimer_produit($id)
    {
        $this->dao->delete_produit($id);
    }

    public function getProduit($id)
    {
        return $this->dao->getByID($id);
    }

    public function getProduits()
    {
        return $this->dao->getAll();
    }


}
/*
$prod1 = new Produit(43);
$prod2 = new Produit(1232 ,ésdf, 2342,KSDFH);

$prodmet = new ProduitMetier();
//$etumet->modifier_Produit($prod1);
$prodmet->add_product($prod1);
//etumet->suppimer_Produit('123');

*/
