<?php
namespace src\Controller;


use src\Model\Bdd;
use src\Model\Categorie;
use src\Model\User;

class UserController extends  AbstractController
{

    public function loginForm()
    {
        unset($_SESSION['errorlogin']);
        return $this->twig->render('User/login.html.twig');
    }

    public function inscriptionForm()
    {
        unset($_SESSION['errinscription']);
        unset($_SESSION['errinscriptionA']);
        unset($_SESSION['errinscriptionB']);
        return $this->twig->render('User/inscription.html.twig');
    }

    public function loginCheck()
    {
        /* Fonction déclenchée par le clic sur bouton login.
          renvoi sur la page d'accueil si ok sinon renvoi sur la page connexion
        */
        if (trim($_POST['email']) == '') {
            $_SESSION['errorlogin'] = "Veuillez entrer une adresse Email";
            header('Location:/login');
            return;
        }

        if (trim($_POST['password']) == '') {
            $_SESSION['errorlogin'] = "Veuillez entrer un mot de passe";
            header('Location:/login');
            return;
        }
        if (trim($_POST['password']) != strip_tags(trim($_POST['password']))) {
            $_SESSION['errorlogin'] = "Le mot de passe n'est pas valide";
            header('Location:/login');
            return;
        }
        if (trim($_POST['email']) != strip_tags(trim($_POST['email']))) {
            $_SESSION['errorlogin'] = "L'adresse mail n'est pas valide";
            header('Location:/login');
            return;
        }


        $userall = new User();
        $emails = $userall->SqlGetAllEmail(Bdd::GetInstance());
        $email_exist = false;
        foreach ($emails as $email) {
            if (strtolower(trim($_POST['email'])) == (strtolower(trim( $email)))) {
                $email_exist = true;
            }
        }

        if($email_exist==false){
            $_SESSION['errorlogin'] = "EMail ou Mot de passe incorrect";
            header('Location:/login');
            return;
        }

      // Test du Captcha
        // Ma clé privée
        $secret = "6LcNR9YUAAAAANj9aeQhzcPHWc8pxjYlkQ63lhBy";
        // Paramètre renvoyé par le recaptcha
        $response = $_POST['g-recaptcha-response'];
        // On récupère l'adresse IP de l'utilisateur
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
            . $secret
            . "&response=" . $response
            . "&remoteip=" . $remoteip ;

        $decode = json_decode(file_get_contents($api_url), true);
        var_dump($decode);
      //---

        $options = [
            'salt' => md5(strtolower($_POST['email'])),
            'cost' => 12 // the default cost is 10
        ];
        define('PEPPER', sha1(strtolower($_POST['email'])));
        $pwd_hashed_entry = password_hash(($_POST['password']) . PEPPER, PASSWORD_DEFAULT, $options);
        $user = new User();
        $userInfoLog = $user->SqlGetLogin(Bdd::GetInstance(), ($_POST['email']));
        $pwd_hashed_bdd = $userInfoLog['USER_PASSWORD'];
        if ($pwd_hashed_entry == $pwd_hashed_bdd and $decode['success'] == true) {
            $arrayRole = explode(" ", $userInfoLog['USER_ROLE']);
            $_SESSION['login'] = array("id" => $userInfoLog['USER_ID'],
                "roles" => $arrayRole,
                "status" => $userInfoLog['USER_STATUS'],
                "prenom" => $userInfoLog['USER_PRENOM'],
                "email" => $userInfoLog['USER_EMAIL'],
                "nom" => $userInfoLog['USER_NOM'],
                "role" => $userInfoLog['USER_ROLE'],
                "valider" => $userInfoLog['USER_VALIDER']);
            header('Location:/');

        } else {
            $_SESSION['errorlogin'] = "Email, Mot de passe ou captcha incorrect";
            header('Location:/login');
            return;
        }
    }


    public static function roleNeed($roleATester)
    {
        if (isset($_SESSION['login'])) {
            if (!in_array($roleATester, $_SESSION['login']['roles'])) {
                $_SESSION['errorlogin'] = "Manque le role : " . $roleATester;
                header('Location:/Contact');
            }
        } else {
            $_SESSION['errorlogin'] = "Veuillez vous identifier";
            header('Location:/login');
        }
    }

