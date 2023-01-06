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
                            <a href="/moviments/edit/{{ $moviment->id }}" class="btn btn-outline-warning">Editar</a> 
                            <form action="/moviments/{{ $moviment->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                {{-- <button type="submit"  class="btn btn-outline-danger" >Deletar</button> --}}
                                <!-- Botão que irá abrir o modal -->
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#meuModal">Excluir</button>

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

<!-- Modal -->
<div id="meuModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Conteúdo do modal-->
      <div class="modal-content">

        <!-- Cabeçalho do modal -->
        <div class="modal-header">
          <h4 class="modal-title">Excluir movimento</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Corpo do modal -->
        <div class="modal-body">
          <p>Deseja excluir o movimento?</p>
        </div>

        <!-- Rodapé do modal-->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger"> Excluir</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        </div>

      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


@endsection
