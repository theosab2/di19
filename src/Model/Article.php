<?php
namespace src\Model;

class Article extends Contenu implements \JsonSerializable {
    private $Auteur;
    private $DateAjout;
    private $ImageRepository;
    private $ImageFileName;

    public function firstXwords($nb){
        $phrase = $this->getDescription();
        $arrayWord = str_word_count($phrase,1);

        return implode(" ",array_slice($arrayWord,0,$nb));
    }


    public function SqlGetLast(\PDO $bdd){
        // requete de lecture des 5 derniers articles
        $requete = $bdd->prepare('SELECT * FROM articles ORDER BY Id DESC LIMIT 5');
        $requete->execute();
        $arrayArticle = $requete->fetchAll();

        $listArticle = [];
        foreach ($arrayArticle as $articleSQL){
            $article = new Article();
            $article->setId($articleSQL['Id']);
            $article->setTitre($articleSQL['Titre']);
            $article->setAuteur($articleSQL['Auteur']);
            $article->setDescription($articleSQL['Description']);
            $article->setDateAjout($articleSQL['DateAjout']);
            $article->setImageRepository($articleSQL['ImageRepository']);
            $article->setImageFileName($articleSQL['ImageFileName']);
            $article->setCategorie($articleSQL['Categorie']);

            $listArticle[] = $article;
        }
        return $listArticle;
    }

