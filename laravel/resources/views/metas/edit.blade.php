
@extends('layout')

@section('content')
<div class="container">
    <h1 class="my-4">Editar Meta Financeira</h1>
    <form method="POST" action="{{ route('metas.update', $meta->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tipo_meta">Tipo de Meta</label>
            <input type="text" class="form-control" id="tipo_meta" name="tipo_meta" value="{{ $meta->tipo_meta }}" required>
        </div>
        <div class="form-group">
            <label for="valor_meta">Valor</label>
            <input type="number" step="0.01" class="form-control" id="valor_meta" name="valor_meta" value="{{ $meta->valor_meta }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection