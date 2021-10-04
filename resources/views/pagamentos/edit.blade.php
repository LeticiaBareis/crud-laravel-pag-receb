@extends('adminlte::page')
@section('title', 'Editar Pagamento')


@section('content')

    <div class="container pt-5">

        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif
        <a href="/pagamentos" ><i class="fas fa-arrow-circle-left"></i></a>

        <form action="/pagamentos/{{ $pagamento->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h3 class="nome-titulo"><i class="fas fa-edit" id="icone-titulo"></i>Edição de Pagamento</h3>


            <div class="form-group">
                <label for="fornecedor">Fornecedor</label>
                <input type="text" name="fornecedor" placeholder="Fornecedor" class="form-control" value="{{ $pagamento->fornecedor }}">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" placeholder="Descrição do pagamento" class="form-control" rows="5">{{ $pagamento->descricao }}</textarea>
            </div>

            <div class="form-group">
                <label for="valor_pagamento">Valor</label>
                <input type="decimal" name="valor_pagamento" placeholder="Valor do Pagamento" class="form-control" value="{{ $pagamento->valor_pagamento }}">
            </div>


            <div class="form-group">
                <label for="data_pagamento">Data da Publicação</label>
                <input type="text" name="data_pagamento" class="form-control" data-provide="datepicker" data-date-language="pt-BR" value="{{ Carbon\Carbon::createFromFormat("Y-m-d", $pagamento->data_pagamento)->format("d/m/Y") }}">
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle mr-2"> </i>Salvar</button>


        </form>


    </div>
    @stop
