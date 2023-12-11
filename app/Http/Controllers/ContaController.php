<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Conta;
use App\Http\Requests\ContaRequest;
use App\Http\Controllers\Controller;

class ContaController extends Controller
{
    public function index() // Listar as contas
    {
        // Carrega os valores da tabela
        $contas = Conta::orderBy('valor')->get();

        return view('conta.index', ['contas' => $contas]);
    }
    public function create() // Lista todos
    {
        return view('conta.create');
    }

    public function show( Conta $conta) // Detalhes da conta
    {
        // dd($conta);
        return view('conta.show', ['conta' => $conta]);
    }

    public function store(ContaRequest $request) // Carregar o formulário cadastro
    {
        // dd( $request->nome, $request->valor, $request->vencimento );

        // validando
        $request->validated();

        $conta = Conta::create($request->all());
        // dd($conta);

        // Redirecionar
        return redirect()->route('conta.index')->with('success', 'Conta cadastrada com sucesso');
    }

    public function edit(Conta $conta) // Cadastrar no banco de dados
    {
        
        return view('conta.edit', ['conta' => $conta]);
    }

    public function update(ContaRequest $request, Conta $conta) // Atualizar formulário editar
    {
        $request->validated();
        // dd("Editando...", $request);
        $conta->update([
            'nome'      => $request->nome,
            'valor'     => $request->valor,
            'vencimento' => $request->vencimento,
        ]);
        // Redirecionar
        return redirect()->route('conta.show', [ 'conta' => $conta->id ])->with
        ('success', 'Conta atualizada com sucesso');
    }

    public function destroy(Conta $conta) // Atualizar formulário editar
    {
            // dd($conta->nome);
            $conta->delete();
            // Redirecionar
            return redirect()->route('conta.index', [ 'conta' => $conta->id ])->with ('success', 'Conta Apagada com sucesso');
    }
}