@extends('layouts.app')

@section('title', 'Editação Usuario')

@section('content')
    <h1>Editar o usuario {{ $user->name }}</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @csrf
        <div>
            <label for="name">Nome:</label><br>
            <input type="text" id="name" name="name" value="{{ $user->name }}" placeholder="Insira seu nome"><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" value="{{ $user->email }}" placeholder="Insira seu E-mail"><br>

            <label for="password">Senha:</label><br>
            <input type="password" id="password" name="password" placeholder="Insira sua senha">
            <br>
            <br>
            <button type="submit">Salvar</button>

            <a href="{{ route('users.index') }}">Voltar</a>
        </div>
    </form>

@endsection
