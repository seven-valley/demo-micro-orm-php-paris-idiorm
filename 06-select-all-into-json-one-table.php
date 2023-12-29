<?php
require_once './inc/config.inc.php';
require_once './inc/class/personne.class.php';

// la table personne devient une classe Entity Personne
$personnes = Model::factory('Personne')->find_many(); 

//var_dump($personne);
//echo json_encode($personnes);

// je reconstruit le tableau
$tab_personnes =[];
foreach ($personnes as $p):
// créer un objet vide
$personne =new stdClass();

$personne->id = $p->id;
$personne->nom = $p->nom;
$personne->prenom = $p->prenom;

$tableau []= $personne; // je stocke mon objet php dans le tableau
endforeach;    

// je converti le tab en tab JSON
$tab_json = json_encode($tableau);
?>

<?=$tab_json?>