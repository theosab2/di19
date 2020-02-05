<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\User;

class UserController extends  AbstractController {

    // chemins qui menent aux fichiers connexion et inscription.twig
    public function loginForm(){
        unset($_SESSION['errorlogin']);
        return $this->twig->render('User/login.html.twig');
    }
    public function inscriptionForm(){
        unset($_SESSION['errinscription']);
        return $this->twig->render('User/inscription.html.twig');
    }

    //fonction Connexion
    public function loginCheck()
    {

        if ($_POST['email'] == '') {
            $_SESSION['errorlogin'] = "Veuillez entrer une adresse Email";
            header('Location:/login');
            return;
        }

        if ($_POST['password'] == '') {
            $_SESSION['errorlogin'] = "Veuillez entrer un mot de passe";
            header('Location:/login');
            return;
        }

        $options = [
            'salt' => md5(strtolower($_POST['email'])),
            'cost' => 12 // the default cost is 10
        ];
        define('PEPPER', sha1(strtolower($_POST['email'])));
        $pwd_hashed_entry = password_hash(($_POST['password']) . PEPPER, PASSWORD_DEFAULT, $options);
        $user = new User();
        $userInfoLog = $user->SqlGetLogin(Bdd::GetInstance(), ($_POST['email']));
        $pwd_hashed_bdd = $userInfoLog['USER_PASSWORD'];

        if ($pwd_hashed_entry == $pwd_hashed_bdd) {
            $_SESSION['login'] = array("id"=>$userInfoLog['id_uti'],
                "roles"=>array("redacteur"));
            header('Location:/');
        } else {
            $_SESSION['errorlogin'] = "Email ou Mot de passe incorrect";
            header('Location:/login');
            return;
        }
    }


    //fonction Deconnexion
    public function logout(){
        unset($_SESSION['login']);
        unset($_SESSION['errorlogin']);

        header('Location:/');
    }


    //fonction Inscription
    public function InscriptionCheck()
    {
        if ($_POST) {
            if(!filter_var(
                $_POST['Password'],
                FILTER_VALIDATE_REGEXP,
                array(
                    "options" => array("regexp"=>"/[a-zA-Z]{8,}/")
                )
            )){
                $_SESSION['errinscription'] = "Le mot de passe ne peut être inférieur à 8 caractères";
                header('Location:/inscription');
            }
            else{
                if(($_POST['Password'])!=($_POST['Password2'])){
                    $_SESSION['errinscription'] = "Les mots de passe ne correspondent pas";
                    header('Location:/inscription');
                }
                else {

                    $options = [
                        'salt' => md5(strtolower($_POST['Email'])),
                        'cost' => 12 // the default cost is 10
                    ];
                    define('PEPPER', sha1(strtolower($_POST['Email'])));
                    $pwd_hashed = password_hash(($_POST['Password']) . PEPPER, PASSWORD_DEFAULT, $options);

                    $user = new User();
                    $user->setUSERPRENOM($_POST["Prenom"]);
                    $user->setUSERNOM($_POST["Nom"]);
                    $user->setUSEREMAIL(strtolower($_POST['Email']));
                    $user->setUSERPASSWORD($pwd_hashed);
                    $user->SqlAdd(Bdd::GetInstance());
                    unset($_SESSION['errinscription']);
                    unset($_SESSION['errorlogin']);
                    header('Location:/login');
                }

            }
        }
    }

    //fonction role
    public static function roleNeed($roleATester){
        if(isset($_SESSION['login'])){
            if(!in_array($roleATester,$_SESSION['login']['roles'])){
                $_SESSION['errorlogin'] = "Vous n'êtes pas ".$roleATester;
                header('Location:/login');
            }
        }else{
            $_SESSION['errorlogin'] = "Veuillez-vous identifier";
            header('Location:/login');
        }
    }

}