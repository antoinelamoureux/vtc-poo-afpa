<?php

/**
 * 
 */
class Model
{
	public function getConnection()
	{
		try{
			$db =new PDO('mysql:host=localhost:8889;dbname=vtc_afpa_poo', "admin", "admin");
		}
		catch(PDOException $e){
			print "Erreur";
			die;
		}
		return $db;
	}

	public function findById($id, $table){
		$bdd = $this->getConnection();

		$sql = $bdd->prepare("SELECT * FROM $table WHERE id_".$table." = ".$id);

		$sql->execute();

		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, $table);

		return $resultat;
	}
	
	public function deleteById($id, $table)
	{
		$bdd = $this->getConnection();

		$sql = $bdd->prepare(" DELETE FROM $table WHERE id_".$table." = ".$id);

		if(!$sql->execute()){
			die('OUPS!!!!!');
		}
		
		$table == 'conducteur' ? header("Location: ?action=afficherConducteur") : header("Location: ?action=afficherVehicule");
	}
	
	public function findAll($table)
	{
		$bdd = Model::getConnection();

		$sql = $bdd->prepare("SELECT * FROM $table");

		$sql->execute();

		$resultat = $sql->fetchAll(PDO::FETCH_CLASS, $table);

		return $resultat;
	}
}
?>
