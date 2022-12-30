@extends('layouts.main')

@section('title', $moviment->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/moviments/{{ $moviment->image }}" alt="{{ $moviment->title }}" class="img-fluid">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $moviment->title }}</h1>
                <p>{{ $moviment->description }}</p>
                <p><a href= {{ $moviment->link }} class="btn btn-primary" target="_blank">Assistir</a></p>
            </div>
        </div>
    </div>
    
@endsection