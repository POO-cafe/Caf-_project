<?php


require_once '../src/Controller/CoffeController.php';
require_once '../src/Controller/ErreurController.php';


switch ($uri) {
        //Accueil
    case '/':
        $controller = new CoffeController();
        //Charge la methode correspondant a la vue souhaitée
        $controller->selectType();
        break;

    case '/robusta':
        $controller = new CoffeController();
        //Charge la methode corres^pondant a la vue souhaitée
        //Selectionne tous les caffès qui ont pour type Robusta
        $controller->selectAllRobusta();
        break;
    case '/arabica':
        $controller = new CoffeController();
        //Charge la methode corres^pondant a la vue souhaitée
        //Selectionne tous les caffès qui ont pour type arabica
        $controller->selectAllArabica();
        break;

    case '/add':
        $controller = new CoffeController();
        //Charge la methode corres^pondant a la vue souhaitée
        //Selectionne tous les caffès qui ont pour type arabica
        $controller->add();
        break;
    case '/edit':
        $controller = new CoffeController();
        //Charge la methode corres^pondant a la vue souhaitée
        //Selectionne tous les caffès qui ont pour type arabica
        $controller->edit();
        break;
    case '/delete':
        $controller = new CoffeController();
        //Charge la methode corres^pondant a la vue souhaitée
        //Selectionne tous les caffès qui ont pour type arabica
        $controller->delete();
        break;
   

    default:
        $controller = new ErreurController();
        $controller->erreur404();
}
