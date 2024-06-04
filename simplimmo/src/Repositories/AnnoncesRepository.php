<?php
// 2eme MVCR appelé

class AnnoncesRepository extends Database
{
    public function countAll()
    {
        $countReq = $this->getDb()->query('SELECT COUNT(*) FROM annonces');
        $data = $countReq->fetchColumn();
        return $data;
    }

    // Sélectionner les 12 dernières annonces pour la page d'accueil
    public function getLast()
    {
        $req = $this->getDb()->query('SELECT * FROM annonces ORDER BY id ASC LIMIT 12 ');
        $data = $req->fetchAll(PDO::FETCH_CLASS, Annonces::class);
        return $data;
    }

    public function getAllAnnonces()
    {
        $sql = "
        SELECT *
        FROM annonces a
        LEFT JOIN house h ON a.id = h.id_annonce AND a.type = 'maison'
        LEFT JOIN appartment ap ON a.id = ap.id_annonce AND a.type = 'appartment'
        ";

        $stmt = $this->getDb()->query($sql);
        $data = $stmt->fetchAll(PDO::FETCH_CLASS, Annonces::class);
        //pr($data);
        
        return $data;
    }



    public function getAnnonceById($id)
    {
        $sql = "
        SELECT * 
        FROM annonces a
        LEFT JOIN house h ON a.id = h.id_annonce AND a.type = 'maison'
        LEFT JOIN appartment ap ON a.id = ap.id_annonce AND a.type = 'appartment'
        WHERE a.id = :id
        ";

        $stmt = $this->getDb()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_CLASS, Annonces::class);
        //pr($data);
        return $data;
    }
}