    public function SqlAdd(\PDO $bdd) {
        // Requete d'ajout
        try{
            $requete = $bdd->prepare('INSERT INTO articles (Titre, Description, DateAjout, Auteur, ImageRepository, ImageFileName, Categorie, Etat)
                VALUES(:Titre, :Description, :DateAjout, :Auteur, :ImageRepository, :ImageFileName, :Categorie, 1)');
            $requete->execute([
                "Titre" => $this->getTitre(),
                "Description" => $this->getDescription(),
                "DateAjout" => $this->getDateAjout(),
                "Auteur" => $this->getAuteur(),
                "ImageRepository" => $this->getImageRepository(),
                "ImageFileName" => $this->getImageFileName(),
                "Categorie" => $this->getCategorie(),
            ]);
            return array("result"=>true,"message"=>$bdd->lastInsertId());
        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }
    }

    public function SqlValider(\PDO $bdd) {
        try{
            $requete = $bdd->prepare('INSERT INTO articles (Etat) VALUES(2) where id = id.Article');
            $requete->execute();
            return array("result"=>true,"message"=>$bdd->lastInsertId());
        }catch (\Exception $e){
            return array("result"=>false,"message"=>$e->getMessage());
        }
    }

    public function SqlGetAll(\PDO $bdd){
        /// requete de lecture de tout les articles
            $requete = $bdd->prepare('SELECT 
                   articles.Id as \'Id\',
                   articles.Titre as \'Titre\',
                   articles.Description as \'Description\',
                   articles.DateAjout as \'DateAjout\',
                   articles.Auteur as \'Auteur\',
                   articles.ImageRepository as \'ImageRepository\',
                   articles.ImageFileName as \'ImageFileName\',
                   articles.Categorie as \'Categorie\',                                    
                   categories.Nom as \'NomC\'                                                    
                   FROM articles inner join categories on categories.Id = articles.Categorie where Etat = 2 
                   ORDER BY articles.Id');

            $requete->execute();
            $arrayArticle = $requete->fetchAll();

            $listArticle = [];
            foreach ($arrayArticle as $articleSQL){
                $categorie = new Categorie();
                $article = new Article();

                $article->setId($articleSQL['Id']);
                $article->setTitre($articleSQL['Titre']);
                $article->setAuteur($articleSQL['Auteur']);
                $article->setDescription($articleSQL['Description']);
                $article->setDateAjout($articleSQL['DateAjout']);
                $article->setImageRepository($articleSQL['ImageRepository']);
                $article->setImageFileName($articleSQL['ImageFileName']);
                $categorie->setNom($articleSQL['NomC']);
                $article->setCategorie($categorie);

                $listArticle[] = $article;
            }
            return $listArticle;
    }

    public function SqlValidator(\PDO $bdd){
        $requete = $bdd->prepare('SELECT * FROM articles WHERE Etat = 1');
        $requete->execute();
        $arrayArticle = $requete->fetchAll();

        $listArticle = [];
        foreach ($arrayArticle as $articleSQL){
            $article = new Article();
            $article->setId($articleSQL['Id']);
            $article->setTitre($articleSQL['Titre']);
            $article->setAuteur($articleSQL['Auteur']);
            $article->setDescription($articleSQL['Description']);
            $article->setDateAjout($articleSQL['DateAjout']);
            $article->setImageRepository($articleSQL['ImageRepository']);
            $article->setImageFileName($articleSQL['ImageFileName']);
            $listArticle[] = $article;
        }
        return $listArticle;
    }

    //Update l'etat d'un article a
    public function Sqlchange($bdd,$idArticle){
        $requete = $bdd->prepare('update articles set Etat = 2 where Id=:idArticle');
        $requete->execute([
            'idArticle' => $idArticle
        ]);
    }

    public function SqlGetCherche(\PDO $bdd,$MotCle){
        // requete de recherche par mot clé dans titre
        $requete = $bdd->prepare('SELECT * FROM articles where Titre LIKE :search');
        $requete->execute(
            ['search' => "%".$MotCle."%"]
        );
        $arrayArticle = $requete->fetchAll();

        $listArticle = [];
        foreach ($arrayArticle as $articleSQL){
            $article = new Article();
            $article->setId($articleSQL['Id']);
            $article->setTitre($articleSQL['Titre']);
            $article->setAuteur($articleSQL['Auteur']);
            $article->setDescription($articleSQL['Description']);
            $article->setDateAjout($articleSQL['DateAjout']);
            $article->setImageRepository($articleSQL['ImageRepository']);
            $article->setImageFileName($articleSQL['ImageFileName']);
            $article->setCategorie($articleSQL['Categorie']);

            $listArticle[] = $article;
        }
        return $listArticle;
    }

    public function SqlGetFiltreCategorie(\PDO $bdd,$IdCategorie){
        // requete de recherche par categorie
        //$requete = $bdd->prepare('SELECT * FROM articles where Categorie = :IdCategorie');
        $requete = $bdd->prepare('SELECT 
                   articles.Id as \'Id\',
                   articles.Titre as \'Titre\',
                   articles.Description as \'Description\',
                   articles.DateAjout as \'DateAjout\',
                   articles.Auteur as \'Auteur\',
                   articles.ImageRepository as \'ImageRepository\',
                   articles.ImageFileName as \'ImageFileName\',
                   articles.Categorie as \'Categorie\',                                    
                   categories.Nom as \'NomC\'                                                  
                   FROM articles inner join categories on categories.Id = articles.Categorie 
                   where Etat = 2 and Categorie = :IdCategorie
                   ORDER BY articles.Id');

        $requete->execute(
            ['IdCategorie' => $IdCategorie]
        );
        $arrayArticle = $requete->fetchAll();

        $listArticle = [];
        foreach ($arrayArticle as $articleSQL){
            $categorie = new Categorie();
            $article = new Article();

            $article->setId($articleSQL['Id']);
            $article->setTitre($articleSQL['Titre']);
            $article->setAuteur($articleSQL['Auteur']);
            $article->setDescription($articleSQL['Description']);
            $article->setDateAjout($articleSQL['DateAjout']);
            $article->setImageRepository($articleSQL['ImageRepository']);
            $article->setImageFileName($articleSQL['ImageFileName']);
            $categorie->setNom($articleSQL['NomC']);
            $article->setCategorie($categorie);

            $listArticle[] = $article;
        }
        return $listArticle;
    }

    public function SqlGet(\PDO $bdd,$idArticle){
        // requete de lecture d'un article
        $requete = $bdd->prepare('SELECT * FROM articles where Id = :idArticle');
        $requete->execute([
            'idArticle' => $idArticle
        ]);

        $datas =  $requete->fetch();

        $article = new Article();
        $article->setId($datas['Id']);
        $article->setTitre($datas['Titre']);
        $article->setAuteur($datas['Auteur']);
        $article->setDescription($datas['Description']);
        $article->setDateAjout($datas['DateAjout']);
        $article->setImageRepository($datas['ImageRepository']);
        $article->setImageFileName($datas['ImageFileName']);
        $article->setCategorie($datas['Categorie']);

        return $article;
    }

    public function SqlUpdate(\PDO $bdd){
        // requete de modification d'un article
        try{
            $requete = $bdd->prepare('UPDATE articles set 
                Titre=:Titre, 
                Description=:Description, 
                DateAjout=:DateAjout, 
                Auteur=:Auteur, 
                ImageRepository=:ImageRepository, 
                ImageFileName=:ImageFileName,
                Categorie=:Categorie
                WHERE id=:IDARTICLE');

            $requete->execute([
                'Titre' => $this->getTitre()
                ,'Description' => $this->getDescription()
                ,'DateAjout' => $this->getDateAjout()
                ,'Auteur' => $this->getAuteur()
                ,'ImageRepository' => $this->getImageRepository()
                ,'ImageFileName' => $this->getImageFileName()
                ,'IDARTICLE' => $this->getId()
                ,'Categorie' => $this->getCategorie()
            ]);
            return array("0", "[OK] Update");
        }catch (\Exception $e){
            return array("1", "[ERREUR] ".$e->getMessage());
        }
    }

    public function SqlDelete (\PDO $bdd,$idArticle){
        // requete de suppression d'un article
        try{
            $requete = $bdd->prepare('DELETE FROM articles where Id = :idArticle');
            $requete->execute([
                'idArticle' => $idArticle
            ]);
            return true;
        }catch (\Exception $e){
            return false;
        }
    }

    public function SqlTruncate (\PDO $bdd){
        // requete de suppression d'un article
        try{
            $requete = $bdd->prepare('TRUNCATE TABLE articles');
            $requete->execute();
            return true;
        }catch (\Exception $e){
            return false;
        }
    }

    public function jsonSerialize()
    {
        return [
            'Id' => $this->getId()
            ,'Titre' => $this->getTitre()
            ,'Description' => $this->getDescription()
            ,'DateAjout' => $this->getDateAjout()
            ,'ImageRepository' => $this->getImageRepository()
            ,'ImageFileName' => $this->getImageFileName()
            ,'Auteur' => $this->getAuteur()
            ,'Categorie' => $this->getCategorie()
        ];
    }


    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->Auteur;
    }

    /**
     * @param mixed $Auteur
     * @return Article
     */
    public function setAuteur($Auteur)
    {
        $this->Auteur = $Auteur;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {
        return $this->DateAjout;
    }

    /**
     * @param mixed $DateAjout
     * @return Article
     */
    public function setDateAjout($DateAjout)
    {
        $this->DateAjout = $DateAjout;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageRepository()
    {
        return $this->ImageRepository;
    }

    /**
     * @param mixed $ImageRepository
     * @return Article
     */
    public function setImageRepository($ImageRepository)
    {
        $this->ImageRepository = $ImageRepository;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageFileName()
    {
        return $this->ImageFileName;
    }

    /**
     * @param mixed $ImageFileName
     * @return Article
     */
    public function setImageFileName($ImageFileName)
    {
        $this->ImageFileName = $ImageFileName;
        return $this;
    }


}