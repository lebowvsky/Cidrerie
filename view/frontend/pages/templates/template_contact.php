<?php ob_start(); ?>
    
<?php $logo = ob_get_clean(); ?>


<?php ob_start(); ?>
    <h1 id="title_page">Contact</h1>
<?php $title_page = ob_get_clean(); ?>

<?php require('view/frontend/pages/templates/template_pages.php'); ?>