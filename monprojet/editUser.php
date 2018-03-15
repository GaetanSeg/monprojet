<?php
  require 'tools/connectDb.php';

  $bdd = getDataBase();

  $myReq = $bdd->prepare('UPDATE user SET login = :login WHERE id = :id');//  les ":login" sert a dire que indiquer que login serra remplacer lors de l'execution de la requete
  $myReq->execute(array(':login' => $_GET['login'],':id' => $_GET['id']));//remplacement de login par le login du form
  header('Location: admin.php');

  echo' <div class="alert alert-success">
        <strong>Success!</strong> Indicates a successful or positive action.
        </div>';
  exit();
 ?>
