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
	
}
?>
