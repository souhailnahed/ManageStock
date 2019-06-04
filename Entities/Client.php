<?php
foreach (glob("Dao/*.php") as $filename)
{
    include $filename;
}

class Client implements JsonSerializable
{
    private $CIN;
    private $Nom;
    private $tel;

    /**
     * Client constructor.
     * @param $cin
     * @param $nom
     * @param $tel
     */
    public function __construct( $CIN,$Nom,$tel)//same as setALL() FUNCTION
    {
        $this->CIN = $CIN;
        $this->Nom = $Nom;
        $this->tel = $tel;
    }

    public function setAll($cin, $nom, $tel)
    {
        $this->CIN = $cin;
        $this->Nom = $nom;
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getCIN()
    {
        return $this->CIN;
    }

    /**
     * @param mixed $CIN
     */
    public function setCIN($CIN)
    {
        $this->CIN = $CIN;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }


    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

}
/*
$etudiant1=new Client ('SALAM','labass','982734');
//$etu = new ClientDao();
//$etu1 = new Client('BJ123','souhail', '0238756238');
$etu->ajouter_etudiant('etudiant1');
*/
