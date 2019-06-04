<?php
class CommandeDao
{
    /**
     * @var PDO
     */
    private $conn ;
    /**
     * CommandeDao constructor.
     */
    //id_commande date_c prix_c qte_c id_produit CIN
    public function __construct()
    {
        $this->conn;
    }

    public function effectuer_commande(Commande $commande)
    {
        $data =
            [
                "date_c" => $commande->getDate(),
                "prix" => $commande->getPrix(),
                "qte" => $commande->getQte(),
                "cin_etudiant" => $commande->getEtudiant()->getCin(),
                "id_produit" => $commande->getProduit()->getId()
            ];
        $res = $this->conn->prepare("insert into commande(date_c,prix_c,qte_c,cin,id_prod) 
            values (:date_c,:prix,:qte,:cin_etudiant,:id_produit)");

        try{
            $res->execute($data);
        }catch (Exception $ex)
        {
            throw $ex ;
        }

    }
    public function modifier_commande(Commande $commande)
    {
        $data =
            [
                "id" => $commande->getId(),
                "date_c" => $commande->getDate(),
                "prix" => $commande->getPrix(),
                "qte" => $commande->getQte(),
                "cin_etudiant" => $commande->getEtudiant()->getCin(),
                "id_produit" => $commande->getProduit()->getId()
            ];
        $res = $this->con->prepare("update commande set date_c = :date_c, prix_c=:prix,
        qte_c=:qte, cin = :cin_etudiant, id_prod=:id_produit where id_commande = :id");

        try{
            $res->execute($data);
        }catch (Exception $ex)
        {
            throw $ex ;
        }

    }

    public function supprimer_commande($id)
    {
        $res = $this->con->prepare("delete from commande where id_commande = {$id}");
        try{
            $res->execute();
        }catch (Exception $ex)
        {
            throw $ex ;
        }
    }

}
