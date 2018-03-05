<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
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

    $reponse= $bdd->query('SELECT* FROM USER');
    //reponse == pdo STATEMENT
    //echo print_r($reponse->fetch());

    while ($donnees = $reponse->fetch()) {

      echo $donnees ['login'];
      echo "</br>";
      echo $donnees ['password'];
      echo "</br>";
      echo $donnees ['id'];
    }
    $reponse->closeCursor();// TErmine le traitement de la requête
    ?>
</html>
