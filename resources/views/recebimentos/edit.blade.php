@extends('adminlte::page')
@section('title', 'Editar Recebimento')

@section('content')

    <div class="container pt-5">

        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif
        <a href="/recebimentos"><i class="fas fa-arrow-circle-left"></i></a>

        <form action="/recebimentos/{{ $recebimento->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h3 class="nome-titulo"><i class="fas fa-edit" id="icone-titulo"></i>Edição de Recebimento</h3>


            <div class="form-group">
                <label for="cliente">Cliente</label>
                <input type="text" name="cliente" placeholder="cliente" class="form-control" value="{{ $recebimento->cliente }}">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" placeholder="Descrição do recebimento" class="form-control" rows="5">{{ $recebimento->descricao }}</textarea>
            </div>

            <div class="form-group">
                <label for="valor_recebimento">Valor</label>
                <input type="decimal" name="valor_recebimento" placeholder="Valor do Recebimento" class="form-control" value="{{ $recebimento->valor_recebimento }}">
            </div>


            <div class="form-group">
                <label for="data_recebimento">Data do Recebimento</label>
                <input type="text" name="data_recebimento" class="form-control" data-provide="datepicker" data-date-language="pt-BR" value="{{ Carbon\Carbon::createFromFormat('Y-m-d', $recebimento->data_recebimento)->format('d/m/Y') }}">
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle mr-2"> </i>Salvar</button>
        </form>
        </div>
    @stop
