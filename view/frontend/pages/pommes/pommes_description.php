

<?php ob_start(); ?>
    <article id="qui_sommes_nous" class="article">
        <h2>Qui sommes-nous ?</h2>
        <section>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora suscipit vel quam, deserunt fugit assumenda molestias recusandae in, adipisci at asperiores commodi pariatur consequuntur mollitia nostrum et repudiandae consectetur culpa. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque dolorum perferendis, fugit, nam excepturi quidem facere praesentium id, ullam voluptas nobis explicabo eum odio corrupti consequuntur quam eaque. Minus, accusamus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore amet sequi totam quia quidem at blanditiis error quod doloremque exercitationem repudiandae ducimus, commodi dolore aliquam magni magnam aperiam nisi consequuntur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quis exercitationem tempora quae reiciendis temporibus! Nisi dicta nesciunt in! Est veniam numquam neque iure corporis fugit deleniti fuga asperiores itaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit reiciendis excepturi modi totam, nostrum nesciunt aspernatur itaque quaerat voluptatibus, voluptas architecto alias tempore deleniti consequuntur, sequi vitae assumenda eligendi esse. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, assumenda optio distinctio excepturi nulla iure deserunt adipisci exercitationem veritatis alias aliquid debitis nam explicabo commodi nihil deleniti ipsum mollitia similique. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolor, asperiores aut architecto reprehenderit pariatur non! Minus, praesentium iste aperiam pariatur ipsam dolore obcaecati veritatis dolorem omnis cumque ipsa reiciendis?</p>
        </section>

    </article>

    <article id="comment_travaillons_nous" class="article">
        <h2>Comment travaillons-nous</h2>
        <section>
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"> <img alt="" src="../contents/images/accueil/carousel/1.jpg"><p class="carousel-caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto aliquam porro nulla non accusamus labore qui quisquam? Dolorum ipsam neque sequi corporis ipsa consectetur nihil et dolor, voluptate, tempore repellendus.</p></div>
                    <div class="carousel-item"> <img alt="" src="../contents/images/accueil/carousel/2.jpg"></div>
                    <div class="carousel-item"> <img alt="" src="../contents/images/accueil/carousel/3.jpg"></div>
                    <div class="carousel-item"> <img alt="" src="../contents/images/accueil/carousel/4.jpg"></div>
                    <div class="carousel-item"> <img alt="" src="../contents/images/accueil/carousel/5.jpg"></div>
                    <div class="carousel-item"> <img alt="" src="../contents/images/accueil/carousel/6.jpg"></div>
                    <div class="carousel-item"> <img alt="" src="../contents/images/accueil/carousel/7.jpg"></div>
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



<?php require('view/frontend/pages/templates/template_pomme.php'); ?>
<?php require('view/frontend/pages/templates/template_pages.php'); ?>




