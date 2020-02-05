<?php
namespace src\Model;

class User implements \JsonSerializable
{

    private $USERID;
    private $USEREMAIL;
    private $USERNOM;
    private $USERPRENOM;
    private $USERTOKEN;
    private $USERROLE;
    private $USERSTATUS;
    private $USERPASSWORD;

    /**
     * @return mixed
     */
    public function getUSERID()
    {
        return $this->USERID;
    }

    /**
     * @param mixed $USERID
     */
    public function setUSERID($USERID)
    {
        $this->USERID = $USERID;
    }

    /**
     * @return mixed
     */
    public function getUSEREMAIL()
    {
        return $this->USEREMAIL;
    }

    /**
     * @param mixed $USEREMAIL
     */
    public function setUSEREMAIL($USEREMAIL)
    {
        $this->USEREMAIL = $USEREMAIL;
    }

    /**
     * @return mixed
     */
    public function getUSERNOM()
    {
        return $this->USERNOM;
    }

    /**
     * @param mixed $USERNOM
     */
    public function setUSERNOM($USERNOM)
    {
        $this->USERNOM = $USERNOM;
    }

    /**
     * @return mixed
     */
    public function getUSERPRENOM()
    {
        return $this->USERPRENOM;
    }

    /**
     * @param mixed $USERPRENOM
     */
    public function setUSERPRENOM($USERPRENOM)
    {
        $this->USERPRENOM = $USERPRENOM;
    }

    /**
     * @return mixed
     */
    public function getUSERTOKEN()
    {
        return $this->USERTOKEN;
    }

    /**
     * @param mixed $USERTOKEN
     */
    public function setUSERTOKEN($USERTOKEN)
    {
        $this->USERTOKEN = $USERTOKEN;
    }

    /**
     * @return mixed
     */
    public function getUSERROLE()
    {
        return $this->USERROLE;
    }

    /**
     * @param mixed $USERROLE
     */
    public function setUSERROLE($USERROLE)
    {
        $this->USERROLE = $USERROLE;
    }

    /**
     * @return mixed
     */
    public function getUSERSTATUS()
    {
        return $this->USERSTATUS;
    }

    /**
     * @param mixed $USERSTATUS
     */
    public function setUSERSTATUS($USERSTATUS)
    {
        $this->USERSTATUS = $USERSTATUS;
    }

    /**
     * @return mixed
     */
    public function getUSERPASSWORD()
    {
        return $this->USERPASSWORD;
    }

    /**
     * @param mixed $USERPASSWORD
     */
    public function setUSERPASSWORD($USERPASSWORD)
    {
        $this->USERPASSWORD = $USERPASSWORD;
    }


    public function jsonSerialize()
    {
        return [
            'userid' => $this->getUSERID(),
            'usermail' => $this->getUSEREMAIL(),
            'usernom' => $this->getUSERNOM(),
            'userprenom' => $this->getUSERPRENOM(),
            'usertoken' => $this->getUSERTOKEN(),
            'userrole' => $this->getUSERROLE(),
            'userstatus' => $this->getUSERSTATUS(),
            'userpassword' => $this->getUSERPASSWORD()
        ];
    }

    public function SqlAdd(\PDO $bdd)
    {
        $query = $bdd->prepare('INSERT INTO user (USER_PRENOM, USER_NOM, USER_PASSWORD, USER_EMAIL) VALUES (:prenom, :nom, :password, :email)');
        $query->execute([
            "prenom" => $this->getUSERPRENOM(),
            "nom" => $this->getUSERNOM(),
            "password" => $this->getUSERPASSWORD(),
            "email" => $this->getUSEREMAIL()
        ]);
    }

    public function SqlGetAllEmail(\PDO $bdd){

        $query = $bdd->prepare("SELECT USER_EMAIL FROM user WHERE USER_STATUS='1'");
        $query->execute();
        $arrayUser = $query->fetchAll();

        $emailUsers = [];
        foreach ($arrayUser as $userSQL){
            $user = new User();
            $user->setUSEREMAIL(strtolower($userSQL['usermail']));

            $emailUsers[] = $user;
        }
        return $emailUsers;
    }

    public function SqlGetLogin(\PDO $bdd , $emailuser){
        $query = $bdd->prepare('SELECT USER_PASSWORD, USER_ID FROM user WHERE USER_EMAIL = :useremail');
        $query->execute([
            'useremail' => $emailuser
        ]);

        $UserInfoLog = $query->fetch();
        $user = new User();
        $user->setUSERPASSWORD($UserInfoLog['userpassword']);
        $user->setUSERID($UserInfoLog['userpassword']);

        $UserInfoLog[] = $user;

        return $UserInfoLog;
    }

}
