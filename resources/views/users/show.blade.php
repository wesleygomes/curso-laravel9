@extends('layouts.app')

@section('title', 'Detatlhes do Usuário')

@section('content')
    <section class="text-gray-600 pb-10">
        <div class="container px-5 mx-auto">
            <div class="lg:w-1/1 md:w-1/1 p-4 w-full">
                <h1 class="text-2xl font-semibold leading-tigh py-2">Detalhes do Usuário {{ $user->name }}</h1>
                <a href="{{ route('users.index') }}" class="bg-cyan-400 rounded-full py-2 px-6 pt-06">Voltar</a>
            </div>


            <ul class="mt-6 -mb-2 -my-5">
                <li>{{ $user->name }}</li>
                <li>{{ $user->email }}</li>
            </ul>

            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="py-12">
                @method('DELETE')
                @csrf

                <button type="submit"
                    class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Deletar</button>
            </form>
        </div>
    </section>
@endsection
