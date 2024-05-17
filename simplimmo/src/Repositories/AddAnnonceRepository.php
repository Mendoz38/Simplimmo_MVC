<?php

class AddAnnonceRepository extends Database {

    public function addAnnonce($data) {
        $currentDateTime = date('Y-m-d H:i:s');
        try {
            $stmt = $this->getDb()->prepare("INSERT INTO annonces (title, price, surface, date_crea) 
                                         VALUES (:title, :price, :surface, :date_crea)");

            $stmt->bindParam(':title', $data['title']);
            $stmt->bindParam(':price', $data['price'], PDO::PARAM_INT);
            $stmt->bindParam(':surface', $data['surface']);
            $stmt->bindParam(':date_crea',$currentDateTime);
            /*  Continuer */

            $stmt->execute();
            echo "L'annonce a été ajoutée avec succès<br>";
            return true;
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout de l'annonce : " . $e->getMessage() . "<br>";
            return false;
        }
    }
}