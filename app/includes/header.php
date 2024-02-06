<header>
  <!-- Logo redirigeant vers la page d'accueil -->
  <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
    <h1 class="logo-text"><span>FreakIT</span>Forum</h1>
  </a>
  <!-- Icône de bascule du menu pour les appareils mobiles -->
  <i class="fa fa-bars menu-toggle"></i>
  <!-- Liste de navigation -->
  <ul class="nav">
    <!-- Liens de la navigation -->
    <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>

    <!-- pas d'utilité précise pour l'instant  -->
    <li><a href="#">About</a></li>
    <li><a href="https://www.amazon.fr/?&tag=hydraamazon05-21&ref=pd_sl_781ozcfkw9_e&adgrpid=154637622122&hvpone=&hvptwo=&hvadid=683560492550&hvpos=&hvnetw=g&hvrand=18211153455220991029&hvqmt=e&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9055745&hvtargid=kwd-10573980&hydadcr=">website</a></li>

    <!-- Vérifie si l'utilisateur est connecté -->
    <?php if (isset($_SESSION['id'])) { ?>
      <!-- Affiche le nom d'utilisateur avec un menu déroulant -->
      <li>
        <a href="#">
          <i class="fa fa-user"></i>
          <?php echo $_SESSION['username']; ?>
          <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
        <!-- Sous-menu avec des options en fonction du rôle de l'utilisateur -->
        <ul>
          <!-- Vérifie si l'utilisateur est un administrateur -->
          <?php if ($_SESSION['admin']) { ?>
            <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
          <?php } elseif (!$_SESSION['admin']) { ?>
            <li><a href="<?php echo BASE_URL . '/user/dashboardUser.php' ?>">Settings and posts</a></li>
          <?php } ?>
          <!-- Option de déconnexion -->
          <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
        </ul>
      </li>
    <?php } else { ?>
      <!-- Options d'inscription et de connexion si l'utilisateur n'est pas connecté -->
      <li><a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></li>
      <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
    <?php } ?>
  </ul>
</header>