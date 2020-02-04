<?php
namespace src\Model;

class Categorie {
    private $Id;
    private $Nom;
    private $Description;


    public function SqlGetCateg(\PDO $bdd){
        // Requete pour toute la liste de categorie
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
        // requete pour une categorie
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
        // ajoute une categorie
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

    public function SqlUpdate(\PDO $bdd){
        // Modifie une categorie
        try{
            $requete = $bdd->prepare('UPDATE categories set Nom=:Nom, Description=:Description WHERE id=:IdCategorie');
            $requete->execute([
                'IdCategorie' => $this-> getId()
                ,'Nom' => $this->getNom()
                ,'Description' => $this->getDescription()
            ]);
            return array("0", "[OK] Update");
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }
    }

    public function SqlDelete (\PDO $bdd,$idCategorie){
        try{
            $requete = $bdd->prepare('DELETE FROM categories where Id = :idCategorie');
            $requete->execute([
                'idCategorie' => $idCategorie
            ]);
            return true;
        }catch (\Exception $e){
            return false;
        }
    }

    // ---- Get-Set ---
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     * @return Contenu
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     * @return Contenu
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }
    public function getNom(){
        return $this->Nom;
    }

    public function setNom($Nom){
        $this->Nom = $Nom;
        return $Nom;
    }

}