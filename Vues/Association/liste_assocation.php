<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Conducteur</th>
      <th scope="col">Véhicule</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($liste_associations as $association) {
        echo "<tr>";
        echo "<td>".$association->getIdAssociation()."</td>";
        echo "<td>".$association->getConducteur()."</td>";
        echo "<td>".$association->getVehicule()."</td>";
        echo "<td><a href='?action=modifierAssociation&associationId=".$association->getIdAssociation()."'><img src='./Ressources/img/edit.png' width='50'></a>
        </td>";
        ?>
        <td><img src='./Ressources/img/delete.png' width='20' data-toggle="modal" data-target="#vtc-<?php echo $association->getIdAssociation(); ?>"></td>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="vtc-<?php echo $association->getIdAssociation(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Supprimer: <?php echo $association->getConducteur()." ".$association->getVehicule(); ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                <a href="?action=supprimerAssociation&associationId='<?php echo $association->getIdAssociation() ?>'">
                  <button type="button" class="btn btn-danger">Oui</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php
        echo "</tr>";
      }
    ?>
  </tbody>
</table>