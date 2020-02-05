<?php
namespace src\Controller;

class UserController extends  AbstractController {

    public function loginForm(){

        return $this->twig->render('User/login.html.twig');
    }

    public function inscriptionForm(){
        unset($_SESSION['errinscription']);
        return $this->twig->render('User/inscription.html.twig');
    }

    public function loginCheck(){

        if(!filter_var(
            $_POST['password'],
            FILTER_VALIDATE_REGEXP,
            array(
                "options" => array("regexp"=>"/[a-zA-Z]{3,}/")
            )
        )){
            $_SESSION['errorlogin'] = "Mpd mini 3 caractères";
            header('Location:/Login');
            return;
        }

        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $_SESSION['errorlogin'] = "Mail invalide";
            header('Location:/Login');
            return;
        }

        if($_POST["email"]=="admin@admin.com"
            AND $_POST["password"] == "password"
        ){

            $_SESSION['login'] = array(
                'Nom' => 'Administrateur'
            ,'Prénom' => 'Sylvain'
            ,'roles' => array('admin', 'redacteur')
            );
            header('Location:/');
        }else{
            $_SESSION['errorlogin'] = "Erreur Authent.";
            header('Location:/Login');
        }

    }

    public static function roleNeed($roleATester){
        if(isset($_SESSION['login'])){
            if(!in_array($roleATester,$_SESSION['login']['roles'])){
                $_SESSION['errorlogin'] = "Manque le role : ".$roleATester;
                header('Location:/Contact');
            }
        }else{
            $_SESSION['errorlogin'] = "Veuillez vous identifier";
            header('Location:/Login');
        }
    }

    public function logout(){
        unset($_SESSION['login']);
        unset($_SESSION['errorlogin']);

        header('Location:/');
    }

    public function InscriptionCheck()
    {
        if ($_POST) {
            if (!filter_var(
                $_POST['Password'],
                FILTER_VALIDATE_REGEXP,
                array(
                    "options" => array("regexp" => "/[a-zA-Z]{3,}/")
                )
            )) {
                $_SESSION['errinscription'] = "Le mot de passe ne peut être inférieur à 8 caractères";
                header('Location:/inscription');
            } else {
                if (($_POST['Password']) != ($_POST['Password2'])) {
                    $_SESSION['errinscription'] = "Les mots de passe ne correspondent pas";
                    header('Location:/inscription');
                } else {

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


}