<div class="row" style="padding-bottom: 20px">
    <a href="index.php?controller=prof&action=createAdminProf"><button class="btn btn-info">Créer un Prof</button></a></a>
</div>
<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="container">   
 <table class="table table-striped">
 <thead>
      <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Login</th>
        <th>Password</th>
      </tr>
    </thead>
            <?php
            if ($lesProfs == null){
                echo "pas de prof";
            }
            else
            {
            foreach ($lesProfs as $unProf){
            ?>
    
      <tr>
        <td><?= $unProf["id"]?></td>
        <td><?= $unProf["nom"]?></td>
        <td><?= $unProf["prenom"]?></td>
        <td><?= $unProf["login"]?></td>
        <td><?= $unProf["pwd"]?></td>
        <td><a href="index.php?controller=prof&action=supprimeProf&id=<?= $unProf["id"]?>">Supprimer</a>   
        <a href="index.php?controller=prof&action=modifierProf&id=<?= $unProf["id"]?>">Modifier</a></td>
      </tr>
     
                

                
</div>       
            <?php 
            }
            
            }
            ?>
  </table>
            </div>    
        </div>
        <div class="col-md-2"></div>    
    </div> 
</div>







