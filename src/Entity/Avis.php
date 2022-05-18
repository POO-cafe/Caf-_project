<?php
/**
 * Les espaces de nom permettent de différencier des classes PHP portant le même nom
 */
namespace Entity;

/**
 * Cette classe représente l'architecture de la table SQL "avis"
 */
class Avis {

    private int $id;
    private string $avis;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
        /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of avis
     */ 
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * Set the value of avis
     *
     * @return  self
     */ 
    public function setAvis(string $avis)
    {
        $this->avis = $avis;

        return $this;
    }
}

?>