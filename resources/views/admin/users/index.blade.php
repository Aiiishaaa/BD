@extends('layouts.app')
@section('content')

<main id="main">
        <section class="breadcrumbs">
        </section>
        <section id="signup" class="signup">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                       <p><i class="icofont-computer"></i>    Les listes des utilsateurs </p>
                </div>
                <div>
                @foreach ($users as $user)
                {{$user->name}}--{{$user->email}}
                @endforeach
                </div>


        </section>
    </main>
</body>

</html>
@endsection
