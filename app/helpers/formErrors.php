<?php if (count($errors) > 0) { ?>
    <!-- Vérifie s'il y a des erreurs à afficher -->
    <div class="msg error">
        <!-- Ouvre une balise div avec la classe CSS "msg error" pour styliser les messages d'erreur -->
        <?php foreach ($errors as $error) { ?>
            <!-- Boucle à travers chaque erreur dans le tableau $errors -->
            <li><?php echo $error; ?></li>
            <!-- Affiche chaque erreur à l'intérieur d'une balise li (élément de liste) -->
        <?php }; ?>
        <!-- Termine la boucle foreach -->
    </div>
    <!-- Ferme la balise div pour les messages d'erreur -->
<?php }; ?>
<!-- Termine la structure conditionnelle, cette partie du code est ignorée si le nombre d'erreurs est inférieur ou égal à zéro -->