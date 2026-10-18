<?php  

/*Auteur : Moumine fatima ezzhra
  Groupe : 2
  Date : 18/10/2026
  partie 3

*/

/*
  Expérience 1 : include vs require:
  avec include : Si le fichier n'existe pas PHP affiche un ereur Le script continue son exécution normalement.
  avec require : Si le fichier n'existe pas, PHP affiche une fatal erorr. 
  Le script s'arrête immédiatement, et la suite du code ne s'execute pas.
 */
/*
 Expérience 2 : include vs include_once:
 avec include (deux fois) : Le contenu du fichier  s'affiche deux fois.
 avec include_once (deux fois) : PHP vérifie si le fichier a déjà été inclus. 
 
 */
require_once 'config.php';
require_once 'includes/entete_inc.php';
require_once 'includes/menu_inc.php';


require_once 'config.php'; 
function mention($note)
{
    if($note >= 16)
        return "Très Bien";
    elseif($note >= 14)
        return "Bien";
    elseif($note >= 12)
        return "Assez Bien";
    elseif($note >= SEUIL)
        return "Passable";
    else
        return "Ajourné";
}

echo"<h1>Partie 3 : Tableaux</h1>";
echo"<h2>Exercice 3.1 : Création</h2>";
$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];
echo"<h4>affichage avec le forech</h4>";
$modules=["programmation web2","probabilite","python"];
foreach($modules as $module)
  echo"$module <br>";
echo"<h4>en accédant aux éléments par leur indice.</h4>";
echo $modules[0]."<br>";
echo $modules[1]."<br>";
echo $modules[2]."<br>";

echo"<h2>Exercice 3.2 : Affichage HTML</h2>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>Note</th>";
echo "<th>Mention</th>";
echo "</tr>";

foreach ($notes as $nom => $note) {
    if ($note < SEUIL) {
        echo "<tr style='color:red'>";
    } else {
        echo "<tr>";
    }
    echo "<td>$nom</td>";
    echo "<td>$note</td>";
    echo "<td>" . mention($note) . "</td>";
    echo "</tr>";
}
echo "</table>";

echo"<h2>Exercice 3.3 : Statistiques</h2>";
$somme = 0;
$max = reset($notes);
$min = reset($notes);

foreach($notes as $note){
    $somme+=$note;
    if($note>$max)
      $max = $note;

    if($note < $min){
        $min = $note;
    }
}
$moyenne = $somme / count($notes);

echo "La somme est : ".$somme."<br>";
echo "La moyenne est : ".$moyenne."<br>";
echo "La note maximale est : ".$max."<br>";
echo "La note minimale est : ".$min."<br>";

echo"<h4>Vérification résultats avec `array_sum`, `count`, `max` et `min`.</h4>";
echo "La somme avec array_sum() est : " .array_sum($notes)."<br>";
echo "La note maximale avec max() est : ".max($notes)."<br>";
echo "La note minimale avec min() est : ".min($notes)."<br>";


echo"<h2>Exercice 3.4 : Tri</h2>";
function afficher($tab)
{
    foreach($tab as $nom => $note){
        echo $nom . " : " . $note . "<br>";
    }
    
}
echo "<h3>Tri par noms croissants (ksort)</h3>";
$tri = $notes;
ksort($tri);
afficher($tri);

echo "<h3>Tri par noms décroissants (krsort)</h3>";
$tri = $notes;
krsort($tri);
afficher($tri);


echo "<h3>Tri par notes croissantes (asort)</h3>";
$tri = $notes;
asort($tri);
afficher($tri);

echo "<h3>Tri par notes décroissantes (arsort)</h3>";
$tri = $notes;
arsort($tri);
afficher($tri);

echo"<h2>Exercice 3.5 : Opérateurs de tableaux</h2>";
$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];
// echo $a + $b;
echo $a == $b;
echo $a === $b;

require_once 'includes/pied_inc.php';
?>