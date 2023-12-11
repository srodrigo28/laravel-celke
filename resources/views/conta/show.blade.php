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
           <div class="">
            @if(session('success'))
                <p class="alert alert-success"> {{ session('success') }} </p>
            @endif
                <a href="{{ route('conta.index') }}">
                    <button class="btn btn-outline-danger">
                        Voltar
                    </button>
                </a>
           </div>
        </div>
    </body>
</html>
