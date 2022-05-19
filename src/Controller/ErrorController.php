<?php
/**
 * Erreur 404
 * Page non trouvée
 */
class ErrorController {

    public function notFound() {
   
        require_once __DIR__ .'../../../templates/error404.php';
    }
}


?>