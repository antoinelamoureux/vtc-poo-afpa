<?php
	
	require_once "./Vues/header.html";
	require_once "Controlleurs/ConducteurController.php";

	$conducteur = new ConducteurController();

	$conducteur->nouveauConducteur();

?>