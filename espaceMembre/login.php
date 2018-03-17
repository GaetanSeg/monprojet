<?php

if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['Password']))
{
	require_once 'inc/db.php';
	require_once 'inc/functions.php';

	$req = $pdo->prepare( 'SELECT * FROM users WHERE username = :username OR email = :username');
	$reqConf= $pdo->prepare( 'SELECT * FROM users WHERE confirmed_at IS not null');
	$req->execute(['username' => $_POST['username']]);
	$reqConf->execute(['username' => $_POST['username']]);
	$user = $req->fetch();

	if(Password_verify($_POST['Password'],$user->password ))
	{
		session_start();
		$_SESSION['auth'] = $user;
		$_SESSION['flash']['success'] = " Vous êtes maintenant connecter ";
		header('location:account.php');
		exit();
	}
	else {

		$_SESSION['flash']['danger'] = "Indentidiant ou mot de passe Incorrecte !";}
}


  ?>


<?php require 'inc/header.php'; ?>

	<h1>Connexion</h1>


	<form action="" method="post" >

		<div class="form-group">

			<label for="">Pseudo ou Email*</label>
			<input type="text" name="username" class="form-control" required />

		</div>

		<div class="form-group">

			<label for="">Mot de passe* </label>
			<input type="Password" name="Password" class="form-control" required/>

		</div>

		<button type="submit" class="btn btn-primary">Connexion</button>

	</form>

<?php require 'inc/footer.php'; ?>
