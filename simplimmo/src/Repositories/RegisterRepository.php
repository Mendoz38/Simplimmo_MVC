<?php

class RegisterRepository extends Database
{

    public function checkEmailExists($mail)
    {
        try {
            $stmt = $this->getDb()->prepare("SELECT COUNT(*) FROM users WHERE mail = :mail");
            $stmt->bindParam(':mail', $mail);
            $stmt->execute();
            $count = $stmt->fetchColumn();

            return $count > 0; 
        } catch (PDOException $e) {
            echo "L'email existe déjà";
            return false;
        }
    }

    public function addUser($registerData) {
        try {
            $stmt = $this->getDb()->prepare("INSERT INTO users (name, surname, phone, mail, password, token, status, date_create, date_modif) 
                                         VALUES (:name, :surname, :phone, :mail, :password, :token, :status, :date_create, :date_modif)");

            $stmt->bindParam(':name', $registerData['name']);
            $stmt->bindParam(':surname', $registerData['surname']);
            $stmt->bindParam(':phone', $registerData['phone']);
            $stmt->bindParam(':mail', $registerData['mail']);
            $stmt->bindParam(':password', $registerData['password']);
            $stmt->bindParam(':token', $registerData['token']);
            $stmt->bindParam(':status', $registerData['status']);
            $stmt->bindParam(':date_create', $registerData['date_create']);
            $stmt->bindParam(':date_modif', $registerData['date_modif']);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            // A faire, gérer l'erreur d'insertion
            return false;
        }
    }

    public function countUser()
    {
        $countReq = $this->getDb()->query('SELECT COUNT(*) FROM users');
        $data = $countReq->fetchColumn();
        return $data;
    }

}