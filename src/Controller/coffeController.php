<?php

require_once __DIR__.'../../Repository/CoffeRepository.php';
require_once __DIR__.'../../Entity/coffe.php';

class CoffeController {

    public function selectType() {

        $coffeRepository = new CoffeRepository();
        $listAllCoffe = $coffeRepository->selectAll();
       require_once __DIR__.'../../../templates/index.php';
   
    }

    public function selectAllRobusta() {
        
        $coffeRepository = new CoffeRepository();
        $listAllRobusta = $coffeRepository->selectAll();
       require_once __DIR__.'../../../templates/robusta.php';
        
    }

    public function editRobusta() {
        
        $coffeRepository = new CoffeRepository();
        $robusta = $coffeRepository->edit($_GET['id']);

        if (!empty($_POST)) {
            $robusta->setContent(htmlspecialchars(strip_tags($_POST['cafes'])));
           //Transmet  cet objet à une methode du repository pour mise à jour
           $success = $coffeRepository->editRobusta($robusta);
       }
        // Redirige l'utilisateur vers la route "/liste"
       // header('Location: /liste?edit='. $update);
       require_once __DIR__.'../../../templates/robusta.php';
   }


    public function deleteRobusta() {
   
        $coffeRepository = new CoffeRepository();
        $success = $coffeRepository->remove($_GET['id']);
        
         // Redirige l'utilisateur vers la route "/liste"
        header('Location: /liste?delete='. $success);
    }



    public function selectAllArabica() {
   
        $coffeRepository = new CoffeRepository();
        $listAllArabica = $coffeRepository->selectAll();
       require_once __DIR__.'../../../templates/arabica.php';
    }

    public function editArabica() {
   
        $coffeRepository = new CoffeRepository();
        $arabica = $coffeRepository->edit($_GET['id']);

        if (!empty($_POST)) {
            $arabica->setContent(htmlspecialchars(strip_tags($_POST['cafes'])));
           //Transmet  cet objet à une methode du repository pour mise à jour
           $success = $coffeRepository->editArabica($arabica);
       }
        // Redirige l'utilisateur vers la route "/liste"
       // header('Location: /liste?edit='. $update);
       require_once __DIR__.'../../../templates/robusta.php';
    }


    public function deleteArabica() {
   
        $coffeRepository = new CoffeRepository();
        $success = $coffeRepository->remove($_GET['id']);
        
         // Redirige l'utilisateur vers la route "/liste"
        header('Location: /arabica?delete='. $success);
    }

    
}

    
