<?php

 $pdo= new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8', 'root', '');
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);