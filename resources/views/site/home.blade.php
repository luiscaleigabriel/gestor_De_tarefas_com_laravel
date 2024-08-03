@extends('site.master')
@include('site.partials.navbar')
@section('content')
    <div style="height: 600px" class="row align-items-center justify-content-center pt-4">
        <div class="col-md-6">
            <img class="img-fluid" src="{{ asset('assets/images/undraw_video_games_x1tr.png') }}" alt="Image">
        </div>
        <div class="col-md-6">
            <h1 class="text-center">Vem gerir as tuas tarefas aqui!</h1>
            <p class="lead text-sm-center text-md-start">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut esse laudantium sapiente libero perferendis numquam quaerat velit, excepturi a mollitia dolorum quidem ullam necessitatibus minus eveniet eligendi totam delectus exercitationem.
            </p>
            <a class="btn btn-outline-success" href="/">Começar</a>
        </div>
    </div>
@endsection
@include('site.partials.footer')
