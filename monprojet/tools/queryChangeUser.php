<?php
      require 'connectDb.php';

        $bdd = getDataBase();

        //$myReq = $bdd->prepare('SELECT * FROM user WHERE login = :login');//  les ":login" sert a dire que indiquer que login serra remplacer lors de l'execution de la requete

        //$resultat = $myReq->fetch();
        $reponse = $bdd->query('SELECT * FROM USER');
        //reponse est un objet PDOStatement (voir doc)
      /*while ($donnees = $reponse->fetch())
        {
            echo "<b>Login USER</b> : ".$donnees['login']."<br><a href=\"editUser.php\" class=\"btn btn-info\" role=\"button\">Editer</a>";
            echo '<br>';
            echo "<hr>";
        }*/

        while ($donnees = $reponse->fetch())
        {

          echo '<form action="editUser.php" method="GET">
                  <b>ID</b> : <input type="text" name="id"  value="'.$donnees['id'].'"/><br>
                  <b>Login</b> : <input type="text" name="login" value="'.$donnees['login'].'"/><br>
                  <b>Password</b> : <input type="password" name="password" value="'.$donnees['password'].'"/><br>
                  <input type="submit"/>
                  <hr>
                </form>';

        }
        $reponse->closeCursor();
?>
