<?php
namespace src\Controller;

use src\Model\Bdd;
use src\Model\Categorie;


class CategorieController extends AbstractController{

    public function ListAll(){
        $categorie = new Categorie();
        $listCategorie = $categorie->SqlGetCateg(Bdd::GetInstance());

        //Lancer la vue TWIG
        return $this->twig->render(
            'Categorie/list.html.twig',[
                'categorieList' => $listCategorie
            ]
        );
    }


    public function Show($categorieID){
        $categorieSQL = new Categorie();
        $categorie = $categorieSQL->SqlGet(BDD::getInstance(),$categorieID);

        //Lancer la vue TWIG
        return $this->twig->render('Categorie/show.html.twig',['categorie' => $categorie]
        );
    }

    public function add(){
        UserController::roleNeed('redacteur');
        if($_POST AND $_SESSION['token'] == $_POST['token']){

            $categorie = new categorie();
            $categorie->setNom(strip_tags($_POST['Nom']));
            $categorie->setDescription(strip_tags($_POST['Description']));

            $categorie->SqlAdd(BDD::getInstance());
            header('Location:/Categorie');
        }else{
            // Génération d'un TOKEN
            $token = bin2hex(random_bytes(32));
            $_SESSION['token'] = $token;
            return $this->twig->render('Categorie/add.html.twig',
                [
                    'token' => $token
                ]);
        }
    }

    public function update($categorieID){
        $categorieSQL = new Categorie();
        $categorie = $categorieSQL->SqlGet(BDD::getInstance(),$categorieID);

        if($_POST){
            $categorie->setNom(strip_tags($_POST['Nom']));
            $categorie->setDescription(strip_tags($_POST['Description']));

            $categorie->SqlUpdate(BDD::getInstance());
            header('Location:/Categorie');
        }

        return $this->twig->render('Categorie/update.html.twig',[
            'categorie' => $categorie
        ]);
    }

    public function delete($categorieID){
        $categorieSQL = new Categorie();
        $categorie = $categorieSQL->SqlGet(BDD::getInstance(),$categorieID);
        $categorie->SqlDelete(BDD::getInstance(),$categorieID);

        header('Location:/Categorie');
    }

}