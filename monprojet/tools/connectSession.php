<?php

      if (!empty($_POST)) {
        require 'tools/querry.php';
        $resultat = getQuery();
      // Comparaison du pass envoyé via le formulaire avec la base
      $isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

      if (!$resultat)
      {
          echo 'Mauvais identifiant ou mot de passe !';
      }
      else
      {
          if ($isPasswordCorrect) {
              session_start();
              $_SESSION['id'] = $resultat['id'];
              $_SESSION['login'] = LOGIN ;
              echo 'Vous êtes connecté !';
              header('Location: index.php');
              exit();
          }
          else {
              echo 'Mauvais identifiant ou mot de passe !';
          }
      }
      }
 ?>
