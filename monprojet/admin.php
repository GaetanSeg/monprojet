<?php $title = 'PHP projet'; ?>
<?php ob_start(); ?>

<h3>Panneau d'administration</h3>

<?php require 'tools/queryChangeUser.php'; ?>

<?php $content = ob_get_clean(); ?>
<?php include 'include\layout.php'; ?>
