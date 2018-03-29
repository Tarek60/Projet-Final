<?php

/**
 * Classe permettant de se connecter à la base de données.
 */
class dataBase {
    /**
     * Déclaration des attributs de connexion à la base de données
     */
    private $login = '';
    private $pwd = '';
    private $db = '';
    private $host = '';

    /**
     * Déclaration de l'attribut pdo en protected pour qu'il n'y est que les enfants de la class database qui puissent
     * y accéder
     */
    protected $pdo;

    public function __construct() {
        $this->login = LOGIN;
        $this->pwd = PASSWORD;
        $this->db = DBNAME;
        $this->host = HOST;
    }
    /**
     * Déclaration de la méthode qui va permettre la connexion à la base de données.
     * On se sert de la classe PDO de PHP. Si il y a une erreur, on met un try catch pour l'attraper.
     */
    public function connectDB() {
        try {
            $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db . ';charset=utf8', $this->login, $this->pwd);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function __destruct() {
        $this->db = NULL;
    }

}
