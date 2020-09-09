<?php
	
	require_once "./Vues/header.html";
	require_once "Controlleurs/ConducteurController.php";

	$conducteur = new ConducteurController();

	if (isset($_GET['action'])) {

		if($_GET['action'] == 'modifierConducteur'){
			$conducteur->show($_GET['conducteurId']);
		}
		elseif($_GET['action'] == 'supprimerConducteur'){
			$conducteur->delete($_GET['conducteurId']);
		}
	}else{
		/* Afficcher la liste des conducteurs*/
		$conducteur->listConducteur();

		/* Ajout de nouveau conducteur */
		$conducteur->nouveauConducteur();

	}


?>