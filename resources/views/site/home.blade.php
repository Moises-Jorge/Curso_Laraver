@extends('site.layout')

@section('title', 'Essa eh a pagina HOME')

@section('conteudo')
    <div class="row container"> {{-- Definição da Linha. O Materialize já traz uma estrutura responsiva --}}
        {{-- Coluna 1: Dispositivos com tela pequena a largura será de "12" e nos de tela média será "3" --}}
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                  <img src="images/sample-1.jpg">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>

        {{-- Coluna 2: Dispositivos com tela pequena a largura será de "12" e nos de tela média será "3" --}}
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                  <img src="images/sample-1.jpg">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>

        {{-- Coluna 3: Dispositivos com tela pequena a largura será de "12" e nos de tela média será "3" --}}
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                  <img src="images/sample-1.jpg">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>

        {{-- Coluna 4: Dispositivos com tela pequena a largura será de "12" e nos de tela média será "3" --}}
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                  <img src="images/sample-1.jpg">
                  <span class="card-title">Card Title</span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>
    </div>
@endsection