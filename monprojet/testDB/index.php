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
    	$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : '. $e->getMessage());
    }

    $reponse= $bdd->query('SELECT* FROM USER ' );
    //echo print_r($reponse->fetch());

    while ($donnees = $reponse->fetch()) {

      echo print_r( $donnees);
    }
    ?>
</html>
