<?php

class AddAnnonceRepository extends Database {

    public function addAnnonce($data) {
        $currentDateTime = date('Y-m-d H:i:s');

        try {
            $stmt = $this->getDb()->prepare("INSERT INTO annonces (title, price, adress, city, cp,surface, rooms, baths,  description, garage, type,   date_crea) 
                                         VALUES (:title, :price, :adress, :city, :cp, :surface, :rooms, :baths, :description, :garage, :type, :date_crea)");

            $stmt->bindParam(':title', $data['title']);
            $stmt->bindParam(':price', $data['price'], PDO::PARAM_INT);
            $stmt->bindParam(':adress', $data['adress']);
            $stmt->bindParam(':city', $data['city']);
            $stmt->bindParam(':cp', $data['cp'], PDO::PARAM_INT);
            $stmt->bindParam(':surface', $data['surface']);
            $stmt->bindParam(':rooms', $data['rooms'], PDO::PARAM_INT);
            $stmt->bindParam(':baths', $data['baths'], PDO::PARAM_INT);
            $stmt->bindParam(':description', $data['description']);
            $stmt->bindParam(':garage', $data['garage']);
            $stmt->bindParam(':type', $data['type']);
            $stmt->bindParam(':date_crea',$currentDateTime);
            /*  Continuer */

            $stmt->execute();

            $lastInsertId = $this->getDb()->lastInsertId();

            if ($data['type'] == 'Maison') {
                $stmtHouse = $this->getDb()->prepare("INSERT INTO house (id_annonce, swimmingpool, level,  garden) 
                                                      VALUES (:id_annonce, :swimmingpool, :level, :garden)");
        
                $stmtHouse->bindParam(':id_annonce', $lastInsertId);
                $stmtHouse->bindParam(':swimmingpool', $data['swimmingpool']);
                $stmtHouse->bindParam(':garden', $data['garden']);
                $stmtHouse->bindParam(':level', $data['level']);
                $stmtHouse->execute();
            } elseif ($data['type'] == 'Appartement') {
                $stmtAppartment = $this->getDb()->prepare("INSERT INTO appartment (id_annonce, parking, terrasse, elevator, box, level) 
                                                           VALUES (:id_annonce, :parking, :terrasse, :elevator, :box, :level)");
        
                $stmtAppartment->bindParam(':id_annonce', $lastInsertId);
                $stmtAppartment->bindParam(':parking', $data['parking']);
                $stmtAppartment->bindParam(':terrasse', $data['terrasse']);
                $stmtAppartment->bindParam(':elevator', $data['elevator']);
                $stmtAppartment->bindParam(':box', $data['box']);
                $stmtAppartment->bindParam(':level', $data['level']);
                $stmtAppartment->execute();
            }
        

            echo "L'annonce " . $lastInsertId . " a été ajoutée avec succès<br>";
            return true;
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout de l'annonce : " . $e->getMessage() . "<br>";
            return false;
        }
    }
}