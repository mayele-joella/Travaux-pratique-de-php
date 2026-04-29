<?php
require_once("../config/config.php");

$produits = json_decode(file_get_contents(FICHIER_PRODUITS), true) ?? [];

echo "<h1>Liste des produits</h1>";
echo "<table border='1'><tr><th>Code</th><th>Nom</th><th>Prix HT</th><th>Stock</th></tr>";

foreach ($produits as $p) {
    echo "<tr>
            <td>{$p['code_barre']}</td>
            <td>{$p['nom']}</td>
            <td>{$p['prix_unitaire_ht']}</td>
            <td>{$p['quantite_stock']}</td>
          </tr>";
}
echo "</table>";
?>
<a href='nouvelle-facture.php'>Créer une facture</a> | 
<a href='factures.php'>Voir les factures</a> | 
<a href='ajouter.php'>Ajouter un produit</a>
