
<form>
    <div class="col-md-2"></div>
    <div class="col-md-4">
    <h2> Administration Eleves </h2><br>
  <div class="form-group">
    <label for="exampleInputEmail1">Prénom</label>
    <input type="prénom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer le prénom">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nom</label>
    <input type="nom" class="form-control" id="exampleInputPassword1" placeholder="Entrer le nom">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Classes</label>
    <select class="form-control" id="exampleSelect1">
      <option>    </option>
      <option>1SSI</option>
      <option>TSSI</option>
      <option>1BACPROSN</option>
      </select>
  </div>
  <table class="table table-striped">
	<tr>
		<td>Nom</td>
		<td>Prénom</td>
                
		<td>modifications</td> 
            
            
       
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
            <a href="routageEleve.php?action=createEleve= <?= $unEleve["id"]?>"><button class="btn btn-info">modifier</button></a></td>
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