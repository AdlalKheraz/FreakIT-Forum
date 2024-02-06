<?php

// Fonction de validation des données d'utilisateur lors de l'inscription ou de la mise à jour
function validateUser($user)
{
    // Initialise un tableau d'erreurs
    $errors = array();

    // Vérifie si le nom d'utilisateur est vide
    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    // Vérifie si l'email est vide
    if (empty($user['email'])) {
        array_push($errors, 'Email is required');
    }

    // Vérifie si le mot de passe est vide
    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    // Vérifie si la confirmation du mot de passe correspond au mot de passe
    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Password do not match');
    }

    // Vérifie si l'email de l'utilisateur existe déjà dans la base de données
    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        // Si l'utilisateur existe déjà et l'action est une mise à jour
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');
        }

        // Si l'utilisateur existe déjà et l'action est une création d'administrateur
        if (isset($user['create-admin'])) {
            array_push($errors, 'Email already exists');
        }
    }

    // Retourne le tableau d'erreurs
    return $errors;
}

// Fonction de validation des données d'utilisateur lors de la connexion
function validateLogin($user)
{
    // Initialise un tableau d'erreurs
    $errors = array();

    // Vérifie si le nom d'utilisateur est vide
    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    // Vérifie si le mot de passe est vide
    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    // Retourne le tableau d'erreurs
    return $errors;
}
