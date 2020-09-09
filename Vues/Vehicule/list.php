<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Marque</th>
      <th scope="col">Modéle</th>
      <th scope="col">Couleur</th>
      <th scope="col">Immatriculation</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($liste_vehicules as $vehicule) {
        echo "<tr>";
        echo "<td>".$vehicule->getIdVehicule()."</td>";
        echo "<td>".$vehicule->getMarque()."</td>";
        echo "<td>".$vehicule->getModele()."</td>";
        echo "<td>".$vehicule->getCouleur()."</td>";
        echo "<td>".$vehicule->getImmatriculation()."</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
