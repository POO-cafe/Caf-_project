<?php
/**
 * Permet de rediriger un user selon une adresse personnalisé
 *
 */

 class Router{

    public function dispatch(string $uri = '/'){
        //var_dump("Mon uri : $uri");

        /**
         * on enregistre la position du pint d'interrogation si celui-ci existe
         */
        $position = strpos($uri,'?');
        // si position est egal a false, alors on nettoie l'uri
        if($position){

            $uri = substr($uri,0,$position);
         
        }
 
   /**
    * Si l'uri est differenter d'un simple slash
    * "/" = page d'accueil
    */
        if($uri !== '/'){
            // Recupere le dernier caractère de l'uri

            $lastChar= substr($uri,-1,iconv_strlen($uri));
            //Si le dernier caractere est un slash
            if($lastChar === "/"){

                $uri = substr($uri,0,iconv_strlen($uri)-1);

            }
        } 
        // chargement du fichier de configuration des routes

        require_once '../config/routes.php';

    }
 }


