<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inserindo</title>

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
        <h1>Cadastrar a Conta <a href="{{ route('conta.index') }}">
            <button class="btn btn-outline-warning">
                Voltar
            </button>
        </a></h1> 
        <div class="">
            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div class="container">
                            <li class="pb-3"> {{ $error }} </li>
                        </div>
                    @endforeach
                </ul>
                
            @endif
           <div class="">
           </div>
           <form action="{{ route('conta.store') }}" method="post" class="mt-5">
                @csrf

                <div class="row">
                    <div class="col-6">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome"  class="form-control" value=" {{ old('nome') }}" >
                    </div>
                    <div class="col-3">
                        <label for="valor">Valor</label>
                        <input type="text" name="valor" id="valor" class="form-control" value=" {{ old('valor') }}" >
                    </div>
                    <div class="col-3">
                        <label for="vencimento">Vencimento</label>
                        <input type="date" name="vencimento" id="vencimento" class="form-control text-center" value=" {{ old('vencimento') }}">
                    </div>
                </div>
                    <button type="submit" class="btn btn-outline-success mt-3">
                        Salvar
                    </button>
                    </a>
                </div>
           </form>
        </div>
    </body>
</html>
