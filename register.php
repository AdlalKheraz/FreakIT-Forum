<?php
// Inclusion du fichier path.php qui contient des constantes utiles
include("path.php");

// Inclusion du fichier users.php situé dans le répertoire des contrôleurs
include(ROOT_PATH . "/app/controllers/users.php");
// La fonction guestsOnly() vérifie si l'utilisateur est un invité (non connecté),
// sinon, elle redirige l'utilisateur vers une autre page
guestsOnly();
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

  <!-- Titre de la page -->
  <title>Register</title>
</head>

<body>

  <!-- Inclusion du fichier header.php situé dans le répertoire des includes -->
  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!-- Contenu de la page -->
  <div class="auth-content">

    <!-- Formulaire d'inscription -->
    <form action="register.php" method="post">
      <h2 class="form-title">Register</h2>

      <!-- Inclusion du fichier formErrors.php pour afficher les erreurs de formulaire -->
      <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

      <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
      </div>
      <div>
        <label>Password Confirmation</label>
        <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
      </div>
      <div>
        <button type="submit" name="register-btn" class="btn btn-big">Register</button>
      </div>
      <p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>
    </form>

  </div>


  <script src="assets/js/scripts.js"></script>

</body>

</html>