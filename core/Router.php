<?php

/**
 * Permet de rediriger l'utilisateur slon une adresse personnalisée
 */

 class Router {

    /**
     * 
     */
    public function dispatch(string $uri = '/')
    {
        //var_dump("Mon URI est : $uri");

        /**
         * On enregistre la position du point d'interrogation si celui-ci existe
         */
        $position = strpos($uri, '?');

        //Si position = false alors on nettoie l'URI
        if ($position) {
            //Ex: /mon/uri?=12
            //Le nettoyage rendra : /mon/uri
            $uri = substr($uri, 0, $position);
        }

        //var_dump($uri);

        //Si l'URI est différent d'un simple / 
        // / = page d'accueil
        if ($uri !== '/') {
            //Récupérer le dernier caractère de l'URI 

            $lastChar = substr($uri, -1, iconv_strlen($uri));

            //var_dump($lastChar);

            //Si le dernier caractère est un slash
            if ($lastChar === '/') {
                //Récupère à la chaine sans le dernier caractère
                $uri = substr($uri, 0, iconv_strlen($uri)-1);
                
                //var_dump($uri);
            }
        }

        // Chargement du fichier des configuration des routes
        require_once '../config/routes.php';
    }

}