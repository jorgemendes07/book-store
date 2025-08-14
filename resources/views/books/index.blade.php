<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <H1>Lista de livros</H1>

    <a href="{{ route('books.create') }}">Novo Livro</a>

    @if(session('sucess'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano</th>
            <th></th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->year }}</td>
            <td>
                <a href="{{ route('books.edit', $book) }}">
                    <i class="fa-solid fa-pen"></i>
                </a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>