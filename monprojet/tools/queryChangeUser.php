<?php
      require 'connectDb.php';

        $bdd = getDataBase();
        $reponse = $bdd->query('SELECT * FROM USER');

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
