<?php $title = 'Index'; ?>
<?php ob_start(); ?>

<h3>Panneau d'administration</h3>
<ul>
  <li>test</li>
  <li>test</li>
</ul>

<?php $content = ob_get_clean(); ?>
<?php include 'include\layout.php'; ?>
