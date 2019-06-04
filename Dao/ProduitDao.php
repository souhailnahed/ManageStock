<?php


class ProduitDao
{
    /**
     * @var PDO
     */
    private $con ;

    /**
     * ProduitDao constructor.
     */
    public function __construct()
    {
        $this->con = ConnectionUtil::getInstance();
    }

    public function ajouter_produit(Produit $produit)
    {
        $data =
            [
                "id" => $produit->getId(),
                "nom" => $produit->getNom(),
                "prix" => $produit->getPrix(),
                "photo" => $produit->getPhoto()
            ];
        $ps = $this->con->prepare("insert into produit(id, nom, prix, photo) values (:id, :nom, :prix, :photo)");
        try
        {
            $ps->execute($data);

        }catch (Exception $ex)
        {
            throw $ex;
        }
    }

    public function modifier_produit(Produit $produit)
    {
        $data =
            [
                "id" => $produit->getId(),
                "nom" => $produit->getNom(),
                "prix" => $produit->getPrix(),
                "photo" => $produit->getPhoto()
            ];
        $ps = $this->con->prepare("update produit set nom=:nom, prix=:prix, photo=:photo where id = :id");
        try
        {
            $ps->execute($data);

        }catch (Exception $ex)
        {
            throw $ex;
        }
    }
    public function supprimer_produit($id_produit)
    {
        $req = "delete from produit where id = {$id_produit}" ;
        $ans = $this->con->prepare($req);
        try{
            $ans->execute();
        }catch (Exception $ex){
            throw new Exception("Impossible de Supprimer le produit");
        }
    }


    /**
     * @param $id_produit
     * @return Produit
     * @throws Exception
     */
    public function getProduit($id_produit)
    {
        $req = "select * from produit where id = {$id_produit}" ;
        $ans = $this->con->prepare($req);
        try
        {
            $ans->execute();
            return $ans->fetchObject(Produit::class);
        }catch (Exception $ex)
        {
            throw $ex ;
        }
    }

    /**
     * @return Produit[]
     * @throws Exception
     */
    public function getProduits()
    {
        $req = "select * from produit" ;
        $ans = $this->con->prepare($req);

        try {
            $ans->execute();
            return $ans->fetchAll(PDO::FETCH_CLASS, Produit::class);
        }catch (Exception $ex)
        {
            throw $ex ;
        }
    }

}
