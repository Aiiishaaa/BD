@extends('layouts.app')

@section('content')
<main id="main">
<section class="breadcrumbs">
        </section>
    <section id="resetpassword" class="password">
        <div class="container" >
                <div class="section-title">
                    <p>Réinitialisez votre mot de passe </p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                    <form method="POST" action="{{ route('password.email') }}" class="php-email-form">
                        @csrf

                        <div class="form-group row mb-0">
                            <label for="email" class=" offset-lg-4 col-lg-2 col-md-4   text-md-right" style="color:white; font-size:20px;">{{ __('ADRESSE EMAIL') }}</label>

                            <div class="col-md-6 col-lg-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-lg-6 col-lg-6 pt-0">
                                <button type="submit" class="btn-reset">
                                    {{ __('Envoyer le lien de réinitialisation du mot de passe') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
