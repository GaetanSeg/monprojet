<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">PHP PROJECT</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Test <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <?php if (!empty($_SESSION['login'])) {
        echo "<li><a href=\"admin.php\">Administration</a></li>";
        echo "<li><a href=\"logout.php\">Se déconnecter</a>/li>";
        echo "<li><a><span>Bienvenue</span> ".$_SESSION['login']."</a>/li>";
        }
      ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php
  // On teste si la variable de session existe et contient une valeur
            if(empty($_SESSION['login']))
            {
                echo "<li><a href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span>Login</a></li>";
                echo "<li><a href=\"register.php\"><span class=\"glyphicon glyphicon-log-in\"></span>inscriptions</a></li>";
            }
            /*echo "<br>";
            echo password_hash("minet", PASSWORD_DEFAULT);*/
      ?>
    </ul>
  </div>
</nav>
