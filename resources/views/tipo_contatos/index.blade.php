
@extends('layouts.app')

@section('title', 'Lista de Tipos')

@section('content') 
<a href="{{ route('tipo-contatos.create') }}">+ Novo Tipo de Contato</a>
<br><br>

<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tipos as $tipo)
        <tr>
            <td>{{ $tipo->nome }}</td>
            <td>{{ $tipo->descricao }}</td>
            <td>
                <a href="{{ route('tipo-contatos.edit', $tipo->id) }}">Editar</a> |
                <a href="{{ route('tipo-contatos.show', $tipo->id) }}">Ver</a> |
                <form action="{{ route('tipo-contatos.destroy', $tipo->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection