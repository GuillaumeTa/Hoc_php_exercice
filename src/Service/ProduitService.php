<?php

namespace App\Service;

class ProduitService {
    public function findAll() : array {
        require_once 'src/Db/functions.php';
        try {
            $pdo = getPdoInstance();
        } catch (PDOException $e) {
            echo 'Erreur lors de la connexion à la base de données';
            die;
        }
        
        $stmt = $pdo->query("SELECT * FROM produits");
        $res = $stmt->fetchAll();
        
        return $res;
    }
}


 