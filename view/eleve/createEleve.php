

<div class="row">
   
        <form action="index.php?controller=eleve&action=createEleve" method="post">
              
      
    <label for="exampleInputEmail1">Prénom</label>
    <input type="prénom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer le prénom" name="prenom">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nom</label>
    <input type="nom" class="form-control" id="exampleInputPassword1" placeholder="Entrer le nom" name="nom">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Classe</label>
    <select class="form-control" id="exampleSelect1" name="classe">
    <?php
        foreach ($lesClasses as $classe) {
            echo '<option value="'.$classe["id"].'">'.$classe["nom"].'</option>';
        }
    ?>
    </select>
           <button type="submit" class="btn btn-default">Créer</button>
        </form>
        </div>    
    <div class="col-md-2"></div>    
</div>    