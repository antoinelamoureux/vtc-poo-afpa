<?php

/**
 * 
 */
require_once 'Model.php';

class Conducteur extends Model
{
	private $id_conducteur;
	private $prenom;
	private $nom;

	public function getIdConducteur()
	{
		return $this->id_conducteur;
	}

	public function getPrenom()
	{
		return $this->prenom;
	}

	public function setPrenom($prenom)
	{
		return $this->prenom = $prenom;
	}

	public function getNom()
	{
		return $this->nom;
	}

	public function setNom($nom)
	{
		return $this->nom = $nom;
	}

	public function create($prenom, $nom)
	{
		$bdd = Model::getConnection();

		$requete = $bdd->prepare("INSERT INTO conducteur (prenom, nom) VALUES ('$prenom','$nom')");
		if(!$requete->execute()){
			die("ATTENTION!!!!");
		}

		header("Location: index.php");
	}

	public function findAll($table)
	{
		$bdd = Model::getConnection();

		$sql = $bdd->prepare("SELECT * FROM $table");

		$sql->execute();

		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, $table);

		return $resultat;
	}
}
?>