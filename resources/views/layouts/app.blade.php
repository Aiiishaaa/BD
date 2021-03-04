<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Délices d'Antibes</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   
    <!-- CSS Files-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="assets/js/owl.carousel/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/icofont/icofont.min.css') }}" >

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>
<body class="d-flex flex-column">

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex">
        <div class="contact-info mr-auto">
                <i class="icofont-phone"></i><a href="tel:06 18 26 71 00"> 06 18 26 71 00<a>
                <span class="d-none d-lg-inline-block"><i class="icofont-clock-time"></i>  Lun -Ven:12:00-14:30&19:30- 23:30 / Samedi : 19:30-23:30 / Dimanche Fermé</span>
            </div>
            <div class="offres  d-none d-lg-inline-block">
                <ul>
                    <li>
                        <i class="icofont-ui-check"></i> <span>Vente à emporter</span>
                    </li>
                    <li>
                        <i class="icofont-error"></i> <span>Repas Sur place</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto"><a href="{{ url('/') }}">Délices d'Antibes</a></h1>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="{{url('/') }}#apropos">À propos</a></li>
                    <li><a href="{{url('/') }}#menu">Menu</a></li>
                    <li><a href="{{url('/') }}#evenement">Événements</a></li>
                    <li><a href="{{url('/') }}#chefs">Chefs</a></li>
                    <li><a href="{{url('/') }}#galery">Galerie </a></li>
                    <li><a href="{{url('/') }}#contact">Contact</a></li>
                        @guest
                        <li class="sign text-center"><a href="{{ url('login') }}">Se connecter</a></li>
                            @if (Route::has('register'))
                            <li class="sign text-center"><a href="{{route('register')}}"> S'inscrire</a></li>
                            @endif
                        @else
                            <li  style ="color:Black;" class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a    class="dropdown-item" style ="color:white; background-color:#c69f51;" class="dropdown-item" href="{{ url('forum') }}"> 
                                    Gestion des commandes
                                    </a>
                                    <a    class="dropdown-item" style ="color:white; background-color:#c69f51;" class="dropdown-item" href="{{ url('reservation') }}"> 
                                    Gestion des réservations
                                    </a>
                                    <a    class="dropdown-item" style ="color:white; background-color:#c69f51;" class="dropdown-item" href="{{ url('forum') }}"> 
                                    Gestion des commentaires
                                    </a>
                                    <a   style ="color:white; background-color:#c69f51;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest       
                    
                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
   <body>
    @yield('content')
    </div>
  
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>DÉLICES D'ANTIBES</h3>
                            <p>
                                15 Avenue du grand pin <br> 06600 Antibes<br><br>
                                <strong>Téléphone:</strong> 06 18 26 71 00<br>
                                <strong>Email:</strong> contact@delices-antibes.fr<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3  col-sm-12 col-md-6 offset-lg-1 footer-links">
                        <h4>Accés rapide</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Conditions d'Utilisation </a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Mentions légales</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-sm-12 col-md-6 footer-newsletter">
                        <h4>Newsletters</h4>
                        <p>Veuillez saisir votre adresse email ci-dessous afin de recevoir les actualités.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Inscrivez-vous">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; 2021 <strong><span>DÉLICES D'ANTIBES</span>.</strong>Tous droits réservés.
            </div>

        </div>
    </footer>
    <!-- Fin Footer -->

    <!-- JS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>

