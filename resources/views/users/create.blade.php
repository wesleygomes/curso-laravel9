@extends('layouts.app')

@section('title', 'Novo usuario')

@section('content')
    <h1>Criar usuarios</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Nome:</label><br>
            <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="Insira seu nome"><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Insira seu E-mail"><br>

            <label for="password">Senha:</label><br>
            <input type="password" id="password" name="password" placeholder="Insira sua senha">
            <br>
            <br>
            <button type="submit">Salvar</button>
        </div>
    </form>
@endsection
