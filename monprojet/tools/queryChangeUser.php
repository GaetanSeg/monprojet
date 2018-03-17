<?php
      require 'connectDb.php';

        $bdd = getDataBase();
        $reponse = $bdd->query('SELECT * FROM USER');

        while ($donnees = $reponse->fetch())
        {

          echo '<form action="editUser.php" method="GET">
                  <b>ID</b> : <input type="text" class="form-control" name="id"  value="'.$donnees['id'].'"/><br>
                  <b>Login</b> : <input type="text" class="form-control" name="login" value="'.$donnees['login'].'"/><br>
                  <b>Password</b> : <input type="password" class="form-control" name="password" value="'.$donnees['password'].'"/><br>
                  <input type="submit" class="btn btn-primary"/><br>
                  <input type="submit" class="btn btn-primary" value="supprimer"/>
                  <hr>
                </form>';

        }
        $reponse->closeCursor();
?>
