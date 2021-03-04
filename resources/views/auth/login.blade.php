@extends('layouts.header&footer')
@section('content')
<main id="main">
        <section class="breadcrumbs">
        </section>
        <section id="login" class="login">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <p>SE CONNECTER</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                    <form method="POST" action="{{ route('login') }}" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ADRESSE MAIL') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('MOT DE PASSE') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-6 offset-md-4 ">
                                <div class="form-check">
                                    <input class="form-check-input" style="height:25px;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('SE SOUVENIR DE MOI') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mt-0">
                            <div class="offset-lg-4 col-lg-6 col-md-8 offset-md-4">
                                <button type="submit" class="btn ">
                                    {{ __('CONNEXION') }}
                                </button> 

                                @if (Route::has('password.request'))
                                    <a class="reset " href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié ?') }}
                                    </a>
                                @endif
                                <a class="reset " href="{{ route('register') }}">
                                        {{ __('Pas encore inscrit?') }}
                                    </a>

                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                    <img class="login-image" src="assets/img/serveur.png" alt="">
                    </div>
                </div>
</div>
</section>

</main>
@endsection
