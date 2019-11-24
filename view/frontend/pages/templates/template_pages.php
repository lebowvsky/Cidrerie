<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4f82ba7452.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../production/css_production/frontend/pages/style_pages.css">
    <title>Nos pommes</title>
</head>
<body>

    <header>
        <img src="#" alt="logo cidrerie" id="main_logo">
        <div id="logo_and_title">
            <?= $logo ?>
            <?= $title_page ?>
        </div>
        
    </header>

    <nav id="main_menu">
        <ul>
            <li><a href="/index.php?action=accueil">Accueil</a></li>
            <li><a href="/index.php?action=pommes">Pommes</a></li>
            <li><a href="#">Moutons</a></li>
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
    
</body>
</html>