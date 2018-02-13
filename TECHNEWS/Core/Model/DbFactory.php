<?php
namespace Core\Model;

class DbFactory {
        public static function PdoFactory() {
            # Création d'une connexion PDO
            $pdo = new \PDO('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER, DBPASS);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
}