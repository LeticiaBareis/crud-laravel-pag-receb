@extends('adminlte::page')
@section('title', 'Criar Pagamento')


@section('content')
<div class="container  pt-5">

        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif
        <a href="/pagamentos" ><i class="fas fa-arrow-circle-left pb-1      "></i></a>
        <form action="/pagamentos" method="POST" enctype="multipart/form-data">
            @csrf

            <h3 class="nome-titulo"><i class="fas fa-file-alt" id="icone-titulo"></i>Formulário de Pagamento</h3>

            <div class="form-group">
                <label for="fornecedor">Fornecedor</label>
                <input type="text" required maxlength="30" name="fornecedor" placeholder="Digite o nome do fornecedor" class="form-control">
            </div>

            <div class="form-group">
                <label for="descricao">Descricao</label>
                <textarea name="descricao" required maxlength="50" placeholder="Descrição de pagamento" class="form-control" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="valor_pagamento">Valor</label>
                <input type="number" min="0" value="0" step=".01" required name="valor_pagamento" placeholder="Valor de pagamento" class="form-control">
            </div>

            <div class="form-group">
                <label for="data_pagamento">Data da Pagamento</label>
                <input type="date" required name="data_pagamento" class="form-control" data-provide="datepicker" data-date-language="pt-BR">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle mr-2"> </i>Salvar</button>



        </form>
    </div>

    @stop
    <style>
        .fa, .fas {
    font-weight: 900;
    margin-right: 10px;
}
    </style>
