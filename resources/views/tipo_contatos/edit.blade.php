@extends('layouts.app')

@section('content')
<h2>Editar Tipo de Contato</h2>

@if($errors->any())
    <div style="color: red">
        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tipo-contatos.update', $tipoContato->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome:</label>
    <input type="text" name="nome" value="{{ $tipoContato->nome }}" required><br><br>

    <label>Descrição:</label>
    <textarea name="descricao">{{ $tipoContato->descricao }}</textarea><br><br>

    <button type="submit">Atualizar</button>
</form>

<a href="{{ route('tipo-contatos.index') }}">← Voltar</a>
@endsection
