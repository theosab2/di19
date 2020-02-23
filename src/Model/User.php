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
    private $USERAGE;
    private $USERVILLE;
    private $USERSEXE;
    private $USERPROJET;
    private $USERDESC;
    private $USERCENTRE;
    private $USERPROFESSION;
    private $USERMOI;
    private $USERSITUATION;
    private $USERCHERCHE;
    private $USERLIKE;

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

    /**
     * @return mixed
     */
    public function getUSERAGE()
    {
        return $this->USERAGE;
    }

    /**
     * @param mixed $USERAGE
     */
    public function setUSERAGE($USERAGE)
    {
        $this->USERAGE = $USERAGE;
    }

    /**
     * @return mixed
     */
    public function getUSERVILLE()
    {
        return $this->USERVILLE;
    }

    /**
     * @param mixed $USERVILLE
     */
    public function setUSERVILLE($USERVILLE)
    {
        $this->USERVILLE = $USERVILLE;
    }

    /**
     * @return mixed
     */
    public function getUSERSEXE()
    {
        return $this->USERSEXE;
    }

    /**
     * @param mixed $USERSEXE
     */
    public function setUSERSEXE($USERSEXE)
    {
        $this->USERSEXE = $USERSEXE;
    }

    /**
     * @return mixed
     */
    public function getUSERPROJET()
    {
        return $this->USERPROJET;
    }

    /**
     * @param mixed $USERPROJET
     */
    public function setUSERPROJET($USERPROJET)
    {
        $this->USERPROJET = $USERPROJET;
    }

    /**
     * @return mixed
     */
    public function getUSERDESC()
    {
        return $this->USERDESC;
    }

    /**
     * @param mixed $USERDESC
     */
    public function setUSERDESC($USERDESC)
    {
        $this->USERDESC = $USERDESC;
    }

    /**
     * @return mixed
     */
    public function getUSERCENTRE()
    {
        return $this->USERCENTRE;
    }

    /**
     * @param mixed $USERCENTRE
     */
    public function setUSERCENTRE($USERCENTRE)
    {
        $this->USERCENTRE = $USERCENTRE;
    }

    /**
     * @return mixed
     */
    public function getUSERPROFESSION()
    {
        return $this->USERPROFESSION;
    }

    /**
     * @param mixed $USERPROFESSION
     */
    public function setUSERPROFESSION($USERPROFESSION)
    {
        $this->USERPROFESSION = $USERPROFESSION;
    }

    /**
     * @return mixed
     */
    public function getUSERMOI()
    {
        return $this->USERMOI;
    }

    /**
     * @param mixed $USERMOI
     */
    public function setUSERMOI($USERMOI)
    {
        $this->USERMOI = $USERMOI;
    }

    /**
     * @return mixed
     */
    public function getUSERSITUATION()
    {
        return $this->USERSITUATION;
    }

    /**
     * @param mixed $USERSITUATION
     */
    public function setUSERSITUATION($USERSITUATION)
    {
        $this->USERSITUATION = $USERSITUATION;
    }

    /**
 * @return mixed
 */
    public function getUSERCHERCHE()
    {
        return $this->USERCHERCHE;
    }

    /**
     * @param mixed $USERCHERCHE
     */
    public function setUSERCHERCHE($USERCHERCHE)
    {
        $this->USERCHERCHE = $USERCHERCHE;
    }

    /**
     * @return mixed
     */
    public function getUSERLIKE()
    {
        return $this->USERLIKE;
    }

    /**
     * @param mixed $USERLIKE
     */
    public function setUSERLIKE($USERLIKE)
    {
        $this->USERLIKE = $USERLIKE;
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
            'userage' => $this->getUSERAGE(),
            'userville' => $this->getUSERVILLE(),
            'usersexe' => $this->getUSERSEXE(),
            'userprojet' => $this->getUSERPROJET(),
            'userdescription' => $this->getUSERDESC(),
            'usercentre' => $this->getUSERCENTRE(),
            'userprofession' => $this->getUSERPROFESSION(),
            'usermoi' => $this->getUSERMOI(),
            'usersituation' => $this->getUSERSITUATION(),
            'usercherche' => $this->getUSERCHERCHE(),
            'userlike' => $this->getUSERLIKE(),
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

    public function SqlPersonne(\PDO $bdd)
    {
        $query = $bdd->prepare('SELECT USER_ID, USER_PROJET, USER_NOM, USER_PRENOM FROM user where USER_LIKE = 0');
        $query->execute();
        $arrayUser = $query->fetchAll();
        $listUser = [];
        foreach ($arrayUser as $UserSQL){

            $User = new User();
            $User->setUSERID($UserSQL['USER_ID']);
            $User->setUSERID($UserSQL['USER_PROJET']);
            $User->setUSERNOM($UserSQL['USER_NOM']);
            $User->setUSERPRENOM($UserSQL['USER_PRENOM']);

            $listUser[] = $User;
        }

        return $arrayUser;
    }



    public function SqlGetChercher(\PDO $bdd,$MotCle){
        // requete de recherche par mot clé dans titre
        $requete = $bdd->prepare('SELECT * FROM user where USER_VALIDER = 1 and USER_PROJET LIKE :search');
        $requete->execute(
            ['search' => "%".$MotCle."%"]
        );
        $arrayUser = $requete->fetchAll();

        $listUtilisateur = [];
        foreach ($arrayUser as $UtilisateurSQL){
            $Utilisateur = new User();
            $Utilisateur->setUSERID($UtilisateurSQL['USER_ID']);
            $Utilisateur->setUSERNOM($UtilisateurSQL["USER_NOM"]);
            $Utilisateur->setUSERPRENOM($UtilisateurSQL["USER_PRENOM"]);
            $Utilisateur->setUSERPROJET($UtilisateurSQL["USER_PROJET"]);

            $listUtilisateur[] = $Utilisateur;
        }
        return $arrayUser;
    }


    public function Sqltlm(\PDO $bdd)
    {
        $query = $bdd->prepare('SELECT USER_ID, USER_PRENOM, USER_NOM, USER_ROLE, USER_PROJET  FROM user where USER_VALIDER = 1');
        $query->execute();
        $arrayUser = $query->fetchAll();
        $listUser = [];
        foreach ($arrayUser as $UserSQL){

            $User = new User();
            $User->setUSERID($UserSQL['USER_ID']);
            $User->setUSERNOM($UserSQL['USER_NOM']);
            $User->setUSERPRENOM($UserSQL['USER_PRENOM']);
            $User->setUSERROLE($UserSQL['USER_ROLE']);
            $User->setUSERPROJET($UserSQL['USER_PROJET']);


            $listUser[] = $User;
        }

        return $arrayUser;
    }

    public function Matchtlm(\PDO $bdd)
    {
        $query = $bdd->prepare('SELECT USER_PRENOM, USER_NOM, USER_PROJET  FROM user where USER_LIKE = 1');
        $query->execute();
        $arrayUser = $query->fetchAll();
        $listUser = [];
        foreach ($arrayUser as $UserSQL){

            $User = new User();
            $User->setUSERNOM($UserSQL['USER_NOM']);
            $User->setUSERPRENOM($UserSQL['USER_PRENOM']);
            $User->setUSERPROJET($UserSQL['USER_PROJET']);

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

    public function SQlMatch(\PDO $bdd,$id){
        $query = $bdd->prepare('update user set USER_LIKE = 1 where USER_ID = :id');
        $query->execute([
            'id' => $id,
        ]);
    }

    public function SQlDel(\PDO $bdd,$id){
        $query = $bdd->prepare('DELETE FROM user WHERE USER_ID = :id;');
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

    public function Message(\PDO $bdd)
    {
        $query = $bdd->prepare('INSERT INTO articles (message) VALUES (:message)');
        $query->execute([
            "message" => $this->getMESSAGE(),
        ]);
    }

    public function SqlGetAllEmail(\PDO $bdd){

        $query = $bdd->prepare("SELECT USER_EMAIL FROM user");
        $query->execute();
        $arrayUser = $query->fetchAll();

        $emailUsers = [];
        foreach ($arrayUser as $userSQL){
            $user = new User();
            $user->setUSEREMAIL(strtolower($userSQL['USER_EMAIL']));

            $emailUsers[] = $user->getUSEREMAIL();
        }
        return $emailUsers;
    }



    public function SqlGetLogin(\PDO $bdd , $emailuser){
        $query = $bdd->prepare('SELECT USER_PASSWORD,USER_ROLE, USER_EMAIL,USER_NOM, USER_PRENOM, USER_PROJET, USER_ID, USER_VALIDER, USER_LIKE FROM user WHERE USER_EMAIL = :useremail');
        $query->execute([
            'useremail' => $emailuser

        ]);

        $UserInfoLog = $query->fetch();
        $user = new User();
        $user->setUSERPASSWORD($UserInfoLog['USER_PASSWORD']);
        $user->setUSERID($UserInfoLog['USER_ID']);
        $user->setUSERNOM($UserInfoLog["USER_NOM"]);
        $user->setUSERPRENOM($UserInfoLog["USER_PRENOM"]);
        $user->setUSERPROJET($UserInfoLog["USER_PROJET"]);
        $user->setUSERROLE($UserInfoLog["USER_ROLE"]);
        $user->setUSERLIKE($UserInfoLog["USER_LIKE"]);

        $UserInfoLog[] = $user;

        return $UserInfoLog;
    }

    public function EditProfile(\PDO $bdd,$id)
    {
        $query = $bdd->prepare('update user set USER_NOM=:nom, USER_PRENOM=:prenom, USER_AGE=:age, USER_VILLE=:ville, USER_SEXE=:sexe, USER_PROJET=:projet, USER_DESC=:description, USER_CENTRE=:centre, USER_PROFESSION=:profession, USER_MOI=:moi, USER_SITUATION=:situation, USER_CHERCHE=:cherche where USER_ID = :id');
        $query->execute([
            'id' => $id,
            'nom' => $this->getUSERNOM(),
            'prenom' => $this->getUSERPRENOM(),
            'age' => $this->getUSERAGE(),
            'ville' => $this->getUSERVILLE(),
            'sexe' => $this->getUSERSEXE(),
            'projet' => $this->getUSERPROJET(),
            'description' => $this->getUSERDESC(),
            'centre' => $this->getUSERCENTRE(),
            'profession' => $this->getUSERPROFESSION(),
            'moi' => $this->getUSERMOI(),
            'situation' => $this->getUSERSITUATION(),
            'cherche' => $this->getUSERCHERCHE(),

        ]);
    }

    public function GetProfile(\PDO $bdd,$id)
    {
        $query = $bdd->prepare('SELECT * FROM user where USER_ID = :id');
        $query->execute([
            'id' => $id
        ]);

        return $query->fetch();
    }

}

