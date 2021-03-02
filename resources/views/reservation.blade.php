@extends('layouts.app')
@section('content')

    <main id="main">
        <section class="breadcrumbs">
        </section>
        <section id="forum" class="forum">
            <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="mb-5 panel-heading">
                        <i class="icofont-wechat"></i> Les réservations
                </div>
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