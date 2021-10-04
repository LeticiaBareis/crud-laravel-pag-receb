<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recebimento;
use Carbon\Carbon;

class RecebimentoController extends Controller
{
    public function index()
    {
        $recebimentos = Recebimento::all();
        return view('recebimentos.index', [
            'recebimentos' => $recebimentos
        ]);
    }

    public function create()
    {
        return view('recebimentos.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        Recebimento::create($dados);

        return redirect()->back()->with('mensagem', 'Registro criado com sucesso!');
    }

    public function edit($recebimento)
    {
        $recebimento  = Recebimento::findOrFail($recebimento);

        return view('recebimentos.edit', [
            'recebimento' => $recebimento
        ]);
    }

    public function update($recebimento, Request $request)
        {
            $recebimento = Recebimento::findOrFail($recebimento);
            $dados = $request->all();
            $dados['data_recebimento'] = Carbon::createFromFormat("d/m/Y", $dados['data_recebimento'])->format("Y-m-d");
            $recebimento->update($dados);

            return redirect()->back()->with('mensagem', 'Registro atualizado com sucesso!');
        }

        public function delete(Recebimento $recebimento)
        {
            $recebimento->delete();
            return redirect('/recebimentos')->with('mensagem', 'Registro de pgamento excluído com sucesso!');
        }

    }
