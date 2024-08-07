@extends('site.master')
@include('site.partials.navbar')
@section('content')
    <div class="container pt-4 position-relative h-100">
        <a style="top: 80px" class="btn btn-primary position-absolute end-0" href="{{ route('user.create.task') }}">Add nova tarefa</a>
        @if (count($tasks) <= 0)
            <div class="container-fluid pt-4">
                <h2 class="mt-4" >Nenhuma tarefa encontrada!</h2>
            </div>
        @else
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Inicio</th>
                    <th scope="col">Fim</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <th scope="row">{{ $task->id }}</th>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->bigin }}</td>
                        <td>{{ $task->done }}</td>
                        <td>{{ $task->status }}</td>
                        <td><a href="#" class="btn success">Editar</a> |
                        <a href="#" class="btn danger">Excluir</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
@include('site.partials.footer')
