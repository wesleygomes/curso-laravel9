@extends('layouts.app')

@section('title', 'Detatlhes do usuario')

@section('content')
    <h1>Detalhes do Usuario - {{ $user->name }}</h1>

    Nome: {{ $user->name }}<br>
    E-mail: {{ $user->email }}<br><br>
    <a href="{{ route('users.index') }}">Voltar</a> || <a href="{{ route('users.edit', $user->id) }}">Editar</a>

    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">Excluir</button>
    </form>
@endsection
