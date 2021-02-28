<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Délices d'Antibes</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
   
    <!-- CSS Files-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="assets/js/owl.carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/icofont/icofont.min.css" rel="stylesheet">
    <!-- CSS Main File -->
    <link href= "assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-phone"></i><a href="tel:06 18 26 71 00"> 06 18 26 71 00<a>
                <span class="d-none d-lg-inline-block"><i class="icofont-clock-time"></i>  Lun -Ven : 12:00-14:30&19:30-23:30 / Samedi : 19:30-23:30 / Dimanche Fermé</span>
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
            <nav class="nav-menu d-none d-lg-block ">
            <ul >
                    <li class="active"><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="#apropos" >À propos</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#evenement">Événements</a></li>
                    <li><a href="#chefs">Chefs</a></li>
                    <li><a href="#galerie">Galerie </a></li>
                    <li><a href="#contact" >Contact</a></li>
                    <li class="sign text-center"><a href="{{route('register')}}"> S'inscrire</a></li>
                    <li class="sign text-center"><a href="{{ url('login') }}">Se connecter</a></li>
            </ul>
            </div>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- Fin Header -->

    @yield('content')

        <!-- ======= Footer ======= -->
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
                            <div class="social-links mt-3 ml-5">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
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

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

    <!-- JS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/owl.carousel/owl.carousel.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>