    //permet de visualiser les utilisateurs
    public function AfficherUtilisateur(){
        $utilisateur = new User();
        $listUtilisateur = $utilisateur->SqlUtilisateur(Bdd::GetInstance());

        return $this->twig->render('User/Utilisateur.html.twig',['utilisateurlist' => $listUtilisateur]);
    }

    public function Affichertlm(){
        $utilisateur = new User();
        $listUtilisateur = $utilisateur->Sqltlm(Bdd::GetInstance());

        return $this->twig->render('User/ListUtilisateur.html.twig',['utilisateurlist' => $listUtilisateur]);
    }

    //Permet la validation d'un utilisateur
    public static function ValUtilisateur($id){
    $Utilisateur = new User();
    $Utilisateur->SQlValUtilisateur(Bdd::GetInstance(),$id);

        header('Location:/Utilisateur');
    }

    public static function delUtilisateur($id){
        $Utilisateur = new User();
        $Utilisateur->SQldel(Bdd::GetInstance(),$id);

        header('Location:/Utilisateur');
    }

    //fonction Inscription
    public function InscriptionCheck()
    {
        if ($_POST) {
            if (!filter_var(
                $_POST['password'],
                FILTER_VALIDATE_REGEXP,
                array(
                    "options" => array("regexp" => "/[a-zA-Z]{5,}/")
                    )
                )
            )

            {
                $_SESSION['errinscription'] = "Le mot de passe ne peut être inférieur à 5 caractères";
                header('Location:/inscription');
            } else {
                if (($_POST['password']) != ($_POST['password2'])) {

                    $_SESSION['errinscription'] = "Les mots de passe ne correspondent pas";
                    header('Location:/inscription');
                    return;
                }
                $userall = new User();
                $emails = $userall->SqlGetAllEmail(Bdd::GetInstance());
                $email_exist = false;
                foreach ($emails as $email) {
                    if (strtolower(trim($_POST['email'])) == $email) {
                        $email_exist = true;
                    }
                }

                        if ($email_exist == true) {
                            $_SESSION['errinscriptionB'] = '/login';
                            $_SESSION['errinscriptionA'] = "Se connecter";
                            $_SESSION['errinscription'] = "L'email est déja utilisé";
                            header('Location:/inscription');
                            return;
                        } else {
                            $options = [
                                'salt' => md5(strtolower($_POST['email'])),
                                'cost' => 12 // the default cost is 10
                            ];
                            define('PEPPER', sha1(strtolower($_POST['email'])));
                            $pwd_hashed = password_hash(($_POST['password']) . PEPPER, PASSWORD_DEFAULT, $options);

                            $user = new User();
                            $user->setUSERPRENOM($_POST["prenom"]);
                            $user->setUSERNOM($_POST["nom"]);
                            $user->setUSEREMAIL(strtolower($_POST['email']));
                            $user->setUSERPASSWORD($pwd_hashed);
                            $user->SqlAdd(Bdd::GetInstance());
                            unset($_SESSION['errinscription']);
                            unset($_SESSION['errorlogin']);
                            header('Location:/login');

                            if($email_exist==false){
                                $_SESSION['errorlogin'] = "EMail ou Mot de passe incorrect";
                                header('Location:/login');
                                return;
                            }
                        }
                }
            }

        }

        //fonction Deconnexion
        public
        function logout()
        {
            unset($_SESSION['login']);
            unset($_SESSION['errorlogin']);

            header('Location:/');
        }

        //Afficher la page d'édition css
        public function readFile(){
            $file='test.css';
            $dataCss = file_get_contents('assets/'.$file);

            $Categorie = new Categorie();
            $listCategorie = $Categorie->SqlGetCateg(Bdd::GetInstance());
            return $this->twig->render('User/readFile.html.twig', [
                //contenu du fichier css envoyé dans la vue
                'cssFileData' => $dataCss
                ,'listCat' => $listCategorie
            ]);

        }

        //Afficher la page d'édition css
        public function writeFile(){

        /*if((strip_tags($_POST['cssFileData']))!=($_POST['cssFileData'])){
                $_SESSION['errorcsschange']="Ce code CSS n'est pas conforme";
                header("location:/");
            }*/
            $file='test.css';
            file_put_contents('assets/'.$file,$_POST['cssFileData']);
            header("location:/User");
            return;
        }
}


