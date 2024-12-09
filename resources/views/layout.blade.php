<!DOCTYPE html5>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        @yield('head')
    </head>
    <body>
        <header>
            <div class="first-line">
                <a href="{{route('usagers.login')}}">connexion</a>
                <span class="separator"></span>
                <a href="{{route('usagers.singup')}}">inscription</a>
            </div>
            <div class="second-line">
                <a href="/"><span class="logo">STEAM3R</span></a>
                <nav class="menu">
                    <a href="/" class="active">MAGASIN</a>
                    <a href="#">EQUIPE</a>
                    <a href="#">CATEGORIE</a>
                </nav>
            </div>
        </header>
        <div id="content">
            @yield('content')
        </div>
        <footer>
            @yield("footer")
            <p>
                © 2024 Valve Corporation. Tous droits réservés. Toutes les marques commerciales sont la propriété de leurs titulaires au Canada et dans d'autres pays.
                TVA incluse pour tous les prix (le cas échéant).
            </p>

        </footer>
    </body>
</html>
