<?php

/**
 * Classe permettant de se connecter à la base de données.
 */
class dataBase {

    /**
     * Déclaration de l'attribut pdo en protected pour qu'il n'y est que les enfants de la class database qui puissent
     * y accéder
     */
    protected $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';charset=utf8', LOGIN, PASSWORD);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function __destruct() {
        $this->db = NULL;
    }

}
