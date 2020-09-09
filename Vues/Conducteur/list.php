<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($tous_les_conducteurs as $conducteur) {
        echo "<tr>";
        echo "<td>".$conducteur->getIdConducteur()."</td>";
        echo "<td>".$conducteur->getPrenom()."</td>";
        echo "<td>".$conducteur->getNom()."</td>";
        echo "<td><img src='./Ressources/img/edit.png' width='20'>
        <img src='./Ressources/img/delete.png' width='20'>
        </td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>