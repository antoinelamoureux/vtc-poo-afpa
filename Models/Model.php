<?php

/**
 * 
 */
class Model
{
	public function getConnection()
	{
		try{
			$db =new PDO('mysql:host=localhost;dbname=vtc', "root", "");
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
	
	
}
?>
