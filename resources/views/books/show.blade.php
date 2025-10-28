@extends('layouts.app')

@section('title', $book->title)

@section('content')

<main class="max-w-200 mx-auto">

    <div class="bg-white border-b border-t border-orange-300 rounded-lg p-10 flex flex-col gap-4 mb-4 mt-6">

        <h2 class="text-3xl font-bold mb-1 text-center">{{ $book->title }}</h2>

        <div>
            <h3 class="font-bold mb-1">Autor:</h3>
            <p class="text-xl mb-2">{{ $book->author }}</p>
        </div>
        
        <div>
            <h3 class="font-bold mb-1">Ano:</h3>
            <p class="text-xl mb-2">{{ $book->year }}</p>
        </div>

        <div>
            <h3 class="font-bold mb-1">Descrição completa:</h3>
            <p class="text-xl mb-2">{{ $book->description }}</p>
        </div>

        <div>
            <a href="{{ route('books.index') }}" class="block text-center bg-gray-300 text-gray-800 p-2 rounded hover:bg-gray-400 w-full">
                Voltar para a Lista
            </a>
        </div>

    </div>

</main>
    
@endsection
