@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Novo Usuário</h1>

    <a href="{{ route('users.index') }}" class="bg-cyan-400 rounded-full py-2 px-6 pt-06">Voltar</a>

    <x-alert />

    <form class="mt-6" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @include('users._partials.form')
    </form>
@endsection
