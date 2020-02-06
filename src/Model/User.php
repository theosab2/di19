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
    private $USERISADMIN;

    /**
     * @return mixed
     */
    public function getUSERISADMIN()
    {
        return $this->USERISADMIN;
    }

    /**
     * @param mixed $USERISADMIN
     */
    public function setUSERISADMIN($USERISADMIN)
    {
        $this->USERISADMIN = $USERISADMIN;
    }

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
            'userpassword' => $this->getUSERPASSWORD(),
            'userisadmin' => $this->getUSERISADMIN(),
        ];
    }

    public function SqlUtilisateur(\PDO $bdd)
    {
        $query = $bdd->prepare('SELECT USER_ID, USER_PRENOM, USER_NOM FROM user where USER_VALIDER = 0');
        $query->execute();
        $arrayUser = $query->fetchAll();
        $listUser = [];
        foreach ($arrayUser as $UserSQL){

            $User = new User();
            $User->setUSERID($UserSQL['USER_ID']);
            $User->setUSERNOM($UserSQL['USER_NOM']);
            $User->setUSERPRENOM($UserSQL['USER_PRENOM']);

            $listUser[] = $User;
        }

        return $arrayUser;
    }


    public function Sqltlm(\PDO $bdd)
    {
        $query = $bdd->prepare('SELECT USER_ID, USER_PRENOM, USER_NOM FROM user where USER_VALIDER = 1');
        $query->execute();
        $arrayUser = $query->fetchAll();
        $listUser = [];
        foreach ($arrayUser as $UserSQL){

            $User = new User();
            $User->setUSERID($UserSQL['USER_ID']);
            $User->setUSERNOM($UserSQL['USER_NOM']);
            $User->setUSERPRENOM($UserSQL['USER_PRENOM']);

            $listUser[] = $User;
        }

        return $arrayUser;
    }

    public function SQlValUtilisateur(\PDO $bdd,$id){
        $query = $bdd->prepare('update user set USER_VALIDER = 1 where USER_ID = :id ');
        $query->execute([
            'id' => $id,
        ]);
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

            $emailUsers[] = $user->getUSEREMAIL();
        }
        return $emailUsers;
    }

    public function SqlGetLogin(\PDO $bdd , $emailuser){
        $query = $bdd->prepare('SELECT USER_PASSWORD,USER_ISADMIN, USER_NOM, USER_PRENOM, USER_STATUS, USER_ID FROM user WHERE USER_EMAIL = :useremail');
        $query->execute([
            'useremail' => $emailuser

        ]);

        $UserInfoLog = $query->fetch();
        $user = new User();
        $user->setUSERPASSWORD($UserInfoLog['USER_PASSWORD']);
        $user->setUSERID($UserInfoLog['USER_ID']);
        $user->setUSERNOM($UserInfoLog["USER_NOM"]);
        $user->setUSERPRENOM($UserInfoLog["USER_PRENOM"]);
        $user->setUSERSTATUS($UserInfoLog["USER_STATUS"]);
        $user->setUSERISADMIN($UserInfoLog["USER_ISADMIN"]);


        $UserInfoLog[] = $user;

        return $UserInfoLog;
    }
}

