<?php

require_once 'Database.php';
require_once __DIR__ . '../../Entity/Coffe.php';

class CoffeRepository extends Database {

    public function selectAll ()
    {
        $query = $this->getDb()->query('SELECT * FROM cafes');
        $allCoffees = $query->fetchAll();

        foreach($allCoffees as $coffee){

            $avisObject = new Coffe();
            $avisObject->setId($coffee['id']);
            $avisObject->setNom($coffee['nom']);
            $avisObject->setType($coffee['type']);
            $avisObject->setPays($coffee['pays']);
            $avisObject->setPhotos($coffee['photos']);
            $avisObject->setProfil_aromatique($coffee['profil_aromatique']);

            
            $objects[] = $avisObject;

        }

        return $objects ?? [];
        
    }

    public function selectAllArabica ()
    {
        $query = $this->getDb()->query('SELECT * FROM cafes WHERE type = "arabica"');
        $allCoffees = $query->fetchAll();

        foreach($allCoffees as $coffee){

            $avisObject = new Coffe();
            $avisObject->setId($coffee['id']);
            $avisObject->setNom($coffee['nom']);
            $avisObject->setType($coffee['type']);
            $avisObject->setPays($coffee['pays']);
            $avisObject->setPhotos($coffee['photos']);
            $avisObject->setProfil_aromatique($coffee['profil_aromatique']);

            
            $objects[] = $avisObject;

        }

        return $objects ?? [];
        
    }
    public function selectAllRobusta ()
    {
        $query = $this->getDb()->query('SELECT * FROM cafes WHERE type = "robusta"');
        $allCoffees = $query->fetchAll();

        foreach($allCoffees as $coffee){

            $avisObject = new Coffe();
            $avisObject->setId($coffee['id']);
            $avisObject->setNom($coffee['nom']);
            $avisObject->setType($coffee['type']);
            $avisObject->setPays($coffee['pays']);
            $avisObject->setPhotos($coffee['photos']);
            $avisObject->setProfil_aromatique($coffee['profil_aromatique']);

            
            $objects[] = $avisObject;

        }

        return $objects ?? [];
        
    }
    public function add(Coffe $coffee)
    {
        $query = $this->getDb()->prepare('INSERT INTO cafes (nom, type, pays, photos, profil_aromatique) VALUES (:nom, :type, :pays, :photos, :profil_aromatique)');
        $query->bindValue(':nom', $coffee->getNom());
        $query->bindValue(':type',$coffee->getType());
        $query->bindValue(':pays',$coffee->getPays());
        $query->bindValue(':photos',$coffee->getPhotos());
        $query->bindValue('profil_aromatique',$coffee->getProfil_aromatique());

        return $query->execute();
    }

    public function remove(int $id)
    {
        
        $query = $this->getDb()->prepare('DELETE FROM cafes WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        return $query->execute();
    }

    public function edit(int $id)
    {
        
        $query = $this->getDb()->prepare('SELECT * FROM cafes WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
       
        $coffee = $query->fetch();

        if ($coffee) {
            $avisObject = (new Coffe())
            ->setId($coffee['id'])
            ->setNom($coffee['nom'])
            ->setType($coffee['type'])
            ->setPays($coffee['pays'])
            ->setPhotos($coffee['photos'])
            ->setProfil_aromatique($coffee['profil_aromatique']);
        }
        return $avisObject ?? false;
       
    }
    public function update(Coffe $coffee)
    {
        
        $query = $this->getDb()->prepare('UPDATE cafes SET nom = :nom, type = :type, pays = :pays, photos = :photos, profil_aromatique = :profil_aromatique WHERE id = :id');
        $query->bindValue(':id', $coffee->getId(), PDO::PARAM_INT);
        $query->bindValue(':nom', $coffee->getNom());
        $query->bindValue(':type',$coffee->getType());
        $query->bindValue(':pays',$coffee->getPays());
        $query->bindValue(':photos',$coffee->getPhotos());
        $query->bindValue('profil_aromatique',$coffee->getProfil_aromatique());
        return $query->execute();
    }
}
