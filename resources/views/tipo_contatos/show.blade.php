@extends('layouts.app')

@section('content')
<h2>Detalhes do Tipo de Contato</h2>

<p><strong>Nome:</strong> {{ $tipoContato->nome }}</p>
<p><strong>Descrição:</strong> {{ $tipoContato->descricao }}</p>

<a href="{{ route('tipo-contatos.index') }}">← Voltar</a>
@endsection
