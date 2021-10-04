@extends('adminlte::page')
@section('title', 'Criar Recebimento')


@section('content')
<div class="container pt-5">

        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif
        <a href="/recebimentos" class="btn-voltar"><i class="fas fa-arrow-circle-left pb-1 "></i></a>
        <form action="/recebimentos" method="POST" enctype="multipart/form-data">
            @csrf

            <h3 class="nome-titulo"><i class="fas fa-file-alt " id="icone-titulo"></i>Formulário de Recebimentos</h3>

            <div class="form-group">
                <label for="cliente">Cliente</label>
                <input type="text" required maxlength="30" name="cliente" placeholder="Digite o nome do cliente" class="form-control">
            </div>

            <div class="form-group">
                <label for="descricao">Descricao</label>
                <textarea name="descricao" required maxlength="50" placeholder="Descrição de recebimento" class="form-control" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="valor_recebimento">Valor</label>
                <input type="number" min="0" value="0" step=".01" required name="valor_recebimento" placeholder="Valor de recebimento" class="form-control">
            </div>

            <div class="form-group">
                <label for="data_recebimento">Data do Recebimento</label>
                <input type="date" name="data_recebimento" class="form-control" data-provide="datepicker" data-date-language="pt-BR">
            </div>

            <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle mr-2"> </i>Salvar</button>


        </form>
    </div>
    @stop
    <style>
        .fa, .fas {
    font-weight: 900;
    margin-right: 10px;}

    .btn-voltar{

        color: #ffc107
    }
    </style>
