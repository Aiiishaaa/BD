@extends('layouts.app')
@section('content')




<main id="main">
        <section class="breadcrumbs">
        </section>
        <section id="signup" class="signup">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                       <p><i class="icofont-computer"></i> Dashboard</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="social-box facebook">
                            <i class="icofont-facebook"></i>
                            <ul>
                                <li>
                                    <strong>256k</strong>
                                    <span>amis</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="social-box google-plus">
                            <i class="icofont-google-plus"></i>
                            <ul>
                                <li>
                                    <strong>962</strong>
                                    <span>abonnés</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="social-box twitter">
                            <i class="icofont-twitter"></i>
                            <ul>
                                <li>
                                    <strong>152k</strong>
                                    <span>abonnés</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                        <section class="panel">
                            <header class="panel-heading">
                                Table des membres
                            </header>
                </div>
                <div class="row">
                            <table class="table" >
                                <tbody>
                                    <tr>
                                        <th><i class=" icofont-user-alt-5"></i> NOM COMPLET</th>
                                        <th><i class="icofont-calendar "></i> MEMBRE DEPUIS</th>
                                        <th><i class="icofont-ui-email"></i> Email</th>
                                        <th><i class="icofont-star "></i>Nombre Réservation</th>
                                        <th><i class="icofont-ui-touch-phone"></i>N° de Téléphone</th>
                                        <th><i class="icofont-gears "></i> Action</th>
                                    </tr>
                                    <tr>
                                        <td>Haifa Elabed</td>
                                        <td>2019-02-10</td>
                                        <td>haifa@yahoo.fr</td>
                                        <td>14</td>
                                        <td>0625158475</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary" href="#"><i class="icofont-ui-zoom-in"></i></a>
                                                <a class="btn btn-success" href="#"><i class="icofont-check-circled"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icofont-close-circled"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>REMONDO HERMANN FLORIS</td>
                                        <td>2020-09-17</td>
                                        <td>hermann@gmail.com</td>
                                        <td>4</td>
                                        <td>0725154874</td>
                                        <td>
                                        <div class="btn-group">
                                                <a class="btn btn-primary" href="#"><i class="icofont-ui-zoom-in"></i></a>
                                                <a class="btn btn-success" href="#"><i class="icofont-check-circled"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icofont-close-circled"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Marine Laporte</td>
                                        <td>2021-01-06</td>
                                        <td>marine@yahoo.fr</td>
                                        <td>4</td>
                                        <td>0723625891</td>
                                        <td>
                                        <div class="btn-group">
                                                <a class="btn btn-primary" href="#"><i class="icofont-ui-zoom-in"></i></a>
                                                <a class="btn btn-success" href="#"><i class="icofont-check-circled"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icofont-close-circled"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dalia Marquez</td>
                                        <td>2011-12-15</td>
                                        <td>Dalia@yahoo.com</td>
                                        <td>3</td>
                                        <td>0785147521</td>
                                        <td>
                                        <div class="btn-group">
                                                <a class="btn btn-primary" href="#"><i class="icofont-ui-zoom-in"></i></a>
                                                <a class="btn btn-success" href="#"><i class="icofont-check-circled"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icofont-close-circled"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Khouira Sadouni</td>
                                        <td>2020-12-07</td>
                                        <td>khouira@outlook.fr</td>
                                        <td>2</td>
                                        <td>0615209000</td>
                                        <td>
                                        <div class="btn-group">
                                                <a class="btn btn-primary" href="#"><i class="icofont-ui-zoom-in"></i></a>
                                                <a class="btn btn-success" href="#"><i class="icofont-check-circled"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icofont-close-circled"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nicolas Mezailles</td>
                                        <td>2020-12-07</td>
                                        <td>nicolas@yahoo.fr</td>
                                        <td>2</td>
                                        <td>0725903197</td>
                                        <td>
                                        <div class="btn-group">
                                                <a class="btn btn-primary" href="#"><i class="icofont-ui-zoom-in"></i></a>
                                                <a class="btn btn-success" href="#"><i class="icofont-check-circled"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icofont-close-circled"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mickael Dalle-pasqualine</td>
                                        <td>2002-03-29</td>
                                        <td>michael@yahoo.fr</td>
                                            <td>6</td>
                                            <td>07 20 10 89 37</td>
                                            <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary" href="#"><i class="icofont-ui-zoom-in"></i></a>
                                                <a class="btn btn-success" href="#"><i class="icofont-check-circled"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icofont-close-circled"></i></a>
                                            </div>
                                            </td>
                                    </tr>
                                    <tr>
                                        <td>THOMAS CARIOT</td>
                                        <td>2019-04-06</td>
                                        <td>THOMAS@GMAIL.COM</td>
                                        <td>9</td>
                                        <td>06 24 79 64 55</td>
                                        <td>
                                        <div class="btn-group">
                                                <a class="btn btn-primary" href="#"><i class="icofont-ui-zoom-in"></i></a>
                                                <a class="btn btn-success" href="#"><i class="icofont-check-circled"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icofont-close-circled"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rémi</td>
                                        <td>2020-03-19</td>
                                        <td>contact@remi.fr</td>
                                        <td>8</td>
                                        <td>0614039037</td>
                                        <td>
                                        <div class="btn-group">
                                                <a class="btn btn-primary" href="#"><i class="icofont-ui-zoom-in"></i></a>
                                                <a class="btn btn-success" href="#"><i class="icofont-check-circled"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icofont-close-circled"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Loujayna Hamida</td>
                                        <td>2019-04-23</td>
                                        <td>loulou@yahoo.fr</td>
                                        <td>12</td>
                                        <td>0618267100</td>
                                        <td>
                                        <div class="btn-group">
                                                <a class="btn btn-primary" href="#"><i class="icofont-ui-zoom-in"></i></a>
                                                <a class="btn btn-success" href="#"><i class="icofont-check-circled"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icofont-close-circled"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
        </section>
    </main>
</body>

</html>
@endsection
