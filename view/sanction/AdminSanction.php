<center>
    <h2>Administration des criteres de sanction</h2>
</center>
<br>
<table class="table">
    <tr>
        

        <td>Critere de sanction </td>
        <td>Description de la sanction</td>
        <TD>Action</TD>
        <td></td>
    </tr>
    <tr>
        <?php
        if ($lesCritSanction==null){
            echo "pas de de critere";
        }
        
        else
        {
        foreach ($lesCritSanction as $unCritSanction) {
            
        
        ?>
    <tr>
        <td> <?= $unCritSanction["nom"]?></td>
        <td><?= $unCritSanction["description"]?></td>
        <td><button class="btn btn-info" data-toggle="modal" data-target="#modif">Modif</button></td>
        <td><button class="btn btn-danger" data-toggle="modal" data-target="#supp">Supp</button></td>
    </tr>
                <?php
        }
         }  
         ?>
    </tr>
    </tr>
</table>
<div class="modal fade" id="modif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">Modifier</h4>
</div>
<div class="modal-body">
<form action="index.php?controller=sanction&action=modifierSanction&id=<?=$unCritSanction["id"]?>" method="post">
            <div class="form-group">
              <label for="nomCritSanct">Nom Sanction</label>
              <input type="text" class="form-control" id="titre" name="nomCritSanct" value="<?=$unCritSanction["nom"]?>">
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <textarea class="form-control" rows="3" id="description" name="description" ><?=$unCritSanction["description"]?></textarea>
            </div>
           
            
           <button type="submit" class="btn btn-default">Créer</button>
        </form>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="supp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">Supp</h4>
</div>
<div class="modal-body">
    <h4>Etes vous sur de vouloir supprimer :</h4>
    <a href="index.php?controller=sanction&action=del&id=<?=$unCritSanction["id"]?>"<button class="btn btn-info">OUI</button></a>
    <button class="btn btn-danger" data-dismiss="modal">NON</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<center>
<button class="btn btn-info" data-toggle="modal" data-target="#myModal">
  Ajouter une sanction
</button>
</center>

   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        <form action="index.php?controller=sanction&action=creatSanct" method="post">
            <div class="form-group">
              <label for="nomCritSanct">Nom Sanction</label>
              <input type="text" class="form-control" id="titre" name="nomCritSanct" placeholder="Sanction">
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <textarea class="form-control" rows="3" id="description" name="description" placeholder="Description de la sanction"></textarea>
            </div>
           
            
           <button type="submit" class="btn btn-default">Créer</button>
        </form>
        </div>    
    <div class="col-md-2"></div>    
</div>    
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->   

<br>
<table class="table"
        <tr>
        <td>Critere colle immediate</td>
        <td>Description de la sanction</td>
        <td>Action</td>
        <td></td>
        
    </tr>
    <tr>
        <?php
        foreach ($lesCritColle as $unCritColle){
            ?>
        }
        <td>
            <?= $unCritColle["nom"]?>
        </td>
        <td><?= $unCritColle["description"]?></td>
        <td><bouton class="btn btn-danger" data-toggle="modal" data-target="#suppSan">Supp</bouton></td>
    </tr>
    <?php
        }
        ?>
    
    
</table>
<div class="modal fade" id="suppSan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">SuppSanction</h4>
</div>
<div class="modal-body">
<h4>Etes vous sur de vouloir supprimer :</h4>
    <a href="index.php?controller=sanction&action=del&id=<?=$unCritColle["id"]?>"<button class="btn btn-info">OUI</button></a>
    <button class="btn btn-danger" data-dismiss="modal">NON</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<center>
<button class="btn btn-info" data-toggle="modal" data-target="#AddSanc">
  Ajouter une colle
</button>
</center>
   <div class="modal fade" id="AddSanc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">Ajouter Colle</h4>
</div>
<div class="modal-body">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="index.php?controller=sanction&action=creatColle" method="post">
            <div class="form-group">
              <label for="nomCritSanct">Nom Colle</label>
              <input type="text" class="form-control" id="titre" name="nomCritSanct" placeholder="Colle">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" rows="3" id="description" name="description" placeholder="Description de la colle"></textarea>
            </div>
           
            
           <button type="submit" class="btn btn-default">Créer</button>
        </form>
        </div>    
    <div class="col-md-2"></div>    
</div>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

