@extends('layouts.header&footer')
@section('content')

    <!-- =======  Section Accueil ======= -->
    <section id="accueil" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>CHEZ<span> DÉLICES D'ANTIBES </span></h1>
                    <h2>DES TRÉSORS GUSTATIFS & UNE AMBIANCE CONTEMPORAINE</h2>
                    <div class="btns">
                        <a href="{{ url('forum') }}" class="btn-menu animated fadeInUp ">Découvrir les témoignages</a>
                        <a href="{{ url('reserve') }}" class="btn-book animated fadeInUp ">Commandez</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                      <a href="#" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End accueil -->

    <main id="main" >

        <!-- =======  Section Apropos======= -->
        <section id="apropos" class="apropos">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="apropos-img">
                            <img src="assets/img/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Une ascension culinaire gourmande</h3>
                        <p class="font-italic">
                            Véritable pièce maîtresse, le restaurant gastronomique DÉLICES D'ANTIBES, fait partie des lieux emblématiques de la Côte d’Azur.
                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i> Toute notre équipe vous accueille dans notre restaurant au cadre chaleureux et convivial. Nous mettons également à votre disposition un espace privé pour vos réceptions. Vous pourrez y
                                déguster des produits frais et locaux, ainsi que de la viande, du poisson, des salades et autres mets.
                            </li>
                            <li><i class="icofont-check-circled"></i> Nos plats sont élaborés à partir de produits frais, de viandes sélectionnées et de poissons frais. Plusieurs menus vous sont proposés, dont un menu enfant et un plat du jour. En dehors
                                de la carte, quatre plats vous sont suggérés tous les jours sur notre ardoise. Pour vos apéritifs, vous trouverez des tapas, des planches de charcuteries et de fromages.
                            </li>
                        </ul>
                        <p>
                            Vous apprécierez pleinement les senteurs et saveurs méditerranéennes dans l’un des restaurants gastronomiques les plus prisés de la Côte d’Azur.
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- Fin Section Apropos -->

        <!-- =======Section  pourquoi-nous  ======= -->
        <section id="pourquoi-nous" class="pourquoi-nous">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pourquoi</h2>
                    <p>Pourquoi choisir notre restaurant</p>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span>01</span>
                            <h4>Des plats originaux et succulents</h4>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="200">
                            <span>02</span>
                            <h4>Un meilleur endroit pour s’évader</h4>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <span>03</span>
                            <h4>Un lieu adapté à tout événement</h4>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- Fin Section  Pourquoi-nous-->

        <!-- ======= Section Menu ======= -->
        <section id="menu" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Menu</h2>
                    <p>Consultez notre menu savoureux</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">Tout</li>
                            <li data-filter=".filter-starters">Entrées</li>
                            <li data-filter=".filter-salads">Salades</li>
                            <li data-filter=".filter-specialty">Spécialités</li>
                        </ul>
                    </div>
                </div>

                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Bisque</a><span>15.95€</span>
                        </div>
                        <div class="menu-ingredients">
                        Homards, oignon, ail, céleri,thym
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/menu/cotedeboeuf.png" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Côte de boeuf rôtie</a><span>16.95€</span>
                        </div>
                        <div class="menu-ingredients">Côte de boeuf, créme de butternut et sauce à l'ail confite 

                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/menu/cake1.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Salade de fruits</a><span>17.95€</span>
                        </div>
                        <div class="menu-ingredients">
                           variétes de fruits de la saison
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Salade cesar</a><span>12.95€</span>
                        </div>
                        <div class="menu-ingredients">
                         Blancs de poulet,laitue, tomates cerises, croûtons, parmesan
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/menu/meat.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Magret de canard </a><span>19.95€</span>
                        </div>
                        <div class="menu-ingredients">Magret de Canard, échalote, porto, crème
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-starters">
                        <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Tomates mozarella en feuilleté</a><span>9.95€</span>
                        </div>
                        <div class="menu-ingredients">
                        Tomates, mozarella, feuilleté
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Salade Grecque</a><span>12.95€</span>
                        </div>
                        <div class="menu-ingredients">
                        Tomates, concombres, ognions rouges, olives
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-salads">
                        <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Salade d'épinards au parmesan </a><span>19.95€</span>
                        </div>
                        <div class="menu-ingredients">Epinards, tomates cerise, parmesan frais,citron
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-specialty">
                        <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
                        <div class="menu-content">
                            <a href="#">Lobster roll</a><span>12.95€</span>
                        </div>
                        <div class="menu-ingredients">
                        Chair de homard décortiquée, laitue,cibouette fraîche, céleri,oeufs
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- Fin Section Menu-->

        <!-- ======= Section Evenements ======= -->
        <section id="evenement" class="menu section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Évènements</h2>
                    <p>Organisez vos événements dans notre restaurant</p>
                </div>

                <div class="owl-carousel evenements-carousel" data-aos="fade-up" data-aos-delay="100">
                    <div class="row evenements-item">
                        <div class="col-lg-6">
                            <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Anniversaires</h3>
                            <div class="price">
                                <p><span>189€</span></p>
                            </div>
                            <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <ul>
                                <li><i class="icofont-check-circled"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. </li>
                                <li><i class="icofont-check-circled"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li><i class="icofont-check-circled"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                    </div>

                    <div class="row evenements-item">
                        <div class="col-lg-6">
                            <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Soirées privées</h3>
                            <div class="price">
                                <p><span>290€</span></p>
                            </div>
                            <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <ul>
                                <li><i class="icofont-check-circled"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li><i class="icofont-check-circled"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li><i class="icofont-check-circled"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                    </div>

                    <div class="row evenements-item">
                        <div class="col-lg-6">
                            <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Soirées personnalisées</h3>
                            <div class="price">
                                <p><span>99€</span></p>
                            </div>
                            <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <ul>
                                <li><i class="icofont-check-circled"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li><i class="icofont-check-circled"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li><i class="icofont-check-circled"></i>  Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- Fin Section Evenements -->


        <!-- ======= Section Témoignages ======= -->
        <section id="temoignages" class="temoignages section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Témoignages</h2>
                    <p>Ce qu'ils disent de nous !</p>
                </div>
                <div class="owl-carousel temoignages-carousel" data-aos="zoom-in" data-aos-delay="100">

                    <div class="temoignages-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i> 
                            L'accueil est toujours extraordinaire , le service impeccable , le sourire naturel. La pièce de boeuf Angus , délicieuse , tendre et savoureuse .Accompagnée de belles frites blondes et chaudes.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/temoignages/temoignages-1.jpg" class="temoignages-img" alt="">
                        <h3>Térence F.</h3>
                    </div>
                    <div class="temoignages-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i> 
                                A real treat. Succulent and perfectly cooked meats! A very well prepared fish! A top-notch and personalized welcome! We highly recommend! You can go there with your eyes closed!
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/temoignages/temoignages-2.jpg" class="temoignages-img" alt="">
                        <h3>Sarah D.</h3>
                    </div>
                    <div class="temoignages-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>Sans aucun doute un des plus bons restaurants de la ville, un service majestueux avec des produits frais, l'amour de la cuisine dans une assiette ! Les prix sont largement plus qu'abordables
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/temoignages/temoignages-3.jpg" class="temoignages-img" alt="">
                        <h3>Haifa E.</h3>
                    </div>
                    <div class="temoignages-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>Un service attentionné et sympathique, une courte carte des vins, mais
                            des vins bien choisis, un prix raisonnable pour la qualité offerte.                     
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/temoignages/temoignages-4.jpg" class="temoignages-img" alt="">
                        <h3>Matt Brandon</h3>
                    </div>
                    <div class="temoignages-item">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i> Un accueil chaleureux qui met tout de suite à l'aise. On a l'impression d'être des habitués.
                            Les plats sont bons, gouteux et beaux.
                            Le service et les explications sont très professionnels.
                            Restaurant à recommander. 
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/temoignages/temoignages-5.jpg" class="temoignages-img" alt="">
                        <h3>John Larson</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fin Section Témoignages -->


        <!-- ======= Section Chefs  ======= -->
        <section id="chefs" class="chefs">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Chefs</h2>
                    <p>Nos Chefs Professionnels</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Philippe Etchebest</h4>
                                    <span>Chef cuisinier</span>
                                </div>
                                <div class="social">
                                    <a href="https://twitter.com/chef_etchebest?lang=fr"><i class="icofont-twitter"></i></a>
                                    <a href="https://m.facebook.com/Chef.Etchebest/?locale2=fr_FR"><i class="icofont-facebook"></i></a>
                                    <a href="https://www.instagram.com/chef.etchebest/?hl=fr"><i class="icofont-instagram"></i></a>
                                    <a href="https://www.linkedin.com/company/philippe-etchebest/?originalSubdomain=fr"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Jessica Préalto</h4>
                                    <span>Chef Pâtissier</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Norbert Tarayre </h4>
                                    <span>Second de cuisine</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- Fin Section Chefs-->


        <!-- ======= Section  Galerie======= -->
        <section id="galerie" class="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Galeris</h2>
                    <p>Quelques photos de notre restaurant</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

