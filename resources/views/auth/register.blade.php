@extends('layouts.header&footer')

@section('content')

<main id="main">
    <section class="breadcrumbs">
        </section>
        <section id="register" class="register">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <p>S'INSCRIRE</p>
                </div>
                <div class="row">
                    <div class="col-lg-9 col-sm-12">
                    <form method="POST" action="{{ route('register') }}" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                        @csrf
                        <div class="form-group  row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NOM COMPLET') }}</label>

                        <div class="col-lg-6 col-md-6 form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ADRESSE MAIL') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('CONFIRMER MOT DE PASSE') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

  
                        <div class="form-group row ">
                            <div class="offset-lg-6 col-lg-3 col-md-6 offset-md-4 col-sm-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Inscription') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <input id ="condition" class="form-control col-md-4 offset-lg-3 col-lg-1 col-sm-2"  required autocomplete="condition" style="height:20px;" type="checkbox" name="rgpd" id="check">
                            <label  style="font-size:14px;"class="col-lg-8 col-md-6 col-sm-10" for="check">                     
                              Je reconnais avoir pris connaissance des conditions d’utilisation et y adhère totalement
                        </label>           
                    </form>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <img class="register-image" src="assets/img/serveur.png" alt="">
                </div>
        </div>  
</section>
</main>
@endsection
