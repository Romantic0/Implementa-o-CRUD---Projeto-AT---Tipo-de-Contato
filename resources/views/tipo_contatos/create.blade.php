@extends('layouts.app')

@section('content')
<h2>Criar Tipo de Contato</h2>

@if($errors->any())
    <div style="color: red">
        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tipo-contatos.store') }}" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>Descrição:</label>
    <textarea name="descricao"></textarea><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="{{ route('tipo-contatos.index') }}">← Voltar</a>
@endsection
