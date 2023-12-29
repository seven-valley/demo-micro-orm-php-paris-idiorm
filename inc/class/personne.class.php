<?php
function getObjet($obj, $tab_att)
{
	$objet = new stdClass();
	foreach ($tab_att as $att) :
		$objet->$att = $obj->$att;
	endforeach;
	return $objet;
}

function getTabObjet($tab, $tab_att)
{
	$tableau = [];
	foreach ($tab as $obj) :
		$objet = new stdClass();
		foreach ($tab_att as $att) :
			// créer un objet vide			
			$objet->$att = $obj->$att;
		endforeach;
		$tableau []= $objet; // je stocke mon objet php dans le tableau
	endforeach;
	return $tableau;
}

class Categ  extends Model
{
	public static $_table = "categ";
	public function personnes()
	{
		return $this->has_many('Personne');
	}
}

class Competence  extends Model
{
	public static $_table = "competence";
	public function personnes()
	{
		return $this->has_many_through('Personne');
	}
}

class Personne  extends Model
{
	// la jointure de la class BO Businnes Object( ou Entity)  
	// et la table personne
	public static $_table = "personne"; // la table personne Mysql
	public function categ()
	{
		return $this->belongs_to('Categ');
	}
	public function competences()
	{
		return $this->has_many_through('Competence');
	}
}
// class PersonneCompetence  extends Model
// {
// 	public static $_table = "personne_has_competence";
// }

// attributs de la classe Personnes
$att_personne = ['id', 'nom', 'prenom'];
$att_categ = ['id', 'nom'];
$att_competence = ['id', 'nom'];