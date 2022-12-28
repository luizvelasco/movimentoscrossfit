@extends('layouts.main')

@section('title', 'Cadastrar Movimento')

@section('content')

<div id="moviment-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre o movimento</h1>
    <form action="/moviments" method="POST" enctype="multipart/form-data">

        {{-- Diretiva do laravel que permite salvar os dados no banco --}}
        @csrf

        <div class="form-group">
            <label for="title">Imagem: </label>
            <input type="file" id="image" name = "image" class="form-control-file">
            
        </div>
        <div class="form-group">
            <label for="image">Movimento: </label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Movimento">
        </div>
        <div class="form-group">
            <label for="title">Descrição: </label>
            <textarea class="form-control" name="description" id="description" placeholder="Descreva o movimento" ></textarea>
        </div>
        <div class="form-group">
            <label for="tags">Tags: </label>
            <input type="text" class="form-control" id="tags" name="tags" placeholder="Tags de pesquisa">
        </div>
        <div class="form-group">
            <label for="title">Link: </label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Link do Movimento">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Movimento">
    </form>
</div>
    
@endsection