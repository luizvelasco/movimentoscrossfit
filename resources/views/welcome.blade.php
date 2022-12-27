@extends('layouts.main')

@section('title', 'Movimentos do Crossfit')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um movimento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="moviments-container" class="col-md-12">
    <h2>Movimentos cadastrados</h2>
    <div id="cards-container" class="row">
        @foreach ($moviments as $moviment)
            <div class="card col-md-3">
                <img src="/img/banner.webp" alt="{{ $moviment->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$moviment->title}}</h5>
                    <a href="#" class="btn btn-primary">Saber Mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
    
@endsection