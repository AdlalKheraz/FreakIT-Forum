<?php
// Inclusion du fichier path.php qui contient des constantes utiles
include("path.php");

// Inclusion du fichier posts.php situé dans le répertoire des contrôleurs
include(ROOT_PATH . '/app/controllers/posts.php');

// Vérification de l'existence de la clé 'id' dans la superglobale $_GET
if (isset($_GET['id'])) {
  // Récupération de l'article correspondant à l'ID spécifié dans l'URL
  $post = selectOne('posts', ['id' => $_GET['id']]);
}

// Récupération de tous les sujets (topics) présents dans la base de données
$topics = selectAll('topics');

// Récupération de tous les articles publiés (published) présents dans la base de données
$posts = selectAll('posts', ['published' => 1]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Balises meta pour la configuration de la page -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Inclusion du fichier de styles personnalisé -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Titre de la page obtenu à partir du titre de l'article actuel -->
  <title><?php echo $post['title']; ?></title>
</head>

<body>
  <!-- Déclaration du conteneur racine pour le plugin Facebook -->
  <div id="fb-root"></div>

  <?php
  // Inclusion du fichier header.php situé dans le répertoire des includes
  include(ROOT_PATH . "/app/includes/header.php");
  ?>

  <!-- Conteneur principal de la page -->
  <div class="page-wrapper">

    <!-- Contenu principal -->
    <div class="content clearfix">

      <!-- Conteneur principal du contenu -->
      <div class="main-content-wrapper">
        <div class="main-content single">

          <!-- Titre de l'article actuel -->
          <h1 class="post-title"><?php echo $post['title']; ?></h1>

          <!-- Contenu de l'article actuel, décodé pour afficher le HTML correctement -->
          <div class="post-content">
            <?php echo html_entity_decode($post['body']); ?>
          </div>

        </div>
      </div>
      <!-- Fin du Conteneur principal du contenu -->

      <!-- Section des articles populaires -->
      <div class="section popular">
        <h2 class="section-title">Popular</h2>

        <?php foreach ($posts as $p) { ?>
          <!-- Affichage des articles populaires avec image, titre, et lien -->
          <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
            <a href="" class="title">
              <h4><?php echo $p['title'] ?></h4>
            </a>
          </div>
        <?php }; ?>
      </div>
      <!-- Fin de la Section des articles populaires -->

      <!-- Section des sujets (topics) -->
      <div class="section topics">
        <h2 class="section-title">Topics</h2>
        <ul>
          <?php foreach ($topics as $topic) : ?>
            <!-- Affichage des sujets avec lien vers la page correspondante -->
            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <!-- Fin de la Section des sujets (topics) -->

    </div>
    <!-- Fin du Contenu principal -->

  </div>
  <!-- Fin du Conteneur principal de la page -->

  <!-- Inclusion du fichier JavaScript pour les scripts -->
  <script src="assets/js/scripts.js"></script>

</body>

</html>