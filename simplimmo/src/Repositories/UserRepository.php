<?php

class UserRepository extends Database {

    public function checkEmailExists($mail)
    {
        try {
            $stmt = $this->getDb()->prepare("SELECT COUNT(*) FROM users WHERE mail = :mail");
            $stmt->bindParam(':mail', $mail);
            $stmt->execute();
            $count = $stmt->fetchColumn();

            return $count > 0; 
        } catch (PDOException $e) {
            return false;
        }
    }
    public function checkPassword($mail)
    {
        try {
            $stmt = $this->getDb()->prepare("SELECT password FROM users WHERE mail = :mail");
            $stmt->bindParam(':mail', $mail);
            $stmt->execute();
            $password = $stmt->fetchColumn();

            return $password; 
        } catch (PDOException $e) {
            return false;
        }
    }
/*
    public function comparePassword($password, ) {
        if ($storedPassword && password_verify($password, $storedPassword)) {
            $verify = true ;
            return $verify;
        }
    }
*/
}