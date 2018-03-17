<?php
require 'connectDb.php';

$bdd = getDataBase();
$passwordHash = password_hash($_GET['password'],PASSWORD_DEFAULT);
$myReq = $bdd->prepare('INSERT INTO user(login,password)  VALUES (:login,:password) ');//  les ":login" sert a dire que indiquer que login serra remplacer lors de l'execution de la requete
$myReq->execute(array(':login' => $_GET['login'],':password' => $passwordHash));//remplacement de login par le login du form
echo' <div class="alert alert-success">
      <strong>Success!</strong> inscriptions reussie !
      </div>';
header('Location: ./admin.php');
exit();

?>
