<?php
// Afficher un message de confirmation
echo "<h1>🚀 Test de mise à jour Azure Web App</h1>";
echo "<p>Si vous voyez cette page, votre déploiement fonctionne !</p>";

// Afficher l'heure actuelle pour vérifier la mise à jour en temps réel
date_default_timezone_set("UTC");
echo "<p>Heure actuelle (UTC) : <strong>" . date("Y-m-d H:i:s") . "</strong></p>";

// Afficher la version de PHP
echo "<h2>📌 Version de PHP :</h2>";
echo "<pre>";
print_r(phpinfo());
echo "</pre>";
?>

