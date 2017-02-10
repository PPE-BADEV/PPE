<link href="assets/css/bootstrap.css" rel="stylesheet">
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
        <td>Bavardage</td>
        <td>Sanction du coup</td>
        <td><button class="btn btn-info" data-toggle="modal" data-target="#modif">Modif</button></td>
        <td><button class="btn btn-danger" data-toggle="modal" data-target="#supp">Supp</button></td>
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
Modifier ici
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
    <button class="btn btn-info">OUI</button>
    <button class="btn btn-danger">NON</button>
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
Add sanction
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
        <td>
            Degradation
        </td>
        <td>degra</td>
        <td><bouton class="btn btn-danger" data-toggle="modal" data-target="#suppSan">Supp</bouton></td>
    </tr>
    <tr>
        <td>
            Tricherie
        </td>
        <td>axes</td>
        <td><bouton class="btn btn-danger" data-toggle="modal" data-target="#suppSan">Supp</bouton></td>
    </tr>
    
    
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
    <button class="btn btn-info">OUI</button>
    <button class="btn btn-danger">NON</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<center>
<button class="btn btn-info" data-toggle="modal" data-target="#AddSanc">
  Ajouter une sanction
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
Add sanction
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->     
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js">
 </script>
 <script src="assets/js/bootstrap.js"></script>