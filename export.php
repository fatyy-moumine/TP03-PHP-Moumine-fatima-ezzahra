<?php
 /*Auteur: Fatima ezzahra Moumine
 group:2
 Exercice 5.4 : Sérialisation
date:10/18/2026
 */
$resultats = [
    "fatima" => ["info" => 16, "math" => 14, "moyenne" => 15],
    "hajar"  => ["info" => 12, "math" => 10, "moyenne" => 11],
    "ali"    => ["info" => 11, "math" => 9, "moyenne" => 15]
];

$json = json_encode($resultats, JSON_PRETTY_PRINT);
file_put_contents('data/notes.json', $json);

$json_lu = file_get_contents('data/notes.json');
$tableau_lu = json_decode($json_lu, true);

echo "<h3>Affichage des données lues depuis JSON :</h3>";
echo "<table border=1>";
echo "<tr><th>Nom</th><th>Info</th><th>Math</th><th>Moyenne</th></tr>";

foreach ($tableau_lu as $nom => $notes) {
    echo "<tr>";
    echo "<td>$nom</td>";
    echo "<td>{$notes['info']}</td>";
    echo "<td>{$notes['math']}</td>";
    echo "<td>{$notes['moyenne']}</td>";
    echo "</tr>";
}
echo "</table>";

echo "<h3>Format serialize() :</h3>";
echo  serialize($resultats) . "<br>";


?>