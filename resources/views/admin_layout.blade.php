<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="/media/favicon.ico"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>@yield('title', 'Kevin Langlois')</title>
</head>

<body>
    <div id="burgerMenuBar"></div>
    <div id="BurgerMenuWrapper">
            <div class="BurgerMenu menu">
                <input type="checkbox" class="checkBurger">
                <div class="BurgerMenuLine line1"></div>
                <div class="BurgerMenuLine line2"></div>
                <div class="BurgerMenuLine line3"></div>
            </div>
        </div>
    
        <div id="side-menu" class="MenuContainer ">
            <div>
            <nav class="navContainer">
                <a class="navLink souligner" href="/projets">Liste des projets</a>
                <a class="navLink souligner" href="/projets/create">Créer</a>
            </nav>
            </div>
    
        </div>

    @yield('content')
    <footer>
        <span>© Kevin Langlois - Portfolio 2019</span>
    </footer>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</html>