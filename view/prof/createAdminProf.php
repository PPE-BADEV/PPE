<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="index.php?controller=prof&action=createCompte" method="post">
            <div class="form-group">
              <label for="titre">Nom</label>
              <input type="text" class="form-control" id="titre" name="nom" placeholder="Nom">
            </div>
            
            <div class="form-group">
              <label for="description">Prénom</label>
               <input type="text" class="form-control" id="titre" name="prenom" placeholder="Prénom">
            </div>
            
            <div class="form-group">
              <label for="description">Login</label>
              <input type="text" class="form-control" id="titre" name="login" placeholder="Login" readonly="true">
            </div>
            
            <div class="form-group">
              <label for="description">Mot de passe</label>
               <input type="password" class="form-control" id="titre" name="pwd" placeholder="pwd">
            </div>
            
                        
           <button type="submit" class="btn btn-default">Créer</button>
        </form>
        </div>    
    <div class="col-md-2"></div>    
</div>    