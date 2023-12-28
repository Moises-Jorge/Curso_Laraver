@extends('site.layout')

@section('title', 'Home')

@section('conteudo')
    <div class="row container"> {{-- Definição da Linha. O Materialize já traz uma estrutura responsiva --}}
        @foreach ($produtos as $produto)
            {{-- Coluna 1: Dispositivos com tela pequena a largura será de "12" e nos de tela média será "4" --}}
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $produto->imagem }}">
                        <a href="{{ route('site.details', $produto->slug) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{ $produto->nome }}</span>
                        <p>{{ Str::limit($produto->descricao, 20) }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row center"> {{-- Criacao da nevegacao entre as paginas --}}
        {{ $produtos->links('custom/pagination') }}
    </div>
@endsection