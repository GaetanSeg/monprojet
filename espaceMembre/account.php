<?php
	session_start() ;
	require 'inc/functions.php';

?>

<?php require 'inc/header.php'; ?>

<h1>Bienvenue sur votre compte </h1>

<?php debug($_SESSION);  ?>

<?php require 'inc/footer.php'; ?>