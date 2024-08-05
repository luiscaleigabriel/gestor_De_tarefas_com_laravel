@extends('site.master')
@section('content')
<div class="container-fluid d-flex justify-content-center justify-content-center bg-primary bg-gradient vh-100 pt-4">
    <div class="row align-items-center justify-content-between bg-white rounded w-75 h-75 ">
        <div class="col-6 d-none d-lg-block">
            <img class="img-fluid" src="{{ asset('assets/images/undraw_posting_photo.svg') }}" alt="Image">
        </div>
        <div class="col-12 col-lg-6">
            <form action="{{ route('login.logar'); }}" method="POST" class="row g-3 p-2 pt-4 align-items-center justify-content-center" >
                @csrf
                <div class="col-12 text-center">
                    <h3>Welcome back!</h3>
                </div>
                @if ($errors->any())
                <div class="col-12">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="col-12 col-sm-10 col-lg-8">
                    <input type="email" class="form-control rounded-pill" name="email" value="" placeholder="Email">
                </div>
                <div class="col-12 col-sm-10 col-lg-8">
                    <input type="password" class="form-control rounded-pill" name="password" value="" placeholder="Senha">
                </div>
                <div class="col-12 col-sm-10 col-lg-8">
                    <button class="btn btn-primary rounded-pill w-100" type="submit">Login</button>
                </div>
                <div class="col-12 col-sm-10 col-lg-8">
                    <hr>
                </div>
                <div class="col-12 col-sm-10 col-lg-8">
                    <a class="btn btn-danger rounded-pill w-100" type="submit">Login com Google</a>
                </div>
                <div class="col-12 col-sm-10 col-lg-8">
                    <a class="btn btn-primary rounded-pill w-100" type="submit">Login com Facebook</a>
                </div>
                <div class="col-12 col-sm-10 col-lg-8">
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

