<?php
  require 'tools/connectDb.php';

  $bdd = getDataBase();
  $passwordHash = password_hash($_GET['password'],PASSWORD_DEFAULT);
  $myReq = $bdd->prepare('UPDATE user SET login = :login , password = :password WHERE id = :id');//  les ":login" sert a dire que indiquer que login serra remplacer lors de l'execution de la requete
  $myReq->execute(array(':login' => $_GET['login'],':password' => $passwordHash ,':id' => $_GET['id']));//remplacement de login par le login du form
  header('Location: admin.php');

  echo' <div class="alert alert-success">
        <strong>Success!</strong> Indicates a successful or positive action.
        </div>';
  exit();
 ?>
