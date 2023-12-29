<?php
require_once '../inc/config.inc.php';
require_once '../inc/class/personne.class.php';

// la table personne devient une classe Entity Personne
$personnes = Model::factory('Personne')->find_many(); 

//var_dump($personne);

?>

<?php foreach ($personnes as $p): ?>

id :<?=$p->id ?><br>
nom :<?=$p->nom ?><br>
prenom :<?=$p->prenom ?><br>
categ :<?=$p->categ()->find_one()->nom ?><br>
<hr>
<?php endforeach; ?>