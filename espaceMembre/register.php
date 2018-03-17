
<?php
require'inc/functions.php';
session_start();

 	if (!empty($_POST)) 
	{
		$errors = array();
		 require'inc/db.php';

		if (empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/',$_POST['username'])) 
		{
			$errors['username'] = "Votre Pseudo n'est pas valide";	
		}
		else
		{
			$req=$pdo->prepare('SELECT id FROM users WHERE username = ?');
			$req->execute([$_POST['username']]);
			$user = $req->fetch();

			if($user)
			{
				$errors['username'] ="Ce Nom d'utilisateurs est déja pris";
			}
		}

		if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
			$errors['email'] = "Votre email n'est pas valide ";
		}
				else
		{
			$req=$pdo->prepare('SELECT id FROM users WHERE email = ?');
			$req->execute([$_POST['email']]);
			$user = $req->fetch();

			if($user)
			{
				$errors['Email'] ="Cet email est déjà utilisé pour un autre compte" ;
			}
		}
		
		if (empty($_POST['Password']) || $_POST['Password'] != $_POST['password_confirm']) 
		{
			$errors['Password'] = "Vous devez rentrer un mot de passe valide ";
		}

		if(empty($errors))
		{

			
			$req=$pdo->prepare("INSERT INTO users SET username = ?, Password = ?,email= ?, confirmation_token= ?");
			$Password = password_hash($_POST['Password'],PASSWORD_BCRYPT);
			$token = str_random(60);
			$req->execute([$_POST['username'],$Password,$_POST['email'],$token]);
			$user_id = $pdo->lastInsertId();
			ini_set('sendmail_from', 'Admin@root.com'); 
			mail($_POST['email'],"Confirmation de votre compte","Afin de confirmé la validation de votre compte cliquer sur ce lien\n\nhttp://localhost/espaceMembre/confirm.php?id=$user_id=$user_id&token=$token");
			$_SESSION['flash']['success'] = "Un email de confirmation vous à été envoyé à l'adresse suivante";
			header('location:login.php');
			exit();

		}

		
	}



 ?>
 <?php require'inc/header.php'; ?>

<h1> Inscription </h1>

<?php if(!empty($errors)): ?>

<div class="alert alert-danger">

	<p>Vous n'avez pas rempli le formulaire correctement </p>
	<ul>

	<?php foreach ($errors as $error): ?>

		<li><?=$error;?></li>

	<?php endforeach;  ?> 

	</ul>

</div>

<?php endif;?>


<form action="" method="post" >
	
	<div class="form-group">
		
		<label for="">Pseudo*</label>
		<input type="text" name="username" class="form-control" required />

	</div>
	<div class="form-group">
		
		<label for="">Email*</label>
		<input type="text" name="email" class="form-control" required/>

	</div>
	<div class="form-group">
		
		<label for="">Mot de passe* </label>
		<input type="Password" name="Password" class="form-control" required/>

	</div>
	<div class="form-group">
		
		<label for="">Confirmez votre mot de passe* </label>
		<input type="Password" name="password_confirm" class="form-control" required/>

	</div>

	<button type="submit" class="btn btn-primary">Inscription</button>

</form>

<?php require'inc/footer.php'; ?>