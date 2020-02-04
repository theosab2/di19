<?php
namespace src\Model;

class Categorie extends Contenu{

    public function SqlGetCateg(\PDO $bdd){
        $requete = $bdd->prepare('SELECT * FROM categories');
        $requete->execute();
        $arrayCategorie = $requete->fetchAll();

        $listCategorie = [];
        foreach ($arrayCategorie as $categorieSQL){
            $categorie = new Categorie();
            $categorie->setId($categorieSQL['Id']);
            $categorie->setNom($categorieSQL['Nom']);
            $categorie->setDescription($categorieSQL['Description']);

            $listCategorie[] = $categorie;
        }
        return $listCategorie;
    }

    public function SqlGet(\PDO $bdd,$idCategorie){
        $requete = $bdd->prepare('SELECT * FROM categories where Id = :idCategorie');
        $requete->execute([
            'idCategorie' => $idCategorie
        ]);
        $arrayCategorie = $requete->fetch();

            $categorie = new Categorie();
            $categorie->setId($arrayCategorie['Id']);
            $categorie->setNom($arrayCategorie['Nom']);
            $categorie->setDescription($arrayCategorie['Description']);

        return $categorie;
    }

    public function SqlAdd(\PDO $bdd) {
        try{
            $requete = $bdd->prepare('INSERT INTO categories (Nom, Description) VALUES(:Nom, :Description)');
            $requete->execute([
                "Nom" => $this->getNom(),
                "Description" => $this->getDescription(),
            ]);
            return array("result"=>true,"message"=>$bdd->lastInsertId());
        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }
    }
}