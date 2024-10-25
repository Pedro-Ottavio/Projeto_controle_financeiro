
@extends('layout')

@section('content')
<div class="container">
    <h1 class="my-4">Editar Categoria</h1>
    <form method="POST" action="{{ route('categorias.update', $categoria->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $categoria->nome }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
