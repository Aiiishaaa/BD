@extends('layouts.app')
@section('content')
<main id="main">
<section class="breadcrumbs">
        </section>
    <section id="resetpassword" class="password">
        <div class="container" >
                <div class="section-title">
                    <p>Nouveau mot de passe </p>
                </div>
                 <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <form method="POST" action="{{ route('password.update') }}" class="form-pass" >
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 mb-2 bt-2" style="color :white;">{{ __('Entrez votre addresse email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-controlpass @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <label for="password" class="col-md-4 mt-3 mb-2 " style="color :white;">{{ __('Nouveau mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-controlpass @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row  mt-2">
                            <label for="password-confirm" class="col-md-4  mt-3 mb-2" style="color :white;">{{ __('Confirmer le mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="  form-controlpass " name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn-reset ">
                                    {{ __('Réinitialiser') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
</div>
</section>
</main>
@endsection
