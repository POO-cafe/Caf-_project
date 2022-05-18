<?php

require_once 'Database.php';
require_once __DIR__ . '../../Entity/Coffe.php';

class CoffeRepository extends Database {

    public function selectAll ()
    {
        $query = $this->getDb()->query('SELECT * FROM cafes');
        $allCoffees = $query->fetchAll();

        foreach($allCoffees as $avis){

            $avisObject = new Coffe();
            $avisObject->setId($avis['id']);
            $avisObject->setNom($avis['nom']);
            $avisObject->setType($avis['setType']);
            $avisObject->setPays($avis['pays']);
            $avisObject->setPhotos($avis['photos']);
            $avisObject->setProfil_aromatique($avis['profil_aromatique']);

            
            $objects[] = $avisObject;

        }

        return $objects ?? [];
        
    }
}