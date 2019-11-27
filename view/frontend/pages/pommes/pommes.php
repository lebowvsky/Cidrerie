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
        <h2>Notre gamme de pommes</h2>
        <section>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eos perspiciatis blanditiis qui, repudiandae veniam, recusandae vero, exercitationem ex quidem quibusdam. Illo quo laborum, assumenda incidunt reprehenderit placeat fuga rem!</p>
        </section>
    </article>

    <article id="visite" class="article">
        <h2>Visite</h2>
        <section>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dicta provident odio voluptates autem iure laborum perspiciatis necessitatibus, molestiae amet voluptas blanditiis repudiandae dolores quae iusto sed omnis. Id, ab.</p>
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




