<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            @yield('titulo')
        </title>
        <style>
            body, hr, pre{
                background-color: #282a36!important;
                color: #8be9fd!important;
                border-color: #8be9fd!important;
            }
        </style>
        <link href= {{ asset('./css/bootstrap.min.css') }} rel="stylesheet">
        <!-- [if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <!-- cabeçalho e navegação -->
            @include('layout/cabecalho')

            <!-- conteúdo -->
            @yield('conteudo')

            <!-- rodapé -->
            @include('layout/rodape')
        </div>

        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src= {{ asset('./js/bootstrap.bundle.min.js') }}></script>
    </body>
</html>
