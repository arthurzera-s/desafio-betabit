@extends('layout.app')


@section('body')


<div class="container">    
    <div class="row">
      <div class="card-home">
        <div class="card">
          <div class="card-header">
            Menu
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12 text-center">
                <a href="{{route('novoContato')}}" class="btn btn-primary">Adicionar contatos</a>
                <a href="{{route('listarContatos')}}" class="btn btn-primary">Listar contatos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection