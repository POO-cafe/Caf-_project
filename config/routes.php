<?php

require_once '../src/Controller/AvisController.php';
require_once '../src/Controller/ErrorController.php';
/**
 * Fichier de configuration des routes
 */

switch($uri) {
    // Accueil
    case '/':
        $controller = new AvisController();

        //Charge la méthode correspondant à la vue souhaitée
        $controller->insert();
        break;

    case '/contact':
        $controller = new AvisController();
        $controller->contact();
        break;
        
    case '/list':
        $controller = new AvisController();
        $controller->list();
        break;

    case '/delete/avis':
        $controller = new AvisController();
        $controller->delete();
        break;
    
    case '/editer/avis':
        $controller = new AvisController();
        $controller->editer();
        break;
    


    default:
        $controller = new ErrorController();
        $controller->notFound();
    
}