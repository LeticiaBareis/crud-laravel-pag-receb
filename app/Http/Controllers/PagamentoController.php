<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;
use Carbon\Carbon;

class PagamentoController extends Controller
{
    public function index()
{
    $pagamentos = Pagamento::all();
    return view('pagamentos.index', [
        'pagamentos' => $pagamentos
    ]);
}

public function create()
{
    return view('pagamentos.create');
}

public function store(Request $request)
{
    $dados = $request->all();
    Pagamento::create($dados);

    return redirect()->back()->with('mensagem', 'Registro criado com sucesso!');
}

public function edit($pagamento)
{
    $pagamento  = Pagamento::findOrFail($pagamento);

    return view('pagamentos.edit', [
        'pagamento' => $pagamento
    ]);
}

public function update($pagamento, Request $request)
    {
        $pagamento = Pagamento::findOrFail($pagamento);
        $dados = $request->all();
        $dados['data_pagamento'] = Carbon::createFromFormat("d/m/Y", $dados['data_pagamento'])->format("Y-m-d");
        $pagamento->update($dados);

        return redirect()->back()->with('mensagem', 'Registro atualizado com sucesso!');
    }

    public function delete(Pagamento $pagamento)
    {
        $pagamento->delete();
        return redirect('/pagamentos')->with('mensagem', 'Registro de pagamento excluído com sucesso!');
    }

}
