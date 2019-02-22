<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="media/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>@yield('title', 'Kevin Langlois')</title>
    @include('style')
    @include('script')
</head>

<body>
    
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
                    <a class="navLink souligner" href="/">Accueil</a>
                    <a class="navLink souligner" href="/projets">Projets</a>
                    <a class="navLink souligner" href="/apropos">À propos</a>
                    <a class="navLink souligner" href="/contact">Contact</a>
                </nav>
                </div>
                <div class="menuSocial">
                    <ul class="social">
                        <li class="socialItem"><a href="https://www.linkedin.com/in/k-langlois"><i class="fab fa-linkedin"></i></a></li>
                        <li class="socialItem"><a href="https://github.com/Kelang"><i class="fab fa-github"></i></a></li>
                    </ul>
                </div>
        
            </div>



    @yield('content')
</body>
</html>