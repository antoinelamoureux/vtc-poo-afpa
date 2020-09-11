<?php

require_once 'Model.php';

class Association extends Model{
    private $id_association;
    private $conducteur;
    private $vehicule;

    public function getIdAssociation()
    {
        return $this->id_association;
    }

    public function getConducteur()
    {
        return $this->conducteur;
    }

    public function setConducteur($conducteur)
    {
        return $this->conducteur = $conducteur;
    }

    public function getVehicule()
    {
        return $this->vehicule;
    }

    public function setVehicule($vehicule)
    {
        return $this->vehicule = $vehicule;
    }

    public function afficherConducteur()
	{
		$bdd = Model::getConnection();

		$sql = $bdd->prepare("SELECT nom, prenom FROM conducteur");

		$sql->execute();

		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'conducteur');

		return $resultat;
    }

    public function afficherVehicule()
    {
        $bdd = Model::getConnection();

		$sql = $bdd->prepare("SELECT marque, modele FROM vehicule");

		$sql->execute();

		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'vehicule');

		return $resultat;
    }

    public function afficherAssociation()
    {
        $bdd = Model::getConnection();

		$sql = $bdd->prepare("SELECT * FROM association_vehicule_conducteur");

		$sql->execute();

		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'association');

		return $resultat;
    }

    public function ajoutAssociation($conducteur, $vehicule)
    {
        $bdd = Model::getConnection();

			$requete = $bdd->prepare("INSERT INTO association_vehicule_conducteur (conducteur, vehicule) VALUES ('$conducteur','$vehicule')");

			if(!$requete->execute()){
				die("ATTENTION!!!!");
			}

			header("Location: ?action=afficherAssociation");
    }

    public function update($id, $conducteur, $vehicule)
	{
		$bdd = Model::getConnection();

        $sql = $bdd->prepare("UPDATE association_vehicule_conducteur SET conducteur ='". $conducteur ."', 
        vehicule ='". $vehicule ."'
        WHERE id_association = " . $id);
		
		if(!$sql->execute()){
			die("ATTENTION!!!!");
		}

		header("Location: ?action=afficherAssociation");
    } 
    
    public function findAssociationById($id)
    {
        $bdd = $this->getConnection();

		$sql = $bdd->prepare("SELECT * FROM association_vehicule_conducteur WHERE id_association = ".$id);

		$sql->execute();

		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'association');

		return $resultat;
    }
	
	public function deleteAssociationById($id)
	{
		$bdd = $this->getConnection();

		$sql = $bdd->prepare(" DELETE FROM association_vehicule_conducteur WHERE id_association  = ".$id);

		if(!$sql->execute()){
			die('OUPS!!!!!');
		}
		
		header("Location: ?action=afficherAssociation");
    }
    
    public function findAssociations()
	{
		$bdd = Model::getConnection();

		$sql = $bdd->prepare("SELECT * FROM association_vehicule_conducteur");

		$sql->execute();

		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, 'association');

		return $resultat;
	}
}