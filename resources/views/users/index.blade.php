@extends('layouts.app')

@section('title', 'Listagem de usuarios')


@section('content')
    <h1>Lista de Usuarios - <a href="{{ route('users.create') }}">Novo</a></h1>

    <form action="{{ route('users.index') }}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button type="sub">Pesquisar</button>
    </form>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} || <a href="{{ route('users.show', $user->id) }}">Detalhes</a> || <a
                    href="{{ route('users.edit', $user->id) }}">Editar</a> || <a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Excluir</button>
                    </form>
            </li>
        @endforeach
    </ul>
@endsection
