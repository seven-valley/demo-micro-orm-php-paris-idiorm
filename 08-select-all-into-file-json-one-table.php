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
    foreach ($att_personne as $att):
        $personne->$att = $p->$att;
    endforeach;

    $tableau []= $personne; // je stocke mon objet php dans le tableau
endforeach;    

// je converti le tab en tab JSON
$tab_json = json_encode($tableau);
//$file = '../../../uploads/json/toto.json';
$file = 'personnes.json';
file_put_contents($file, $tab_json);
// créer un fichier JSON
?>

