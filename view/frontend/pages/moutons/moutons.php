<?php ob_start(); ?>
    <img src="" alt="" class="logo">
<?php $logo = ob_get_clean(); ?>

<?php ob_start(); ?>
    <h1 id="title_page">Nos Moutons</h1>
<?php $title_page = ob_get_clean(); ?>

<?php ob_start(); ?>
    <ul>
        <li><span class="pointer internal_link" data-article-id="qui_sommes_nous">Description</span></li>
        <li><span class="pointer internal_link" data-article-id="gamme_moutons">Gamme</span></li>
        <li><span class="pointer internal_link" data-article-id="visite">Visite</span></li>
        <li><span class="pointer internal_link" data-article-id="infos">Infos</span></li>
    </ul>
<?php $sub_menu = ob_get_clean(); ?>



<?php ob_start(); ?>
    <article id="description" class="article">
        <h2>Description</h2>
        <section></section>
    </article>
    <article id="gamme_moutons" class="article">
        <h2>Gamme</h2>
        <section></section>
    </article>
    <article id="visite" class="article">
        <h2>Visite</h2>
        <section></section>
    </article>
    <article id="infos" class="article">
        <h2>Info</h2>
        <section></section>
    </article>
<? $content = ob_get_clean(); ?>


<?php require('view/frontend/pages/templates/template_pages.php'); ?>