<?php ob_start(); ?>
 <style type="text/css">
    #hamburger {display: none;}
 </style>
 <?php $css = ob_get_clean(); ?>

<?php ob_start(); ?>
    <img src="" alt="" class="logo">
<?php $logo = ob_get_clean(); ?>


<?php ob_start(); ?>
    <h1 id="title_page">Contact</h1>
<?php $title_page = ob_get_clean(); ?>

<?php ob_start(); ?>
    <div id="contact">
        <address>
            <p>Guillaume Juttier<br>
            Les Vergers de la Ferme<br>
            La Cochardais<br>
            35 470 Bain de Bretagne</p>

            <a id="mail" href="mailto:contact@cidrerie-bain.fr">contact@cidrerie-bain.fr</a>
            <a id="phone" href="tel:+33620538566">06 20 53 85 66</a>
        </address>

        <i id="map-link" class="fas fa-map-marked-alt fa-4x"></i><br>

        <div id="google-map-div" class="map-close">
            <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d669.5993965990012!2d-1.7090955707020707!3d47.8318904987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f17ca07d2b3eb%3A0x47846e4b0868a953!2sLes%20Vergers%20de%20la%20Ferme!5e0!3m2!1sfr!2sfr!4v1575585730098!5m2!1sfr!2sfr" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        <a href="https://www.facebook.com/cidre.baindebretagne/" title="facebook link"><i class="fab fa-facebook fa-4x"></i></a>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/pages/templates/template_pages.php'); ?>