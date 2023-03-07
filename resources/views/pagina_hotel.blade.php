@extends('layout/app')

@section('titulo')

    {{'Página Hotel'}}

@stop

@section('conteudo')

    <div class="text-center p-4">

        <!-- botão voltar -->
        <a href="{{ route('pagina_inicial') }}" class="btn btn-primary">Voltar</a>

        <!-- nome do hotel -->
        <h3 class="p-3">{{ $hotel['nome_hotel'] }}</h3>

        <!-- descrição do hotel -->
        <p>{{ $hotel['descricao'] }}</p>

        <!-- imagem do hotel -->
        <img src="{{ asset("./imagens/{$hotel['imagem']}") }}">

    </div>

@endsection
