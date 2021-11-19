@extends('layout.app')

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Lista de contatos</h5>
@if (count($contatos) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Data de nascimento</th>
                        <th>Descricao</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
        @foreach ($contatos as $contato)
                    <tr>
                        <td>{{$contato->nome}}</td>
                        <td>{{$contato->email}}</td>
                        <td>{{$contato->telefone}}</td>
                        <td>{{$contato->data_nascimento}}</td>
                        <td>{{$contato->descricao}}</td>
                        <td>
                            <a href="contatos/editar/{{$contato->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="contatos/apagar/{{$contato->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
        @endforeach
                </tbody>
            </table>
@endif 
        </div>

        <div class="col-sm-12 text-center">
            <div class="btn">
                <a class="btn btn-lg btn-warning btn-block" href="{{route('home')}}">Inicio</a>
            </div>
            <div class="btn">
                <a class="btn btn-lg btn-info btn-block" href="{{route('novoContato')}}">Adicionar novo contato</a>
            </div>
        </div>

    </div>
@endsection