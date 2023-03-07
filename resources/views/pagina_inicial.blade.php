@extends('layout/app')

@section('titulo')

    {{'Página Inicial'}}

@stop

@section('conteudo')

    <h3 class="text-center p-4">Escolha o seu hotel</h3>

    <div class="row">

        @for ($i=0; $i < count($hoteis); $i++)

            <div class="col-sm-6 col-12 text-center p-2">

                <a href={{ url("pagina_hotel/$i") }}>

                    <img src={{ asset("./imagens/$hoteis[$i]") }}>

                </a>

            </div>

        @endfor

    </div>

@endsection
