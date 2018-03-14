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

          echo "<form action=\"editUser.php\" method=\"get\">
                <b>ID</b> : <input type=\"text\" class=\"form-control\" disabled=\"disabled\"  name=\"id\" value=\"".$donnees['id']."\"/><br>
                <b>Login</b> : <input type=\"text\" class=\"form-control\" name=\"login\" value=\"".$donnees['login']."\"/><br>
                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button></form>
                <hr>
                </form>";

        }
        $reponse->closeCursor();
?>
