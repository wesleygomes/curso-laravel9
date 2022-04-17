@extends('layouts.app')

@section('title', 'Detatlhes do Usuário')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Detalhes do Usuário {{ $user->name }}</h1>

    <a href="{{ route('users.index') }}" class="bg-cyan-400 rounded-full py-2 px-6 pt-06">Voltar</a>

    <ul class="mt-6">
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>

    {{--  --}}

    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="py-12">
        @method('DELETE')
        @csrf

        <button type="submit"
            class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Deletar</button>
    </form>
@endsection
