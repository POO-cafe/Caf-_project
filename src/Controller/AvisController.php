<?php
// Connexion à la DB

require_once __DIR__.'../../Repository/AvisRepository.php';
require_once __DIR__.'../../Entity/Avis.php';

class AvisController
{


    public function insert()
    {

        // Si le formulaire est envoyé, la superglobal $_POST est remplie des données du formulaire
        if (!empty($_POST)) {


            //Instancier l'entité Avis

            $entity = new Entity\Avis();
            $entity->setAvis(htmlspecialchars(strip_tags($_POST['avis'])));

            // Insertion en BDD
            $avisRepository = new AvisRepository();
            $success = $avisRepository->add($entity);
            
        }

        // La vue correspondante à ce controller
        require_once __DIR__.'../../../templates/index.php';
    }

    public function contact() {

        require_once __DIR__.'../../../templates/contact.php';
    }
    //Affiche tous les avis URL d'accès : http://avis.test/liste
    public function liste() {

        $avisRepository = new AvisRepository();
        $listAvis = $avisRepository->selectAll();
        //var_dump($listAvis);

        require_once __DIR__.'../../../templates/liste.php';

        }


        public function delete()
        {
            // var_dump($_GET['id']);
            // Appelle la méthode de suppression dans le repository en lui passant
            // l'ID de l'enregistrement à supprimer
            $avisRepository = new AvisRepository();
            $success = $avisRepository->remove($_GET['id']);

            //Redirige l'utilisateur vers la route "/liste"
            header('Location: /liste?delete='. $success);
            
        }
            // Permet d'édité un avis et modifier un avis
        public function edite() {

            $avisRepository = new AvisRepository();
            $avis = $avisRepository->selectOne($_GET['id']);

            // Si le formulaire est envoyer
            if (!empty($_POST)) {

                // Ecrase l'ancien  contenu de l'objet "Avis" par celui du formulaire

                $avis->setAvis(htmlspecialchars(strip_tags($_POST['avis'])));

                // Transmet cet objet à une méthode du repository pour mise à jour
                $success = $avisRepository->update($avis);

                // Redirige l'utilisateur vers le tableau
                header('Location: /liste?edit='.$success);

            }

            require_once __DIR__.'../../../templates/edite.php';
        }

}
