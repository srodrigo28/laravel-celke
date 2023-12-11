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
           <div class="">
            <a href="{{ route('conta.create') }}">
                <button class="btn btn-outline-primary"> Inserir </button>
            </a>
           </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <a href="{{ route('conta.show') }}">
                    <button class="btn btn-outline-success"> Visualizar </button>
                </a>
                <a href="{{ route('conta.edit') }}">
                    <button class="btn btn-outline-warning"> Editar </button>
                </a>
                <a href="{{ route('conta.destroy') }}">
                    <button class="btn btn-outline-danger"> Apagar </button>
                </a>
            </div>
        </div>
    </body>
</html>
