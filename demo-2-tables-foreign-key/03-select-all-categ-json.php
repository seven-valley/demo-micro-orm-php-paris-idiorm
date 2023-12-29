<?php
require_once '../inc/config.inc.php';
require_once '../inc/class/personne.class.php';

// la table personne devient une classe Entity Personne
$categs = Model::factory('Categ')->find_many(); 

//var_dump($personne);
//echo json_encode($personnes);

// je reconstruit le tableau
$tableau =[];
foreach ($categs as $c):
// créer un objet vide
    $categ =new stdClass();
    foreach ($att_categ as $att):
        $categ->$att = $c->$att;
    endforeach;
        $categ->personnes = getTabObjet($c->personnes()->find_many(),$att_personne);
        $tableau []= $categ; // je stocke mon objet php dans le tableau
    
endforeach;    

// je converti le tab en tab JSON
$tab_json = json_encode($tableau);
//$file = '../../../uploads/json/toto.json';
$file = 'categs.json';
file_put_contents($file, $tab_json);
// créer un fichier JSON
?>
