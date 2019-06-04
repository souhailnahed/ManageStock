<?php
//id_commande date_c prix_c qte_c id_produit CIN

class Commande
{
    private $id ;
    private $date;
    private $prix;
    private $qte;
    private $etudiant;
    private $produit;

    /**
     * Commande constructor.
     * @param $id
     * @param $date
     * @param $prix
     * @param $qte
     * @param $etudiant
     * @param $produit
     */
    public function __construct($id, $date, $prix, $qte, $etudiant, $produit)
    {
        $this->id = $id;
        $this->date = $date;
        $this->prix = $prix;
        $this->qte = $qte;
        $this->etudiant = $etudiant;
        $this->produit = $produit;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * @param mixed $qte
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
    }

    /**
     * @return Client
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * @param mixed $etudiant
     */
    public function setEtudiant($etudiant)
    {
        $this->etudiant = $etudiant;
    }

    /**
     * @return Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }




}
