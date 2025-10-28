@extends('layouts.app')

@section('title', 'Adicionar Livro')

@section('content')

<main class="max-w-200 mx-auto">
    <h2 class="text-3xl font-bold mb-4">Adicionar livro</h2>

    @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST" class="bg-white border-b border-t border-orange-300 rounded-lg p-10 flex flex-col gap-4 mb-4">
        @csrf

        <label for="title" class="font-bold  text-gray-700">Título:</label>
        <input type="text" name="title" value="{{ old('title') }}" required class="border-1 rounded border-orange-300">

        <label for="author" class="font-bold  text-gray-700">Autor:</label>
        <input type="text" name="author" value="{{ old('author') }}" required class="border-1 rounded border-orange-300">

        <label for="year" class="font-bold  text-gray-700">Ano:</label>
        <input type="number" name="year" value="{{ old('year') }}" required class="border-1 rounded border-orange-300">

        <label for="description"  class="font-bold  text-gray-700">Descrição:</label>
        <textarea name="description" rows="3" class="border-1 rounded border-orange-300">{{ old('description') }}</textarea>

        <button type="submit" class="bg-cyan-500 text-white-100 rounded mb-2 text-white font-bold p-2 hover:bg-cyan-600 cursor-pointer">
            Salvar Livro
        </button>
        <a href="{{ route('books.index') }}" class="bg-gray-300 text-gray-800 p-2 text-center rounded hover:bg-gray-400">
            Voltar para a Lista
        </a>

    </form>

</main>
    
@endsection