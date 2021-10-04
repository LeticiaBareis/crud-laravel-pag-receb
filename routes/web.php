<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecebimentoController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\HomeController;


    Route::get('/', [HomeController::class, 'index']);
    Route::get('pagamentos', [PagamentoController::class, 'index']);
    Route::get('pagamentos/create', [PagamentoController::class, 'create']);
    Route::post('pagamentos', [PagamentoController::class, 'store']);
    Route::get('pagamentos/edit/{pagamento}', [PagamentoController::class, 'edit']);
    Route::put('pagamentos/{pagamento}', [PagamentoController::class, 'update']);
    Route::delete('pagamentos/{pagamento}', [PagamentoController::class, 'delete']);

    Route::get('recebimentos', [RecebimentoController::class, 'index']);
    Route::get('recebimentos/create', [RecebimentoController::class, 'create']);
    Route::post('recebimentos', [RecebimentoController::class, 'store']);
    Route::get('recebimentos/edit/{recebimento}', [RecebimentoController::class, 'edit']);
    Route::put('recebimentos/{recebimento}', [RecebimentoController::class, 'update']);
    Route::delete('recebimentos/{recebimento}', [RecebimentoController::class, 'delete']);
