<?php

      if (!empty($_POST)) {
        require 'tools/querry.php';
        $resultat = getQuery();
      // Comparaison du pass envoyé via le formulaire avec la base
      $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

      if (!$resultat)
      {
          echo "<div class=\"alert alert-danger\">
                  <strong>OUPS!</strong> Mauvais identifiant ou mot de passe !.
                </div>";
      }
      else
      {
          if ($isPasswordCorrect) {
              session_start();
              $_SESSION['id'] = $resultat['id'];
              $_SESSION['login'] = $resultat['login'];
              header('Location: index.php');
              echo "<div class=\"alert alert-success\">
                      <strong>Bravo!</strong> Vous êtes connecté !.
                    </div>";
              exit();
          }
          else {
            echo "<div class=\"alert alert-danger\">
                    <strong>OUPS!</strong> Mauvais identifiant ou mot de passe !.
                  </div>";

          }
      }
      }
 ?>
