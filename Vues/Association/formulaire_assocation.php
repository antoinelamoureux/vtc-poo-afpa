<div class="container">
    <form method="post">
        <div class="form-group">
            <label><strong>Conducteur</strong></label>
            <select name="conducteur" class="custom-select">
                <option selected>Choisir le conducteur</option>
                <?php foreach ($liste_conducteurs as $conducteur) {
                    echo '<option value="' . $conducteur->getPrenom() . ' ' . $conducteur->getNom() . '">' . $conducteur->getPrenom() . ' ' . $conducteur->getNom() . '</option>';
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label><strong>Véhicule</strong></label>
            <select name="vehicule" class="custom-select">
                <option selected>Choisir le véhicule</option>
                <?php foreach ($liste_vehicules as $vehicule) {
                    echo '<option value="' . $vehicule->getMarque() . ' ' . $vehicule->getModele() . '">' . $vehicule->getMarque() . ' ' . $vehicule->getModele() . '</option>';
                } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Ajouter cette association</button>
</div>