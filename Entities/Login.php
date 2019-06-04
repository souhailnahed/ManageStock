<?php
foreach (glob("Dao/*.php") as $filename)
{
    include $filename;
}

class Login implements JsonSerializable
{
    private $username;
    private $password;
    private $first_name;
    private $last_name;
    private $e_mail;
    private $type;





    /**
     * login constructor.
     * @param $username
     * @param $password
     */
    public function __construct( $username,$password,$first_name='',$last_name='', $e_mail='',$type='user' )//same as setALL() FUNCTION
    {
        $this->username = $username;
        $this->password = $password;
        if (!$first_name=='')
        $this->first_name = $first_name;
        if(!$last_name=='')
        $this->last_name = $last_name;
        if (!$e_mail=='')
        $this->e_mail = $e_mail;
        if (!$type=='user')
        $this->type = $type;
    }

    public function setAll($username,$password,$first_name,$last_name, $e_mail,$type)
    {
        $this->username = $username;
        $this->password = $password;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->e_mail = $e_mail;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getEMail()
    {
        return $this->e_mail;
    }

    /**
     * @param mixed $e_mail
     */
    public function setEMail($e_mail)
    {
        $this->e_mail = $e_mail;
    }
    /*
        public function setAll($username, $password)
        {
            $this->username = $username;
            $this->password = $password;
        }
    */
    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $CIN
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $Nom
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
