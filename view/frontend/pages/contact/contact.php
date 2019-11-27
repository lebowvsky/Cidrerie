<?php ob_start(); ?>
 <style type="text/css">
    #hamburger {display: none;}
 </style>

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
        <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6528.931850063268!2d-1.7067730389100175!3d47.83640807367243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f167645543f1d%3A0x4f713da3aa650433!2s21%20La%20Cochardais%2C%2035470%20Bain-de-Bretagne!5e0!3m2!1sfr!2sfr!4v1574609912805!5m2!1sfr!2sfr" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        <a href="https://www.facebook.com/"><i class="fab fa-facebook fa-4x"></i></a>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/pages/templates/template_pages.php'); ?>