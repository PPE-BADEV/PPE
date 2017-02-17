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
                <button type="button" class="btn btn-warning">Renommer</button>
                <button type="button" class="btn btn-warning">Consulter</button>
                <button type="button" class="btn btn-warning">Modifier</button>
                <button type="button" class="btn btn-warning">Supprimer</button></td>       
                </tr>
         </tr>
        <?php
        }
        ?>
</table>

<center>
    <a href="index.php?controller=classe&action=ajoutClasse"><button type="button" class="btn btn-primary">Créer Prof</button></a>
</center>