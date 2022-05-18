<?php
//connexion BDD
require_once 'Db.php';

require_once __DIR__. '../../Entity/Avis.php';

//Gère le CRUD surla table "avis"


class AvisRepository extends Db {
    // Insertion dans la table SQL "avis"

    public function add(Entity\Avis $avis) {

        $query = $this->getDb()->prepare('INSERT INTO avis (content) VALUES (:content)');
        $query->bindValue(':content', $avis->getAvis());

        return $query->execute();

    }
    // Séléctionne toutes les données de la table SQL "avis"
    public function selectAll() {

        $query = $this->getDb()->query('SELECT * FROM avis');
        $allAvis = $query->fetchAll();

         // Boucle sur les données reçues de la requête SQL
        foreach ($allAvis as $avis) {
            $avisObjet = new Entity\Avis();
            $avisObjet->setId($avis['id']);
            $avisObjet->setAvis($avis['content']);

            // Stock chaque objet avis dans un tableau
            $objets[] = $avisObjet;
        }
        //Si un tableau est vide on envoye un tableau vide
        return $objets ?? [];
    }
    /**
     * Supprime un avis
     */
    public function remove(int $id) {

        $query = $this->getDb()->prepare('DELETE FROM avis WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        
        return $query->execute();
    }
    /**
     * Selectionne un enregistrement
     */
    public function selectOne(int $id) {

        $query = $this->getDb()->prepare('SELECT * FROM avis WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();

        // Stocker le résultat dans une variable
        $avis = $query->fetch();

        // Si la variable "avis" est false, alors on créer un objet avec l'entité "avis"

        if ($avis) {
            $avisObjet = (new Entity\Avis())
                ->setId($avis['id'])
                ->setAvis($avis['content']);

        }
        // On retourne soit l'enregistrement sous forme d'objet ou "false"
        return $avisObjet ?? false;
    }
    /**
     * Met à jours la base de données
     */
    public function update(Entity\Avis $avis) {

        $query = $this->getDb()->prepare('UPDATE avis SET content = :content WHERE id = :id');
        $query->bindValue(':id', $avis->getId(), PDO::PARAM_INT);
        $query->bindValue(':content', $avis->getAvis());

        return $query->execute();
    }

}
?>