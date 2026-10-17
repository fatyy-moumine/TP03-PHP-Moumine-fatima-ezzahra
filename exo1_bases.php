<?php
echo"hello world";
//voici un commentaire sur une seul ligne//
#voici un commetaire
/*commentaire 1
commentaire 2
commentaire 3

*/

echo"<h2>Exercice 1.1 : Noms de variables</h2>";
echo"les noms valide:$x,$_x, $x-y, $Prix_HT, $état";
$X=2;
$_x4;
$x-y="34";
$Prix_HT=100;
$état="normal";
/*l'affichage */
echo 'la variable $x :'.$x;
echo 'la variable $_x :'.$_x;
echo 'la variable $x-y :'.$x-y;
echo 'la variable $Prix_HT :'.$Prix_HT;
echo 'la variable $état'.$état;

$a=10;
$A=2
echo 'la variable $a'.$a;
echo 'la variable $A'.$A;
/*php est sensible a la case */

echo"<h2>Exercice 1.2 : Constantes</h2>";
require'config.php';
echo"ETABLISSEMENT:".ETABLISSEMENT;
echo"note minimale:".NOTE_MIN;
echo"note maximale:".NOTE_MAX;
echo var_dump(define(;SEUIL));
echo var_dump(define('INCONNUE'));
/* quand on affichez une constante non définie */
/* la différence entre const et define()*/


echo"<h2>Exercice 1.3 : Calcul</h2>";
$prix_ht = 60;
$tva = 20;
$prix_TTC=$prix_ht*$tva;
echo"Le prix TTC du produit est de:".$prix_TTC;


echo"<h2>Exercice 1.4 : Types et conversions</h2>";
$test = 42
echo'la convertion de $test en string'.var
?>