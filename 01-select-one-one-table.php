<?php
require_once './inc/config.inc.php';
require_once './inc/class/personne.class.php';

// la table personne devient une classe Entity Personne
$personne = Model::factory('Personne')->find_one(1); // ici 1 c l ID

//var_dump($personne);
?>
id :<?=$personne->id ?><br>
nom :<?=$personne->nom ?><br>
prenom :<?=$personne->prenom ?><br>