<?php $title = 'PHP projet'; ?>
<?php ob_start(); ?>

<h3>inscriptions</h3>
<form action="queryChangeUser.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputLogin">Login</label>
      <input type="Login" class="form-control" id="login" placeholder="Login">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>
  <input type="submit" class="btn btn-primary" value='Inscrire'>
</form>

<?php $content = ob_get_clean(); ?>
<?php include 'include\layout.php'; ?>
