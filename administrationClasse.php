
<link href="assets/css/bootstrap.css" rel="stylesheet">
<center>
<h2>Administration des classes</h2>
</center>
<table class="table">
    <tr>
        <td>
           Classe 
        </td>
        <td></td>
        
        <td>
            Action
        </td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td>Classe 1</td>
        <td>rename</td>
        <td>list</td>
        <td>modi</td>
        <td>sup</td>
    </tr>	

</table>

<br>
<!-- Bouton execution modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Ajouter une classe
  
</button>
<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

<h4 class="modal-title" id="myModalLabel">Creation classe</h4>
</div>
    
<div class="modal-body">
Ajouter une classe
<br>
<!-- Single button -->
<div class="input-group">
  <input type="text" class="form-control" aria-label="...">
  <div class="input-group-btn">
      <bouton type="submit" class="btn btn-default" > Creer </bouton>
 <br>
 
</div>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js">
 </script>
<script src="assets/js/bootstrap.js"></script>