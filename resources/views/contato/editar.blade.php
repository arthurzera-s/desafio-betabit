@extends('layout.app')
@section('body')

    <div class="container">
        <div class="row">
            <div class="card-adicionar-contato">
                <div class="card">
                    <div class="card-header">Editar contato</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">

                                <form action="/contatos/{{$contato->id}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="nome" class="form-control" placeholder="Nome" required="required" value="{{$contato->nome}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required="required" value="{{$contato->email}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" name="telefone" class="form-control" placeholder="Telefone" required="required" value="{{$contato->telefone}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Data de nascimento</label>
                                        <input type="date" name="data_nascimento" class="form-control" required="required" value="{{$contato->data_nascimento}}">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="descricao" rows="3"  class="form-control" placeholder="Descrição" required="required">{{$contato->descricao}}</textarea>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-lg btn-warning btn-block" href="{{route('listarContatos')}}">Voltar</a>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Salvar</button>
                                        </div>
                                    </div>
                                    
                                    
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection