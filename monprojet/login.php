<?php $title = 'Index'; ?>
<?php ob_start(); ?>
<?php

    try
    {
      //ouverture d'un porte dans une db
    	$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : '. $e->getMessage());
    }
    $login= "";
    $password="";

    $myReq = $bdd->prepare('SELECT * FROM user WHERE login = :login');//  les ":login" sert a dire que indiquer que login serra remplacer lors de l'execution de la requete
    $myReq->execute(array('login' => $_POST['login']));//remplacement de login par le login du form
    $resultat = $myReq->fetch();

    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

    if (!$resultat)
    {
        echo 'Mauvais identifiant ou mot de passe !';
    }
    else
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $_SESSION['login'] = LOGIN ;
            echo 'Vous êtes connecté !';
            header('Location: index.php');
            exit();
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
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
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php include 'include/layout.php' ?>
