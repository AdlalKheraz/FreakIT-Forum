<!-- En-tête de la page avec la barre de navigation -->
<header>
    <!-- Logo redirigeant vers la page d'accueil -->
    <a class="logo" href="<?php echo BASE_URL . '/index.php'; ?>">
        <h1 class="logo-text"><span>FreakIT</span>Forum</h1>
    </a>
    <!-- Icône de bascule du menu pour les appareils mobiles -->
    <i class="fa fa-bars menu-toggle"></i>
    <!-- Liste de navigation -->
    <ul class="nav">
        <!-- Vérifie si l'utilisateur est connecté -->
        <?php if (isset($_SESSION['username'])) {  ?>
            <!-- Affiche le nom d'utilisateur et un menu déroulant -->
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fak fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <!-- Sous-menu avec l'option de déconnexion -->
                <ul>
                    <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
                </ul>
            </li>
        <?php }; ?>
    </ul>
</header>