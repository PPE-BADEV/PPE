
<form>
    <div class="col-md-2"></div>
    <div class="col-md-4">
        
    <h2> Administration Eleves </h2><br>
  <div class="form-group">
 
    
    <a href="index.php?controller=eleve&action=create"<button type="submit" class="btn btn-default">Créer</button> </a>
  </div>
  <table class="table table-striped">
	<tr>
		<td>Nom</td>
		<td>Prénom</td>
                <td>Classe</td>
		 
            
            
       
	<tr>
            
           
             <?php
            if ($lesEleves == null) {
                echo "pas d'eleves";
            }
            else {
            
            foreach ($lesEleves as $unEleve){
            ?>
        <tr>
            <td>
                <?= $unEleve["Nom"]?>
            </td>
            <td><?= $unEleve["Prenom"]?></td>
            <td><a href="routageEleve.php?action=supprimerEleve&id= <?= $unEleve["id"]?>"><button class="btn btn-info">supprimer</button></a>
            <a href="index.php?action=modifi&id= <?= $unEleve["id"]?>"><button class="btn btn-info">modifier</button></a></td>
        </tr>
            <?php 
            }
            ?>
            }
        
</table>
</form>
<div class="col-md-2"></div>    
</div>   
    <?php
}