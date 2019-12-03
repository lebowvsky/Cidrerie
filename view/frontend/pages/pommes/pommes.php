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
        <li><span class="pointer internal_link" data-article-id="visites">Visites</span></li>
        <li><span class="pointer internal_link" data-article-id="infos">Infos</span></li>
    </ul>
<?php $sub_menu = ob_get_clean(); ?>




<?php ob_start(); ?>
    <article id="qui_sommes_nous" class="visible_article" class="article">
        <h2>Qui sommes-nous ?</h2>
        <section>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis itaque quasi nobis earum sunt. Delectus, blanditiis itaque, optio iusto culpa deleniti ea hic eveniet modi fugiat sit quod cum ipsa! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere quis quos atque! Quibusdam, dolorum! Magni, ut! Suscipit nihil pariatur ut consequuntur dolorum numquam debitis libero. Odio aut fuga possimus mollitia? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia delectus nemo cumque labore, laborum reiciendis repellendus assumenda mollitia, totam, vitae minus commodi id qui explicabo vero. Rerum natus sint omnis!</p>
        </section>

    </article>

    <article id="comment_travaillons_nous" class="article">
        <h2>Comment travaillons-nous</h2>
        <section>
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img alt="" src="../contents/images/accueil/carousel/1.jpg">
                        <div class="carousel-caption">
                            <h3>Janvier</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quam eligendi adipisci ipsa maxime fuga eius est distinctio, impedit animi quibusdam cum odit natus placeat consectetur incidunt pariatur consequatur? Corporis.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img alt="" src="../contents/images/accueil/carousel/2.jpg">
                        <div class="carousel-caption">
                            <h3>Mars</h3>
                            <p>Nesciunt adipisci sed fugiat alias impedit veritatis, est mollitia dignissimos nam. Voluptatum accusantium quam fugiat dolor, reiciendis ullam recusandae laboriosam inventore officia?</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img alt="" src="../contents/images/accueil/carousel/3.jpg">
                        <div class="carousel-caption">
                            <h3>Avril</h3>
                            <p>Laborum eum ducimus quam vitae laboriosam velit atque et quidem quibusdam, odit sed labore illo assumenda suscipit adipisci nam maxime dolorem autem!</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img alt="" src="../contents/images/accueil/carousel/5.jpg">
                        <div class="carousel-caption">
                            <h3>Juin</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum sunt labore mollitia doloremque veritatis repudiandae omnis dignissimos ab odio aspernatur blanditiis molestiae, quae reiciendis et laudantium illo quisquam minima libero!</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img alt="" src="../contents/images/accueil/carousel/6.jpg">
                        <div class="carousel-caption">
                            <h3>Aout</h3>
                            <p>Culpa vero odit officia eveniet atque doloribus modi asperiores. Vero dignissimos placeat vel amet nesciunt ullam omnis obcaecati?</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img alt="" src="../contents/images/accueil/carousel/7.jpg">
                        <div class="carousel-caption">
                            <h3>Septembre</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet porro quasi illo nobis ratione debitis adipisci nulla expedita voluptas sunt nisi, recusandae delectus. Rem tempore qui est repellat quod asperiores.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </section>
    </article>

    <article id="gamme_pommes" class="article">
        <h2>Notre gamme</h2>
        <div id="sub_sub_menu">
            <ul>
                <li><span class="pointer sub_internal_link color-red" data-gamme-id="jus">Jus</span></li>
                <li><span class="pointer sub_internal_link" data-gamme-id="cidre">Cidre</span></li>
                <li><span class="pointer sub_internal_link" data-gamme-id="pommeau">Pommeau</span></li>
                <li><span class="pointer sub_internal_link" data-gamme-id="fine">Fine</span></li>
            </ul>
        </div>
        <section id="jus" class="section visible_section">
            <div class="drink-item">
                <img src="/contents/images/nos_pommes/gamme/8802810200094.png" alt="photo de jus">
                <div class="item-text">
                    <h4>Jus de pomme</h4>
                    <p>Explication du nom. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus illum ab temporibus beatae aperiam consequatur enim veniam architecto? Saepe autem quo laboriosam voluptate vel doloribus ea quae hic sint quod.</p>
                    <p>Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus aperiam nisi, exercitationem provident iure quae et, enim aliquid ducimus fugiat qui molestiae molestias velit pariatur reiciendis rem minima! Accusamus, quasi!</p>
                    <p>Infos produit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil provident explicabo optio atque asperiores corporis, ipsam, doloremque quae ab tenetur dolor! Doloribus molestias, porro vitae asperiores ducimus accusantium impedit laborum!</p>
                </div>
            </div>

            <div class="drink-item">
                <img src="/contents/images/nos_pommes/gamme/jusdepomme.png" alt="photo de jus">
                <div class="item-text">
                    <h4>Autre jus de pomme</h4>
                    <p>Explication du nom. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus illum ab temporibus beatae aperiam consequatur enim veniam architecto? Saepe autem quo laboriosam voluptate vel doloribus ea quae hic sint quod.</p>
                    <p>Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus aperiam nisi, exercitationem provident iure quae et, enim aliquid ducimus fugiat qui molestiae molestias velit pariatur reiciendis rem minima! Accusamus, quasi!</p>
                    <p>Infos produit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil provident explicabo optio atque asperiores corporis, ipsam, doloremque quae ab tenetur dolor! Doloribus molestias, porro vitae asperiores ducimus accusantium impedit laborum!</p>
                </div>
            </div>
        </section>

        <section id="cidre" class="section invisible_section">
            <h3>Cidre</h3>  
        </section>

        <section id="pommeau" class="section invisible_section">
            <h3>Pommeau</h3>
        </section>

        <section id="fine" class="section invisible_section">
            <h3>Fine</h3>
        </section>
    </article>

    <article id="visites" class="article">
        <h2>Visites</h2>
        <section>
            <div id="deroulement-visites" class=".visites-item">
                <h3>Déroulement des visites</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima incidunt, ea natus reprehenderit pariatur quia similique quo distinctio! Voluptatibus fuga nulla eveniet a culpa facilis, minus dolorum ea et eos.</p>
            </div>

            <div id="infos-pratiques" class=".visites-item">
                <h3>Infos pratiques</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis qui facilis cumque est, consequuntur molestias praesentium illo perspiciatis, aliquam quisquam beatae, nemo iure? Delectus, deserunt cupiditate deleniti voluptas voluptatum odio!</p>
            </div>

            <div id="logos-divers" class=".visites-item">
                <img src="contents/images/nos_pommes/visites/agri_bio.png" alt="A.B.">
                <img src="contents/images/nos_pommes/visites/routard.png" alt="Guide du routard">
                <img src="contents/images/nos_pommes/visites/lonely_planet.png" alt="Lonely Planet">
            </div>

            <div id="agenda" class=".visites-item">
                <h3>Agenda</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, culpa. Nulla, vel eius adipisci fuga eligendi sit nostrum eos eum aperiam ad earum, ab at dolore dignissimos nisi a culpa.</p>
            </div>
        </section>
    </article>

    <article id="infos" class="article">
        <h2>Infos</h2>
        <section>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nihil similique vel aut iusto et voluptatem tempore cumque harum optio earum, quibusdam reprehenderit expedita, nesciunt quae illo obcaecati nulla atque?</p>
        </section>
    </article>

<?php $content = ob_get_clean(); ?>




<?php require('view/frontend/pages/templates/template_pages.php'); ?>




