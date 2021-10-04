@extends('adminlte::page')

@section('title', 'Início')



@section('content_header')
<h1 class="m-0 text-dark"> PaySystem
    <small class="text-muted"> -Sistema de fluxo de Saida e Entrada</small>
</h1>
@stop

@section('content')
    <div class="col-md-12 col-sm-12 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-file-invoice-dollar"></i></span>

              <div class="info-box-content">
                <h4 class="info-box-text">Relatorio de Pegamentos</h4>
                <span class="info-box-text">Total de valores pagos:</span>
                <span class="info-box-number">R$ {{$total_pagamentos}}</span>
              </div>
            </div>
    </div>
    <div class="col-md-12 col-sm-12 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fas fa-file-invoice-dollar"></i></span>

              <div class="info-box-content">
                <h4 class="info-box-text">Relatorio de Recebimentos</h4>
                <span class="info-box-text">Total de valores pagos:</span>
                <span class="info-box-number">R$ {{$total_recebimentos}}</span>
              </div>
            </div>
    </div>
@stop
