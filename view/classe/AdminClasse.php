<center>
<h2>Administration des classes</h2>
</center>
<table class="table">
    <tr>
        <td>
           Classe 
        </td>
        <center> 
        <td>
            Action
        </td>
        </center>
    </tr>

        <?php

        foreach ($lesClasses as $uneClasse)
        {
        ?>
         <tr>
             <td> <?= $uneClasse["nom"] ?> </td>  
                <td>
                <a href="index.php?controller=classe&action=renommer&id=<?= $uneClasse["id"]?>"<button type="button" class="btn btn-warning">Renommer</button></a>
                <button type="button" class="btn btn-warning">Consulter</button>
                <button type="button" class="btn btn-warning">Modifier</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm">Supprimer</button></td>       
                </tr>
         </tr>
        <?php
        }
        ?>
</table>

<center>
    <a href="index.php?controller=classe&action=ajoutClasse"><button type="button" class="btn btn-primary">Créer une classe</button></a>
</center>


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Suppression de sujet</h4>
      </div>
      <div class="modal-body">
        Voulez vous supprimer ce sujet
      </div>      
      <div class="modal-footer">
          <a href="index.php?controller=classe&action=delete&id=<?= $uneClasse["id"]?>"><button type="button" class="btn btn-primary" id="suppr">OUI</button></a>
          <a href="index.php?action=Admin"<button type="button" class="btn btn-primary">NON</button></a>
      </div>
    </div>
  </div>
</div>