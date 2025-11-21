<?php
include 'data.inc.php';

// Ajout IMC
for ($i = 0; $i < count($data); $i++) {
    $data[$i]["IMC"]=round($data[$i]["Poids"]/(($data[$i]["Taille"]/100)*($data[$i]["Taille"]/100)),2);
}

// Affichage
echo "<table>";
echo "<tr>"; // Ligne des clés
foreach ($data[0] as $clef => $valeur) {
    echo "<th>$clef</th>\n";  // Affiche chaque clé dans l'en-tête
}
echo "</tr>";
for ($i = 0 ; $i < count($data) ; $i++) {
    if ($data[$i]["IMC"] >= 25) {
        echo "<tr style='background-color: orange;'>";
    } else {
        echo "<tr>";
    }
	foreach ($data[$i] as $clef => $valeur) {
		echo "<td>$valeur</td>\n";
    }
    echo "</tr>";
}
echo "</table>";
?>