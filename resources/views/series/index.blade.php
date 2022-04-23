@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
    @if($mensagem)
        <div class="alert alert-success">
            {{$mensagem}}
        </div>
    @endif
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach($series as $serie)
           <li class='list-group-item d-flex justify-content-between align-items-center'>
               {{$serie->nome}}
               <form action="/series/{{$serie->id}}" method="POST" onsubmit="return confirm('tem certeza?')">
                   @method('DELETE')
                   @csrf
                   <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
               </form>
           </li>
        @endforeach
    </ul>
@endsection