<div class="row no-gutters">

  <div class="col-lg-3 col-md-4">
    <div class="gallery-item">
      <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
        <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-md-4">
    <div class="gallery-item">
      <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
        <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-md-4">
    <div class="gallery-item">
      <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
        <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-md-4">
    <div class="gallery-item">
      <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
        <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-md-4">
    <div class="gallery-item">
      <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
        <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-md-4">
    <div class="gallery-item">
      <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
        <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-md-4">
    <div class="gallery-item">
      <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
        <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
      </a>
    </div>
  </div>

  <div class="col-lg-3 col-md-4">
    <div class="gallery-item">
      <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
        <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
      </a>
    </div>
  </div>

</div>
            </div>
        </section>
        <!-- Fin Section Galerie -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contactez-nous</p>
                </div>
            </div>

            <div data-aos="fade-up">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5780.877260874337!2d7.115122340772548!3d43.57657922359945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd5676cb3adaf%3A0x967370145138c716!2s15%20Avenue%20du%20Grand%20Pin%2C%2006600%20Antibes!5e0!3m2!1sfr!2sfr!4v1613077197442!5m2!1sfr!2sfr"
                    width="100%" height="350px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Adresse:</h4>
                                <p> 15 Avenue du grand pin<br> 06600 Antibes</p>
                            </div>

                            <div class="open-hours">
                                <i class="icofont-clock-time icofont-rotate-90"></i>
                                <h4> Horaires d'ouverture:</h4>
                                <p>
                                    Lun - Ven <br> 12:00 - 14:30 <br>19:30 - 23:30<br> Samedi <br> 19:30 - 23:30
                                    <br> Dimanche <br>Fermé
                                </p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>contact@delices-antibes.fr</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Téléphone:</h4>
                                <p> 06 18 26 71 00</p>
                            </div>

                        </div>

                    </div>
                     
          <div class="col-lg-8 mt-5 mt-lg-0">

                            <form action="" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nom complet" data-rule="minlen:6" data-msg="Veuillez saisir au moins 6 caractères" />
                                <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder=" Email" data-rule="email" data-msg="Veuillez saisir un e-mail valide" />
                                <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:8" data-msg="Veuillez saisir au moins 8 caractères" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="S'il vous plaît écrivez quelque chose pour nous" placeholder=" Commentaires"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Chargement</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Votre message a bien été envoyé. Nous vous répondrons rapidement. Merci !</div>
                            </div>
                            <div class=" offset-lg-5 col-lg-3 text-center"><button type="submit"> ENVOYEZ</button></div>
                            </form>
                            </div>
                </div>

            </div>
        </section>
        <!-- Fin Section Contact -->

    </main>
    <!-- Fin #main -->

@endsection