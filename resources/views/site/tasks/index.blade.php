@extends('site.master')
@include('site.partials.navbar')
@section('content')
    @if (count($tasks) <= 0)
        <h2>Nenhuma tarefa encontrada!</h2>
    @else

    @endif
@endsection
@include('site.partials.footer')
