@extends('site.master')
@section('content')
<div class="container-fluid d-flex justify-content-center bg-primary bg-gradient vh-100 pt-4">
    <div class="row bg-white rounded w-75 h-75">
        <div class="col-6">
            <img class="img-fluid" src="{{ asset('assets/images/undraw_rocket.svg') }}" alt="Image">
        </div>
        <div class="col-6">
            <form action="" class="row g-3 p-4 " >
                <div class="col-12 text-center">
                    <h3>Welcome back!</h3>
                </div>
                <div class="col-8">
                    <input type="email" class="form-control rounded-pill" name="email" value="" placeholder="Email">
                </div>
                <div class="col-8">
                    <input type="password" class="form-control rounded-pill" name="password" value="" placeholder="Senha">
                </div>
                <div class="col-8">
                    <button class="btn btn-primary rounded-pill w-100" type="submit">Login</button>
                </div>
                <div class="col-8">
                    <hr>
                </div>
                <div class="col-8">
                    <a class="btn btn-danger rounded-pill w-100" type="submit">Login com Google</a>
                </div>
                <div class="col-8">
                    <a class="btn btn-primary rounded-pill w-100" type="submit">Login com Facebook</a>
                </div>
                <div class="col-8">
                    <hr>
                </div>
                <div class="col-12 text-center">
                    <a class="text-primary" href="#">Não tem uma conta? Criar!</a>
                    <a class="text-primary d-block" href="/">Voltar pra Home</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

