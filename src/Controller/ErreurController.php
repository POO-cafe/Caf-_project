<?php
/**
 * Erreur 404
 * Page non trouvée
 */


class ErreurController{

    public function erreur404(){

        require_once __DIR__ . '../../../templates/404.php';
    }
}