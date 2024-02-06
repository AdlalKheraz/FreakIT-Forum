<?php

// Fonction de validation des données de publication
function validatePost($post)
{
    // Initialise un tableau d'erreurs
    $errors = array();

    // Vérifie si le titre est vide
    if (empty($post['title'])) {
        array_push($errors, 'Title is required');
    }

    // Vérifie si le corps (contenu) est vide
    if (empty($post['body'])) {
        array_push($errors, 'Body is required');
    }

    // Vérifie si l'ID du sujet est vide
    if (empty($post['topic_id'])) {
        array_push($errors, 'Please select a topic');
    }

    // Vérifie si un article avec le même titre existe déjà
    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        // Si l'article existe déjà et l'action est une mise à jour
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Post with that title already exists');
        }

        // Si l'article existe déjà et l'action est une création
        if (isset($post['add-post'])) {
            array_push($errors, 'Post with that title already exists');
        }
    }

    // Retourne le tableau d'erreurs
    return $errors;
}
