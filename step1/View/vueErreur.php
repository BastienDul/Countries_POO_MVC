<?php 
// Définition du titre de la page
$titre = "Bienvenue sur le blogCulinaire";

// Démarrage de la temporisation de sortie
ob_start();
?>

<!-- Affichage du message d'erreur au centre de la page -->
<p class="text-center fs-1">Une erreur est survenue : <?=$msgErreur ?></p>

<?php
// Récupération du contenu mis en mémoire tampon et nettoyage de la mémoire tampon
$contenu = ob_get_clean();
?>
