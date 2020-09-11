<?php

require_once "./Vues/header.html";
require_once "Controlleurs/ConducteurController.php";
require_once 'Controlleurs/VehiculeController.php';
require_once 'Controlleurs/AssociationController.php';

$conducteur = new ConducteurController();
$vehicule = new VehiculeController();
$association = new AssociationController();

if (isset($_GET['action'])) {
	/* LES CONDUCTEURS - CRUD */
	if ($_GET['action'] == 'modifierConducteur') {
		$conducteur->show($_GET['conducteurId']);
	} elseif ($_GET['action'] == 'supprimerConducteur') {
		$conducteur->delete($_GET['conducteurId']);
	} elseif ($_GET['action'] == 'afficherConducteur') {
		$conducteur->listConducteur();
		$conducteur->nouveauConducteur();
	}
	/* LES VEHICULES - CRUD */ 
	elseif ($_GET['action'] == 'ajoutVehicule') {
		$vehicule->listVehicule();
		$vehicule->ajout();
	} elseif ($_GET['action'] == 'modifierVehicule') {
		$vehicule->show($_GET['vehiculeId']);
	} elseif ($_GET['action'] == 'supprimerVehicule') {
		$vehicule->delete($_GET['vehiculeId']);
	} elseif ($_GET['action'] == 'afficherVehicule') {
		$vehicule->listVehicule();
		$vehicule->ajout();
	}
	/* LES ASSOCIATIONS - CRUD */ 
	elseif ($_GET['action'] == 'afficherAssociation') {
		$association->afficherAssociation();
		$association->ajoutAssociation();
	} elseif ($_GET['action'] == 'modifierAssociation') {
		$association->show($_GET['associationId']);
	} elseif ($_GET['action'] == 'supprimerAssociation') {
		$association->delete($_GET['associationId']);
	} elseif ($_GET['action'] == 'afficherAssociation') {
		$association->afficherAssociation();
		$association->ajoutAssociation();
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
