<?php

require_once __DIR__ . '../../Repository/CoffeRepository.php';
require_once __DIR__ . '../../Entity/coffe.php';


// Selectionne tous les cafés
class CoffeController
{

    public function selectType()
    {


        $coffeRepository = new CoffeRepository();
        $listAllCoffe = $coffeRepository->selectAll();
        require_once __DIR__ . '../../../templates/index.php';
    }

    // Insertion d'un café avec condition pour le type du café 'arabica ou robusta'
    public function add()
    {
        

        if (!empty($_POST)) {

            $uploadService = new UploadService;
            $file = $uploadService->upload($_FILES['img']['name']);
            $entity = new Coffe();


            $entity->setNom(htmlspecialchars(strip_tags($_POST['nom'])));
            $entity->setType(htmlspecialchars(strip_tags($_POST['type'])));
            $entity->setPays(htmlspecialchars(strip_tags($_POST['pays'])));
            $entity->setPhotos($file);
            $entity->setPrix(htmlspecialchars(strip_tags($_POST['prix'])));
            $entity->setProfil_aromatique(htmlspecialchars(strip_tags($_POST['profil_aromatique'])));

            // Verifier que le champs soit vide ou pas sinon envoyer les données
            if ($_POST['type'] === "arabica" || $_POST['type'] === "robusta") {

               
                // Insertion dans la BDD
                $coffeRepository = new CoffeRepository();
                $success = $coffeRepository->add($entity);

                
                
                
            }
            
        }
        
        require_once __DIR__ . '../../../templates/forms.php';
    }

    //---------------------------------CAFES ROBUSTA----------------------------------------------------

    //Selectionne uniquement les cafés robusta
    public function selectAllRobusta()
    
    {
        $coffeRepository = new CoffeRepository();
        $listAllRobusta = $coffeRepository->selectAllRobusta();
        require_once __DIR__ . '../../../templates/robusta.php';
    }
    public function selectAllArabica()
    
    {
        $coffeRepository = new CoffeRepository();

        $listAllArabica = $coffeRepository->selectAllArabica();
        
        require_once __DIR__ . '../../../templates/arabica.php'; 
    }


    public function edit()
    {
        $coffeRepository = new CoffeRepository();
        $id = $_GET["id"];

        if (!empty($_POST)) {


            $entity = new Coffe();

            $entity->setNom(htmlspecialchars(strip_tags($_POST['nom'])));
            $entity->setType(htmlspecialchars(strip_tags(strtolower($_POST['type']))));
            $entity->setPays(htmlspecialchars(strip_tags($_POST['pays'])));
            $entity->setPhotos($_FILES['img']['name']);
            $entity->setPrix(htmlspecialchars(strip_tags(strtolower($_POST['prix']))));
            $entity->setProfil_aromatique(htmlspecialchars(strip_tags(strtolower($_POST['profil_aromatique']))));


            // Insertion dans la BDD


            $success = $coffeRepository->update($entity, $id);


            // Verifier que le champs soit vide ou pas sinon envoyer les données

        }
            $coffee= $coffeRepository->selectId($id);


        require_once __DIR__.'../../../templates/edit.php';
    }

    //Selectionne d'un coffee
    public function selectId(){

        $coffeRepository = new CoffeRepository();
        $id = $_GET["id"];
        $coffeeObject= $coffeRepository->selectId($id);
        

        require_once __DIR__.'../../../templates/oneCoffee.php';
    }
    public function delete() {

        $coffeRepository = new CoffeRepository();
        $deleteObject = $coffeRepository->remove($_GET['id']);
        
        //Redirige l'utilisateur vers la route "/liste"
       header('Location: /');
    }



}
