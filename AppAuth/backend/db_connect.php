<?php
// Paramètres de connexion à la base de données
$servername = "localhost";  // L'hôte de la base de données (par défaut "localhost")
$username = "root";         // Le nom d'utilisateur de la base de données (souvent "root" en local)
$password = "";             // Le mot de passe pour l'utilisateur de la base de données
$dbname = "projetauth";     // Le nom de votre base de données

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données.";
}
?>
