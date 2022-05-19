<?php

require_once '../src/Controller/CoffeController.php';
//require_once '../src/Controller/ErreurContollerController.php';


switch ($uri) {
        //Accueil
    case '/':
        $controller = new CoffeController();
        //Charge la methode correspondant a la vue souhaitée
        $controller->selectType();
        break;

    // case '/robusta':
    //     $controller = new CoffeController();
        //Charge la methode corres^pondant a la vue souhaitée
        //Selectionne tous les caffès qui ont pour type Robusta
        // $controller->selectAllRobusta();
        // break;

    // case '/admin/robusta/edit':
    //     $controller = new CoffeController();
        //Charge la methode corres^pondant a la vue souhaitée
        //Selectionne tous les caffès qui ont pour type Robusta
    //     $controller->editRobusta();
    //     break;
    // case '/admin/robusta/delete':
        // $controller = new CoffeController();
        //Charge la methode corres^pondant a la vue souhaitée
        //Selectionne tous les caffès qui ont pour type Robusta
        // $controller->deleteRobusta();
        // break;



    // case '/arabica':
    //     $controller = new CoffeController();
        //Charge la methode corres^pondant a la vue souhaitée
        //Selectionne tous les caffès qui ont pour type arabica
    //     $controller->selectAllarabica();
    //     break;

    // case '/admin/arabica/edit':
    //     $controller = new CoffeController();
        //Charge la methode corres^pondant a la vue souhaitée
        //Selectionne tous les caffès qui ont pour type arabica
    //     $controller->editArabica();
    //     break;
    // case '/admin/arabica/delete':
    //     $controller = new CoffeController();
        //Charge la methode corres^pondant a la vue souhaitée
        //Selectionne tous les caffès qui ont pour type arabica
//         $controller->deleteArabica();
//         break;

//     default:
//         $controller = new ErreurController();
//         $controller->erreur404();
}
