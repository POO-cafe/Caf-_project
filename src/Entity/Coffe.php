<?php

class Coffe{
    `id` int(11) NOT NULL,
  `nom` varchar(55) NOT NULL,
  `type` varchar(30) NOT NULL,
  `profil_aromatique` varchar(150) NOT NULL,
  `pays` varchar(150) NOT NULL,
  `prix` int(11) NOT NULL,
  `photos` text NOT NULL

  private int $id;
  private string $nom;
  private string $type;
  private string $pays;
  private string $photos;
 private string $profil_aromatique;




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
   * Get the value of nom
   */ 
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * Set the value of nom
   *
   * @return  self
   */ 
  public function setNom($nom)
  {
    $this->nom = $nom;

    return $this;
  }

  /**
   * Get the value of type
   */ 
  public function getType()
  {
    return $this->type;
  }

  /**
   * Set the value of type
   *
   * @return  self
   */ 
  public function setType($type)
  {
    $this->type = $type;

    return $this;
  }

  /**
   * Get the value of pays
   */ 
  public function getPays()
  {
    return $this->pays;
  }

  /**
   * Set the value of pays
   *
   * @return  self
   */ 
  public function setPays($pays)
  {
    $this->pays = $pays;

    return $this;
  }

  /**
   * Get the value of photos
   */ 
  public function getPhotos()
  {
    return $this->photos;
  }

  /**
   * Set the value of photos
   *
   * @return  self
   */ 
  public function setPhotos($photos)
  {
    $this->photos = $photos;

    return $this;
  }

 /**
  * Get the value of profil_aromatique
  */ 
 public function getProfil_aromatique()
 {
  return $this->profil_aromatique;
 }

 /**
  * Set the value of profil_aromatique
  *
  * @return  self
  */ 
 public function setProfil_aromatique($profil_aromatique)
 {
  $this->profil_aromatique = $profil_aromatique;

  return $this;
 }
}