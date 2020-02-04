<?php
namespace src\Model;

class Contenu {
    private $Id;
    private $Titre;
    private $Description;
    private $Nom;


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
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * @param mixed $Titre
     * @return Contenu
     */
    public function setTitre($Titre)
    {
        $this->Titre = $Titre;
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