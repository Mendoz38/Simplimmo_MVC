<?php
// 2eme MVCR appelé
echo "2- Repository<br />";

class HomeRepository extends Database
{
    // Sélectionner les 12 dernières annonces
    public function getLast()
    {
        $req = $this->getDb()->query('SELECT * FROM annonces ORDER BY date_crea DESC LIMIT 12');
        $data = $req->fetchAll(PDO::FETCH_CLASS, Home::class);
        return $data;
    }
    
    public function countAll()
    {
        $countReq = $this->getDb()->query('SELECT COUNT(*) FROM annonces');
        $data = $countReq->fetchColumn();
        return $data;
    }

} 