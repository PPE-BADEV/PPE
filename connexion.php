<head>
    <title>PPE</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
if(isset($erreur))
{
    ?>
<div class="alert alert-danger" role="alert"><?=$erreur?></div>
    <?php
}
?>

<form action="index.php?controller=checkLogin" style="margin-top:50px" class="form-horizontal" method="POST">
  <div class="form-group">
      <div class="col-sm-5"></div>
      <div class="col-sm-4" >Bienvenue sur le site internet</div> 
      <div class="col-sm-3"></div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Login</label>
    <div class="col-sm-4">
      <input type="login" class="form-control" id="inputEmail3" placeholder="Login" name="login">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pwd">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>