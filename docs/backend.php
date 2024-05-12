<?php
header('Content-Type: application/json');
require_once 'config.php';
require_once 'Personnel.php';

// Instanciation de la classe Personnel avec la connexion à la base de données
$personnel = new Personnel($conn);

// Traitement des requêtes HTTP

// Si une requête POST est reçue
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Créer un nouvel employé
    if (isset($_POST['name']) && isset($_POST['age'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $result = $personnel->create($name, $age);
        echo json_encode(array('success' => $result));
    }
    // Mettre à jour un employé
    elseif (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['age'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $result = $personnel->update($id, $name, $age);
        echo json_encode(array('success' => $result));
    }
    // Supprimer un employé
    elseif (isset($_POST['deleteId'])) {
        $id = $_POST['deleteId'];
        $result = $personnel->delete($id);
        echo json_encode(array('success' => $result));
    }
}

// Si une requête GET est reçue
elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Récupérer tous les employés
    if (!isset($_GET['id'])) {
        $all_personnel = $personnel->getAll();
        echo json_encode($all_personnel);
    }
    // Récupérer les détails d'un employé spécifique
    else {
        $id = $_GET['id'];
        $employee = $personnel->getById($id);
        echo json_encode($employee);
    }
}
?>
