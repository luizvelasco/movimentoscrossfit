@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Movimentos Cadastrados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-moviments-container">
    @if (count($moviments) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Movimento</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        
            <tbody>
                @foreach ($moviments as $moviment)
                    <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td><a href="/moviments/{{ $moviment->id }}">{{ $moviment->title }}</a></td>
                        <td>
                            <a href="/moviments/edit/{{ $moviment->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a> 
                            <form action="/moviments/{{ $moviment->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn" data-toggle="modal" data-target="#exampleModal"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
            
            </tbody>
    </table>
    @else
        <p>Não há movimentos cadastrados, <a href="/moviments/create">cadastrar movimento!</a></p>
    @endif
</div>

@endsection
