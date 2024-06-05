<?php

require_once __DIR__ . '/../Services/Response.php';

class DeleteController
{
    use Response;

    public function index($annonceId) {
        $annoncesRepository = new AnnoncesRepository($annonceId);
        
        // Appel à la méthode de suppression d'annonce dans le référentiel
        $success = $annoncesRepository->delAnnonce($annonceId);
    
        if ($success) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to delete announcement']);
        }
        exit;
        
    }
    
}