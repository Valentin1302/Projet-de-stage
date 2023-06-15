<?php
// Paramètres de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnees = "interlignes";

// Créer une connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier si la connexion est établie
if ($connexion->connect_errno) {
    echo "Erreur de connexion à la base de données : " . $connexion->connect_error;
} else {
    echo "Connecté à la base de données.";
}

// Fermer la connexion
$connexion->close();
?>
