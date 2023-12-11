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
        <div class="">
            <h1>Detalhes: </h1>
                @if(session('success'))
                    <p class="alert alert-success"> {{ session('success') }} </p>
                @endif
            <div class="card bg-primary text-white mb-3" style="width: 25rem;">
                <div class="card-body">
                    <p>Id: {{ $conta->id}}</p>
                    <p>nome: {{ $conta->nome}}</p>
                    <p>valor: {{ 'R$ ' . number_format($conta->valor, 2, ',', '.') }}</p>
                    <p>vencimento: {{  \Carbon\Carbon::parse($conta->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }}</p>
                    <p>Cadastro: {{  \Carbon\Carbon::parse($conta->created_at)->tz('America/Sao_Paulo')->format('d/m/Y') }}</p>
                    <p>Atualização: {{  \Carbon\Carbon::parse($conta->upated_at)->tz('America/Sao_Paulo')->format('d/m/Y') }}</p>
                </div>
            </div>
           <div class="">
                <a href="{{ route('conta.edit', ['conta' => $conta->id ]) }}">
                    <button class="btn btn-outline-warning"> Editar </button>
                </a>
                <a href="{{ route('conta.index') }}">
                    <button class="btn btn-outline-danger"> Voltar </button>
                </a>
           </div>
        </div>
    </body>
</html>
