<?php
	
	require_once "./Vues/header.html";
	require_once "Controlleurs/ConducteurController.php";

	$conducteur = new ConducteurController();

	/* Ajout de nouveau conducteur */
	$conducteur->nouveauConducteur();

	/* Afficcher la liste des condcuteurs*/
	$conducteur->listConducteur();

?>