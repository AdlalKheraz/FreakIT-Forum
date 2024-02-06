<?php

// Fonction pour rediriger les utilisateurs non connectés vers la page de connexion
function usersOnly($redirect = '/index.php')
{
    // Vérifie si l'ID de session est vide (utilisateur non connecté)
    if (empty($_SESSION['id'])) {
        // Définit un message d'erreur
        $_SESSION['message'] = 'You need to login first';
        $_SESSION['type'] = 'error';
        // Redirige vers la page de connexion spécifiée
        header('location: ' . BASE_URL . $redirect);
        exit();
    }
}
// Fonction pour rediriger les utilisateurs non administrateurs
function adminOnly($redirect = '/index.php')
{
    // Vérifie si l'ID de session ou le statut administrateur est vide
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])) {
        // Définit un message d'erreur
        $_SESSION['message'] = 'You are not authorized';
        $_SESSION['type'] = 'error';
        // Redirige vers la page spécifiée
        header('location: ' . BASE_URL . $redirect);
        exit();
    }
}

// Fonction pour rediriger les utilisateurs connectés vers une autre page (pour les invités seulement)
function guestsOnly($redirect = '/index.php')
{
    // Vérifie si l'ID de session est défini (utilisateur connecté)
    if (isset($_SESSION['id'])) {
        // Redirige vers la page spécifiée
        header('location: ' . BASE_URL . $redirect);
        exit();
    }
}
