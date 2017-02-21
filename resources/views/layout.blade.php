<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Actu du geek</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">
        <link rel="stylesheet" href="css/font-awesome.css">
    </head>

    <body>

        <div class="banner hide-on-mobile hide-on-tablet">
            <h1><span class="bold">ACTU</span><span class="thin">GEEK</span></h1>
        </div>
        <nav class="nav hide-on-mobile hide-on-tablet">
            <ul>
                <li><a href="#">Actualités</a></li>
                <li><a href="#">Jeux vidéos</a></li>
                <li><a href="#">Mangas / Animes</a></li>
                <li><a href="#">Films & séries</a></li>
                <li><a href="#">Bon plans</a></li>
            </ul>
        </nav>
        <nav class="nav-mobile hide-on-desktop">
            <h1><span class="bold">ACTU</span><span class="thin">GEEK</span></h1>
            <ul>
                <li><a href="#">Actualités</a></li>
                <li><a href="#">Jeux vidéos</a></li>
                <li><a href="#">Mangas / Animes</a></li>
                <li><a href="#">Films & séries</a></li>
                <li><a href="#">Bon plans</a></li>
            </ul>
        </nav>
        
            @yield('content')
        
        <footer>
            <div class="grid-container">
                <div class="grid-50">
                    <h3>A propos d'Actu Geek</h3>
                    <p>Actu Geek est un webzine sur toutes les actualités geek ou technologiques. : les nouvelles technologies, les produits mobiles, l'univers manga et la culture geek.</p>
                </div>
                <div class="grid-50">
                    <h3>Réseaux sociaux</h3>
                    <p>
                        <a href="#" class="social twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social google-plus"><i class="fa fa-google-plus"></i></a>
                    </p>
                </div>
                <div class="grid-100 copyright"><p>Copyright&copy; <a href="actu-du-geek.com">actu-du-geek.com</a> all right reserved</p></div>
            </div>
        </footer>
        <script src="js/jquery.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
