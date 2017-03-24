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
        if(isset($erreur))
        {
    ?>
        <div class="alert alert-danger" role="alert"><?=$erreur?></div>
    <?php
        }
    ?>
        
        <?php
        foreach ($lesClasses as $uneClasse)
        {
        ?>
         <tr>
             <td> <?= $uneClasse["nom"] ?> </td>  
                <td>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#renomClasse">Renommer</button></a>
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
    <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#createClasse">Créer une classe</button>
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
          <a href="index.php?controller=classe&action=adminclasse"><button type="button" class="btn btn-primary">NON</button></a>
      </div>
    </div>
  </div>
</div>


<!-- affichage dynamique pour l'ajout de classe-->

  <div class="modal fade" id="createClasse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">Création d'une Classe</h4>
</div>
<div class="modal-body">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

        
<form action="index.php?controller=classe&action=createClasse" method="POST">
    
  <div class="form-group">
    <label for="exampleInputPassword1">Nom de la classe</label>
	<input type="text" class="form-control" placeholder="nom de la classe" name="nom">
  </div>
    
  <button type="submit" class="btn btn-default">Submit</button>
</form>
	
        </div>    
    <div class="col-md-2"></div>    
</div>    
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->    


<!-- affichage dynamique pour renommer une classe-->

  <div class="modal fade" id="renomClasse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">Ajouter Sanction</h4>
</div>
<div class="modal-body">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

 
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

        </div>    
    <div class="col-md-2"></div>    
</div>    
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->    