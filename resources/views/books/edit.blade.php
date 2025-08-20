<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar livro</title>
</head>
<body>
    <h1>Editar Livro</h1>

    @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($erros->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Título:</label>
        <input type="text" name="title" value="{{ old('title', $book->title) }}" required>
        <br><br>

        <label for="author">Autor:</label>
        <input type="text" name="author" value="{{ old('author', $book->author) }}" required>
        <br><br>

        <label for="year">Ano:</label>
        <input type="number" name="year" value="{{ old('year', $book->year) }}" required>
        <br><br>

        <label for="description">Descrição:</label>
        <textarea name="description">{{ old('description', $book->description) }}</textarea>
        <br><br>

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">Voltar</a>
</body>
</html>