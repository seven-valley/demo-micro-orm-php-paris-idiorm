<?php
require_once './inc/config.inc.php';
require_once './inc/class/personne.class.php';

//$personne = ORM::for_table('personne')->create();
$personne = Model::factory('Personne')->create();

$personne->prenom = 'John';
$personne->nom = 'DOE';
$personne->save();
//var_dump($personne);

?>


id :<?=$personne->id ?><br>
nom :<?=$personne->nom ?><br>
prenom :<?=$personne->prenom ?><br>
<hr>
