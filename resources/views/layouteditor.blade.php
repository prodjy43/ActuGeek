<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Actu du geek</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../css/app.css">
        <link rel="stylesheet" href="../css/unsemantic-grid-responsive-tablet.css">
        <link rel="stylesheet" href="../css/font-awesome.css">
    </head>

    <body>

        <nav class="nav hide-on-mobile hide-on-tablet">
            <ul>
                <li><a href="#">Gérer les actualités</a></li>
                <li><a href="#">Ajouter un rédacteur</a></li>
                <li><a href="/admin/logout">Déconnexion</a></li>
            </ul>
        </nav>
        <nav class="nav-mobile hide-on-desktop">
            <h1><span class="bold">ACTU</span><span class="thin">GEEK</span></h1>
            <ul>
                <li><a href="#">Gérer les actualités</a></li>
                <li><a href="#">Ajouter un rédacteur</a></li>
                <li><a href="/admin/logout">Déconnexion</a></li>
            </ul>
        </nav>
        
            @yield('content')
        
        <script src="../js/jquery.js"></script>
        <script src="../js/app.js"></script>
    </body>
</html>
