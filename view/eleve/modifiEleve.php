<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="index.php?action=modifier&id=<?= $eleve["id"]?>" method="post">
            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" id="titre" name="nom" value="<?= $eleve["nom"]?>">
            </div>
            <div class="form-group">
              <label for="prenom">Prénom</label>
              <textarea class="form-control" rows="3" id="description" name="prenom"><?= $eleve["prenom"]?></textarea>
            </div>
           <button type="submit" class="btn btn-default">Créer</button>
        </form>
        </div>    
    <div class="col-md-2"></div>    
</div>    