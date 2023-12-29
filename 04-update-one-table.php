<?php
require_once './inc/config.inc.php';
require_once './inc/class/personne.class.php';

//$personne = ORM::for_table('personne')->create();
$personne = Model::factory('Personne')->find_one(5);
$personne->prenom = 'Jane';
$personne->save();
//var_dump($personne);

?>


id :<?=$personne->id ?><br>
nom :<?=$personne->nom ?><br>
prenom :<?=$personne->prenom ?><br>

<hr>
