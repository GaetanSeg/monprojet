<?php $title = 'Index'; ?>
<?php ob_start(); ?>
<?php
      require 'tools/connectSession.php';
?>
<?php
// Rencontre-t-on une erreur ?
  if(!empty($errorMessage))
  {
      echo "<p> $errorMessage </p>";
  }
?>
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Login" name="login">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php include 'include/layout.php' ?>
