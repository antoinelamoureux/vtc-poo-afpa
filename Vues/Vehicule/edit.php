<?php
	foreach ($vehiculeById as $vehicule){
		?>
			<div class="container">
				<form method="post">
				  <div class="form-group">
				    <label>Marque</label>
				    <input type="text" class="form-control" name="marque" value="<?php echo $vehicule->getMarque(); ?>">
				  </div>
				  <div class="form-group">
				    <label>Modéle</label>
				    <input type="text" class="form-control" name="modele" value="<?php echo $vehicule->getModele(); ?>">
				  </div>
				  <div class="form-group">
				    <label>Couleur</label>
				    <input type="text" class="form-control" name="couleur" value="<?php echo $vehicule->getCouleur(); ?>">
				  </div>
				  <div class="form-group">
				    <label>Immatriculation</label>
				    <input type="text" class="form-control" name="immatriculation" value="<?php echo $vehicule->getImmatriculation(); ?>">
				  </div>
				  <button type="submit" class="btn btn-primary" name="submit">Modifier le véhicule</button>
				</form>
			</div>
		<?php
	}
?>