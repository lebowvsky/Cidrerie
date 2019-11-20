<?php ob_start(); ?>
    <img src="contents/images/nos_pommes/logo_pomme.png" alt="pomme" class="logo">
<?php $logo = ob_get_clean(); ?>


<?php ob_start(); ?>
    <h1 id="title_page">Nos Pommes</h1>
<?php $title_page = ob_get_clean(); ?>



<?php ob_start(); ?>
    <ul>
        <li><span class="pointer internal_link" data-article-id="qui_sommes_nous">Qui sommes-nous</span></li>
        <li><span class="pointer internal_link" data-article-id="comment_travaillons_nous">Comment travaillons-nous</span></li>
        <li><span class="pointer internal_link" data-article-id="gamme_pommes">Gamme</span></li>
        <li><span class="pointer internal_link" data-article-id="visite">Visite</span></li>
        <li><span class="pointer internal_link" data-article-id="infos">Infos</span></li>
    </ul>
<?php $sub_menu = ob_get_clean(); ?>