<?php

require_once "./Vues/header.html";
require_once "Controlleurs/ConducteurController.php";
require_once 'Controlleurs/VehiculeController.php';
require_once 'Controlleurs/AssociationController.php';

$conducteur = new ConducteurController();
$vehicule = new VehiculeController();
$association = new AssociationController();

if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'modifierConducteur':
			$conducteur->show($_GET['conducteurId']);
			break;
		case 'supprimerConducteur':
			$conducteur->delete($_GET['conducteurId']);
			break;
		case 'afficherConducteur':
			$conducteur->listConducteur();
			$conducteur->nouveauConducteur();
			break;
		case 'ajoutVehicule':
			$vehicule->listVehicule();
			$vehicule->ajout();
			break;
		case 'modifierVehicule':
			$vehicule->show($_GET['vehiculeId']);
			break;
		case 'supprimerVehicule':
			$vehicule->delete($_GET['vehiculeId']);
			break;
		case 'afficherVehicule':
			$vehicule->listVehicule();
			$vehicule->ajout();
			break;
		case 'afficherAssociation':
			$association->afficherAssociation();
			$association->ajoutAssociation();
			break;
		case 'modifierAssociation':
			$association->show($_GET['associationId']);
			break;
		case 'supprimerAssociation':
			$association->delete($_GET['associationId']);
			break;
		case 'afficherAssociation':
			$association->afficherAssociation();
			$association->ajoutAssociation();
			break;			
	}
} else {
	/* Afficher la liste des conducteurs*/
	$conducteur->listConducteur();

	/* Ajout de nouveau conducteur */
	$conducteur->nouveauConducteur();

	$nbConducteurs = count($conducteur->countConducteurs());
	$nbVehicules = count($vehicule->countVehicules());
	$nbAssociations = count($association->countAssociations());
	require_once "./Vues/informations.php";
}