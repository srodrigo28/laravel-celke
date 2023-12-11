<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Styles -->
        <style>
         a{
            outline:none;
            text-decoration: none;
         }
         .btn{ width: 100px;}
        </style>
    </head>
    <body class="container">
        <h1>Página Listar as Contas</h1>
        <div class="">
            @if(session('success'))
                <p class="alert alert-success"> {{ session('success') }} </p>
            @endif
           <div class="">
            <a href="{{ route('conta.create') }}">
                <button class="btn btn-outline-primary"> Inserir </button>
            </a>
           </div>
        </div>
        <div class="row mt-5">
            {{-- {{dd($contas)}} --}}
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Vencimento</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($contas as $conta)
                <tr>
                    <td width="80"> {{$conta->id}} </td>
                    <td width="500"> {{$conta->nome}} </td>
                    <td width="200"> {{ 'R$ ' . number_format($conta->valor, 2, ',', '.') }} </td>
                    <td width="200"> {{ \Carbon\Carbon::parse($conta->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }} </td>
                    <td> 
                        <a href="{{ route('conta.show', ['conta' => $conta->id ]) }}">
                            <button class="btn btn-outline-success"> Detalhes </button>
                        </a>
                        <a href="{{ route('conta.edit') }}">
                            <button class="btn btn-outline-warning"> Editar </button>
                        </a>
                        <a href="{{ route('conta.destroy') }}">
                            <button class="btn btn-outline-danger"> Apagar </button>
                        </a>
                    </td>
                </tr>
                @empty
                    <span class="alert alert-danger">Nenhum registro no momento!</span>
                
            @endforelse
            </tbody>
        </table>
        </div>
    </body>
</html>
