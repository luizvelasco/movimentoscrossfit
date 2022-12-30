@extends('layouts.main')

@section('title', 'Editando o movimento' . $moviment->title)

@section('content')

<div id="moviment-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $moviment->title}}</h1>
    <form action="/moviments/update/{{ $moviment->id }}" method="POST" enctype="multipart/form-data">

        {{-- Diretiva do laravel que permite salvar os dados no banco --}}
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Imagem: </label>
            <input type="file" id="image" name = "image" class="form-control-file">
            <img src="/img/moviments/{{ $moviment->image }}" alt=" {{$moviment->title}}" class="img-preview">
            
        </div>
        <div class="form-group">
            <label for="image">Movimento: </label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Movimento" value="{{ $moviment->title }}">
        </div>
        <div class="form-group">
            <label for="title">Descrição: </label>
            <textarea class="form-control" name="description" id="description" placeholder="Descreva o movimento">{{ $moviment->description }}</textarea>
        </div>
        {{-- <div class="form-group">
            <label for="tags">Tags: </label>
            <input type="text" class="form-control" id="tags" name="tags" placeholder="Tags de pesquisa">
        </div> --}}
        <div class="form-group">
            <label for="title">Link: </label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Link do Movimento" value=" {{ $moviment->link }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Movimento">
    </form>
</div>
    
@endsection