<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo livro</title>
</head>
<body>
    
    <h1>Adicionar livro</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <label for="title">Título:</label>
        <input type="text" name="title" value="{{ old('title') }}" required>
        <br><br>

        <label for="author">Autor:</label>
        <input type="text" name="author" value="{{ old('author') }}" required>
        <br><br>

        <label for="year">Ano:</label>
        <input type="number" name="year" value="{{ old('year') }}" required>
        <br><br>

        <label for="description">Descrição:</label>
        <textarea name="description">{{ old('description') }}</textarea>
        <br><br>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('books.index') }}">Voltar</a>
</body>
</html>