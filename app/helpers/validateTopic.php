<?php

// Fonction de validation des données de sujet
function validateTopic($topic)
{
    // Initialise un tableau d'erreurs
    $errors = array();

    // Vérifie si le nom du sujet est vide
    if (empty($topic['name'])) {
        array_push($errors, 'Name is required');
    }

    // Vérifie si un sujet avec le même nom existe déjà
    $existingTopic = selectOne('topics', ['name' => $topic['name']]);
    if ($existingTopic) {
        // Si le sujet existe déjà et l'action est une mise à jour
        if (isset($topic['update-topic']) && $existingTopic['id'] != $topic['id']) {
            array_push($errors, 'Name already exists');
        }

        // Si le sujet existe déjà et l'action est une création
        if (isset($topic['add-topic'])) {
            array_push($errors, 'Name already exists');
        }
    }

    // Retourne le tableau d'erreurs
    return $errors;
}
