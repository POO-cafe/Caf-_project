<?php

require_once __DIR__.'../../Repository/CoffeRepository.php';
require_once __DIR__.'../../Entity/coffe.php';


// Selectionne tous les cafés
class CoffeController {

    public function selectType() {

            
            $coffeRepository = new CoffeRepository();
            $listAllCoffe = $coffeRepository->selectAll();
            require_once __DIR__.'../../../templates/index.php';
    
    }

// Insertion d'un café avec condition pour le type du café 'arabica ou robusta'
    public function add() {
        
        
            if (!empty($_POST)) {


            $entity = new Coffe();
            
            $entity->setNom(htmlspecialchars(strip_tags($_POST['nom'])));
            $entity->setType(htmlspecialchars(strip_tags($_POST['type'])));
            $entity->setPays(htmlspecialchars(strip_tags($_POST['pays'])));
            $entity->setPhotos($_FILES['img']['name']);
            $entity->setPrix(htmlspecialchars(strip_tags($_POST['prix'])));
            $entity->setProfil_aromatique(htmlspecialchars(strip_tags($_POST['profil_aromatique'])));


            // Insertion dans la BDD
            $coffeRepository = new CoffeRepository();
            $success = $coffeRepository->add($entity);
            
                // Verifier que le champs soit vide ou pas sinon envoyer les données

              
            
        }

        require_once __DIR__.'../../../templates/forms.php';
    }

//---------------------------------CAFES ROBUSTA----------------------------------------------------
    
    //Selectionne uniquement les cafés robusta
    public function selectAllRobusta() {
        
        $coffeRepository = new CoffeRepository();
        $listAllRobusta = $coffeRepository->selectAllRobusta();
       require_once __DIR__.'../../../templates/robusta.php';
        
    }
    //Modification des produits robusta
    public function editRobusta() {
        
        $coffeRepository = new CoffeRepository();
        $robusta = $coffeRepository->edit($_GET['id']);

        $robusta->setNom(htmlspecialchars(strip_tags($_POST['nom'])));
        $robusta->setType(htmlspecialchars(strip_tags($_POST['type'])));
        $robusta->setPays(htmlspecialchars(strip_tags($_POST['pays'])));
        $robusta->setPhotos(htmlspecialchars(strip_tags($_POST['photos'])));
        $robusta->setPrix(htmlspecialchars(strip_tags($_POST['prix'])));
        $robusta->setProfil_aromatique($_POST['profil_aromatique']);

        if (!empty($_POST)) {
            $robusta->setNom(htmlspecialchars(strip_tags($_POST['nom'])));
            $robusta->setType(htmlspecialchars(strip_tags($_POST['type'])));
            $robusta->setPays(htmlspecialchars(strip_tags($_POST['pays'])));
            $robusta->setPhotos(htmlspecialchars(strip_tags($_POST['photos'])));
            $robusta->setPrix(htmlspecialchars(strip_tags($_POST['prix'])));
            $robusta->setProfil_aromatique($_POST['profil_aromatique']);

            $success = $coffeRepository->add($robusta);
       }
        
       require_once __DIR__.'../../../templates/robusta.php';
   }

   //Suppression des café robusta
    public function deleteRobusta() {
     
         $coffeRepository = new CoffeRepository();
         $success = $coffeRepository->remove($_GET['id']);
        
        
         header('Location: /arabica?delete='. $success); 
    }
//---------------------------------CAFES ARABICA-----------------------------------------------------

    // Selectionne tous les cafés arabica
    public function selectAllArabica() {
   
        $coffeRepository = new CoffeRepository();
        $listAllArabica = $coffeRepository->selectAllArabica();
       
        require_once __DIR__.'../../../templates/arabica.php';
    }

    //Modification des produits arabica
    public function editArabica() {
   
        $coffeRepository = new CoffeRepository();
        $arabica = $coffeRepository->edit($_GET['id']);

        $arabica->setNom(htmlspecialchars(strip_tags($_POST['nom'])));
        $arabica->setType(htmlspecialchars(strip_tags($_POST['type'])));
        $arabica->setPays(htmlspecialchars(strip_tags($_POST['pays'])));
        $arabica->setPhotos(htmlspecialchars(strip_tags($_POST['photos'])));
        $arabica->setPrix(htmlspecialchars(strip_tags($_POST['prix'])));
        $arabica->setProfil_aromatique($_POST['profil_aromatique']);

        if (!empty($_POST)) {
            $arabica->setNom(htmlspecialchars(strip_tags($_POST['nom'])));
            $arabica->setType(htmlspecialchars(strip_tags($_POST['type'])));
            $arabica->setPays(htmlspecialchars(strip_tags($_POST['pays'])));
            $arabica->setPhotos(htmlspecialchars(strip_tags($_POST['photos'])));
            $arabica->setPrix(htmlspecialchars(strip_tags($_POST['prix'])));
            $arabica->setProfil_aromatique($_POST['profil_aromatique']);
           
            $success = $coffeRepository->add($arabica);
       }
        
       require_once __DIR__.'../../../templates/arabica.php';
    }

    //Suppression arabica
    public function deleteArabica() {
   
        $coffeRepository = new CoffeRepository();
         $success = $coffeRepository->remove($_GET['id']);
        
         // Redirige l'utilisateur vers la route "/liste"
        header('Location: /arabica?delete='. $success);
    }

    
}

    
