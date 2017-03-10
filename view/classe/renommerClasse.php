<?php
if(isset($erreur))
{
    ?>
<div class="alert alert-danger" role="alert"><?=$erreur?></div>
    <?php
}
?>
<form action="index.php?controller=classe&action=confRenommer" method="POST">
   <div class="form-group">
    <label for="exampleInputPassword1">Id de la classe</label>
	<input type="text" class="form-control" placeholder="id" name="id"  value="<?= $uneClasse["id"]?>" readonly="true">
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Nom de la classe</label>
	<input type="text" class="form-control" placeholder="nom de la classe" name="name"  value="<?= $uneClasse["nom"]?>" readonly="true">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nouveau nom de la classe</label>
	<input type="text" class="form-control" placeholder="nouveau nom de la classe" name="newname">
  </div>
    
  <button type="submit" class="btn btn-default">Submit</button>
</form>