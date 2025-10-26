@extends('layouts.app')

@section('title', 'Lista de Livros')

@section('content')
    <p class="italic"># O banco de dados retorna ao seu estado original em intervalos de 15 minutos.</p>
    <h2 class="text-3xl font-bold mb-4">Lista de Livros</h2>
    
    <a href="{{ route('books.create') }}" class="mx-1">
        <button class="bg-cyan-500 text-white-100 rounded mb-4 text-white p-2 hover:bg-cyan-600 cursor-pointer">Adicionar Livro</button>
    </a>

    @if(session('success'))
        <p class="mb-4 text-green-600 font-medium">{{ session('success') }}</p>
    @endif

    <table class="min-w-full bg-white rounded-lg shadow overflow-hidden ">
        <thead class="bg-orange-200 text-gray-700">
            <tr>
                <th class="py-2 px-4 text-left">Título</th>
                <th class="py-2 px-4 text-left">Autor</th>
                <th class="py-2 px-4 text-left">Ano</th>
                <th class="py-2 px-4 text-left"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr class="border-b border-orange-300 hover:bg-orange-100">
                    <td class="py-2 px-4">{{ $book->title }}</td>
                    <td class="py-2 px-4">{{ $book->author }}</td>
                    <td class="py-2 px-4">{{ $book->year }}</td>
                    <td class="py-2 px-4 flex space-x-2">
                        <a href="{{ route('books.edit', $book) }}" class="text-cyan-500 hover:text-cyan-600">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" onsubmit="return confirm('Deseja realmente excluir?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 cursor-pointer hover:text-red-700 cursor-pointer">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection