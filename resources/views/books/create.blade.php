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

    <form action="{{ route('books.store') }}" method="POST" class="border-2 border-orange-300 rounded p-10 flex flex-col gap-4">
        @csrf

        <label for="title" class="font-bold">Título:</label>
        <input type="text" name="title" value="{{ old('title') }}" required class="border-1 rounded bg-white">

        <label for="author" class="font-bold">Autor:</label>
        <input type="text" name="author" value="{{ old('author') }}" required class="border-1 rounded bg-white">

        <label for="year" class="font-bold">Ano:</label>
        <input type="number" name="year" value="{{ old('year') }}" required class="border-1 rounded bg-white">

        <label for="description"  class="font-bold">Descrição:</label>
        <textarea name="description" rows="3" class="border-1 rounded bg-white">{{ old('description') }}</textarea>

        <button type="submit" class="bg-cyan-500 text-white-100 rounded mb-2 text-white p-2 hover:bg-cyan-600 cursor-pointer">Salvar Livro</button>
    </form>

    
    <a href="{{ route('books.index') }}" class="text-2xl">Voltar</a>
</main>
    
@endsection