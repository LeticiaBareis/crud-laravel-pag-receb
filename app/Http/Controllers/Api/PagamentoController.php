<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pagamento;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    public function index()
    {
        return Pagamento::all();
    }
    public function store(Request $request)
    {
        return Pagamento::create($request->all());
    }

    public function update(Request $request, Pagamento $pagamento)
    {
        $pagamento->update($request->all());
        return $pagamento;
    }

    public function destroy(Pagamento $pagamento)
    {
        return $pagamento->delete();
    }

    public function show(Pagamento $pagamento)
    {
        return $pagamento;
    }
}
