<?php
require_once './inc/config.inc.php';
require_once './inc/class/personne.class.php';

//$personne = ORM::for_table('personne')->create();
$personne = Model::factory('Personne')->find_one(5);
$personne->delete();
//var_dump($personne);

// on vient afficher la liste de toutes les personnes
$personnes = Model::factory('Personne')->find_many(); 
//var_dump($personne);

?>

<?php foreach ($personnes as $p): ?>

id :<?=$p->id ?><br>
nom :<?=$p->nom ?><br>
prenom :<?=$p->prenom ?><br>
<hr>
<?php endforeach; ?>
