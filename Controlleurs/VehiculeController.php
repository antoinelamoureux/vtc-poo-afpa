<?php

/**
 * 
 */

require_once './Models/Vehicule.php';

class VehiculeController
{
	
	public function ajout()
	{
		require_once './Vues/Vehicule/formulaire_ajout.html';
		if(isset($_POST['submit'])){
			$vehicule = new Vehicule();

			$marque = $vehicule->setMarque($_POST['marque']);

			$modele = $vehicule->setModele($_POST['modele']);

			$couleur = $vehicule->setCouleur($_POST['couleur']);

			$immatriculation = $vehicule->setImmatriculation($_POST['immatriculation']);

			$vehicule->ajoutVehicule($marque, $modele, $couleur, $immatriculation);
		}

	}
}
?>