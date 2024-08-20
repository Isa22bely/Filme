@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">Cadastre um novo filme</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoFilme')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Título:</label>
                <input type="text" class="form-control" name="titulo" 
                       placeholder="Informe o título do livro">
            </div>
            <div class="form-group">
                <label for="ano">Ano de lançamento:</label>
                <input type="text" class="form-control" name="ano" 
                       placeholder="Informe o ano de publicação">
            </div>
            </div>
            <div class="form-group">
                <label for="ano">Duração do filme:</label>
                <input type="text" class="form-control" name="ano" 
                       placeholder="Informe o ano de publicação">
            </div>
            </div>
            </div>
            <div class="form-group">
                <label for="ano">IMDB:</label>
                <input type="text" class="form-control" name="ano" 
                       placeholder="Informe o ano de publicação">
            </div>
            </div>
            <div class="form-group">
                <label for="ano">Sinopse:</label>
                <input type="text" class="form-control" name="ano" 
                       placeholder="Informe o ano de publicação">
            </div>
            <div class="form-group">
                <label for="ano">Idioma do filme:</label>
                <input type="text" class="form-control" name="ano" 
                       placeholder="Informe o ano de publicação">
            </div>
            <div class="form-group">
                <label for="genero">Selecione a classificação indicativa do filme</label>
                <select class="form-control" name="genero" id="genero" required>
                    @foreach ($genero as $item)
                        <option value="{{$item->id}}">{{$item->DescricaoGenero}}</option>
                    @endforeach
                </select>
              </div>
             
            <hr>
            <hr>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection