<?php

require_once './Models/Association.php';

class AssociationController
{
    public function afficherAssociation()
    {
        $association = new Association();
        $liste_associations = $association->afficherAssociation();
        require_once './Vues/Association/liste_assocation.php';
    }

    public function ajoutAssociation()
    {
        $association = new Association();
        $liste_conducteurs = $association->afficherConducteur();
        $liste_vehicules = $association->afficherVehicule();

        require_once './Vues/Association/formulaire_assocation.php';

        if (isset($_POST['submit'])) {
            $conducteur = $association->setConducteur($_POST['conducteur']);
            $vehicule = $association->setVehicule($_POST['vehicule']);
            $association->ajoutAssociation($conducteur, $vehicule);
        }
    }

    public function show($id)
	{
		$association = new Association();
        $associationById = $association ->findAssociationById($id);
        $liste_conducteurs = $association->afficherConducteur();
        $liste_vehicules = $association->afficherVehicule();
		require_once "./Vues/Association/editAssociation.php";

		if(isset($_POST['submit'])){
			foreach ($associationById as $value) {
				
			$conducteur = $association->setConducteur($_POST['conducteur']);
            $vehicule = $association->setVehicule($_POST['vehicule']);
			$value->update($id, $conducteur,
            $vehicule);
			}
		}
    }
    
    public function delete($id)
	{
        $association = new Association();
        return $association->deleteAssociationById($id);
    }
    
    public function countAssociations()
	{
		$association = new Association();
		$nbAssociations =  $association->findAssociations();
		return $nbAssociations;
	}

}

