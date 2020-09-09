<?php
	/**
	 * 
	 */
	class Vehicule
	{
		
		private $id;
		private $marque;
		private $modele;
		private $couleur;
		private $immatriculation;


		public function getId()
		{
			return $this->id;
		}

		public function getMarque()
		{
			return $this->marque;
		}

		public function setMarque($marque)
		{
			return $this->marque =  $marque;
		}

		public function getModele()
		{
			return $this->modele;
		}

		public function setModele($modele)
		{
			return $this->modele =  $modele;
		}

		public function getCouleur()
		{
			return $this->couleur;
		}

		public function setCouleur($couleur)
		{
			return $this->couleur =  $couleur;
		}

		public function getImmatriculation()
		{
			return $this->immatriculation;
		}

		public function setImmatriculation($immatriculation)
		{
			return $this->immatriculation =  $immatriculation;
		}

		public function ajoutVehicule($marque, $modele, $couleur, $immatriculation)
		{
			$bdd = Model::getConnection();

			$requete = $bdd->prepare("INSERT INTO vehicule (marque, modele, couleur, immatriculation) VALUES ('$marque','$modele','$couleur','$immatriculation')");
			
			if(!$requete->execute()){
				die("ATTENTION!!!!");
			}

			header("Location: index.php");
		}
	}
?>