<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4f82ba7452.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/frontend/pages/style_pages_bundle_min.css">
    <?= $css ?>
    <title>Nos pommes</title>
</head>
<body>

    <header>
        <img src="../contents/images/accueil/logo/logo_noir.png" alt="logo cidrerie" id="main_logo">
        <div id="logo_and_title">
            <?= $logo ?>
            <?= $title_page ?>
        </div>
        
    </header>

    <nav id="main_menu">
        <ul>
            <li><a href="/index.php?action=accueil">Accueil</a></li>
            <li><a href="/index.php?action=pommes">Pommes</a></li>
            <li><a href="/index.php?action=moutons">Moutons</a></li>
            <li><a href="/index.php?action=contact">Contact</a></li>
            <li><a href="#">Autour de nous</a></li>
        </ul>
    </nav>

    <div id="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </div>


    <div id="submenu">
        <?= $sub_menu ?>
    </div>

    <main>
        <?= $content ?>
    </main>

    <!-- <footer>
        <p>footer</p>
    </footer> -->


    <script src="../js/frontend/pages.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>