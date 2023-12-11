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
        return view('conta.index');
    }
    public function create() // Cadastrar no banco de dados
    {
        return view('conta.create');
    }

    public function show() // Detalhes da conta
    {
        return view('conta.show');
    }

    public function store(ContaRequest $request) // Carregar o formulário cadastro
    {
        // dd( $request->nome, $request->valor, $request->vencimento );

        // validando
        $request->validated();

        $conta = Conta::create($request->all());
        // dd($conta);

        // Redirecionar
        return redirect()->route('conta.show')->with('success', 'Conta cadastrada com sucesso');
    }

    public function edit() // Cadastrar no banco de dados
    {
        return view('conta.edit');
    }

    public function update() // Atualizar formulário editar
    {
        dd("Editando...");
    }

    public function destroy() // Atualizar formulário editar
    {
        dd("apagar");
    }
}