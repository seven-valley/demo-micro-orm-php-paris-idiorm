<?php
require_once './inc/config.inc.php';
require_once './inc/class/personne.class.php';

// la table personne devient une classe Entity Personne
$personnes = Model::factory('Personne')->find_many(); // ici 1 c l ID

$personne = ORM::for_table('personne')->create();

$personne->name = 'Joe Bloggs';
$personne->age = 40;

$personne->save();
//var_dump($personne);

?>

<?php foreach ($personnes as $p): ?>

id :<?=$p->id ?><br>
nom :<?=$p->nom ?><br>
prenom :<?=$p->prenom ?><br>
<hr>
<?php endforeach; ?>