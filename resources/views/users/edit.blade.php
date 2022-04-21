@extends('layouts.app')

@section('title', "Editar o Usuário {$user->name}")

@section('content')
    <section class="text-gray-600 pb-10">
        <div class="container px-5 mx-auto">
                <div class="lg:w-1/1 md:w-1/1 p-4 w-full">
                    <h1 class="text-2xl font-semibold leading-tigh py-2">Editar o Usuário: {{ $user->name }}</h1>
                </div>
                <div class="md:flex-nowrap flex-wrap justify-center items-end md:justify-start">
                    <x-alert />

                    <form class="" action="{{ route('users.update', $user->id) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @include('users._partials.form')
                    </form>
                </div>
        </div>
    </section>
    {{-- <a href="{{ route('users.index') }}" class="bg-cyan-400 rounded-full py-2 px-6 pt-06">Voltar</a> --}}

@endsection
