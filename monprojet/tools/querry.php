<?php
    require 'connectDb.php';
function getQuery(){
  $bdd = getDataBase();

  $myReq = $bdd->prepare('SELECT * FROM user WHERE login = :login');//  les ":login" sert a dire que indiquer que login serra remplacer lors de l'execution de la requete
  $myReq->execute(array('login' => $_POST['login']));//remplacement de login par le login du form
  $resultat = $myReq->fetch();
  
  return $resultat;
}

 ?>
