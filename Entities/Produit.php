<?php


class Produit
{
    private $id ;
    private $nom;
    private $prix;
    private $photo;

    /**
     * Produit constructor.
     * @param $id
     * @param $nom
     * @param $prix
     * @param $photo
     */
    public function __construct($id, $nom='', $prix=0, $photo=null)
    {

        $this->id = $id;
        if (!$nom=='')
        $this->nom = $nom;
        if (!$prix==0)
        $this->prix = $prix;
        if (!$photo==null)
        $this->photo = $photo;
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }




}
