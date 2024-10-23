<?php

// Définition d'un tableau associatif contenant les catégories de plats et leurs éléments
$menu = array(
    "Entrées :" => array("Pain", "Légumes", "Toast"), // Catégorie "Entrées" avec ses plats
    "Plats :" => array("Agneau", "Kebab", "Pizza"),  // Catégorie "Plats" avec ses plats
    "Desserts :" => array("Tiramisu", "Glace")    // Catégorie "Desserts" avec ses plats
);

// Affichage du début d'une liste désordonnée en HTML
echo "<ul>";  // Début de la liste désordonnée
foreach ($menu as $key => $value) {
    echo "<li>$key";  // Affichage de la catégorie (Entrées, Plats, Desserts)
    
    echo "<ul>";  // Sous-liste pour les plats
    foreach ($value as $value) {
        echo "<li>$value</li>";  // Affichage de chaque plat
    }
    echo "</ul>";  // Fin de la sous-liste

    echo "</li>";  // Fin de la catégorie
}
echo "</ul>";  // Fin de la liste désordonnée
