<?php $title = 'Index'; ?>
<?php ob_start(); ?>
<?php
// Definition des constantes et variables
    define('LOGIN','toto');
    //define('PASSWORD','tata');
    define('PASSWORD', '$2y$10$jz30CnGsYVR.7.a4o31sTufzJYEqXpwfa7IuRSZfPqTBN8TQ/CdR6');
    $errorMessage = '';
    // Test de l'envoi du formulaire
    if(!empty($_POST))
    {
        // Les identifiants sont transmis ?
        if(!empty($_POST['login']) && !empty($_POST['password']))
        {
            // Sont-ils les mêmes que les constantes ?
            if($_POST['login'] !== LOGIN)
            {
                $errorMessage = 'Mauvais login !';
            }
            elseif(!password_verify($_POST['password'], PASSWORD))
    //        elseif($_POST['password'] !== PASSWORD)
            {
                $errorMessage = 'Mauvais password !';
            }
            else
            {
                // On ouvre la session
                session_start();
                // On enregistre le login en session
                $_SESSION['login'] = LOGIN;
                // On redirige vers le fichier index.php
                header('Location: index.php');
                exit();
            }
        }
        else
        {
            $errorMessage = 'Veuillez inscrire vos identifiants svp !';
        }
    }
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
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php include 'include/layout.php' ?>
