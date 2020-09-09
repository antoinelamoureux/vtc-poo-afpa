<?php

/**
 * 
 */

require_once './Models/Conducteur.php';

class ConducteurController
{
	
	public function nouveauConducteur()
	{
		require_once './Vues/formulaire_nouveau_conducteur.html';

		$conducteur =  new Conducteur();

		if(isset($_POST['submit'])){
			
			$prenom = $conducteur->setPrenom($_POST['prenom']);

			$nom = $conducteur->setNom($_POST['nom']);

			$conducteur->create($prenom, $nom);
		}
	}
}

?>