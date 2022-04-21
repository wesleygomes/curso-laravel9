@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
    <section class="text-gray-600 pb-10">
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <h1 class="text-2xl font-semibold leading-tigh py-2">
                        Listagem de usuários
                    </h1>
                    <div class="flex md:flex-nowrap flex-wrap justify-center items-end md:justify-start">
                        <form action="{{ route('users.index') }}" method="get"
                            class="flex md:flex-nowrap flex-wrap justify-center items-end md:justify-start">
                            <div class="relative sm:w-64 w-40 sm:mr-4 mr-2">
                                <input type="text" id="search" name="search" placeholder="Pesquisar"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:ring-2 focus:bg-transparent focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <button type="submit"
                                class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Pesquisar</button>
                        </form>
                    </div>
                </div>
                <table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Nome
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                E-mail
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Editar
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Detalhes
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Comentarios
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Excluir
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> {{ $user->name }} </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->email }}</td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="bg-green-200 rounded-full py-2 px-6">Editar</a>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a href="{{ route('users.show', $user->id) }}"
                                        class="bg-orange-200 rounded-full py-2 px-6">Detalhes</a>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a href="{{ route('comments.index', $user->id) }}"
                                        class="bg-orange-200 rounded-full py-2 px-6">Comentarios</a>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="bg-red-600 text-white rounded-full py-2 px-6">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </section>
@endsection
