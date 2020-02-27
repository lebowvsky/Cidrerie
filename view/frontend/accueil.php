<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="production/css_production/frontend/style_accueil.css">
    <title>Document</title>
</head>
<body>

    <header>
        <img src="../contents/images/accueil/logo/logo_noir.png" alt="logo de la cidrerie"/>

        <div id="hamburger">
            <span class="line"></span>
        </div>
    </header>

    <nav id="hamburger_menu">
        <ul>
            <li><a href="index.php?action=pommes">Nos pommes</a></li>
            <li><a href="index.php?action=moutons">Nos moutons</a></li>
            <li><a href="index.php?action=contact">Contact</a></li>
            <li><a href="#">Autour de nous</a></li>
        </ul>
    </nav>

    
    <section id="carousel_photo">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active"> <img alt="" src="../contents/images/accueil/carousel/1.jpg"></div>
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

    <article id="actualites">
        <section class="actualites_item">
            <div class="front">
                <h2>Titre 1</h2>
                <p>date</p>
            </div>
            <div class="back">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At illo fugit laudantium neque sed vero tenetur minima aliquam maxime excepturi veritatis eius reprehenderit, optio a aut quasi omnis qui vitae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus pariatur molestiae iste qui illo mollitia culpa fuga unde enim rem laboriosam exercitationem corrupti eaque obcaecati error nobis sapiente, expedita repellendus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nulla hic ut voluptates qui doloremque maiores veritatis consectetur expedita omnis, et nobis magnam sapiente optio, tempore deleniti. Magni, iure eum.</p>
            </div>
        </section>
        <section class="actualites_item">
            <div class="front">
                <h2>Titre 2</h2>
                <p>date</p>
            </div>
            <div class="back">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum quaerat iusto ipsa sint ipsam, autem reiciendis exercitationem nesciunt est consequuntur at in quibusdam eligendi tempora, unde odit quam magni ducimus!</p>
            </div>
        </section>
        <section class="actualites_item">
            <div class="front">
                <h2>Titre 3</h2>
                <p>date</p>
            </div>
            <div class="back">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur modi earum veritatis deleniti numquam tenetur a quaerat perferendis velit quas, laboriosam maiores quasi aut inventore repellat soluta natus. Unde, consequuntur. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas officia tenetur veritatis nulla debitis iure laborum laboriosam saepe et ad ea, laudantium repudiandae facere aperiam fuga molestiae magni quidem ex.</p>
            </div>
        </section>
    </article>

    <!-- <section id="actualites">
        <div class="actualites_item"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, dignissimos alias? Eos, illo cumque sunt eum neque maiores id quo autem quisquam adipisci facere laboriosam exercitationem fugit vero quod nihil.</p></div>
        <div class="actualites_item"><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus facilis sapiente quod nam laudantium! Accusantium, minus commodi fugiat culpa dignissimos cumque reiciendis, labore, doloremque unde quod quibusdam nam. Totam, error! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non mollitia sequi reprehenderit in, inventore placeat sit explicabo, cupiditate vitae omnis facilis nihil beatae provident, nulla officiis eum impedit laudantium sed?</p></div>
        <div class="actualites_item"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, laudantium autem officia saepe eum iusto quod dolorum placeat facilis veniam, quae dignissimos molestiae! Rem nesciunt dolor qui maxime facere explicabo!</p></div>
    </section> -->

    <nav id="menu">
        <ul>
            <li class="menu_item">
                <a href="index.php?action=pommes">
                    <img src="../contents/images/accueil/menu/apple.png" alt="image de pomme"/>
                    <p>Nos pommes</p>
                </a>
            </li>

            <li class="menu_item">
                <a href="index.php?action=moutons">
                    <img src="../contents/images/accueil/menu/sheep-with-curly-wool.png" alt="image de mouton"/>
                    <p>Nos moutons</p>
                </a>
            </li>

            <li class="menu_item">
                <a href="index.php?action=contact">
                    <img src="../contents/images/accueil/menu/envelope-of-white-paper.png" alt="enveloppe"/>
                    <p>Contact</p>
                </a>
            </li>

            <li class="menu_item">
                <a href="#">
                    <img src="../contents/images/accueil/menu/about-us.png" alt="enveloppe"/>
                    <p>Autour de nous</p>
                </a>
            </li>
        </ul>
    </nav>

    <footer>
        <p>Footer</p>
    </footer>




    <script src="../js/frontend/accueil.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>