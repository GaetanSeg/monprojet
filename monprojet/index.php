<?php $title = 'Index'; ?>
<?php ob_start(); ?>

<form >
  <input type="text">
</form>

<?php $content = ob_get_clean(); ?>

<?php include 'include/layout.php' ?>
