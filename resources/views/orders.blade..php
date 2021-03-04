@extends('layouts.app')
@section('content')

    <main id="main">
        <section class="breadcrumbs">
        </section>
        <section id="forum" class="forum">
            <div class="container" data-aos="fade-up">

            <div class="row">
                            <div class="section-title">
                                <p> <i class="icofont-book-alt"></i> Livre d'or   </p>
                            </div>
            </div>

             <div class="row">
                     <div class="offset-lg-1 col-lg-10 col-sm-6 col-sm-12">
                        <h3 class="mt-1"> Ils se sont régalés et ils témoignent !</h3>
                            <p class="mb-5">
                            Un livre d'or vous attend sur le comptoir du restaurant ! 
                            Merci à tous pour votre fidélité et les agréables témoignages d’affection que vous nous faites au fil des pages…</p>      
                    </div>
              </div>

            <div class="row">
                <div class="mb-5 panel-heading">
                        <i class="icofont-wechat"></i>Témoignages de nos clients
                </div>
            </div>
            <div class="row">
                                    <h4 class=" offset-lg-1  col-lg-6 col-sm-6 col-sm-12  mb-5"> 
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i> 
                                        Découvrez les témoignages que nous ont laissés nos clients – fidèles ou de passage. 
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i> 
                                    </h4>
                                    <p class="  col-lg 6 col-sm-6 col-sm-12">
                                    N’hésitez pas à nous laisser une petite trace de votre passage!.
                                        </p>
                                      <a class="btn  col-lg-2 col-md-6 col-sm-12 mt-0 mb-5" style ="color:white;background-color:#cda45e;" href="{{ url('login') }}" >Laissez un avis</a></button>
                         </div>

            <div class="row">
           <ul  class=" offset-lg-2 col-lg-6 col-md-6 col-sm-12  " >
            @foreach ($coments as $coment)
                                        <li  class="mb-5 d-none d-lg-block ">
                                                <div class="chat-meta"> {{ $coment ->user->name}}
                                                     <span class="pull-right">{{ $coment  -> created_at}}</span>
                                                </div>
                                                {{ $coment -> coment}}
                                        </li>
                @endforeach
                        </ul>
            </div>
            </div>
        </section>
    <!-- Fin #main -->
@endsection 