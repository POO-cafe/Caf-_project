<?php

/**
 * Elle permet de gérer la connexion PDO (Php Data Object)
 */

abstract class DataBase {

    //Où se situe la bas de donnée ? 
    private const DB_HOST = 'localhost';

    // Nom utilisateur
    private const DB_USER = 'root';

    // Mot de passe
    private const DB_PASS = '';

    // Nom de la base de données
    private const DB_NAME = 'cafes';

    /**
     * Singleton
     */
    private $_instance = null;

    /**
     * Permet de se connecter à la base de donnée
     */
    protected function getDb()
    {
        try {
            /**
             * Design pattern (Patron de conception)
             * Singleton
             */
            if ($this->_instance === null) {
                $this->_instance = new PDO(
                'mysql:host='. self::DB_HOST .';dbname='. self::DB_NAME, 
                self::DB_USER, 
                self::DB_PASS,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Gestion des erreurs SQL
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // Gestion du jeu de caractères
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Retour des résultats (tableau associatif)
                    ]
                );
            }
           
        }
        catch(Exception $exception) {
            die("Erreur sur la BDD : {$exception->getMessage()}");
        }

        //Retourne l'objet PDO
        return $this->_instance;
    }


}