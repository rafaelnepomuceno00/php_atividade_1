
@extends('layout.principal')

@section('conteudo-principal')
    <h5 style="width:100%;text-align: center">
        {{$subtitulo}}
    </h5>
<div style="display:flex; justify-content: space-evenly ;flex-wrap: wrap;">
        @foreach ($pokemons as $pokemon)
            <div style="cursor: pointer;">
                <div style="width: 450px" class="card">
                    <div class="card-image">
                        <img style="width: 100%" src={{ $pokemon[3] }}>
                    </div>
                    <div class="card-content">
                        <span style="color:  black" class="card-title">{{ $pokemon[0] }}</span>
                        <p><b>Tipo:</b> {{$pokemon[1]}}</p>
                        <p><b>Preço:</b> {{number_format($pokemon[2] ?? '', 2, '.', ',')}} R$</p>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

    @endsection
