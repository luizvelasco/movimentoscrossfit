@extends('layouts.main')

@section('title', 'Movimentos do Crossfit')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um movimento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        <input type="submit" value="Pesquisar" class="btn btn-primary">
    </form>
</div>
<div id="moviments-container" class="col-md-12">
    @if ($search)
        <h2>Buscando por: {{ $search }}</h2>
    @else
        <h2>Movimentos cadastrados</h2>
    @endif
    <div id="cards-container" class="row">
        @foreach ($moviments as $moviment)
            <div class="card col-md-3">
                <img src="/img/moviments/{{ $moviment->image }}" alt="{{ $moviment->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$moviment->title}}</h5>
                    <a href="/moviments/{{$moviment->id}}" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>
        @endforeach
        @if (count($moviments) == 0 && $search)
            <p>Não foi possível encontrar nenhum movimento com {{ $search }}! <a href="/">Ver todos!</a></p>
        @elseif (count ($moviments) == 0)
            <p>Não há movimentos disponíveis!</p>
        @endif
    </div>
</div>
    
@endsection